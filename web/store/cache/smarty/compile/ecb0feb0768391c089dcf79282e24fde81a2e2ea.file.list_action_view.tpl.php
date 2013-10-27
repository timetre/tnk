<?php /* Smarty version Smarty-3.1.8, created on 2013-02-08 15:10:59
         compiled from "/homez.151/thenailk/www/administrator/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1174624733511507735340d2-36505180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecb0feb0768391c089dcf79282e24fde81a2e2ea' => 
    array (
      0 => '/homez.151/thenailk/www/administrator/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1360316291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1174624733511507735340d2-36505180',
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
  'unifunc' => 'content_511507735c9fd9_19838037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511507735c9fd9_19838037')) {function content_511507735c9fd9_19838037($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>