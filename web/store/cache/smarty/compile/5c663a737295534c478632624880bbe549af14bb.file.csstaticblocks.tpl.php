<?php /* Smarty version Smarty-3.1.8, created on 2013-02-09 12:12:07
         compiled from "/homez.151/thenailk/www/modules/csstaticblocks/csstaticblocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98231266151162f0747d895-14152051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c663a737295534c478632624880bbe549af14bb' => 
    array (
      0 => '/homez.151/thenailk/www/modules/csstaticblocks/csstaticblocks.tpl',
      1 => 1360328535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98231266151162f0747d895-14152051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_list' => 0,
    'cookie' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51162f074b3840_55814949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51162f074b3840_55814949')) {function content_51162f074b3840_55814949($_smarty_tpl) {?><!-- Static Block module -->
<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value){
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value->content[(int)$_smarty_tpl->tpl_vars['cookie']->value->id_lang];?>

<?php } ?>
<!-- /Static block module -->












<?php }} ?>