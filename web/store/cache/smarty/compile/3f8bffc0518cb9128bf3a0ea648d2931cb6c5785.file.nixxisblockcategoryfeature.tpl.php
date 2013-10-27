<?php /* Smarty version Smarty-3.1.8, created on 2013-02-09 12:11:47
         compiled from "/homez.151/thenailk/www/modules/nixxisblockcategoryfeature/nixxisblockcategoryfeature.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153524429851162ef3d7b4f0-13533340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f8bffc0518cb9128bf3a0ea648d2931cb6c5785' => 
    array (
      0 => '/homez.151/thenailk/www/modules/nixxisblockcategoryfeature/nixxisblockcategoryfeature.tpl',
      1 => 1360328536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153524429851162ef3d7b4f0-13533340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feature_products' => 0,
    'product' => 0,
    'link' => 0,
    'img_manu_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51162ef4735813_18166564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51162ef4735813_18166564')) {function content_51162ef4735813_18166564($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.151/thenailk/www/tools/smarty/plugins/modifier.escape.php';
?><!-- CATEGORY FEATURE PRODUCTS -->
<div class="shopbybrand">
	<?php if (isset($_smarty_tpl->tpl_vars['feature_products']->value)&&$_smarty_tpl->tpl_vars['feature_products']->value){?>
		<ul>
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['feature_products']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['feature_products']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
			<li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['feature_products']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['feature_products']['last']){?>last_item<?php }else{ ?>item<?php }?>">
				<p class="product_img_link">
					<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
" class="product_image"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
" /></a>
				</p>
				<p class="manufacture"><?php if ($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']){?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['product']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['id_manufacturer'], 'htmlall', 'UTF-8');?>
.jpg" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
" /></a><?php }?>
				</p>
				<h3><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
</a></h3>
				<p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['description_short']),190,'...');?>
</p>
				<p class="shopnow"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
"><?php echo smartyTranslate(array('s'=>'Shop now','mod'=>'nixxisblockcategoryfeature'),$_smarty_tpl);?>
</a></p>
			</li>
		<?php } ?>
		</ul>
	<?php }?>
</div>
<!-- /CATEGORY FEATURE PRODUCTS --><?php }} ?>