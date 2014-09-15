<style>
#gebruiker{
    clear: both;
    border-bottom: 1px solid #000;
}

#form_gebruiker{
    margin-top: 20px;
}

.btn_green{
    background-color: green;
  moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border: 1px solid #009900;
  padding: 5px;
  color: #fff;
  height: 26px;
}

.input_datum{
    width: 75px;
}
</style>

<script type="text/javascript">
    $(document).ready(function(){
        count_rows(); 
        remove_row_buttons();   
    });
    
function count_rows(){
    var rows = $('.row');
    
    $("#aantal_rijen").val(rows.length);    
}   
 
function remove_row_buttons(){
   $(".add_row:not(:last)").hide(); 
} 

function form_validate(){
    var valid = true;
    $(".required").each(function(){
        if($(this).val() == ""){
            valid = false;
        }
    });
    
    if(!valid){
        alert("Niet alle velden zijn ingevuld!");
    }
    
    return valid;
    
}

function add_row(obj){
    var current_row = $(obj).parent().parent();
    var current_row_id = $(current_row).attr('id');
    var arr_split = current_row_id.split('_');
    var current_id = parseInt(arr_split[1]);
    var next_id = current_id + 1;
    var next_row_id = 'row_' + next_id;
    var current_input_prefix = 'row_' + current_id + '_';
    var next_input_prefix = 'row_' + next_id + '_';
    
    //controleren op rol geselecteerd en startdatum ingevoerd
    var current_rol = $(current_row).find('.input_select').val();
    var current_startdatum = $('#'+current_input_prefix+'Startdatum').val();
    if(current_rol == 0 || current_startdatum == ""){
        alert("Kies een rol en vul een startdatum in!");
        return false;
    }
    
    
    //clone maken van huidige rij
    var next_row = $(current_row).clone().attr('id', next_row_id);
    
    
    
    //textvelden leegmaken
    $(next_row).find('input:not(:last)').val('');
    
    $(next_row).find('.input_select option').filter(function(){
        return $(this).text() == "Selecteer.."; 
    }).prop('selected', true);
    
    //Alles met een id aanpassen naar de nieuwe rij
    $(next_row).find('[id]').each(function(){
        var new_el_id = $(this).attr('id').replace(current_input_prefix, next_input_prefix);
        
        $(this).attr('id', new_el_id);
        $(this).attr('name', new_el_id);
    });
    
    //De knop verbergen op huidige regel
    $(current_row).find('.add_row').hide();
    
    //De rij invoegen achter de huidige rij
    $(next_row).insertAfter(current_row);
    
    //aantal rijen hidden field updaten
    var aantal_rijen = $("#aantal_rijen").val();
    $("#aantal_rijen").val(parseInt(aantal_rijen) + 1);
    
}

</script>


<div id="gebruiker">
<img src="images/b_back.png" width="60" onclick="history.go(-1);" />

    <table>
    <tr>
        <td><h1>{$gebruiker.Gebruikersnaam}</h1></td>
        <td><h2>{$gebruiker.UserID}</h2></td>
    </tr>
    <tr>
        <td rowspan="2">{if isset($gebruiker.UI)}<img src="{$gebruiker.UI}" />{/if}</td>
        <td>{$gebruiker.Registratiedatum|date_format:"%d-%m-%Y"}</td>
    </tr>
    <tr>
        <td>{if isset($gebruiker.UserID)}<a href="http://forum.fok.nl/user/profile/{$gebruiker.UserID}" >FOK!Profiel</a>{/if}</td>
    </tr>
    </table>
</div>

<div id="form_gebruiker">

    <form method="post" action="?admin=user&id={$gebruiker.PK_Gebruiker}" onsubmit="return form_validate();" >
    <h3>Gebruikersinfo</h3>
    <table>
        <tr>
            <td>Gebruikersnaam:</td>
            <td><input class="required" type="text" id="Gebruikersnaam" name="Gebruikersnaam" value="{$gebruiker.Gebruikersnaam}" </td>
        </tr>
       <tr>
            <td>UserID:</td>
            <td><input class="required" type="text" id="UserID" name="UserID" value="{$gebruiker.UserID}" </td>
        </tr>
        <tr>
            <td>Registratiedatum:</td>
            <td><input class="required" type="text" id="Registratiedatum" name="Registratiedatum" value="{$gebruiker.Registratiedatum|date_format:"%d-%m-%Y"}" </td>
        </tr>
        <tr>
            <td>UI:</td>
            <td><input class="required" type="text" id="UI" name="UI" value="{$gebruiker.UI}" /> </td>
        </tr>
        
    </table>
    
{if isset($rollen_gebruiker)}
    <h3>Rol(len) wijzigen</h3>        
{else}
    <h3>Rol(len) toevoegen</h3>
{/if}
    <table id="RolToevoegen">
        <input type="hidden" name="aantal_rijen" id="aantal_rijen" value="1" />

{if (isset($rollen_gebruiker) && count($rollen_gebruiker) > 0)}        
    {foreach $rollen_gebruiker as $index_row=>$rol_gebruiker}
        <tr class="row" id="row_{$index_row+1}">
            <td>Rol:</td>
            <td><select class="input_select" id="row_{$index_row+1}_rol" name="row_{$index_row+1}_rol">
                <option value="0">Selecteer..</option>
                {foreach $rollen as $index=>$rol}
                    <option value="{$rol.PK_Rol}" {if $rol.PK_Rol == $rol_gebruiker.PK_Rol} selected {/if} />{$rol.Naam}/{$rol.Omschrijving}</option>
                {/foreach}
                </select>
            </td>
            <td>Startdatum:</td>
            <td><input class="input_datum" type="text" id="row_{$index_row+1}_Startdatum" name="row_{$index_row+1}_Startdatum" value="{$rol_gebruiker.Startdatum|date_format:"%d-%m-%Y"}"/></td>
            <td>Einddatum:</td>
            <td><input class="input_datum" type="text" id="row_{$index_row+1}_Einddatum" name="row_{$index_row+1}_Einddatum" value="{$rol_gebruiker.Einddatum|date_format:"%d-%m-%Y"}"/></td>
            <td>StartURL:</td>
            <td><input  type="text" id="row_{$index_row+1}_StartURL" name="row_{$index_row+1}_StartURL" value="{$rol_gebruiker.StartURL}"/></td>
            <td>EindURL:</td>
            <td><input type="text" id="row_{$index_row+1}_EindURL" name="row_{$index_row+1}_EindURL" value="{$rol_gebruiker.EindURL}" /></td>
            <td><input class="add_row" type="button" id="row_{$index_row+1}_addrow" value="+" onclick="add_row(this);" /></td>
        </tr>
            
    {/foreach}
    </table>
    <button class="btn_green" name="smtUser" value="update">Wijzigen</button>
    </form>
{else}
    <tr class="row" id="row_1">
        <td>Rol:</td>
        <td><select class="input_select" id="row_1_rol" name="row_1_rol">
            <option value="0">Selecteer..</option>
            {foreach $rollen as $index=>$rol}
                <option value="{$rol.PK_Rol}">{$rol.Naam}/{$rol.Omschrijving}</option>
            {/foreach}
            </select>
        </td>
        <td>Startdatum:</td>
        <td><input class="input_datum" type="text" id="row_1_Startdatum" name="row_1_Startdatum" /></td>
        <td>Einddatum:</td>
        <td><input class="input_datum" type="text" id="row_1_Einddatum" name="row_1_Einddatum" /></td>
        <td>StartURL:</td>
        <td><input  type="text" id="row_1_StartURL" name="row_1_StartURL" /></td>
        <td>EindURL:</td>
        <td><input type="text" id="row_1_EindURL" name="row_1_EindURL" /></td>
        <td><input class="add_row" type="button" id="row_1_addrow" value="+" onclick="add_row(this);" /></td>
    </tr>
    </table>
    <button class="btn_green" name="smtUser" value="insert">Invoeren</button>
    </form>
{/if}
</div>