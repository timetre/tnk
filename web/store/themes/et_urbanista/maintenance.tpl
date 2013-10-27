{*
* 2007-2012 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2012 PrestaShop SA
*  @version  Release: $Revision: 6594 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang_iso}" lang="{$lang_iso}">
	<head>
		<title>{$meta_title|escape:'htmlall':'UTF-8'}</title>	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{if isset($meta_description)}
		<meta name="description" content="{$meta_description|escape:'htmlall':'UTF-8'}" />
{/if}
{if isset($meta_keywords)}
		<meta name="keywords" content="{$meta_keywords|escape:'htmlall':'UTF-8'}" />
{/if}
		<meta name="robots" content="{if isset($nobots)}no{/if}index,follow" />
		<link rel="shortcut icon" href="{$favicon_url}" />
		<link href="{$css_dir}maintenance.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="maintenance" style="width: 90%;">
			 <p><img src="{$content_dir}img/logo_big.jpg" alt="logo" style="width: 40%;" /><br /><br /></p>
			 <p><img src="{$content_dir}img/maintenance.jpg" alt="logo" style="width: 100%;margin-top: 30px;margin-bottom: 30px;" /><br /><br /></p>
			 <p style="color: black;font-size: 18px;">
			 	Rendez vous au 06 81 26 24 95
			 </p>
			 <p style="color: black;font-size: 18px;">
			 	B.H.V. Bazar de L'Hôtel de Ville - 52 rue de Rivoli - Paris 4ème<br/>Site en construction
			 </p>
			<!-- <p id="message" style="margin: 0 auto;">
				{*l s='In order to perform site maintenance, our online shop has shut down temporarily.'*}<br /><br />
				{*l s='We apologize for the inconvenience and ask that you please try again later.'*}
			 </p>-->
			 <span style="clear:both;">&nbsp;</span>
		</div>
	</body>
</html>
