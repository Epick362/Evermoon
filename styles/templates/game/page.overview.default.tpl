{block name="title" prepend}{$LNG.lm_overview}{/block}
{block name="script" append}
<script type="text/javascript">
buildEndTime	= {$buildtime};
</script>
{/block}
{block name="content"}
<table class="table519">
	<tr>
		<th colspan="3"><a href="#" onclick="return Dialog.PlanetAction();" title="{$LNG.ov_planetmenu}">{$LNG.ov_planet} "<span class="planetname">{$planetname}</span>"</a> ({$username}) <span style="float:right;" class="servertime">{$servertime}</span></th>
	</tr>
	{if $messages}
	<tr>
		<td colspan="3"><a href="?page=messages">{$messages}</a></td>
	</tr>
	{/if}
	{if $is_news}
	<tr>
		<td>{$LNG.ov_news}</td><td colspan="2">{$news}</td>
	</tr>
	{/if}
	{if !empty($chatOnline)}
	<tr>
		<td style="white-space: nowrap;">{$LNG.ov_chat_online}</td>
		<td colspan="2">{foreach $chatOnline as $Name}{if !$Name@first},&nbsp;{/if}<a href="?page=chat">{$Name}</a>{/foreach}</td>
	</tr>
	{/if}
	{if $Teamspeak}
	<tr>
		<td>{$LNG.ov_teamspeak}</td><td colspan="3">{$Teamspeak}</td>
	</tr>
	{/if}
	<tr>
		<th colspan="3">{$LNG.ov_events}</th>
	</tr>
	{foreach $fleets as $index => $fleet}
	<tr>
		<td id="fleettime_{$index}" class="fleets" data-fleet-end-time="{$fleet.returntime}" data-fleet-time="{$fleet.resttime}">-</td>
		<td colspan="2">{$fleet.text}</td>
	</tr>
	{/foreach}
	<tr>
	  <td colspan="3">
		  <div style="background-image: url({$dpath}planeten/{$planetimage}.jpg); margin:5px; background-repeat:no-repeat; height:300px; position:relative; width:654px; font-weight: bold;"> 
			<div id="planetdata"> 
			  <div id="planetDetails"> 
				<table cellpadding="0" cellspacing="0" width="100%"> 
				  <tbody>
					<tr>
					  <th class="c" style="text-align: left; color: #09F; font-weight: bold;"><span id="diameterField">{$LNG.ov_diameter}:</span></th>
					</tr><tr>
					  <td style="text-align: right; font-weight: bold;">{$planet_diameter} {$LNG.ov_distance_unit} (<a title="{$LNG.ov_developed_fields}">{$planet_field_current}</a> / <a title="{$LNG.ov_max_developed_fields}">{$planet_field_max}</a> {$LNG.ov_fields})</td>

					</tr><tr> 
					  <th class="c" style="text-align: left; color: #09F; font-weight: bold;"><span id="temperatureField">{$LNG.ov_temperature}:</span></th>
					</tr><tr>
					  <td style="text-align: right; font-weight: bold;">{$LNG.ov_aprox} {$planet_temp_min}{$LNG.ov_temp_unit} {$LNG.ov_to} {$planet_temp_max}{$LNG.ov_temp_unit}</td> 

					</tr><tr> 
					  <th class="c" style="text-align: left; color: #09F; font-weight: bold;"><span id="positionField">{$LNG.ov_position}:</span></th>
					</tr><tr> 
					  <td style="text-align: right; font-weight: bold;"><a href="game.php?page=galaxy&amp;mode=0&amp;galaxy={$galaxy}&amp;system={$system}">[{$galaxy}:{$system}:{$planet}]</a></td> 

					</tr><tr> 
					  <th class="c" style="text-align: left; color: #09F; font-weight: bold;"><span id="scoreField">{$LNG.ov_points}:</span></th>
					</tr><tr>
					  <td style="text-align: right; font-weight: bold;">{$rankInfo}</td> 
					</tr> 
				  </tbody> 
				</table> 
			  </div> 
			</div>
			{if $Moon}<div id="moon"><a href="game.php?page=overview&amp;cp={$Moon.id}&amp;re=0" title="{$Moon.name}"><img src="{$dpath}planeten/moon_overview_normal.png" height="60" width="60" alt="{$Moon.name} ({$LNG.fcm_moon})"></a></br><div id="moon_text">{$Moon.name} ({$LNG.fcm_moon})</div></div>{/if}
		</div>
	  </td>
	</tr>
	{if $ref_active}
	<tr>
		<th colspan="3">{$LNG.ov_reflink}</th>
	</tr>
	<tr>
		<td colspan="3"><input type="text" value="{$path}index.php?ref={$userid}" readonly="readonly" style="width:450px;"></td>
	</tr>
	{foreach $RefLinks as $RefID => $RefLink}
	<tr>
		<td colspan="2"><a href="#" onclick="return Dialog.Playercard({$RefID}, '{$RefLink.username}');">{$RefLink.username}</a></td>
		<td>{{$RefLink.points|number}} / {$ref_minpoints|number}</td>
	</tr>
	{foreachelse}
	<tr>
		<td colspan="3">{$LNG.ov_noreflink}</td>
	</tr>
	{/foreach}
	{/if}
</table>
{/block}