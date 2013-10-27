<?php /* Smarty version Smarty-3.1.8, created on 2013-10-27 16:44:40
         compiled from "/Applications/MAMP/htdocs/tnk/web/store/modules/csstaticblocks/csstaticblocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2108452234526d34e8bc1e32-52458250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11ce97e831f878c643690deaaf0af2080ff61e65' => 
    array (
      0 => '/Applications/MAMP/htdocs/tnk/web/store/modules/csstaticblocks/csstaticblocks.tpl',
      1 => 1382888093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2108452234526d34e8bc1e32-52458250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_list' => 0,
    'block' => 0,
    'presses' => 0,
    'i' => 0,
    'presse' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_526d34e8c43409_63467404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526d34e8c43409_63467404')) {function content_526d34e8c43409_63467404($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/Applications/MAMP/htdocs/tnk/web/store/tools/smarty/plugins/function.counter.php';
?><!-- Static Block module -->
<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value){
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['block']->value->identifier_block=='banner-home'){?>
	    <div class="top_footer">
	    	<div style="height: 40px; width: 109px; margin: 0 auto;">
				<a class="prev browse left"></a>
				<a class="next browse right"></a>
			</div>
	    	<div style="height:170px;">
				<div class="scrollable" id="scrollable">
					<div class="items" style="left: 0px;">
						<div>
					    	<div class="block_top_footer first">
						    	<a href="/blog/">
						    		<img src="http://tnk.local/store/themes/et_urbanista/img/cms/1_st.jpg" alt="">
						    	</a>
								<h5><a href="/blog/">Blog</a></h5>
								<p>Notre blog</p>
							</div>
							<?php echo smarty_function_counter(array('assign'=>"i",'start'=>1,'skip'=>1),$_smarty_tpl);?>

							<?php  $_smarty_tpl->tpl_vars['presse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['presse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['presses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['presse']->key => $_smarty_tpl->tpl_vars['presse']->value){
$_smarty_tpl->tpl_vars['presse']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['i']->value==4){?>
									</div>
									<div>
									<?php echo smarty_function_counter(array('assign'=>"i",'start'=>0,'skip'=>1),$_smarty_tpl);?>

								<?php }?>
					    		<div class="block_top_footer">
					    			<a class="fancybox" href="<?php echo $_smarty_tpl->tpl_vars['presse']->value['image'];?>
" rel="group" >
							    		<img src="<?php echo $_smarty_tpl->tpl_vars['presse']->value['vignette'];?>
" alt="" height="100px">
							    	</a>
							    	<h5><a class="fancybox" href="<?php echo $_smarty_tpl->tpl_vars['presse']->value['image'];?>
" rel="group" >
							    		<?php echo $_smarty_tpl->tpl_vars['presse']->value['titre'];?>
</a>
							    	</h5>
							    	<p><?php echo $_smarty_tpl->tpl_vars['presse']->value['sousTitre'];?>
</p>
					    		</div>
					    		<?php echo smarty_function_counter(array('assign'=>"i"),$_smarty_tpl);?>

					    	<?php } ?>
						</div>		
					</div>
				</div>
			</div>
		</div>
	<?php }else{ ?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value->content[(int)$_smarty_tpl->tpl_vars['cookie']->value->id_lang];?>

	<?php }?>
<?php } ?>
<!-- /Static block module --><?php }} ?>