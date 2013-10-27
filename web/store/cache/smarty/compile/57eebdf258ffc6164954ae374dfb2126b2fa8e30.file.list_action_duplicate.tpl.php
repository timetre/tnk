<?php /* Smarty version Smarty-3.1.8, created on 2013-02-08 23:04:50
         compiled from "/homez.151/thenailk/www/administrator/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142790244151157682409fa2-91191743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57eebdf258ffc6164954ae374dfb2126b2fa8e30' => 
    array (
      0 => '/homez.151/thenailk/www/administrator/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1360316290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142790244151157682409fa2-91191743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5115768242ac51_80317849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5115768242ac51_80317849')) {function content_5115768242ac51_80317849($_smarty_tpl) {?>
<a class="pointer" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
';">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>