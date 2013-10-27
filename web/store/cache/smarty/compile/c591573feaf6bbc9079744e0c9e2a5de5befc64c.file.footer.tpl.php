<?php /* Smarty version Smarty-3.1.8, created on 2013-02-09 12:12:09
         compiled from "/homez.151/thenailk/www/themes/et_urbanista/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57273046651162f09a1e017-46324166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c591573feaf6bbc9079744e0c9e2a5de5befc64c' => 
    array (
      0 => '/homez.151/thenailk/www/themes/et_urbanista/footer.tpl',
      1 => 1360328499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57273046651162f09a1e017-46324166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'PS_ALLOW_MOBILE_DEVICE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51162f09a50854_13123263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51162f09a50854_13123263')) {function content_51162f09a50854_13123263($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
			
			<!--div id="right_column" class="column grid_2 omega">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

			</div-->
			
			</div>

<!-- Footer -->
			<div id="footer" class="grid_9 alpha omega clearfix">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['PS_ALLOW_MOBILE_DEVICE']->value){?>
					<p class="center clearBoth"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?mobile_theme_ok"><?php echo smartyTranslate(array('s'=>'Browse the mobile site'),$_smarty_tpl);?>
</a></p>
				<?php }?>
		</div>
		</div>
	<?php }?>
	</body>
</html>
<?php }} ?>