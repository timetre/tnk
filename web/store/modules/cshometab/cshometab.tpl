<!-- CS Home Tab module -->
{if count($tabs) > 0}
<div id="tabs">
	<ul style="display:none;">
		{foreach from=$tabs item=tab name=tabs}
			<li class="{if $smarty.foreach.tabs.last}last{/if}"><a href="#tabs-{$smarty.foreach.tabs.iteration}" style="display:none;">{$tab->title[(int)$cookie->id_lang]}</a></li>
		{/foreach}
	</ul>
	{foreach from=$tabs item=tab name=tabs}
	<div id="tabs-{$smarty.foreach.tabs.iteration}">
		<div class="cycleElementsContainer" id="cycle-{$smarty.foreach.tabs.iteration}">
			{if $option->scrollPanel == "true"}
			<div class="cycleElementsArrow">
				<a href="#" id="cycleLeft-{$smarty.foreach.tabs.iteration}">Scroll Left</a>
				<a href="#" id="cycleRight-{$smarty.foreach.tabs.iteration}">Scroll Right</a>
			</div>
			{/if}
			<div id="elements-{$smarty.foreach.tabs.iteration}">
				<div class="codespot_top_tabs">
				{if $tab->product_list}
					<ul>
					{foreach from=$tab->product_list item=product name=product_list}
						<li class="ajax_block_product {if $smarty.foreach.product_list.first}first_item{elseif $smarty.foreach.product_list.last}last_item{/if}{if $smarty.foreach.product_list.iteration%$option->show == 0} last_item_of_line{/if}">
						
						<a href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')}" alt="{$product.name|escape:html:'UTF-8'}" style="height: 130px;" /></a>
						<h3><a href="{$product.link}" title="{$product.name|escape:'htmlall':'UTF-8'}">{$product.name|truncate:32:'...'|escape:'htmlall':'UTF-8'}</a></h3>
						<div class="products_list_price">
							{if isset($product.reduction) && $product.reduction && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
							<p class="old_price"><span class="bold">
								<span class="old_price_display">{convertPrice price=$product.price_without_reduction}</span>
							</span></p>
							<p class="reduction_percent">
							<span class="save">{l s='save' mod='blockhomeproductslide'}</span>
							<span class="reduction_percent_display">
							{if $product.specific_prices.reduction_type == 'percentage'}
							-{$product.specific_prices.reduction*100}%
							{else}
							-{convertPrice price=$product.specific_prices.reduction}
							{/if}
							</span>
							</p>
							{/if}
							{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}<p class="price_container"><span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span></p>{else}<div style="height:21px;"></div>{/if}
						</div>					
					</li>
					{/foreach}
					</ul>
				{/if}
				</div>
			</div>
		</div>
	</div>
	{/foreach}
</div>
<script type="text/javascript">
	$(function() {
		$( "#tabs" ).tabs({ fx: { opacity: 'toggle', duration:'slow'} });
		{if $option->scrollPanel == "true"}
			{foreach from=$tabs item=tab name=tabs}
				$("#cycle-{$smarty.foreach.tabs.iteration}").multipleElementsCycle2({
					container: '#elements-{$smarty.foreach.tabs.iteration}',
					prev: '#cycleLeft-{$smarty.foreach.tabs.iteration}',
					next: '#cycleRight-{$smarty.foreach.tabs.iteration}',
					start: 0,
					speed: 1000,
					containerSize: {$option->containerSize},
					show: {$option->show},
					scrollCount: {$option->show}
				});
			{/foreach}
		{/if}
	});
</script>
{/if}

<!-- /CS Home Tab module -->
