<?php /* Smarty version Smarty-3.1.8, created on 2013-02-08 11:47:09
         compiled from "/homez.151/thenailk/www/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4934312935114d7ade86208-01487305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be6e35ef6d20cc5a1df55381a299a6bcf949d0c0' => 
    array (
      0 => '/homez.151/thenailk/www/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1360317619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4934312935114d7ade86208-01487305',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5114d7ae0283e3_56173701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5114d7ae0283e3_56173701')) {function content_5114d7ae0283e3_56173701($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false);?>
';
	var favorite_products_url_remove = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false);?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>