<?php /* Smarty version Smarty-3.1.8, created on 2013-10-22 20:46:41
         compiled from "/homez.151/thenailk/www/modules/mondialrelay/tpl/jquery-overload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4602033065266c8118f1ab1-38832960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'badbf9456a9f0599f14d7d046b57b66397f1b8da' => 
    array (
      0 => '/homez.151/thenailk/www/modules/mondialrelay/tpl/jquery-overload.tpl',
      1 => 1382467567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4602033065266c8118f1ab1-38832960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MR_overload_current_jquery' => 0,
    'new_base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5266c81194d872_63622530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c81194d872_63622530')) {function content_5266c81194d872_63622530($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['MR_overload_current_jquery']->value){?>
	<script type="text/javascript">
		var currentJquery = jQuery.noConflict(true);
	</script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['new_base_dir']->value;?>
js/jquery-1.6.4.min.js"></script>
<?php }else{ ?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['new_base_dir']->value;?>
js/jquery-1.6.4.min.js"></script>
	<script type="text/javascript">
		var MRjQuery = jQuery.noConflict(true);
	</script>
<?php }?>
<?php }} ?>