<style>
#users{
    clear: both;    
}

#tblUsers{
    width: 100%;
}

tr.even td{
    background-color: #ccc;
}

#tblUsersHeaders{
    margin-top: 30px;   
    width: 100%;
}

tr.row_hover td{
    background-color: #2c879b;
    color: #fff;
    cursor: pointer;
}

.rollen{
    display: none;    
}

.rollen table td{
    background-color: #2c879b;
    color: #fff;
}

a.topic{
    color: #ffffff;
    text-decoration: none;
}

a.topic:hover{
     color: #ffffff;
    font-weight: bold;
}

#ajax_loader{
    position: fixed;
    width: 60px;
    bottom: 10px;
    left: 20px;
    display: none;
}
</style>




<script type="text/javascript">
 $(document).ready(function(){
    get_users();
    context_menu();
 });

  {literal}
  function context_menu(){
    $.contextMenu({
        selector: '.hasmenu', 
        callback: function(key, options) {
            var id=options.$trigger.parent().attr('id');
            var username = options.$trigger.parent().find('.username:first').html();
            var userid = options.$trigger.parent().find('.userid:first').html();            
            
            switch(key){
                case 'wijzigen':
                    window.location.href='index.php?admin=user&id='+id;
                    break;
                case 'verwijderen':
                    var r = window.confirm('De gebruiker: '+username+' zal worden verwijderd. Doorgaan?');
                    if(r){
                        window.location.href='index.php?admin=users&delete_user='+id;
                    }
                    break;
                case 'fok_profile':
                    window.open('http://forum.fok.nl/user/profile/'+userid);
                    break;
                case 'fok_history':
                    window.open('http://forum.fok.nl/user/history/'+userid);
                    break;
            }
             
        },
        items: {
            "fok_profile": {name: "FOK! Profiel", icon: "copy"},
            "fok_history": {name: "FOK! Post Geschiedenis", icon: "paste"},
            "sep1": "---------",
            "wijzigen": {name: "Wijzig", icon: "edit"},
            "verwijderen": {name: "Verwijder", icon: "delete"}
        }
    });
  }
  {/literal}
  
 function get_users(){
    var page = 1;
    var limit = 6;
    var start = 0;
    var search_username = $("#search_username").val();
    var search_subsite = $("#subsite").val();
    var search_rol = $("#search_rol").val();
    
    if(search_username == ""){
        search_username = "all";
    }
    
    $.post("index.php?ajax=users",
    {
        'numRows': true,
        'search' : search_username,
        'search_subsite' : search_subsite,
        'search_rol': search_rol
    }).done(function(totalRows){
         if(isNaN(totalRows)) return;
         
         var totalPages=Math.ceil(totalRows/limit);
                 
         //Eerste resultaten ophalen
         $("#tblUsers").load("index.php?ajax=users",
         {
            'start': start,
            'limit': limit,
            'search': search_username,
            'search_subsite' : search_subsite,
            'search_rol': search_rol
         }, function(){
                var loading = false;
                
                $(window).scroll(function(){
                    var scrollTop = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    var documentHeight = $(document).height();
                    var scroll_area = (scrollTop + windowHeight) + 1;
                                       
                    if(scroll_area >= documentHeight && !loading){
                       page++;
                    
                        if(page > totalPages) return;   
                       
                        start = (page * limit) - limit;
                        
                        $("#ajax_loader").show();
                        loading = true;
                        
                        $.post("index.php?ajax=users",
                        {
                            'start': start,
                            'limit': limit,
                            'search': search_username,
                            'search_subsite' : search_subsite,
                            'search_rol': search_rol
                        }, function(data){
                            $("#tblUsers").append(data);
                            $("#ajax_loader").hide();
                            loading = false;
                        });    
                    } 
              });
         });
    });
    
 }
 
 function validate_delete(username){
    return window.confirm("De gebruiker met gebruikersnaam: " + username + " zal worden verwijderd. Doorgaan?");
 }


 function set_mouseover(obj){
    $(obj).addClass("row_hover");
 }
 
 function set_mouseout(obj){
    $(obj).removeClass("row_hover");
 }
 
 function show_rollen(id){
    $("#rollen_"+id).toggle('slow');
 }
 
 function get_rollen(){
    var subsite = $("#subsite").val();
    
    if (subsite != "all"){
        $("#search_rol").load("index.php?ajax=rollen",
         {
            'subsite': subsite
         }, function(){
            
         }   
        );
    } else {
        $("#search_rol option").filter(function(){
            return $(this).val() != "all";
        }).remove();
    }
    
    get_users();
 }
</script>

<div id="users">
    <table>
    <tr>
        <td width="270"><a href="?admin=user"><img src="images/b_adduser.png" width="60" alt="Nieuwe gebruiker toevoegen" /></a></td>
        <td><input type="text" id="search_username" onkeyup="get_users();" /></td>
        <td><select id="subsite" onchange="get_rollen()" >
            <option value="all">Alle subsites</option>
            {foreach $subsites as $index => $subsite}
                <option value="{$subsite.PK_Subsite}">{$subsite.Naam}</option>
            {/foreach}
            </select>
        </td>
        <td><select id="search_rol" onchange="get_users();" >
            <option value="all">Alle</option>
            
            </select>
        </td>
    </tr>
    </table>
    
    <table id="tblUsersHeaders">
    <tr>
        <th width="60">UI</th>
        <th>Gebruikersnaam</th>
        <th width="140">UserID</th>
        <th width="140">Registratiedatum</th>        
        </tr>
    </table>
    
    <table id="tblUsers">
        
    
    </table>
  
</div>

<div id="ajax_loader">
      <img src="images/ajax-loader.gif" />
</div>