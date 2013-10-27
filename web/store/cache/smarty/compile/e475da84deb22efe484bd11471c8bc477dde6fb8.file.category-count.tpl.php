<?php /* Smarty version Smarty-3.1.8, created on 2013-09-06 14:25:08
         compiled from "/homez.151/thenailk/www/themes/default/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16541928375229c9a4b45cb1-55154818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e475da84deb22efe484bd11471c8bc477dde6fb8' => 
    array (
      0 => '/homez.151/thenailk/www/themes/default/category-count.tpl',
      1 => 1360317702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16541928375229c9a4b45cb1-55154818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5229c9a4c36c74_25361650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229c9a4c36c74_25361650')) {function content_5229c9a4c36c74_25361650($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products.'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>