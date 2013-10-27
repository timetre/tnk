<?php /* Smarty version Smarty-3.1.8, created on 2013-10-22 20:46:09
         compiled from "/homez.151/thenailk/www/modules/mondialrelay/tpl/bo-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7006052255266c7f1dfbb06-44430464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50433634fb2bfc14c3fb8668fe5e422afea60d0d' => 
    array (
      0 => '/homez.151/thenailk/www/modules/mondialrelay/tpl/bo-header.tpl',
      1 => 1382467567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7006052255266c7f1dfbb06-44430464',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_base_dir' => 0,
    'MR_overload_current_jquery' => 0,
    'MR_account_set' => 0,
    'MR_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5266c7f202f470_01756479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c7f202f470_01756479')) {function content_5266c7f202f470_01756479($_smarty_tpl) {?>

<link href="<?php echo $_smarty_tpl->tpl_vars['new_base_dir']->value;?>
css/style.css" rel="stylesheet" type="text/css" media="all" />

<?php if ($_smarty_tpl->tpl_vars['MR_overload_current_jquery']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['MR_local_path']->value)."/tpl/jquery-overload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>

<script type="text/javascript">
	var PS_MR_ACCOUNT_SET = <?php if ($_smarty_tpl->tpl_vars['MR_account_set']->value){?>true<?php }else{ ?>false<?php }?>;
	var _PS_MR_MODULE_DIR_ = "<?php echo $_smarty_tpl->tpl_vars['new_base_dir']->value;?>
";
	var mrtoken = "<?php echo $_smarty_tpl->tpl_vars['MR_token']->value;?>
";
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['new_base_dir']->value;?>
js/mondialrelay.js"></script>
<?php }} ?>