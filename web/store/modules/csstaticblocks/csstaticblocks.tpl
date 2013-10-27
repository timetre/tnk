<!-- Static Block module -->
{foreach from=$block_list item=block}
	{if $block->identifier_block eq 'banner-home'}
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
							{counter assign="i" start=1 skip=1}
							{foreach from=$presses item=presse}
								{if $i==4}
									</div>
									<div>
									{counter assign="i" start=0 skip=1}
								{/if}
					    		<div class="block_top_footer">
					    			<a class="fancybox" href="{$presse.image}" rel="group" >
							    		<img src="{$presse.vignette}" alt="" height="100px">
							    	</a>
							    	<h5><a class="fancybox" href="{$presse.image}" rel="group" >
							    		{$presse.titre}</a>
							    	</h5>
							    	<p>{$presse.sousTitre}</p>
					    		</div>
					    		{counter assign="i"}
					    	{/foreach}
						</div>		
					</div>
				</div>
			</div>
		</div>
	{else}
		{$block->content[(int)$cookie->id_lang]}
	{/if}
{/foreach}
<!-- /Static block module -->