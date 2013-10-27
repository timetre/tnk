<?php /* Smarty version Smarty-3.1.8, created on 2013-10-27 16:44:41
         compiled from "/Applications/MAMP/htdocs/tnk/web/store/modules/cshometab/cshometab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:913045406526d34e961acb2-35929350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46509c5023898e6b9b6df580b5c23fdf433aafbe' => 
    array (
      0 => '/Applications/MAMP/htdocs/tnk/web/store/modules/cshometab/cshometab.tpl',
      1 => 1382886274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '913045406526d34e961acb2-35929350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabs' => 0,
    'cookie' => 0,
    'tab' => 0,
    'option' => 0,
    'product' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_526d34e980dab9_03307993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d34e980dab9_03307993')) {function content_526d34e980dab9_03307993($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/tnk/web/store/tools/smarty/plugins/modifier.escape.php';
?><!-- CS Home Tab module -->
<?php if (count($_smarty_tpl->tpl_vars['tabs']->value)>0){?>
<div id="tabs">
	<ul style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tab']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tab']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['tab']->iteration++;
 $_smarty_tpl->tpl_vars['tab']->last = $_smarty_tpl->tpl_vars['tab']->iteration === $_smarty_tpl->tpl_vars['tab']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['last'] = $_smarty_tpl->tpl_vars['tab']->last;
?>
			<li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['last']){?>last<?php }?>"><a href="#tabs-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'];?>
" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['tab']->value->title[(int)$_smarty_tpl->tpl_vars['cookie']->value->id_lang];?>
</a></li>
		<?php } ?>
	</ul>
	<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tab']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tab']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['tab']->iteration++;
 $_smarty_tpl->tpl_vars['tab']->last = $_smarty_tpl->tpl_vars['tab']->iteration === $_smarty_tpl->tpl_vars['tab']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['last'] = $_smarty_tpl->tpl_vars['tab']->last;
?>
	<div id="tabs-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'];?>
">
		<div class="cycleElementsContainer" id="cycle-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'];?>
">
			<?php if ($_smarty_tpl->tpl_vars['option']->value->scrollPanel=="true"){?>
			<div class="cycleElementsArrow">
				<a href="#" id="cycleLeft-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'];?>
">Scroll Left</a>
				<a href="#" id="cycleRight-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'];?>
">Scroll Right</a>
			</div>
			<?php }?>
			<div id="elements-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'];?>
">
				<div class="codespot_top_tabs">
				<?php if ($_smarty_tpl->tpl_vars['tab']->value->product_list){?>
					<ul>
					<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value->product_list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_list']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_list']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_list']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
						<li class="ajax_block_product <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['last']){?>last_item<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['iteration']%$_smarty_tpl->tpl_vars['option']->value->show==0){?> last_item_of_line<?php }?>">
						
						<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
" class="product_image"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
" style="height: 130px;" /></a>
						<h3><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],32,'...'), 'htmlall', 'UTF-8');?>
</a></h3>
						<div class="products_list_price">
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['reduction']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
							<p class="old_price"><span class="bold">
								<span class="old_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>
</span>
							</span></p>
							<p class="reduction_percent">
							<span class="save"><?php echo smartyTranslate(array('s'=>'save','mod'=>'blockhomeproductslide'),$_smarty_tpl);?>
</span>
							<span class="reduction_percent_display">
							<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage'){?>
							-<?php echo $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*100;?>
%
							<?php }else{ ?>
							-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']),$_smarty_tpl);?>

							<?php }?>
							</span>
							</p>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?><p class="price_container"><span class="price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span></p><?php }else{ ?><div style="height:21px;"></div><?php }?>
						</div>					
					</li>
					<?php } ?>
					</ul>
				<?php }?>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
<script type="text/javascript">
	$(function() {
		$( "#tabs" ).tabs({ fx: { opacity: 'toggle', duration:'slow'} });
		<?php if ($_smarty_tpl->tpl_vars['option']->value->scrollPanel=="true"){?>
			<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tab']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tab']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['tab']->iteration++;
 $_smarty_tpl->tpl_vars['tab']->last = $_smarty_tpl->tpl_vars['tab']->iteration === $_smarty_tpl->tpl_vars['tab']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['last'] = $_smarty_tpl->tpl_vars['tab']->last;
?>
				$("#cycle-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'];?>
").multipleElementsCycle2({
					container: '#elements-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'];?>
',
					prev: '#cycleLeft-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'];?>
',
					next: '#cycleRight-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'];?>
',
					start: 0,
					speed: 1000,
					containerSize: <?php echo $_smarty_tpl->tpl_vars['option']->value->containerSize;?>
,
					show: <?php echo $_smarty_tpl->tpl_vars['option']->value->show;?>
,
					scrollCount: <?php echo $_smarty_tpl->tpl_vars['option']->value->show;?>

				});
			<?php } ?>
		<?php }?>
	});
</script>
<?php }?>

<!-- /CS Home Tab module -->
<?php }} ?>