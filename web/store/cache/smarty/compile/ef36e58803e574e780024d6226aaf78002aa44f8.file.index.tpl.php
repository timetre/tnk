<?php /* Smarty version Smarty-3.1.8, created on 2013-09-06 15:10:57
         compiled from "/homez.151/thenailk/www/themes/et_urbanista/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5976588825229d461e6d844-32708655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef36e58803e574e780024d6226aaf78002aa44f8' => 
    array (
      0 => '/homez.151/thenailk/www/themes/et_urbanista/mobile/index.tpl',
      1 => 1360328500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5976588825229d461e6d844-32708655',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5229d4620cef77_48951728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229d4620cef77_48951728')) {function content_5229d4620cef77_48951728($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>