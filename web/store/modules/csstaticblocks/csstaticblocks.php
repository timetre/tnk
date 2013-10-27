<?php
include_once(dirname(__FILE__).'/StaticBlockClass.php');
class csstaticblocks extends Module
{
	protected $error = false;
	private $_html;
	private $myHook = array('displaytop','displayleftColumn','displayrightColumn','displayfooter','displayhome');
	
	public function __construct()
	{
	 	$this->name = 'csstaticblocks';
	 	$this->tab = 'MyBlocks';
	 	$this->version = '1.0';
		$this->author = 'Codespot';

	 	parent::__construct();

		$this->displayName = $this->l('Cs Static block');
		$this->description = $this->l('Adds static blocks with free content');
		$this->confirmUninstall = $this->l('Are you sure that you want to delete your static blocks?');
	
	}
	
	public function init_data()
	{
		$content_block1 = '<div class="top_footer">
<div class="block_top_footer first"><a href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/1_st.jpg" alt="" /></a>
<h5><a href="#">Suspendisse ac pulvinar nulla</a></h5>
<p>Donec laoreet dui at purus dignissim sed fringilla sem venenatis.</p>
</div>
<div class="block_top_footer"><a href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/homepage-2.jpg" alt="" /></a>
<h5><a href="#">Class aptent taciti sociosquis</a></h5>
<p>Donec laoreet dui at purus dignissim sed fringilla sem venenatis.</p>
</div>
<div class="block_top_footer"><a href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/homepage-3.jpg" alt="" /></a>
<h5><a href="#">Fusce placerat risus faucibus</a></h5>
<p>Donec laoreet dui at purus dignissim sed fringilla sem venenatis.</p>
</div>
<div class="block_top_footer last"><a href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/homepage-4.jpg" alt="" /></a>
<h5><a href="#">Molestie tempor id elementum</a></h5>
<p>Donec laoreet dui at purus dignissim sed fringilla sem venenatis.</p>
</div>
</div>';
$content_block1_fr='<div class="top_footer">
<div class="block_top_footer first"><a href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/1_st.jpg" alt="" /></a>
<h5><a href="#">Suspendre ou réduire les</a></h5>
<p>Politique électronique à linvestissement pur, mais voici quelques notes.</p>
</div>
<div class="block_top_footer"><a href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/homepage-2.jpg" alt="" /></a>
<h5><a href="#">Classe silence équipage</a></h5>
<p>Politique électronique à linvestissement pur, mais voici quelques notes.</p>
</div>
<div class="block_top_footer"><a href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/homepage-3.jpg" alt="" /></a>
<h5><a href="#">Ennuyeux à cet élément</a></h5>
<p>Politique électronique à linvestissement pur, mais voici quelques notes.</p>
</div>
<div class="block_top_footer last"><a href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/homepage-4.jpg" alt="" /></a>
<h5><a href="#">Ennuyeux à cet élément</a></h5>
<p>Politique électronique à linvestissement pur, mais voici quelques notes.</p>
</div>
</div>';
		$content_block2 = '<div class="block_footer_cms">
<div class="top_footer-cms">
<div class="our-store">
<h4>Our Store</h4>
<p class="img"><a href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/footer1.jpg" alt="footer1" /></a></p>
<div class="des_store">
<p>Fusce placerat risus faucibus dui ultrices a condimentum elit consectetur nam tristique varius arcu quis lobortis lacus consectetur...</p>
</div>
<span>123 Sodales Street, Habitant Senectus, NY City </span></div>
<div class="imformation">
<h4>Information</h4>
<ul>
<li><a title="Contact" href="contact-form.php">Contact</a></li>
<li><a title="Delivery" href="cms.php?id_cms=1">Delivery</a></li>
<li><a title="Legal Notice" href="cms.php?id_cms=2">Legal Notice</a></li>
<li><a title="Terms and conditions of use" href="cms.php?id_cms=3">Terms and conditions of use</a></li>
<li><a title="About us" href="cms.php?id_cms=4">About us</a></li>
</ul>
</div>
<div class="our_offers">
<h4>Our Offers</h4>
<ul>
<li><a title="New products" href="new-products.php">New products</a></li>
<li><a title="Top sellers" href="best-sales.php">Top sellers</a></li>
<li><a title="Specials" href="prices-drop.php">Specials</a></li>
<li><a title="Manufacturers" href="manufacturer.php">Manufacturers</a></li>
<li><a title="Suppliers" href="supplier.php">Suppliers</a></li>
</ul>
</div>
<div class="your_account">
<h4>Your Account</h4>
<ul>
<li><a title="Your Account" href="my-account.php">Your Account</a></li>
<li><a title="Personal information" href="identity.php">Personal information</a></li>
<li><a title="Addresses" href="addresses.php">Addresses</a></li>
<li><a title="Discount" href="discount.php">Discount</a></li>
<li><a title="Order history" href="history.php">Order history</a></li>
</ul>
</div>
</div>
<div class="bottom_footer-cms">
<div class="bottom_footer-cms1">
<h4>new collection everyday</h4>
<p>Egestas justo placerat bibendum</p>
</div>
<div class="bottom_footer-cms2">
<h4>free shipping everyday</h4>
<p>Call 123 - Lingerie store 456789</p>
</div>
<div class="follow-on">
<h4>Follow us on</h4>
<p><a title="face" href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/face.jpg" alt="face" /></a> <a title="tw" href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/tw.jpg" alt="tw" /></a> <a title="google" href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/g.jpg" alt="google" /></a> <a title="rss" href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/rss.jpg" alt="paypal" /></a> <a title="nobiet" href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/nobiet.jpg" alt="nobiet" /> </a> <a title="vimeo" href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/v.jpg" alt="vimeo" /></a></p>
</div>
<div class="last">
<h4>Assistance</h4>
<ul>
<li><a href="#">FAQs</a></li>
<li><a href="#">Shipping Information &amp; Returns</a></li>
<li><a href="#">Have questions? Just ask us</a></li>
</ul>
</div>
</div>
</div>';
$content_block2_fr='<div class="block_footer_cms">
<div class="top_footer-cms">
<div class="our-store">
<h4>Notre Magasin</h4>
<p class="img"><a href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/footer1.jpg" alt="footer1" /></a></p>
<div class="des_store">
<p>Fusce placerat risus faucibus dui ultrices un condimentum elit consectetur nam tristique varius arcu quis lobortis lacus consectetur ...</p>
</div>
<span>123 Sodales Street, senectus Habitant, New York City </span></div>
<div class="imformation">
<h4>linformation</h4>
<ul>
<li><a title="Contacter" href="contact-form.php">Contacter</a></li>
<li><a title="Livraison" href="cms.php?id_cms=1">Livraison</a></li>
<li><a title="Mentions légales" href="cms.php?id_cms=2">Mentions légales</a></li>
<li><a title="Conditions dutilisation" href="cms.php?id_cms=3">Conditions dutilisation</a></li>
<li><a title="À propos de nous" href="cms.php?id_cms=4">À propos de nous</a></li>
</ul>
</div>
<div class="our_offers">
<h4>Notre Offre</h4>
<ul>
<li><a title="Nouveaux produits" href="new-products.php">Nouveaux produits</a></li>
<li><a title="Meilleures ventes" href="best-sales.php">Meilleures ventes</a></li>
<li><a title="Promotions" href="prices-drop.php">Promotions</a></li>
<li><a title="Fabricants" href="manufacturer.php">Fabricants</a></li>
<li><a title="Fournisseurs" href="supplier.php">Fournisseurs</a></li>
</ul>
</div>
<div class="your_account">
<h4>Votre compte</h4>
<ul>
<li><a title="Votre compte" href="my-account.php">Votre compte</a></li>
<li><a title="Les renseignements personnels" href="identity.php">Les renseignements personnels</a></li>
<li><a title="Les adresses" href="addresses.php">Les adresses</a></li>
<li><a title="Réduction" href="discount.php">Réduction</a></li>
<li><a title="Historique des" href="history.php">Historique des</a></li>
</ul>
</div>
</div>
<div class="bottom_footer-cms">
<div class="bottom_footer-cms1">
<h4>nouvelle collection de tous</h4>
<p>Egestas justo placerat bibendum</p>
</div>
<div class="bottom_footer-cms2">
<h4>livraison gratuite tous les jours</h4>
<p>123 Appel - Boutique de lingerie 456789</p>
</div>
<div class="follow-on">
<h4>Suivez-nous sur</h4>
<p><a title="face" href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/face.jpg" alt="face" /></a> <a title="tw" href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/tw.jpg" alt="tw" /></a> <a title="google" href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/g.jpg" alt="google" /></a> <a title="rss" href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/rss.jpg" alt="paypal" /></a> <a title="nobiet" href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/nobiet.jpg" alt="nobiet" /> </a> <a title="vimeo" href="#"><img src="{static_block_url}themes/et_urbanista/img/cms/v.jpg" alt="vimeo" /></a></p>
</div>
<div class="last">
<h4>Assistance</h4>
<ul>
<li><a href="#">FAQs</a></li>
<li><a href="#">Informations Expédition &amp; retours</a></li>
<li><a href="#">Vous avez des questions? Nhésitez pas à nous demander</a></li>
</ul>
</div>
</div>
</div>';
		$content_block3 = '<div class="footer_copyright">
<div class="copy_right">
<p class="copy">©2012 Urbanista Demo Store. All rights reserved.<a title="PrestaShop Theme" href="http://eggthemes.com">PrestaShop Theme</a> by <a title="Eggthemes" href="http://eggthemes.com/prestashop-themes.html">Eggthemes.com</a></p>
</div>
<div class="logo_payment"><a title="paypal" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/et_urbanista/img/cms/logo_paiement_visa.jpg" alt="paypal" /> </a> <a title="visa" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/et_urbanista/img/cms/logo_paiement_mastercard.jpg" alt="visa" /> </a> <a title="american" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/et_urbanista/img/cms/nocard.jpg" alt="american" /> </a> <a title="mastercard" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/et_urbanista/img/cms/logo_paiement_paypal.jpg" alt="mastercard" /></a></div>
</div>';
$content_block3_fr='<div class="footer_copyright">
<div class="copy_right">
<p class="copy">© 2012 Demo Store Urbanista. Tous droits réservés.<a title="Thème PrestaShop" href="http://eggthemes.com">Thème PrestaShop</a> by <a title="Eggthemes" href="http://eggthemes.com/prestashop-themes.html">Eggthemes.com</a></p>
</div>
<div class="logo_payment"><a title="paypal" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/et_urbanista/img/cms/logo_paiement_visa.jpg" alt="paypal" /> </a> <a title="visa" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/et_urbanista/img/cms/logo_paiement_mastercard.jpg" alt="visa" /> </a> <a title="american" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/et_urbanista/img/cms/nocard.jpg" alt="american" /> </a> <a title="mastercard" href="cms.php?id_cms=5"> <img src="{static_block_url}themes/et_urbanista/img/cms/logo_paiement_paypal.jpg" alt="mastercard" /></a></div>
</div>';
		$id_en = Language::getIdByIso('en');
		$id_fr = Language::getIdByIso('fr');
		if(!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock` (`id_block`, `identifier_block`, `hook`, `is_active`) VALUES ( "1", "banner-home","8", "1")') OR 
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock` (`id_block`, `identifier_block`, `hook`, `is_active`) VALUES ( "2", "cms_footer_page","21", "1")') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock` (`id_block`, `identifier_block`, `hook`, `is_active`) VALUES ( "3", "allright_payment","21", "1")') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "1", \''.$id_en.'\',"Banner Home", \''.$content_block1.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "1", \''.$id_fr.'\',"Banner Home", \''.$content_block1_fr.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "2", \''.$id_en.'\',"CMS footer page", \''.$content_block2.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "2", \''.$id_fr.'\',"CMS footer page", \''.$content_block2_fr.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "3", \''.$id_en.'\',"All Right + Payment", \''.$content_block3.'\')') OR
		!Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'staticblock_lang` (`id_block`, `id_lang`, `title`, `content`) VALUES ( "3", \''.$id_fr.'\',"All Right + Payment", \''.$content_block3_fr.'\')') )
			return false;
		return true;
		
	}
	
	public function install()
	{
	 	if (parent::install() == false OR !$this->registerHook('header'))
	 		return false;
		foreach ($this->myHook AS $hook){
			if ( !$this->registerHook($hook))
				return false;
		}
	 	if (!Db::getInstance()->Execute('CREATE TABLE '._DB_PREFIX_.'staticblock (`id_block` int(10) unsigned NOT NULL AUTO_INCREMENT, `identifier_block` varchar(255) NOT NULL DEFAULT \'\', `hook` int(10) unsigned, `is_active` tinyint(1) NOT NULL DEFAULT \'1\', PRIMARY KEY (`id_block`),UNIQUE KEY `identifier_block` (`identifier_block`)) ENGINE=InnoDB default CHARSET=utf8'))
	 		return false;
		if (!Db::getInstance()->Execute('CREATE TABLE '._DB_PREFIX_.'staticblock_lang (`id_block` int(10) unsigned NOT NULL, `id_lang` int(10) unsigned NOT NULL, `title` varchar(255) NOT NULL DEFAULT \'\', `content` mediumtext, UNIQUE KEY `staticblock_lang_index` (`id_block`,`id_lang`)) ENGINE=InnoDB default CHARSET=utf8'))
	 		return false;
		$this->init_data();
	 	return true;
	}
	
	public function uninstall()
	{
	 	if (parent::uninstall() == false)
	 		return false;
	 	if (!Db::getInstance()->Execute('DROP TABLE '._DB_PREFIX_.'staticblock') OR !Db::getInstance()->Execute('DROP TABLE '._DB_PREFIX_.'staticblock_lang'))
	 		return false;
	 	return true;
	}
	
	private function _displayHelp()
	{
		$this->_html .= '
		<br/>
	 	<fieldset>
			<legend><img src="'.$this->_path.'logo.gif" alt="" title="" /> '.$this->l('Static block Helper').'</legend>
			<div>This module customize static contents on the site. Static contents are displayed at the position of the hook : top, left, home,right, footer.</div>
		</fieldset>';
	}
	
	public function getContent()
   	{
		$this->_html = '<h2>'.$this->displayName.'</h2>';
		
		
		$this->_postProcess();
		
		if (Tools::isSubmit('addBlock'))
			$this->_displayAddForm();
		elseif (Tools::isSubmit('editBlock'))
			$this->_displayUpdateForm();
		elseif (Tools::isSubmit('changeStatusStaticblock') AND Tools::getValue('id_block'))
		{
			$stblock = new StaticBlockClass(Tools::getValue('id_block'));
			$stblock->updateStatus(Tools::getValue('status'));
			$this->_displayForm();
		}
		else
			$this->_displayForm();
		$this->_displayHelp();
		return $this->_html;
	}
	
	private function _postProcess()
	{
		global $currentIndex;
		$errors = array();
		if (Tools::isSubmit('saveBlock'))
		{
			
			$block = new StaticBlockClass(Tools::getValue('id_block'));
			$block->copyFromPost();
			
			$errors = $block->validateController();
						
			if (sizeof($errors))
			{
				$this->_html .= $this->displayError(implode('<br />', $errors));
			}
			else
			{
				Tools::getValue('id_block') ? $block->update() : $block->add();
				Tools::redirectAdmin($currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&saveBlockConfirmation');
			}
		}
		elseif (Tools::isSubmit('deleteBlock') AND Tools::getValue('id_block'))
		{
			$block = new StaticBlockClass(Tools::getValue('id_block'));
			$block->delete();
			Tools::redirectAdmin($currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&deleteBlockConfirmation');
		}
		elseif (Tools::isSubmit('saveBlockConfirmation'))
			$this->_html = $this->displayConfirmation($this->l('Static block has been saved successfully'));
		elseif (Tools::isSubmit('deleteBlockConfirmation'))
			$this->_html = $this->displayConfirmation($this->l('Static block deleted successfully'));
		
	}
	
	private function getBlocks()
	{
		$defaultLanguage = intval(Configuration::get('PS_LANG_DEFAULT'));
	 	if (!$result = Db::getInstance()->ExecuteS(
			'SELECT sb.*, sbl.`title`, sbl.`content` 
			FROM `'._DB_PREFIX_.'staticblock` sb 
			LEFT JOIN `'._DB_PREFIX_.'staticblock_lang` sbl ON (sb.`id_block` = sbl.`id_block` AND sbl.`id_lang` = '.(int)($defaultLanguage).')'))
	 		return false;
	 	return $result;
	}
	
	private function getHookTitle($id_hook)
	{
		if (!$result = Db::getInstance()->getRow('
			SELECT `name`,`title`
			FROM `'._DB_PREFIX_.'hook` 
			WHERE `id_hook` = '.(int)($id_hook)))
			return false;
		return ($result['title'] != "" ? $result['title'] : $result['name']);
	}
	
	private function _displayForm()
	{
		global $currentIndex, $cookie;
	 	$this->_html .= '
		
	 	<fieldset>
			<legend><img src="'.$this->_path.'logo.gif" alt="" title="" /> '.$this->l('List of static blocks').'</legend>
			<p><a href="'.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&addBlock"><img src="'._PS_ADMIN_IMG_.'add.gif" alt="" /> '.$this->l('Add a new block').'</a></p><br/>
			<table width="100%" class="table" cellspacing="0" cellpadding="0">
			<thead>
			<tr class="nodrag nodrop">
				<th>'.$this->l('ID').'</th>
				<th class="center">'.$this->l('Title').'</th>
				<th class="center">'.$this->l('Identifier').'</th>
				<th class="center">'.$this->l('Hook into').'</th>
				<th class="right">'.$this->l('Active').'</th>
			</tr>
			</thead>
			<tbody>';
		$s_blocks = $this->getBlocks();
		if (is_array($s_blocks))
		{
			static $irow;
			foreach ($s_blocks as $block)
			{
				$this->_html .= '
				<tr class="'.($irow++ % 2 ? 'alt_row' : '').'">
					<td class="pointer" onclick="document.location = \''.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&editBlock&id_block='.$block['id_block'].'\'">'.$block['id_block'].'</td>
					<td class="pointer center" onclick="document.location = \''.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&editBlock&id_block='.$block['id_block'].'\'">'.$block['title'].'</td>
					<td class="pointer center" onclick="document.location = \''.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&editBlock&id_block='.$block['id_block'].'\'">'.$block['identifier_block'].'</td>
					<td class="pointer center" onclick="document.location = \''.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&editBlock&id_block='.$block['id_block'].'\'">'.(Validate::isInt($block['hook']) ? $this->getHookTitle($block['hook']) : '').'</td>
					<td class="pointer center"> <a href="'.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'&changeStatusStaticblock&id_block='.$block['id_block'].'&status='.$block['is_active'].'">'.($block['is_active'] ? '<img src="'._PS_ADMIN_IMG_.'enabled.gif" alt="Enabled" title="Enabled" />' : '<img src="'._PS_ADMIN_IMG_.'disabled.gif" alt="Disabled" title="Disabled" />').'</a> </td>
				</tr>';
			}
		}
		$this->_html .= '
			</tbody>
			</table>
		</fieldset>';
			
		
	}
	
	private function _displayAddForm()
	{
		global $currentIndex, $cookie;
	 	// Language 
	 	$defaultLanguage = (int)(Configuration::get('PS_LANG_DEFAULT'));
		$languages = Language::getLanguages(false);
		$divLangName = 'titlediv¤contentdiv';
		// TinyMCE
		$iso = Language::getIsoById((int)($cookie->id_lang));
		$isoTinyMCE = (file_exists(_PS_ROOT_DIR_.'/js/tiny_mce/langs/'.$iso.'.js') ? $iso : 'en');
		$ad = dirname($_SERVER["PHP_SELF"]);
		$this->_html .=  '
		<script type="text/javascript">	
		var iso = \''.$isoTinyMCE.'\' ;
		var pathCSS = \''._THEME_CSS_DIR_.'\' ;
		var ad = \''.$ad.'\' ;
		</script>
		<script type="text/javascript" src="'.__PS_BASE_URI__.'js/tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript" src="'.__PS_BASE_URI__.'js/tinymce.inc.js"></script>
		<script type="text/javascript">id_language = Number('.$defaultLanguage.');</script>	
		<script type="text/javascript">
		$(document).ready(function(){		
			tinySetup({});});
		</script>
		';
		// Form
		$this->_html .= '
		<fieldset>
			<legend><img src="'.$this->_path.'logo.gif" alt="" title="" /> '.$this->l('New block').'</legend>
			<form method="post" action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" enctype="multipart/form-data">
				<label>'.$this->l('Title:').'</label>
				<div class="margin-form">';
					foreach ($languages as $language)
					{
						$this->_html .= '
					<div id="titlediv_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $defaultLanguage ? 'block' : 'none').'; float: left;">
						<input type="text" name="title_'.$language['id_lang'].'" value="'.Tools::getValue('title_'.$language['id_lang']).'" size="55" /><sup> *</sup>
					</div>';
					}
					$this->_html .= $this->displayFlags($languages, $defaultLanguage, $divLangName, 'titlediv', true);	
					$this->_html .= '
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Identifier:').'</label>
				<div class="margin-form">
					<div id="identifierdiv" style="float: left;">
						<input type="text" name="identifier_block" value="'.Tools::getValue('identifier_block').'" size="55" /><sup> *</sup>
					</div>
					<p class="clear">'.$this->l('Identifier must be unique').'. '.$this->l('Match a-zA-Z-_0-9').'</p>
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Hook into:').'</label>
				<div class="margin-form">
					<div id="hookdiv" style="float: left;">
						<select name="hook">
							<option value="0">'.$this->l('None').'</option>';

		foreach ($this->myHook AS $hook){
			$id_hook = Hook::getIdByName($hook);
			$this->_html .= '<option value="'.$id_hook.'"'.($id_hook == Tools::getValue('hook') ? 'selected="selected"' : '').'>'.$this->getHookTitle($id_hook).'</option>';
		}
		
		$this->_html .= '
						</select>
					</div>
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Active:').'</label>
				<div class="margin-form">
					<div id="activediv" style="float: left;">
						<input type="radio" name="is_active" value="1"'.(Tools::getValue('is_active',1) ? 'checked="checked"' : '').' />
						<label class="t"><img src="'._PS_ADMIN_IMG_.'enabled.gif" alt="Enabled" title="Enabled" /></label>
						<input type="radio" name="is_active" value="0"'.(Tools::getValue('is_active',1) ? '' : 'checked="checked"').' />
						<label class="t"><img src="'._PS_ADMIN_IMG_.'disabled.gif" alt="Disabled" title="Disabled" /></label>
					</div>
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Content:').'</label>
				<div class="margin-form">';									
					foreach ($languages as $language)
					{
						$this->_html .= '
					<div id="contentdiv_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $defaultLanguage ? 'block' : 'none').'; float: left;">
						<textarea class="rte" name="content_'.$language['id_lang'].'" id="contentInput_'.$language['id_lang'].'" cols="100" rows="20">'.Tools::getValue('content_'.$language['id_lang']).'</textarea>
					</div>';
					}
					$this->_html .= $this->displayFlags($languages, $defaultLanguage, $divLangName, 'contentdiv', true);
					$this->_html .= '
					<div class="clear"></div>
				</div>			
				<div class="margin-form">';
					$this->_html .= '<input type="submit" class="button" name="saveBlock" value="'.$this->l('Save Block').'" id="saveBlock" />
									';
					$this->_html .= '					
				</div>
				
			</form>
			<a href="'.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'"><img src="'._PS_ADMIN_IMG_.'arrow2.gif" alt="" />'.$this->l('Back to list').'</a>
		</fieldset>';
	}
	
	private function _displayUpdateForm()
	{
		global $currentIndex, $cookie;
		if (!Tools::getValue('id_block'))
		{
			$this->_html .= '<a href="'.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'"><img src="'._PS_ADMIN_IMG_.'arrow2.gif" alt="" />'.$this->l('Back to list').'</a>';
			return;
		}

		$block = new StaticBlockClass((int)Tools::getValue('id_block'));
	 	// Language 
	 	$defaultLanguage = (int)(Configuration::get('PS_LANG_DEFAULT'));
		$languages = Language::getLanguages(false);
		$divLangName = 'titlediv¤contentdiv';
		// TinyMCE
		$iso = Language::getIsoById((int)($cookie->id_lang));
		$isoTinyMCE = (file_exists(_PS_ROOT_DIR_.'/js/tiny_mce/langs/'.$iso.'.js') ? $iso : 'en');
		$ad = dirname($_SERVER["PHP_SELF"]);
		$this->_html .=  '
		<script type="text/javascript">	
		var iso = \''.$isoTinyMCE.'\' ;
		var pathCSS = \''._THEME_CSS_DIR_.'\' ;
		var ad = \''.$ad.'\' ;
		</script>
		<script type="text/javascript" src="'.__PS_BASE_URI__.'js/tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript" src="'.__PS_BASE_URI__.'js/tinymce.inc.js"></script>
		<script type="text/javascript">id_language = Number('.$defaultLanguage.');</script>	
		<script type="text/javascript">
		$(document).ready(function(){		
			tinySetup({});});
		</script>
		';
		// Form
		$this->_html .= '
		<fieldset>
			<legend><img src="'.$this->_path.'logo.gif" alt="" title="" /> '.$this->l('Edit block').' '.$block->identifier_block.'</legend>
			<form method="post" action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" enctype="multipart/form-data">
				<input type="hidden" name="id_block" value="'.(int)$block->id_block.'" id="id_block" />
				<div class="margin-form">
					<input type="submit" class="button " name="deleteBlock" value="'.$this->l('Delete Block').'" id="deleteBlock" onclick="if (!confirm(\'Are you sure that you want to delete this static blocks?\')) return false "/>
				</div>
				<label>'.$this->l('Title:').'</label>
				<div class="margin-form">';
					foreach ($languages as $language)
					{
						$this->_html .= '
					<div id="titlediv_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $defaultLanguage ? 'block' : 'none').'; float: left;">
						<input type="text" name="title_'.$language['id_lang'].'" value="'.(isset($block->title[$language['id_lang']]) ? $block->title[$language['id_lang']] : '').'" size="55" /><sup> *</sup>
					</div>';
					}
					$this->_html .= $this->displayFlags($languages, $defaultLanguage, $divLangName, 'titlediv', true);	
					$this->_html .= '
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Identifier:').'</label>
				<div class="margin-form">
					<div id="identifierdiv" style="float: left;">
						<input type="text" name="identifier_block" value="'.$block->identifier_block.'" size="55" /><sup> *</sup>
					</div>
					<p class="clear">'.$this->l('Identifier must be unique').'. '.$this->l('Match a-zA-Z-_0-9').'</p>
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Hook into:').'</label>
				<div class="margin-form">
					<div id="hookdiv" style="float: left;">
						<select name="hook">
							<option value="0">'.$this->l('None').'</option>';
		foreach ($this->myHook AS $hook){
			$id_hook = Hook::getIdByName($hook);
			$this->_html .= '<option value="'.$id_hook.'"'.($id_hook == $block->hook ? 'selected="selected"' : '').'>'.$this->getHookTitle($id_hook).'</option>';
		}
		$this->_html .= '
						</select>
					</div>
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Status:').'</label>
				<div class="margin-form">
					<div id="activediv" style="float: left;">
						<input type="radio" name="is_active" '.($block->is_active ? 'checked="checked"' : '').' value="1" />
						<label class="t"><img src="'._PS_ADMIN_IMG_.'enabled.gif" alt="Enabled" title="Enabled" /></label>
						<input type="radio" name="is_active" '.($block->is_active ? '' : 'checked="checked"').' value="0" />
						<label class="t"><img src="'._PS_ADMIN_IMG_.'disabled.gif" alt="Disabled" title="Disabled" /></label>
					</div>
					<div class="clear"></div>
				</div>
				
				<label>'.$this->l('Content:').'</label>
				<div class="margin-form">';									
					foreach ($languages as $language)
					{
						$this->_html .= '
					<div id="contentdiv_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $defaultLanguage ? 'block' : 'none').'; float: left;">
						<textarea class="rte" name="content_'.$language['id_lang'].'" id="contentInput_'.$language['id_lang'].'" cols="100" rows="20">'.(isset($block->content[$language['id_lang']]) ? $block->content[$language['id_lang']] : '').'</textarea>
					</div>';
					}
					$this->_html .= $this->displayFlags($languages, $defaultLanguage, $divLangName, 'contentdiv', true);
					$this->_html .= '
					<div class="clear"></div>
				</div>			
				<div class="margin-form">';
					$this->_html .= '<input type="submit" class="button" name="saveBlock" value="'.$this->l('Save Block').'" id="saveBlock" />';
					$this->_html .= '					
				</div>
				
			</form>
			<a href="'.$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules').'"><img src="'._PS_ADMIN_IMG_.'arrow2.gif" alt="" />'.$this->l('Back to list').'</a>
		</fieldset>';
	}

	public function contentById($id_block)
	{
		global $cookie;

		$staticblock = new StaticBlockClass($id_block);
		return ($staticblock->is_active ? $staticblock->content[(int)$cookie->id_lang] : '');
	}
	
	public function contentByIdentifier($identifier)
	{
		global $cookie;

		if (!$result = Db::getInstance()->getRow('
			SELECT `id_block`,`identifier_block`
			FROM `'._DB_PREFIX_.'staticblock` 
			WHERE `identifier_block` = \''.$identifier.'\''))
			return false;
		$staticblock = new StaticBlockClass($result['id_block']);
		return ($staticblock->is_active ? $staticblock->content[(int)$cookie->id_lang] : '');
	}
	
	private function getBlockInHook($hook_name)
	{
		$block_list = array();
		
		$id_hook = Hook::getIdByName($hook_name);
		if ($id_hook)
		{
			$results = Db::getInstance()->ExecuteS('SELECT `id_block` FROM `'._DB_PREFIX_.'staticblock` WHERE `hook` = '.(int)($id_hook));
			foreach ($results as $row)
			{
				$temp = new StaticBlockClass($row['id_block']);
				if ($temp->is_active)
					$block_list[] = $temp;
			}
		}	
		
		return $block_list;
	}

	private function getPresse()
	{
		$block_list = array();
		
		$results = Db::getInstance()->ExecuteS('SELECT `id`, `titre`, `image`, `sousTitre`, `vignette` FROM `Presse` ');
		foreach ($results as $row)
		{
			$presse = array(
				'id' => $row['id'],
				'titre' => $row['titre'],
				'sousTitre' => $row['sousTitre'],
				'image' => 'http://tnk.local/uploads/presse/' . $row['image'],
				'vignette' => 'http://tnk.local/uploads/presse/' . $row['vignette']
			);
			$block_list[] = $presse;
		}
		
		return $block_list;
	}
	
	public function hookDisplayTop()
	{
		global $smarty, $cookie;
		
		$block_list = $this->getBlockInHook('displaytop');
		
		$smarty->assign(array(
			'block_list' => $block_list
		));
		
		return $this->display(__FILE__, 'csstaticblocks.tpl');
	}
	
	public function hookDisplayLeftColumn()
	{
		global $smarty, $cookie;
		
		$block_list = $this->getBlockInHook('displayleftColumn');
		
		$smarty->assign(array(
			'block_list' => $block_list
		));
		
		return $this->display(__FILE__, 'csstaticblocks.tpl');
	}
	
	public function hookDisplayRightColumn()
	{
		global $smarty, $cookie;
		
		$block_list = $this->getBlockInHook('displayrightColumn');
		
		$smarty->assign(array(
			'block_list' => $block_list
		));
		
		return $this->display(__FILE__, 'csstaticblocks.tpl');
	}
	
	public function hookDisplayFooter()
	{
		global $smarty, $cookie;
		
		$block_list = $this->getBlockInHook('displayfooter');
		
		$smarty->assign(array(
			'block_list' => $block_list
		));
		
		return $this->display(__FILE__, 'csstaticblocks.tpl');
	}
	
	public function hookDisplayHome()
	{
		global $smarty, $cookie;
		
		$block_list = $this->getBlockInHook('displayhome');
		$presse = $this->getPresse();
		
		$smarty->assign(array(
			'block_list' => $block_list, 
			'hook'		 => 'home',
			'presses'	 => $presse
		));
		
		return $this->display(__FILE__, 'csstaticblocks.tpl');
	}
}
?>
