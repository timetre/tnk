<?php /* Smarty version Smarty-3.1.8, created on 2013-02-09 11:18:21
         compiled from "/homez.151/thenailk/www/modules/paypal/views/templates/hook/express_checkout_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3465873885116226dba06b3-92992232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f38f2656e6e591411e02da8dea8bf91b2f61d1ee' => 
    array (
      0 => '/homez.151/thenailk/www/modules/paypal/views/templates/hook/express_checkout_payment.tpl',
      1 => 1360365313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3465873885116226dba06b3-92992232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'use_mobile' => 0,
    'base_dir_ssl' => 0,
    'PayPal_lang_code' => 0,
    'logos' => 0,
    'PayPal_payment_method' => 0,
    'PayPal_integral' => 0,
    'PayPal_content' => 0,
    'PayPal_payment_type' => 0,
    'PayPal_current_shop_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5116226dca46f4_09583553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5116226dca46f4_09583553')) {function content_5116226dca46f4_09583553($_smarty_tpl) {?>

<p class="payment_module">
	<a href="javascript:void(0)" onclick="$('#paypal_payment_form').submit();" id="paypal_process_payment" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
">
		<?php if (isset($_smarty_tpl->tpl_vars['use_mobile']->value)&&$_smarty_tpl->tpl_vars['use_mobile']->value){?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/img/logos/express_checkout_mobile/CO_<?php echo $_smarty_tpl->tpl_vars['PayPal_lang_code']->value;?>
_orange_295x43.png" />
		<?php }else{ ?>
			<?php if (isset($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalHorizontalSolutionPP'])&&$_smarty_tpl->tpl_vars['PayPal_payment_method']->value==$_smarty_tpl->tpl_vars['PayPal_integral']->value){?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['logos']->value['LocalPayPalHorizontalSolutionPP'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['payment_choice'];?>
" height="48px" />
			<?php }else{ ?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['logos']->value['LocalPayPalLogoMedium'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['payment_choice'];?>
" />
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['PayPal_content']->value['payment_choice'];?>

		<?php }?>
		
	</a>
</p>

<form id="paypal_payment_form" action="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/express_checkout/payment.php" data-ajax="false" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" method="post">
	<input type="hidden" name="express_checkout" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_payment_type']->value;?>
"/>
	<input type="hidden" name="current_shop_url" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_current_shop_url']->value;?>
" />
</form>
<?php }} ?>