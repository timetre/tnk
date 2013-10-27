<?php /* Smarty version Smarty-3.1.8, created on 2013-02-09 00:15:12
         compiled from "/homez.151/thenailk/www/modules/paypal/views/templates/back/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202455666951158700813064-37699876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44c2f779c9a4b8e2c2072eb53c06fce4d6746ed6' => 
    array (
      0 => '/homez.151/thenailk/www/modules/paypal/views/templates/back/header.tpl',
      1 => 1360365313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202455666951158700813064-37699876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PayPal_WPS' => 0,
    'PayPal_HSS' => 0,
    'PayPal_ECS' => 0,
    'PayPal_module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511587008bfff7_44864238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511587008bfff7_44864238')) {function content_511587008bfff7_44864238($_smarty_tpl) {?><script type="text/javascript">
    var PayPal_WPS = '<?php echo $_smarty_tpl->tpl_vars['PayPal_WPS']->value;?>
';
    var PayPal_HSS = '<?php echo $_smarty_tpl->tpl_vars['PayPal_HSS']->value;?>
';
    var PayPal_ECS = '<?php echo $_smarty_tpl->tpl_vars['PayPal_ECS']->value;?>
';
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PayPal_module_dir']->value;?>
/views/templates/back/back_office.js"></script><?php }} ?>