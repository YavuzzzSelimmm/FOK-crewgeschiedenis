<?php /* Smarty version Smarty-3.1.19, created on 2014-09-07 18:39:02
         compiled from "admin/templates/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1514153049540c12ac69baa4-77567093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b02b1555f3b30619a96f51d7ae4e50b4b4e74e4' => 
    array (
      0 => 'admin/templates/user.tpl',
      1 => 1410112271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1514153049540c12ac69baa4-77567093',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540c12ac706002_16583154',
  'variables' => 
  array (
    'gebruiker' => 0,
    'rollen' => 0,
    'rol' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540c12ac706002_16583154')) {function content_540c12ac706002_16583154($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/mounted-storage/home130/sub010/sc86380-GHVB/remi-jawahier.nl/fokcrew/classes/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><style>
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

</style>


<div id="gebruiker">

    <table>
    <tr>
        <td><h1><?php echo $_smarty_tpl->tpl_vars['gebruiker']->value['Gebruikersnaam'];?>
</h1></td>
        <td><h2><?php echo $_smarty_tpl->tpl_vars['gebruiker']->value['UserID'];?>
</h2></td>
    </tr>
    <tr>
        <td rowspan="2"><?php if (isset($_smarty_tpl->tpl_vars['gebruiker']->value['UI'])) {?><img src="<?php echo $_smarty_tpl->tpl_vars['gebruiker']->value['UI'];?>
" /><?php }?></td>
        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['gebruiker']->value['Registratiedatum'],"%d-%m-%Y");?>
</td>
    </tr>
    <tr>
        <td><?php if (isset($_smarty_tpl->tpl_vars['gebruiker']->value['UserID'])) {?><a href="http://forum.fok.nl/user/profile/<?php echo $_smarty_tpl->tpl_vars['gebruiker']->value['UserID'];?>
" >FOK!Profiel</a><?php }?></td>
    </tr>
    </table>
</div>

<div id="form_gebruiker">

    <form method="post" action="?admin=user&PK_Gebruiker=<?php echo $_smarty_tpl->tpl_vars['gebruiker']->value['PK_Gebruiker'];?>
" onsubmit="return form_validate();" >
    <h3>Gebruikersinfo</h3>
    <table>
        <tr>
            <td>Gebruikersnaam:</td>
            <td><input type="text" id="Gebruikersnaam" name="Gebruikersnaam" value="<?php echo $_smarty_tpl->tpl_vars['gebruiker']->value['Gebruikersnaam'];?>
" </td>
        </tr>
       <tr>
            <td>UserID:</td>
            <td><input type="text" id="UserID" name="UserID" value="<?php echo $_smarty_tpl->tpl_vars['gebruiker']->value['UserID'];?>
" </td>
        </tr>
        <tr>
            <td>Registratiedatum:</td>
            <td><input type="text" id="Registratiedatum" name="Registratiedatum" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['gebruiker']->value['Registratiedatum'],"%d-%m-%Y");?>
" </td>
        </tr>
        <tr>
            <td>UI:</td>
            <td><input type="text" id="UI" name="UI" value="<?php echo $_smarty_tpl->tpl_vars['gebruiker']->value['UI'];?>
" /> </td>
        </tr>
        
    </table>
    
    <?php if (isset($_smarty_tpl->tpl_vars['gebruiker']->value['PK_Gebruiker'])) {?>
    
    <?php }?>
    
    
    <h3>Rol toevoegen</h3>
    <table id="RolToevoegen">
        <tr>
            <td>Rol:</td>
            <td><select id="rol" name="rol">
                <option value="0">Selecteer..</option>
                <?php  $_smarty_tpl->tpl_vars['rol'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rol']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rollen']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rol']->key => $_smarty_tpl->tpl_vars['rol']->value) {
$_smarty_tpl->tpl_vars['rol']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['rol']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['rol']->value['PK_Rol'];?>
"><?php echo $_smarty_tpl->tpl_vars['rol']->value['Omschrijving'];?>
</option>
                <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Startdatum:</td>
            <td><input type="text" id="Startdatum" name="Startdatum" /></td>
        </tr>
        <tr>
            <td>Einddatum:</td>
            <td><input type="text" id="Einddatum" name="Einddatum" /></td>
        </tr>
         <tr>
            <td>StartURL:</td>
            <td><input type="text" id="StartURL" name="StartURL" /></td>
        </tr>
        <tr>
            <td>EindURL:</td>
            <td><input type="text" id="EindURL" name="EindURL" /></td>
        </tr>
    </table>
    
    <?php if (isset($_smarty_tpl->tpl_vars['gebruiker']->value['PK_Gebruiker'])) {?>
        <button class="btn_green" name="smtUser" value="update">Wijzigen</button>
    <?php } else { ?>
        <button class="btn_green" name="smtUser" value="insert">Invoeren</button>
    <?php }?>
        
    </form>
</div><?php }} ?>
