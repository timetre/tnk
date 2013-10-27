<?php /* Smarty version Smarty-3.1.8, created on 2013-10-22 20:46:41
         compiled from "/homez.151/thenailk/www/modules/mondialrelay/tpl/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20919337275266c811734891-08499307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ac9fa5fdb284a47180fcb251a15901bfa844d13' => 
    array (
      0 => '/homez.151/thenailk/www/modules/mondialrelay/tpl/header.tpl',
      1 => 1382467567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20919337275266c811734891-08499307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_base_dir' => 0,
    'MRToken' => 0,
    'one_page_checkout' => 0,
    'warning_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5266c8118a1874_10905146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c8118a1874_10905146')) {function content_5266c8118a1874_10905146($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['MR_local_path']->value)."/tpl/jquery-overload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<link href="<?php echo $_smarty_tpl->tpl_vars['new_base_dir']->value;?>
css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript">
	// Global JS Value
	var _PS_MR_MODULE_DIR_ = "<?php echo $_smarty_tpl->tpl_vars['new_base_dir']->value;?>
";
	var mrtoken = "<?php echo $_smarty_tpl->tpl_vars['MRToken']->value;?>
";
	var PS_MROPC = <?php echo $_smarty_tpl->tpl_vars['one_page_checkout']->value;?>
;
	var PS_MRTranslationList = [];
	var PS_MRCarrierMethodList = [];
	var PS_MRSelectedRelayPoint = {'carrier_id': 0, 'relayPointNum': 0};
	var PS_MRWarningMessage = "<?php echo $_smarty_tpl->tpl_vars['warning_message']->value;?>
";
	
	PS_MRTranslationList['Select'] = "<?php echo smartyTranslate(array('s'=>'Select','mod'=>'mondialrelay'),$_smarty_tpl);?>
";
	PS_MRTranslationList['Selected'] = "<?php echo smartyTranslate(array('s'=>'Selected','mod'=>'mondialrelay'),$_smarty_tpl);?>
";
	PS_MRTranslationList['errorSelection'] = "<?php echo smartyTranslate(array('s'=>'Please choose a relay point','mod'=>'mondialrelay'),$_smarty_tpl);?>
";
	PS_MRTranslationList['openingRelay'] = "<?php echo smartyTranslate(array('s'=>'Opening hours','mod'=>'mondialrelay'),$_smarty_tpl);?>
";
	PS_MRTranslationList['moreDetails'] = "<?php echo smartyTranslate(array('s'=>'More details','mod'=>'mondialrelay'),$_smarty_tpl);?>
";
</script>

<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['new_base_dir']->value;?>
js/mondialrelay.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['new_base_dir']->value;?>
js/gmap.js"></script>
<?php }} ?>