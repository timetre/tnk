<?php /* Smarty version Smarty-3.1.8, created on 2013-02-08 11:49:03
         compiled from "/homez.151/thenailk/www/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1859354505114d81fea5487-46057110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6298bc6e90fde4db767ff6037d34ca5a4b381ab1' => 
    array (
      0 => '/homez.151/thenailk/www/themes/default/mobile/index.tpl',
      1 => 1360317751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1859354505114d81fea5487-46057110',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5114d82005e479_41066268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5114d82005e479_41066268')) {function content_5114d82005e479_41066268($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>