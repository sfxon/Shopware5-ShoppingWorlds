{block name="widgets_emotion_components_backgroundbox_element"}
		<div class="mv-backgroundbox" id="mv-emotion-obj-{$Data.objectId}">
				<a href="{$Data.dst_url}" class="col-md-3">
						<span class="headline">{$Data.title_box|htmlspecialchars}</span>
						<span class="image">
							<img src="{$Data.image_big}" alt="{$Data.title_box|htmlspecialchars}">                   
						</span>
				</a>
		</div>
		<style>
				#mv-emotion-obj-{$Data.objectId} {literal}{
						background-color: {/literal}{$Data.default_color};
				{literal}}{/literal}
				#mv-emotion-obj-{$Data.objectId}:hover {literal}{
						background-color: {/literal}{$Data.highlite_color};
				{literal}}{/literal}
		</style>
{/block}