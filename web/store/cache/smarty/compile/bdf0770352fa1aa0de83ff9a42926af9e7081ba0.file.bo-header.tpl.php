<?php /* Smarty version Smarty-3.1.8, created on 2013-10-27 16:14:32
         compiled from "/Applications/MAMP/htdocs/tnk/web/store/modules/mondialrelay/tpl/bo-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1595041047526d2dd87ad593-37170496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdf0770352fa1aa0de83ff9a42926af9e7081ba0' => 
    array (
      0 => '/Applications/MAMP/htdocs/tnk/web/store/modules/mondialrelay/tpl/bo-header.tpl',
      1 => 1382868874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1595041047526d2dd87ad593-37170496',
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
  'unifunc' => 'content_526d2dd87f4260_60862038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d2dd87f4260_60862038')) {function content_526d2dd87f4260_60862038($_smarty_tpl) {?>

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