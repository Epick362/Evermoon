<div id="page">
	<div id="header">
		<table id="header-nav">
			<tr>
				<td>
					<ul id="nav">
						{if isModulAvalible($smarty.const.MODULE_IMPERIUM)}<li><a href="game.php?page=imperium">{$LNG.lm_empire}</a></li>{/if}
						{if isModulAvalible($smarty.const.MODULE_SIMULATOR)}<li><a href="game.php?page=battleSimulator">{$LNG.lm_battlesim}</a></li>{/if}
						{if isModulAvalible($smarty.const.MODULE_CHAT)}<li><a href="game.php?page=chat">{$LNG.lm_chat}</a></li>{/if}
						{if isModulAvalible($smarty.const.MODULE_STATISTICS)}<li><a href="game.php?page=statistics">{$LNG.lm_statistics}({$rankInfo})</a></li>{/if}
						{if isModulAvalible($smarty.const.MODULE_RECORDS)}<li><a href="game.php?page=records">{$LNG.lm_records}</a></li>{/if}
						{if isModulAvalible($smarty.const.MODULE_BATTLEHALL)}<li><a href="game.php?page=battleHall">{$LNG.lm_topkb}</a></li>{/if}
						{if isModulAvalible($smarty.const.MODULE_SEARCH)}<li><a href="game.php?page=search">{$LNG.lm_search}</a></li>{/if}
						{if isModulAvalible($smarty.const.MODULE_SUPPORT)}<li><a href="game.php?page=ticket">{$LNG.lm_support}</a></li>{/if}
						<li><a href="game.php?page=settings">{$LNG.lm_options}</a></li>
						<li><a href="game.php?page=logout">{$LNG.lm_logout}</a></li>
						<li><a href="game.php?page=changelog">Evermoon</a></li>
					</ul>
				</td>
			</tr>
		</table>
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									<td><img src="{$dpath}images/metall.png" alt="" class="tooltip" data-tooltip-content="<table><tr><th width=100><center><font color=#C7C7C7>{$LNG.tech.901}</font></center></th></tr><tr><td><font color=#00FF00>{$metal_max}</font></td></tr></table>"></td>
									<td><img src="{$dpath}images/kristall.png" alt="" class="tooltip" data-tooltip-content="<table><tr><th width=100><center><font color=#6F9FC8>{$LNG.tech.902}</font></center></th></tr><tr><td><font color=#00FF00>{$crystal_max}</font></td></tr></table>"></td>
									<td><img src="{$dpath}images/deuterium.png" alt="" class="tooltip" data-tooltip-content="<table><tr><th width=100><center><font color=#00FF00>{$LNG.tech.903}</font></center></th></tr><tr><td><font color=#00FF00>{$deuterium_max}</font></td></tr></table>"></td>
									<td><img src="{$dpath}images/energie.png" alt="" class="tooltip" data-tooltip-content="<table width=200><tr><th><center><font color=#FF0000>{$LNG.tech.911}</font></center></th></tr></table>"></td>
									<td><img src="{$dpath}images/darkmatter.jpg" alt="" class="tooltip" data-tooltip-content="<table width=200><tr><th><center><font color=#FFF>{$LNG.tech.921}</font></center></th></tr></table>"></td>
									<td><a href="game.php?page=messages"><img src="{$dpath}images/message_off.png" alt=""></a></td>
								</tr>
								{if $shortlyNumber}
								<tr>
									<td class="res_current tooltip" name="{$metal|number}" id="current_metal">{shortly_number($metal)}</td>
									<td class="res_current tooltip" name="{$crystal|number}" id="current_crystal">{shortly_number($crystal)}</td>
									<td class="res_current tooltip" name="{$deuterium|number}" id="current_deuterium">{shortly_number($deuterium)}</td>
									<td class="res_current tooltip" name="{($energy + $energy_used)|number}&nbsp;/&nbsp;{$energy|number}"><span{if $energy + $energy_used < 0} style="color:red"{/if}>{shortly_number($energy + $energy_used)}&nbsp;/&nbsp;{shortly_number($energy)}</span></td>
									<td class="res_current tooltip" name="{$darkmatter|number}" id="current_darkmatter">{shortly_number($darkmatter)} </td>
									<td class="res_current">&nbsp;</td>
								</tr>
								<tr>
									<td class="res_max tooltip" name="{$metal_max|number}" id="max_metal">{shortly_number($metal_max)}</td>
									<td class="res_max tooltip" name="{$crystal_max|number}" id="max_crystal">{shortly_number($crystal_max)}</td>
									<td class="res_max tooltip" name="{$deuterium_max|number}" id="max_deuterium">{shortly_number($deuterium_max)}</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								{else}
								<tr>
									<td class="res_current" id="current_metal">{$metal|number}</td>
									<td class="res_current" id="current_crystal">{$crystal|number}</td>
									<td class="res_current" id="current_deuterium">{$deuterium|number}</td>
									<td class="res_current"><span{if $energy + $energy_used < 0} style="color:red"{/if}>{($energy + $energy_used)|number}</span></td>
									<td class="res_current" id="current_darkmatter">{$darkmatter|number} </td>
									<td class="res_current">{nocache}{$new_message}{/nocache}</td>
								</tr>
								<tr>
									<td class="res_max" id="max_metal">{$metal_max|number}</td>
									<td class="res_max" id="max_crystal">{$crystal_max|number}</td>
									<td class="res_max" id="max_deuterium">{$deuterium_max|number}</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								{/if}
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<table id="topnav" width="880" height="40" cellspacing="0" cellpadding="0">    
			<tr>
				<td><a href="game.php?page=overview">{$LNG.lm_overview}</a></td>
				{if isModulAvalible($smarty.const.MODULE_BUILDING)}<td><a href="game.php?page=buildings">{$LNG.lm_buildings}</a></td>{/if}
				{if isModulAvalible($smarty.const.MODULE_RESSOURCE_LIST)}<td><a href="game.php?page=resources">{$LNG.lm_resources}</a></td>{/if}
				{if isModulAvalible($smarty.const.MODULE_RESEARCH)}<td><a href="game.php?page=research">{$LNG.lm_research}</a></td>{/if}
				{if isModulAvalible($smarty.const.MODULE_SHIPYARD_FLEET)}<td><a href="game.php?page=shipyard&amp;mode=fleet">{$LNG.lm_shipshard}</a></td>{/if}
				{if isModulAvalible($smarty.const.MODULE_SHIPYARD_DEFENSIVE)}<td><a href="game.php?page=shipyard&amp;mode=defense">{$LNG.lm_defenses}</a></td>{/if}
				{if isModulAvalible($smarty.const.MODULE_TRADER)}<td><a href="game.php?page=fleetTable">{$LNG.lm_fleet}</a></td>{/if}
				{if isModulAvalible($smarty.const.MODULE_TECHTREE)}<td><a href="game.php?page=techtree">{$LNG.lm_technology}</a></td>{/if}
				{if isModulAvalible($smarty.const.MODULE_GALAXY)}<td><a href="game.php?page=galaxy">{$LNG.lm_galaxy}</a></td>{/if}
				{if isModulAvalible($smarty.const.MODULE_ALLIANCE)}<td><a href="game.php?page=alliance">{$LNG.lm_alliance}</a></td>{/if}
				{if isModulAvalible($smarty.const.MODULE_MESSAGES)}<td><a href="game.php?page=messages">{$LNG.lm_messages}{nocache}{if $new_message > 0}<span id="newmes"> (<span id="newmesnum">{$new_message}</span>)</span>{/if}{/nocache}</a></td>{/if}
			</tr>
		</table>
		<script type="text/javascript">
		var resourceTickerMetal = {
			available: {$metal},
			limit: [0, {$js_metal_max}],
			production: {$js_metal_hr},
			valueElem: "current_metal"
		};
		var resourceTickerCrystal = {
			available: {$crystal},
			limit: [0, {$js_crystal_max}],
			production: {$js_crystal_hr},
			valueElem: "current_crystal"
		};
		var resourceTickerDeuterium = {
			available: {$deuterium},
			limit: [0, {$js_deuterium_max}],
			production: {$js_deuterium_hr},
			valueElem: "current_deuterium"
		};
		
		var shortlyNumber	= {$shortlyNumber|json}
		var vacation = {$vmode};
		if (!vacation) {
			resourceTicker(resourceTickerMetal, true);
			resourceTicker(resourceTickerCrystal, true);
			resourceTicker(resourceTickerDeuterium, true);
		}
		</script>
	</div>
	{if $closed}
	<div class="infobox">{$closed}</div>
	{elseif $delete}
	<div class="infobox">{$delete}</div>
	{elseif $vacation}
	<div class="infobox">{$LNG.tn_vacation_mode} {$vacation}</div>
	{/if}