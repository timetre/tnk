<?php /* Smarty version Smarty-3.1.8, created on 2013-02-09 11:24:41
         compiled from "/homez.151/thenailk/www/modules/paypal/views/templates/front/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201694863511623e92d1af6-54375446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ff64daacccf7ba8fb42a1a88b21fbaf36aed329' => 
    array (
      0 => '/homez.151/thenailk/www/modules/paypal/views/templates/front/error.tpl',
      1 => 1360365313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201694863511623e92d1af6-54375446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'use_mobile' => 0,
    'navigationPipe' => 0,
    'message' => 0,
    'logs' => 0,
    'log' => 0,
    'order' => 0,
    'price' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_511623e94af456_68102961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511623e94af456_68102961')) {function content_511623e94af456_68102961($_smarty_tpl) {?>

<?php if (@_PS_VERSION_<1.5&&isset($_smarty_tpl->tpl_vars['use_mobile']->value)&&$_smarty_tpl->tpl_vars['use_mobile']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/paypal/views/templates/front/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="order.php"><?php echo smartyTranslate(array('s'=>'Your shopping cart','mod'=>'paypal'),$_smarty_tpl);?>
</a><span class="navigation-pipe"> <?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
 </span> <?php echo smartyTranslate(array('s'=>'PayPal','mod'=>'paypal'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<h2><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>
	<?php if (isset($_smarty_tpl->tpl_vars['logs']->value)&&$_smarty_tpl->tpl_vars['logs']->value){?>
		<div class="error">
			<p><b><?php echo smartyTranslate(array('s'=>'Please try to contact the merchant:','mod'=>'paypal'),$_smarty_tpl);?>
</b></p>
			
			<ol>
			<?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value){
$_smarty_tpl->tpl_vars['log']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['log']->key;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['log']->value;?>
</li>
			<?php } ?>
			</ol>
			
			<br>	
			
			<?php if (isset($_smarty_tpl->tpl_vars['order']->value)){?>
				<p>
					<?php echo smartyTranslate(array('s'=>'Total of the transaction (taxes incl.) :','mod'=>'paypal'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</span><br>
					<?php echo smartyTranslate(array('s'=>'Your order ID is :','mod'=>'paypal'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
</span><br>
				</p>
			<?php }?>
			
			<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" class="button_small" title="<?php echo smartyTranslate(array('s'=>'Back','mod'=>'paypal'),$_smarty_tpl);?>
">&laquo; <?php echo smartyTranslate(array('s'=>'Back','mod'=>'paypal'),$_smarty_tpl);?>
</a></p>
		</div>
	
	<?php }?>

<?php }?>
<?php }} ?>