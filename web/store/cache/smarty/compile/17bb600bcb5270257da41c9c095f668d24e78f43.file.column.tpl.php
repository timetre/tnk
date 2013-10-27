<?php /* Smarty version Smarty-3.1.8, created on 2013-02-09 06:01:37
         compiled from "/homez.151/thenailk/www/modules/paypal/views/templates/hook/column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11338692195115d831b34425-31418357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17bb600bcb5270257da41c9c095f668d24e78f43' => 
    array (
      0 => '/homez.151/thenailk/www/modules/paypal/views/templates/hook/column.tpl',
      1 => 1360365313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11338692195115d831b34425-31418357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5115d831b5cbc9_65177451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5115d831b5cbc9_65177451')) {function content_5115d831b5cbc9_65177451($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>