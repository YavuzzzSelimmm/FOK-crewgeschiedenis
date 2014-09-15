<?php /* Smarty version Smarty-3.1.19, created on 2014-09-07 16:41:08
         compiled from "admin/templates/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1917614726540c122a0761d8-34430322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f07686051b3f3b610036f87bac61f33fa99298d7' => 
    array (
      0 => 'admin/templates/users.tpl',
      1 => 1410107386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1917614726540c122a0761d8-34430322',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540c122a103de6_03265623',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540c122a103de6_03265623')) {function content_540c122a103de6_03265623($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/mounted-storage/home130/sub010/sc86380-GHVB/remi-jawahier.nl/fokcrew/classes/Smarty-3.1.19/libs/plugins/modifier.date_format.php';
?><style>
#users{
    clear: both;    
}

#tblUsers{
    width: 100%;
}
</style>


<div id="users">

    <a href="?admin=user">Toevoegen gebruiker</a>

    <table id="tblUsers">
        <tr>
            <th>Gebruikersnaam</th>
            <th>UserID</th>
            <th>Registratiedatum</th>
            <th>UI</th>
            <th></th>
            <th></th>
        </tr>
    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['user']->key;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['Gebruikersnaam'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['UserID'];?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['Registratiedatum'],"%d-%m-%Y");?>
</td>
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['UI'];?>
"/></td>
            <td><a href="?admin=user&PK_Gebruiker=<?php echo $_smarty_tpl->tpl_vars['user']->value['PK_Gebruiker'];?>
">Wijzig</a></td>
            <td>Verwijder</td>
        </tr>
    <?php } ?>
    </table>
</div><?php }} ?>
