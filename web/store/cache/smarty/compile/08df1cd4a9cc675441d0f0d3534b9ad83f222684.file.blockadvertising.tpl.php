<?php /* Smarty version Smarty-3.1.8, created on 2013-02-08 14:02:40
         compiled from "/homez.151/thenailk/www/themes/et_urbanista/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5365032675114f770996808-90350184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08df1cd4a9cc675441d0f0d3534b9ad83f222684' => 
    array (
      0 => '/homez.151/thenailk/www/themes/et_urbanista/modules/blockadvertising/blockadvertising.tpl',
      1 => 1360328500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5365032675114f770996808-90350184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5114f7709be356_25044269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5114f7709be356_25044269')) {function content_5114f7709be356_25044269($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"/></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>