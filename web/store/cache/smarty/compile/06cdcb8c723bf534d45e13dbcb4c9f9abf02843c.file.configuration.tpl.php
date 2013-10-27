<?php /* Smarty version Smarty-3.1.8, created on 2013-10-22 20:46:16
         compiled from "/homez.151/thenailk/www/modules/mondialrelay/tpl/configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6736766675266c7f827f3c1-55358423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06cdcb8c723bf534d45e13dbcb4c9f9abf02843c' => 
    array (
      0 => '/homez.151/thenailk/www/modules/mondialrelay/tpl/configuration.tpl',
      1 => 1382467567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6736766675266c7f827f3c1-55358423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MR_tab_selected' => 0,
    'MR_base_dir' => 0,
    'MR_upgrade_detail' => 0,
    'message' => 0,
    'MR_token_admin_performance' => 0,
    'MR_token_admin_carriers' => 0,
    'MR_token_admin_contact' => 0,
    'MR_enseigne_webservice' => 0,
    'MR_code_marque' => 0,
    'MR_webservice_key' => 0,
    'MR_available_languages' => 0,
    'language' => 0,
    'MR_selected_language' => 0,
    'selected_option' => 0,
    'MR_weight_coefficient' => 0,
    'MR_unit_weight_used' => 0,
    'MR_account_set' => 0,
    'MR_CRON_URL' => 0,
    'MR_name' => 0,
    'MR_delay' => 0,
    'MR_carriers_list' => 0,
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5266c7f885bb76_80838843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266c7f885bb76_80838843')) {function content_5266c7f885bb76_80838843($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homez.151/thenailk/www/tools/smarty/plugins/modifier.escape.php';
?>
<script type="text/javascript">
	var PS_MR_SELECTED_TAB = '<?php echo $_smarty_tpl->tpl_vars['MR_tab_selected']->value;?>
';
</script>
<h2><?php echo smartyTranslate(array('s'=>'Mondial Relay Configuration','mod'=>'mondialrelay'),$_smarty_tpl);?>
</h2>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['MR_local_path']->value)."/tpl/post_action.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div id="MR_config_menu">
	<ul>
		<li <?php if ($_smarty_tpl->tpl_vars['MR_tab_selected']->value=='account_form'){?> class="selected" <?php }?>>
			<a id="MR_account_form" href="javascript:void(0)">
				<img src="<?php echo $_smarty_tpl->tpl_vars['MR_base_dir']->value;?>
images/icones/account_detail.png" />
				<p><?php echo smartyTranslate(array('s'=>'Account details','mod'=>'mondialrelay'),$_smarty_tpl);?>
</p>
			</a>
		</li>
		<li <?php if ($_smarty_tpl->tpl_vars['MR_tab_selected']->value=='supplier_form'){?> class="selected" <?php }?>>
			<a id="MR_supplier_form" href="javascript:void(0)">
				<img src="<?php echo $_smarty_tpl->tpl_vars['MR_base_dir']->value;?>
images/icones/supplier.png" />
				<p><?php echo smartyTranslate(array('s'=>'Shipping','mod'=>'mondialrelay'),$_smarty_tpl);?>
</p>
			</a>
		</li>
		<li>
			<a id="MR_settings_form" href="javascript:void(0)">
				<img src="<?php echo $_smarty_tpl->tpl_vars['MR_base_dir']->value;?>
images/icones/settings.png" />
				<p><?php echo smartyTranslate(array('s'=>'Advanced settings','mod'=>'mondialrelay'),$_smarty_tpl);?>
</p>
			</a>
		</li>
		<li <?php if ($_smarty_tpl->tpl_vars['MR_tab_selected']->value=='info_form'){?> class="selected" <?php }?>>
			<a id="MR_info_form" href="javascript:void(0)">
				<img src="<?php echo $_smarty_tpl->tpl_vars['MR_base_dir']->value;?>
images/icones/info.png" />
				<p><?php echo smartyTranslate(array('s'=>'Infos','mod'=>'mondialrelay'),$_smarty_tpl);?>
</p>
			</a>
		</li>
	</ul>
</div>

<div id="MR_error_account" class="PS_MRFormType MR_error">
<?php echo smartyTranslate(array('s'=>'Please set your Mondial Relay account settings'),$_smarty_tpl);?>

</div>

<?php if (count($_smarty_tpl->tpl_vars['MR_upgrade_detail']->value)){?>
<div class="PS_MRFormType MR_error">
	<ul>
		<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MR_upgrade_detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</li>
		<?php } ?>
	</ul>
</div>
<?php }?>


<div id="MR_info_form_block" class="PS_MRFormType">
	<div class="MR_warn">
		<a style="color:#383838;text-decoration:underline" href="index.php?tab=AdminPerformance&token=<?php echo $_smarty_tpl->tpl_vars['MR_token_admin_performance']->value;?>
">
		<?php echo smartyTranslate(array('s'=>'Try to turn off the cache and put the force compilation to on','mod'=>'mondialrelay'),$_smarty_tpl);?>

		</a>
	<?php echo smartyTranslate(array('s'=>'if you have any problems with the module after an update','mod'=>'mondialrelay'),$_smarty_tpl);?>

	</div>

	<div class="MR_hint">
	<?php echo smartyTranslate(array('s'=>'Have a look to the following HOW-TO to help you to configure the Mondial Relay module','mod'=>'mondialrelay'),$_smarty_tpl);?>

		<b>
			<a href="<?php echo $_smarty_tpl->tpl_vars['MR_base_dir']->value;?>
/docs/install.pdf">
				<img width="20" src="<?php echo $_smarty_tpl->tpl_vars['MR_base_dir']->value;?>
images/pdf_icon.jpg" />
			</a>
		</b>
	</div>

	<br />

	<fieldset>
		<legend>
			<img src="../modules/mondialrelay/images/logo.gif" /><?php echo smartyTranslate(array('s'=>'To create a Mondial Relay carrier','mod'=>'mondialrelay'),$_smarty_tpl);?>

		</legend>
		- <?php echo smartyTranslate(array('s'=>'Enter and save your Mondial Relay account settings','mod'=>'mondialrelay'),$_smarty_tpl);?>
 <br />
		- <?php echo smartyTranslate(array('s'=>'Create a Carrier using the Shipping button','mod'=>'mondialrelay'),$_smarty_tpl);?>
 <br />
		- <?php echo smartyTranslate(array('s'=>'Define a price for your carrier on','mod'=>'mondialrelay'),$_smarty_tpl);?>

		<a href="index.php?tab=AdminCarriers&token=<?php echo $_smarty_tpl->tpl_vars['MR_token_admin_carriers']->value;?>
" class="green"><?php echo smartyTranslate(array('s'=>'The Carrier page','mod'=>'mondialrelay'),$_smarty_tpl);?>
</a> <br />
		- <?php echo smartyTranslate(array('s'=>'To generate labels, you must have a valid and registered address of your store on your','mod'=>'mondialrelay'),$_smarty_tpl);?>

		<a href="index.php?tab=<?php echo $_smarty_tpl->tpl_vars['MR_token_admin_contact']->value['controller_name'];?>
&token=<?php echo $_smarty_tpl->tpl_vars['MR_token_admin_contact']->value['token'];?>
" class="green"><?php echo smartyTranslate(array('s'=>'contact page','mod'=>'mondialrelay'),$_smarty_tpl);?>
</a> <br />
	</fieldset>
</div>


<div id="MR_account_form_block" class="PS_MRFormType">
	<form action="<?php echo mb_convert_encoding(htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'), "HTML-ENTITIES", 'UTF-8');?>
" method="post" >
		<fieldset>
			<legend><img src="../modules/mondialrelay/images/logo.gif" /><?php echo smartyTranslate(array('s'=>'Mondial Relay Account Settings','mod'=>'mondialrelay'),$_smarty_tpl);?>
</legend>
			<div>
			<?php echo smartyTranslate(array('s'=>'These parameters are provided by Mondial Relay once you subscribed to their service','mod'=>'mondialrelay'),$_smarty_tpl);?>

			</div>
			<ul>
				<li>
					<label for="MR_enseigne_webservice" class="mrLabel"><?php echo smartyTranslate(array('s'=>'Webservice Enseigne:','mod'=>'mondialrelay'),$_smarty_tpl);?>
</label>
					<input id="MR_enseigne_webservice" class="mrInput" type="text" name="MR_enseigne_webservice" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['MR_enseigne_webservice']->value, 'all');?>
" />
					<sup>*</sup>
				</li>
				<li>
					<label for="MR_code_marque" class="mrLabel">
					<?php echo smartyTranslate(array('s'=>'Code marque:','mod'=>'mondialrelay'),$_smarty_tpl);?>

					</label>
					<input id="MR_code_marque" class="mrInput" type="text" name="MR_code_marque" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['MR_code_marque']->value, 'all');?>
" />
					<sup>*</sup>
				</li>
				<li>
					<label for="MR_webservice_key" class="mrLabel"><?php echo smartyTranslate(array('s'=>'Webservice Key:','mod'=>'mondialrelay'),$_smarty_tpl);?>
</label>
					<input id="MR_webservice_key" class="mrInput" type="text" name="MR_webservice_key" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['MR_webservice_key']->value, ENT_QUOTES, 'UTF-8'), "HTML-ENTITIES", 'UTF-8');?>
" />
					<sup>*</sup>
				</li>
				<li>
					<label for="MR_language" class="mrLabel">
					<?php echo smartyTranslate(array('s'=>'Etiquette\'s Language:','mod'=>'mondialrelay'),$_smarty_tpl);?>

					</label>
					<select id="MR_language" name="MR_language">
					<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['num_language'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MR_available_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['num_language']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
						<?php $_smarty_tpl->tpl_vars['selected_option'] = new Smarty_variable('', null, 0);?>
						<?php if (mb_strtoupper($_smarty_tpl->tpl_vars['language']->value['iso_code'], 'UTF-8')==$_smarty_tpl->tpl_vars['MR_selected_language']->value){?>
							<?php $_smarty_tpl->tpl_vars['selected_option'] = new Smarty_variable('selected="selected"', null, 0);?>
						<?php }?>
						<option value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['language']->value['iso_code'], 'UTF-8');?>
" <?php echo $_smarty_tpl->tpl_vars['selected_option']->value;?>
><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
					<?php } ?>
					</select>
					<sup>*</sup>
				</li>
				<li>
					<label for="MR_weight_coefficient" class="mrLabel"><?php echo smartyTranslate(array('s'=>'Weight Coefficient:','mod'=>'mondialrelay'),$_smarty_tpl);?>
</label>
					<input class="mrInput" type="text" name="MR_weight_coefficient" id="MR_weight_coefficient" style="width:45px; " value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['MR_weight_coefficient']->value, ENT_QUOTES, 'UTF-8'), "HTML-ENTITIES", 'UTF-8');?>
"/>
					<sup>*</sup>
					<span class="indication" style="display: inline-block; line-height: 18px; vertical-align: top"><?php echo smartyTranslate(array('s'=>'grammes = 1 ','mod'=>'mondialrelay'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['MR_unit_weight_used']->value;?>
<br /><?php echo smartyTranslate(array('s'=>'The default billing method will be set according to the total weight.','mod'=>'mondialrelay'),$_smarty_tpl);?>
</span>
				</li>
				<li class="PS_MRSubmit">
					<input type="submit" name="submit_account_detail" value="<?php echo smartyTranslate(array('s'=>'Update Settings','mod'=>'mondialrelay'),$_smarty_tpl);?>
" class="button" />
				</li>
			</ul>
			<div class="small"><sup>*</sup><?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'mondialrelay'),$_smarty_tpl);?>
</div>
		</fieldset>
		<input type="hidden" name="MR_tab_name" value="account_form" />
	</form>
</div>

<?php if ($_smarty_tpl->tpl_vars['MR_account_set']->value){?>


<div  id="MR_settings_form_block" class="PS_MRFormType">
	<fieldset class="PS_MRFormStyle">
		<legend>
			<img src="../modules/mondialrelay/images/logo.gif" /><?php echo smartyTranslate(array('s'=>'Advanced Settings','mod'=>'mondialrelay'),$_smarty_tpl);?>

		</legend>
		<div>
			<p><?php echo smartyTranslate(array('s'=>'URL Cron Task:','mod'=>'mondialrelay'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['MR_CRON_URL']->value;?>
</p>
		</div>
	</fieldset>
</div>


<div id="MR_supplier_form_block" class="PS_MRFormType">
	<form action="<?php echo mb_convert_encoding(htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'), "HTML-ENTITIES", 'UTF-8');?>
" method="post" >
		<fieldset>
			<legend><img src="../modules/mondialrelay/images/logo.gif" alt="" /><?php echo smartyTranslate(array('s'=>'Add a Shipping Method','mod'=>'mondialrelay'),$_smarty_tpl);?>
</legend>
			<ul>
				<li>
					<label for="MR_name" class="shipLabel"><?php echo smartyTranslate(array('s'=>'Carrier\'s name','mod'=>'mondialrelay'),$_smarty_tpl);?>
</label>
					<input type="text" id="MR_name" name="MR_name" value="<?php echo $_smarty_tpl->tpl_vars['MR_name']->value;?>
" style="width:190px;" />
					<sup>*</sup>
				</li>

				<li>
					<label for="MR_delay" class="shipLabel"><?php echo smartyTranslate(array('s'=>'Delay','mod'=>'mondialrelay'),$_smarty_tpl);?>
</label>
					<input type="text" id="MR_delay" name="MR_delay" value="<?php echo $_smarty_tpl->tpl_vars['MR_delay']->value;?>
" style="width:190px;" />
					<sup>*</sup>
				</li>

				<li>
					<label for="MR_dlv_mode" class="shipLabel"><?php echo smartyTranslate(array('s'=>'Delivery mode','mod'=>'mondialrelay'),$_smarty_tpl);?>
</label>
					<select name="MR_dlv_mode" id="MR_dlv_mode" style="width:200px">
						<option value="24R">24R : <?php echo smartyTranslate(array('s'=>'Delivery to a relay point','mod'=>'mondialrelay'),$_smarty_tpl);?>
</option>
						<option value="DRI">DRI : <?php echo smartyTranslate(array('s'=>'Colis Drive delivery','mod'=>'mondialrelay'),$_smarty_tpl);?>
</option>
						<option value="LD1">LD1 : <?php echo smartyTranslate(array('s'=>'Home delivery RDC (1 person)','mod'=>'mondialrelay'),$_smarty_tpl);?>
</option>
						<option value="LDS">LDS : <?php echo smartyTranslate(array('s'=>'Special Home delivery (2 persons)','mod'=>'mondialrelay'),$_smarty_tpl);?>
</option>
					</select>
					<sup>*</sup>
				</li>

				<li>
					<label for="MR_insurance" class="shipLabel"><?php echo smartyTranslate(array('s'=>'Insurance','mod'=>'mondialrelay'),$_smarty_tpl);?>
</label>
					<select name="MR_insurance" id="MR_insurance" style="width:200px">
						<option value="0">0 : <?php echo smartyTranslate(array('s'=>'No insurance','mod'=>'mondialrelay'),$_smarty_tpl);?>
</option>
						<option value="1">1 : <?php echo smartyTranslate(array('s'=>'Complementary Insurance Lv1','mod'=>'mondialrelay'),$_smarty_tpl);?>
</option>
						<option value="2">2 : <?php echo smartyTranslate(array('s'=>'Complementary Insurance Lv2','mod'=>'mondialrelay'),$_smarty_tpl);?>
</option>
						<option value="3">3 : <?php echo smartyTranslate(array('s'=>'Complementary Insurance Lv3','mod'=>'mondialrelay'),$_smarty_tpl);?>
</option>
						<option value="4">4 : <?php echo smartyTranslate(array('s'=>'Complementary Insurance Lv4','mod'=>'mondialrelay'),$_smarty_tpl);?>
</option>
						<option value="5">5 : <?php echo smartyTranslate(array('s'=>'Complementary Insurance Lv5','mod'=>'mondialrelay'),$_smarty_tpl);?>
</option>
					</select>
					<sup>*</sup>
				</li>

				<li>
					<label for="MR_country_list" class="shipLabel"><?php echo smartyTranslate(array('s'=>'Delivery countries:','mod'=>'mondialrelay'),$_smarty_tpl);?>
<br /><br />
						<span style="font-size:10px; width:200px;float:left; color:forestgreen">
							<?php echo smartyTranslate(array('s'=>'You can choose several countries by pressing Ctrl while selecting countries','mod'=>'mondialrelay'),$_smarty_tpl);?>

						</span>
					</label>
					<select name="MR_country_list[]" id="MR_country_list" multiple size="5" style="width:200px;">
						<option value="FR"><?php echo smartyTranslate(array('s'=>'France','mod'=>'mondialrelay'),$_smarty_tpl);?>
</option>
						<option value="BE"><?php echo smartyTranslate(array('s'=>'Belgium','mod'=>'mondialrelay'),$_smarty_tpl);?>
</option>
						<option value="LU"><?php echo smartyTranslate(array('s'=>'Luxembourg','mod'=>'mondialrelay'),$_smarty_tpl);?>
</option>
						<option value="ES"><?php echo smartyTranslate(array('s'=>'Spain','mod'=>'mondialrelay'),$_smarty_tpl);?>
</option>
					</select>
					<sup>*</sup>
				</li>

				<li class="PS_MRSubmit">
					<input type="submit" name="submit_add_shipping" value="<?php echo smartyTranslate(array('s'=>'Add a Shipping Method','mod'=>'mondialrelay'),$_smarty_tpl);?>
" class="button" />
				</li>
			</ul>
			<div class="small"><sup>*</sup><?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'mondialrelay'),$_smarty_tpl);?>
</div>
		</fieldset>
		<input type="hidden" name="MR_tab_name" value="supplier_form" />
	</form>

	<br />


		<fieldset class="shippingList">
			<legend><img src="../modules/mondialrelay/images/logo.gif" /><?php echo smartyTranslate(array('s'=>'Shipping Method\'s list','mod'=>'mondialrelay'),$_smarty_tpl);?>
</legend>
			<ul>
				<?php if (count($_smarty_tpl->tpl_vars['MR_carriers_list']->value)==0){?>
					<li><?php echo smartyTranslate(array('s'=>'No shipping methods created','mod'=>'mondialrelay'),$_smarty_tpl);?>
</li>
					<?php }else{ ?>
					<?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_smarty_tpl->tpl_vars['num_carrier'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MR_carriers_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value){
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['num_carrier']->value = $_smarty_tpl->tpl_vars['carrier']->key;
?>
						<li>
							<form action="<?php echo mb_convert_encoding(htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'), "HTML-ENTITIES", 'UTF-8');?>
&MR_tab_name=supplier_form" method="post">
								<input type="hidden" name="delete_mr" value="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['id_mr_method'];?>
" >
								<a class="send_disable_carrier_form" href="javascript:void(0)"><img src="../img/admin/disabled.gif" alt="Delete" title="Delete" /></a>
								<?php echo $_smarty_tpl->tpl_vars['carrier']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['carrier']->value['col_mode'];?>
-<?php echo $_smarty_tpl->tpl_vars['carrier']->value['dlv_mode'];?>
 - <?php echo $_smarty_tpl->tpl_vars['carrier']->value['insurance'];?>
 : <?php echo $_smarty_tpl->tpl_vars['carrier']->value['country_list'];?>
)
								<a href="index.php?tab=AdminCarriers&id_carrier=<?php echo $_smarty_tpl->tpl_vars['carrier']->value['id_carrier'];?>
&updatecarrier&token=<?php echo $_smarty_tpl->tpl_vars['MR_token_admin_carriers']->value;?>
" style="margin-left: 20px">
									<b><?php echo smartyTranslate(array('s'=>'Config Shipping','mod'=>'mondialrelay'),$_smarty_tpl);?>
</b>
								</a>
							</form>
						</li>
					<?php } ?>
				<?php }?>
			</ul>
		</fieldset>
</div>
<?php }?>
<?php }} ?>