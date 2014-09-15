<style>

</style>

<script src="js/jQuery-Shuffle/jquery.shuffle.modernizr.js" type="text/javascript" ></script>
<script src="js/jQuery-Shuffle/jquery.shuffle.js" type="text/javascript" ></script>
<script type="text/javascript">

$(document).ready(function(){
    var $grid = $("#grid");
    
    // Initialize shuffle
    $grid.shuffle({
        group: 'all',
        itemSelector: '.picture-item',
        sizer: 60,
        columnWidth: 60
        
    });
    
     $('.js-shuffle-search').on('keyup change', function(){
        var val = this.value.toLowerCase();
        
        $grid.shuffle('shuffle', function($el, $shuffle){
             var text = $.trim( $el.find('.picture-item__title').text() ).toLowerCase();
             return text.indexOf(val) !== -1;  
        }); 
    });
   

});

</script>

<input type="text" class="js-shuffle-search" id="js-shuffle-search" value="" />
<div class="container-fluid">
    <div id="grid" class="row-fluid">
        
        {foreach $gebruikers as $id => $gebruiker}
        <figure class="span3 m-span3 picture-item shuffle-item filtered" data-groups='{$gebruiker.json}' data-date-created="2014-09-14" data-title="{$gebruiker.Gebruikersnaam}">
        <div class="picture-item__inner" >
            <img src="{$gebruiker.icon}" width="60" height="60"/>
            
            <div class="picture-item__details clearfix">
            
                <figcaption class="picture-item__title pull-left">
                    {$gebruiker.username}
                </figcaption>
            </div>
        </div>
        </figure>
        {/foreach}

    </div>
</div>