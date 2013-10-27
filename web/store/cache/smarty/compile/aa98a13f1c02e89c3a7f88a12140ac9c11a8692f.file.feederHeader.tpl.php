<?php /* Smarty version Smarty-3.1.8, created on 2013-02-08 11:47:10
         compiled from "/homez.151/thenailk/www/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12428064265114d7ae14af80-59756486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa98a13f1c02e89c3a7f88a12140ac9c11a8692f' => 
    array (
      0 => '/homez.151/thenailk/www/modules/feeder/feederHeader.tpl',
      1 => 1360317256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12428064265114d7ae14af80-59756486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5114d7ae1aafc9_25363353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5114d7ae1aafc9_25363353')) {function content_5114d7ae1aafc9_25363353($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.151/thenailk/www/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>