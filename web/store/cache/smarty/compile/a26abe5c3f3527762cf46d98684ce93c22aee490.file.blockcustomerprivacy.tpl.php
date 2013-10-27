<?php /* Smarty version Smarty-3.1.8, created on 2013-02-08 20:42:53
         compiled from "/homez.151/thenailk/www/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4280979755115553da85437-09068589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a26abe5c3f3527762cf46d98684ce93c22aee490' => 
    array (
      0 => '/homez.151/thenailk/www/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1360317199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4280979755115553da85437-09068589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5115553e2a8722_40973894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5115553e2a8722_40973894')) {function content_5115553e2a8722_40973894($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />				
	</p>
	<label for="customer_privacy"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>		
</fieldset><?php }} ?>