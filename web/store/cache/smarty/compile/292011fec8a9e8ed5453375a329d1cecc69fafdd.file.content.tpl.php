<?php /* Smarty version Smarty-3.1.8, created on 2013-02-08 15:10:44
         compiled from "/homez.151/thenailk/www/administrator/themes/default/template/controllers/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1625886756511507643e5bf1-87111834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '292011fec8a9e8ed5453375a329d1cecc69fafdd' => 
    array (
      0 => '/homez.151/thenailk/www/administrator/themes/default/template/controllers/cms_content/content.tpl',
      1 => 1360316249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1625886756511507643e5bf1-87111834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51150764413ec2_29742119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51150764413ec2_29742119')) {function content_51150764413ec2_29742119($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)){?>
	<div class="cat_bar">
		<span style="color: #3C8534;"><?php echo smartyTranslate(array('s'=>'Current category'),$_smarty_tpl);?>
 :</span>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>