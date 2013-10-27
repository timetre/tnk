<?php /* Smarty version Smarty-3.1.8, created on 2013-10-27 16:44:01
         compiled from "/Applications/MAMP/htdocs/tnk/web/store/themes/et_urbanista/product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:656147790526d34c1d08879-06203231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb02e72135812cd102eef2fa1e748abf638555bb' => 
    array (
      0 => '/Applications/MAMP/htdocs/tnk/web/store/themes/et_urbanista/product-compare.tpl',
      1 => 1382869019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '656147790526d34c1d08879-06203231',
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
  'unifunc' => 'content_526d34c1d387a4_97390081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d34c1d387a4_97390081')) {function content_526d34c1d387a4_97390081($_smarty_tpl) {?>

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