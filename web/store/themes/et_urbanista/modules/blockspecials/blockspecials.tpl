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

<!-- MODULE Block specials -->
<div id="special_block_right" class="block products_block exclusive blockspecials">
	<h4><a href="{$link->getPageLink('prices-drop.php')}" title="{l s='Specials' mod='blockspecials'}">{l s='Specials' mod='blockspecials'}</a></h4>
	<div class="block_content">

{if $special}
		<ul class="products">
			<li>
				<a class="product_image" href="{$special.link}"><img src="{$link->getImageLink($special.link_rewrite, $special.id_image, 'home_default')}" alt="{$special.legend|escape:html:'UTF-8'}" title="{$special.name|escape:html:'UTF-8'}" /></a>

				<h5><a href="{$special.link}" title="{$special.name|escape:html:'UTF-8'}">{$special.name|escape:html:'UTF-8'}</a></h5>
				<span class="price-discount">{if !$priceDisplay}{displayWtPrice p=$special.price_without_reduction}{else}{displayWtPrice p=$priceWithoutReduction_tax_excl}{/if}</span>
    			{if $special.specific_prices}
        			{assign var='specific_prices' value=$special.specific_prices}
        			{if $specific_prices.reduction_type == 'percentage' && ($specific_prices.from == $specific_prices.to OR ($smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= $specific_prices.to && $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' >= $specific_prices.from))}
	        			<span class="reduction">(-{$specific_prices.reduction*100|floatval}%)</span>
	            	{/if}
	            {/if}
				<span class="price">{if !$priceDisplay}{displayWtPrice p=$special.price}{else}{displayWtPrice p=$special.price_tax_exc}{/if}</span>				
				{if ($special.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $special.available_for_order && !isset($restricted_country_mode) && !$PS_CATALOG_MODE}
					{if ($special.allow_oosp || $special.quantity > 0) && $special.customizable != 2}
						<a class="button ajax_add_to_cart_button exclusive" rel="ajax_id_product_{$special.id_product|intval}" href="{$link->getPageLink('cart.php')}?add&amp;id_product={$special.id_product|intval}{if isset($static_token)}&amp;token={$static_token}{/if}" title="{l s='Add to cart'}">{l s='Add to cart' mod='blockspecials'}</a>
					{else}
							<span class="exclusive">{l s='Out of stock' mod='blockspecials'}</span>
					{/if}
				{/if}
				<p class="reduction_percent">
				<span class="save">save</span>
				<span class="reduction_percent_display">
				{if $special.specific_prices.reduction_type == 'percentage'}
				-{$special.specific_prices.reduction*100}%
				{else}
				-{convertPrice price=$special.specific_prices.reduction}
				{/if}
				</span>
				</p>
			</li>
		</ul>
{else}
		<p>{l s='No specials at this time' mod='blockspecials'}</p>
{/if}
	</div>
</div>
<!-- /MODULE Block specials -->