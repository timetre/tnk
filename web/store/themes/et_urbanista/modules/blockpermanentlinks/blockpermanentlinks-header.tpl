{*
* 2007-2011 PrestaShop 
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
*  @copyright  2007-2011 PrestaShop SA
*  @version  Release: $Revision: 6594 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_home" {if $page_name=='index'}class="active"{/if}><a href="{$base_dir}" title="{$shop_name|escape:'htmlall':'UTF-8'}" >{l s='Home' mod='blockpermanentlinks'}</a></li>
	<!--<li id="header_link_specialproduct" {if $page_name=='prices-drop'}class="active"{/if}><a href="{$link->getPageLink('prices-drop.php')}" title="{l s='All specials' mod='blockspecials'}" >{l s='Specials' mod='blockpermanentlinks'}</a></li>-->
	<li id="header_link_sitemap" {if $page_name=='sitemap'}class="active"{/if}><a href="{$link->getPageLink('sitemap.php')}" title="{l s='sitemap' mod='blockpermanentlinks'}"  >{l s='Sitemap' mod='blockpermanentlinks'}</a></li>
	<li id="header_link_contact" {if $page_name=='contact'}class="active"{/if}><a href="{$link->getPageLink('contact.php', true)}" title="{l s='contact' mod='blockpermanentlinks'}" >{l s='Contact' mod='blockpermanentlinks'}</a></li>
</ul>
<!-- /Block permanent links module HEADER -->
