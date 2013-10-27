<?php /* Smarty version Smarty-3.1.8, created on 2013-02-08 23:03:46
         compiled from "/homez.151/thenailk/www/modules/csslider/csslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:571863521511576426a8567-46769752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84dbbf63e3792e3b2338542d251a324e743ec5c5' => 
    array (
      0 => '/homez.151/thenailk/www/modules/csslider/csslider.tpl',
      1 => 1360328534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '571863521511576426a8567-46769752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'sliders' => 0,
    'slider' => 0,
    'path' => 0,
    'cookie' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5115764271c8a0_84261298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5115764271c8a0_84261298')) {function content_5115764271c8a0_84261298($_smarty_tpl) {?><!-- CS Slider module -->
<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?>
<div class="slider-wrapper theme-default">
<div id="slider" class="nivoSlider">
	<?php  $_smarty_tpl->tpl_vars['slider'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slider']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sliders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->key => $_smarty_tpl->tpl_vars['slider']->value){
$_smarty_tpl->tpl_vars['slider']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['slider']->value->url;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['slider']->value->image[(int)$_smarty_tpl->tpl_vars['cookie']->value->id_lang];?>
" alt="" title="<?php echo $_smarty_tpl->tpl_vars['slider']->value->caption[(int)$_smarty_tpl->tpl_vars['cookie']->value->id_lang];?>
" /></a>
	<?php } ?>
</div>
</div>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
			effect: '<?php echo $_smarty_tpl->tpl_vars['option']->value->effect;?>
',
			animSpeed: <?php echo $_smarty_tpl->tpl_vars['option']->value->animSpeed;?>
,
			pauseTime: <?php echo $_smarty_tpl->tpl_vars['option']->value->pauseTime;?>
,
			directionNav: <?php echo $_smarty_tpl->tpl_vars['option']->value->directionNav;?>
,
			directionNavHide: <?php echo $_smarty_tpl->tpl_vars['option']->value->directionNavHide;?>
,
			controlNav: <?php echo $_smarty_tpl->tpl_vars['option']->value->controlNav;?>
,
			controlNavThumbs: <?php echo $_smarty_tpl->tpl_vars['option']->value->controlNavThumbs;?>
,
			pauseOnHover: <?php echo $_smarty_tpl->tpl_vars['option']->value->pauseOnHover;?>
,
			manualAdvance: <?php echo $_smarty_tpl->tpl_vars['option']->value->manualAdvance;?>
,
			slices: 15,
			boxCols: 8,
			boxRows: 4,
			startSlide: 0,
			controlNavThumbsFromRel: false,
			controlNavThumbsSearch: '.jpg',
			controlNavThumbsReplace: '_thumb.jpg',
			keyboardNav: true,
			captionOpacity: 0.8,
			prevText: 'Prev',
			nextText: 'Next',
			randomStart: false
		});
    });
</script>
<?php }?>
<!-- /CS Slider module -->
<?php }} ?>