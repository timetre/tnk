<!-- CATEGORY FEATURE PRODUCTS -->
<div class="shopbybrand">
	{if isset($feature_products) AND $feature_products}
		<ul>
		{foreach from=$feature_products item=product name=feature_products}
			<li class="{if $smarty.foreach.feature_products.first}first_item{elseif $smarty.foreach.feature_products.last}last_item{else}item{/if}">
				<p class="product_img_link">
					<a href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')}" alt="{$product.name|escape:html:'UTF-8'}" /></a>
				</p>
				<p class="manufacture">{if $product.id_manufacturer}<a href="{$link->getmanufacturerLink($product.id_manufacturer, $product.link_rewrite)}" title="{$product.manufacturer_name}"><img src="{$img_manu_dir}{$product.id_manufacturer|escape:'htmlall':'UTF-8'}.jpg" alt="{$product.name|escape:'htmlall':'UTF-8'}" /></a>{/if}
				</p>
				<h3><a href="{$product.link}" title="{$product.name|escape:'htmlall':'UTF-8'}">{$product.name|escape:'htmlall':'UTF-8'}</a></h3>
				<p>{$product.description_short|strip_tags|truncate:190:'...'}</p>
				<p class="shopnow"><a href="{$product.link}">{l s='Shop now' mod='nixxisblockcategoryfeature'}</a></p>
			</li>
		{/foreach}
		</ul>
	{/if}
</div>
<!-- /CATEGORY FEATURE PRODUCTS -->