<?php /* Smarty version Smarty-3.1.8, created on 2013-02-09 12:11:53
         compiled from "/homez.151/thenailk/www/themes/et_urbanista/product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31767675351162ef94b09e4-86044161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77b9a15260670363c4cb5acac58e3274db6dd923' => 
    array (
      0 => '/homez.151/thenailk/www/themes/et_urbanista/product-compare.tpl',
      1 => 1360328503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31767675351162ef94b09e4-86044161',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51162ef94f6554_07969497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51162ef94f6554_07969497')) {function content_51162ef94f6554_07969497($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value){?>
<script type="text/javascript">
// <![CDATA[
	var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
';
	var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
";
//]]>
</script>

	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison');?>
" onsubmit="true" class="compare">
		<p>
		<input type="submit" id="bt_compare" class="button" value="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
		</p>
	</form>
<?php }?>

<?php }} ?>