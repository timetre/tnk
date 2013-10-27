<?php /* Smarty version Smarty-3.1.8, created on 2013-02-08 23:04:50
         compiled from "/homez.151/thenailk/www/administrator/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154819120451157682473287-76900781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c81b4e203d83fb48391adcda4f37b7ce7a4d7d40' => 
    array (
      0 => '/homez.151/thenailk/www/administrator/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1360316289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154819120451157682473287-76900781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5115768249dd95_76616064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5115768249dd95_76616064')) {function content_5115768249dd95_76616064($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>