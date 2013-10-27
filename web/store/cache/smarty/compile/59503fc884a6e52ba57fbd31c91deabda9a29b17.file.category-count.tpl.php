<?php /* Smarty version Smarty-3.1.8, created on 2013-02-09 12:11:52
         compiled from "/homez.151/thenailk/www/themes/et_urbanista/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5979307051162ef8d7aa49-48214706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59503fc884a6e52ba57fbd31c91deabda9a29b17' => 
    array (
      0 => '/homez.151/thenailk/www/themes/et_urbanista/category-count.tpl',
      1 => 1360328504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5979307051162ef8d7aa49-48214706',
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
  'unifunc' => 'content_51162ef8dbf2e1_79383908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51162ef8dbf2e1_79383908')) {function content_51162ef8dbf2e1_79383908($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products.'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>