<?php /* Smarty version Smarty-3.1.8, created on 2013-10-08 19:16:34
         compiled from "/homez.151/thenailk/www/themes/et_urbanista/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112949668251162f05760c40-40958780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ae460892454b4960db01243d654cb3fe8de5453' => 
    array (
      0 => '/homez.151/thenailk/www/themes/et_urbanista/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1381252591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112949668251162f05760c40-40958780',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51162f05978282_08417289',
  'variables' => 
  array (
    'page_name' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51162f05978282_08417289')) {function content_51162f05978282_08417289($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.151/thenailk/www/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_home" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
" ><?php echo smartyTranslate(array('s'=>'Home','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<!--<li id="header_link_specialproduct" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='prices-drop'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop.php');?>
" title="<?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
" ><?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>-->
	<li id="header_link_sitemap" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='sitemap'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap.php');?>
" title="<?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"  ><?php echo smartyTranslate(array('s'=>'Sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li id="header_link_contact" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='contact'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
" ><?php echo smartyTranslate(array('s'=>'Contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>