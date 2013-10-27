<?php /* Smarty version Smarty-3.1.8, created on 2013-02-08 23:04:50
         compiled from "/homez.151/thenailk/www/administrator/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1717482502511576823ae225-32548457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cddadc8234c2de3ca9315d412bdf2e232cf0371' => 
    array (
      0 => '/homez.151/thenailk/www/administrator/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1360316290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1717482502511576823ae225-32548457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511576823c1fc4_45314097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511576823c1fc4_45314097')) {function content_511576823c1fc4_45314097($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>