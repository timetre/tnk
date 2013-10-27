<?php /* Smarty version Smarty-3.1.8, created on 2013-10-22 20:46:16
         compiled from "/homez.151/thenailk/www/modules/mondialrelay/tpl/post_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19884604395266c7f88bf0e1-55825878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b0c1d4e904f967c3095ebd6f9445c3f634f67dc' => 
    array (
      0 => '/homez.151/thenailk/www/modules/mondialrelay/tpl/post_action.tpl',
      1 => 1382467567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19884604395266c7f88bf0e1-55825878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MR_error_list' => 0,
    'error_message' => 0,
    'MR_form_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5266c7f8949490_68319282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c7f8949490_68319282')) {function content_5266c7f8949490_68319282($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['MR_error_list']->value)){?>
<div class="alert error">
	<?php echo count($_smarty_tpl->tpl_vars['MR_error_list']->value);?>
 <?php echo smartyTranslate(array('s'=>'error(s)'),$_smarty_tpl);?>

	<ul>
		<?php  $_smarty_tpl->tpl_vars['error_message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error_message']->_loop = false;
 $_smarty_tpl->tpl_vars['error_num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MR_error_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error_message']->key => $_smarty_tpl->tpl_vars['error_message']->value){
$_smarty_tpl->tpl_vars['error_message']->_loop = true;
 $_smarty_tpl->tpl_vars['error_num']->value = $_smarty_tpl->tpl_vars['error_message']->key;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</li>
		<?php } ?>
	</ul>
</div>
	<?php }elseif(strlen($_smarty_tpl->tpl_vars['MR_form_action']->value['type'])!=0){?>
<div class="conf confirm">
	<?php echo $_smarty_tpl->tpl_vars['MR_form_action']->value['message_success'];?>

</div>
<?php }?><?php }} ?>