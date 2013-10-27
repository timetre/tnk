<?php /* Smarty version Smarty-3.1.8, created on 2013-02-09 11:10:56
         compiled from "/homez.151/thenailk/www/modules/paypal/views/templates/hook/express_checkout_shortcut_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:849016548511620b0c55418-20965963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14857d6c9a052b42afac31ef8eebd067bec19f34' => 
    array (
      0 => '/homez.151/thenailk/www/modules/paypal/views/templates/hook/express_checkout_shortcut_form.tpl',
      1 => 1360365313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '849016548511620b0c55418-20965963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'PayPal_payment_type' => 0,
    'PayPal_current_shop_url' => 0,
    'PayPal_tracking_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511620b0d2ed54_47190768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511620b0d2ed54_47190768')) {function content_511620b0d2ed54_47190768($_smarty_tpl) {?><form id="paypal_payment_form" action="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/express_checkout/payment.php" data-ajax="false" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" method="post" data-ajax="false">
	<?php if (isset($_GET['id_product'])){?><input type="hidden" name="id_product" value="<?php echo $_GET['id_product'];?>
" /><?php }?>
	
	<!-- Change dynamicaly when the form is submitted -->
	<input type="hidden" name="quantity" value="1" />
	<input type="hidden" name="id_p_attr" value="" />
	<input type="hidden" name="express_checkout" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_payment_type']->value;?>
"/>
	<input type="hidden" name="current_shop_url" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_current_shop_url']->value;?>
" />
    <input type="hidden" name="bn" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_tracking_code']->value;?>
" />
</form>
<?php }} ?>