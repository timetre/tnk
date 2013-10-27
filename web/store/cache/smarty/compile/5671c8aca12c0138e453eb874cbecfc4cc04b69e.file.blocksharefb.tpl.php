<?php /* Smarty version Smarty-3.1.8, created on 2013-02-08 11:52:14
         compiled from "/homez.151/thenailk/www/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2157421485114d8de7e4155-57530145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5671c8aca12c0138e453eb874cbecfc4cc04b69e' => 
    array (
      0 => '/homez.151/thenailk/www/modules/blocksharefb/blocksharefb.tpl',
      1 => 1360317225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2157421485114d8de7e4155-57530145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5114d8de8a9291_60215043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5114d8de8a9291_60215043')) {function content_5114d8de8a9291_60215043($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><?php echo smartyTranslate(array('s'=>'Share on Facebook','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>