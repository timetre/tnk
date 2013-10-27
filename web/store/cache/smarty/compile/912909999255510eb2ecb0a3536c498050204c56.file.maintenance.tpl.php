<?php /* Smarty version Smarty-3.1.8, created on 2013-10-27 11:30:38
         compiled from "/Applications/MAMP/htdocs/tnk/web/store/themes/et_urbanista/maintenance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70486713526ceb4e7fc671-18120885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '912909999255510eb2ecb0a3536c498050204c56' => 
    array (
      0 => '/Applications/MAMP/htdocs/tnk/web/store/themes/et_urbanista/maintenance.tpl',
      1 => 1382869021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70486713526ceb4e7fc671-18120885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'favicon_url' => 0,
    'css_dir' => 0,
    'content_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_526ceb4ed5b408_47796043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526ceb4ed5b408_47796043')) {function content_526ceb4ed5b408_47796043($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/tnk/web/store/tools/smarty/plugins/modifier.escape.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
	<head>
		<title><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8');?>
</title>	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)){?>
		<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_description']->value, 'htmlall', 'UTF-8');?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)){?>
		<meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_keywords']->value, 'htmlall', 'UTF-8');?>
" />
<?php }?>
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)){?>no<?php }?>index,follow" />
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
maintenance.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="maintenance" style="width: 90%;">
			 <p><img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
img/logo_big.jpg" alt="logo" style="width: 40%;" /><br /><br /></p>
			 <p><img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
img/maintenance.jpg" alt="logo" style="width: 100%;margin-top: 30px;margin-bottom: 30px;" /><br /><br /></p>
			 <p style="color: black;font-size: 18px;">
			 	Rendez vous au 06 81 26 24 95
			 </p>
			 <p style="color: black;font-size: 18px;">
			 	B.H.V. Bazar de L'Hôtel de Ville - 52 rue de Rivoli - Paris 4ème<br/>Site en construction
			 </p>
			<!-- <p id="message" style="margin: 0 auto;">
				<br /><br />
				
			 </p>-->
			 <span style="clear:both;">&nbsp;</span>
		</div>
	</body>
</html>
<?php }} ?>