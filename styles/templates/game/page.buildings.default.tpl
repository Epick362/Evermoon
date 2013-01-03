{block name="title" prepend}{$LNG.lm_buildings}{/block}
{block name="content"}
{if !empty($Queue)}
<div id="buildlist" class="buildlist">
	<table style="width:760px">
		{foreach $Queue as $List}
		{$ID = $List.element}
		<tr>
			<td style="width:70%;vertical-align:top;" class="left">
				{$List@iteration}.: 
				{if !($isBusy.research && ($ID == 6 || $ID == 31)) && !($isBusy.shipyard && ($ID == 15 || $ID == 21)) && $RoomIsOk && $CanBuildElement && $BuildInfoList[$ID].buyable}
				<form class="build_form" action="game.php?page=buildings" method="post">
					<input type="hidden" name="cmd" value="insert">
					<input type="hidden" name="building" value="{$ID}">
					<button type="submit" class="build_submit onlist">{$LNG.tech.{$ID}} {$List.level}{if $List.destroy} {$LNG.bd_dismantle}{/if}</button>
				</form>
				{else}{$LNG.tech.{$ID}} {$List.level} {if $List.destroy}{$LNG.bd_dismantle}{/if}{/if}
				{if $List@first}
				<br><br><div id="progressbar" data-time="{$List.resttime}"></div>
			</td>
			<td>
				<div id="time" data-time="{$List.time}"><br></div>
				<form action="game.php?page=buildings" method="post" class="build_form">
					<input type="hidden" name="cmd" value="cancel">
					<button type="submit" class="build_submit onlist">{$LNG.bd_cancel}</button>
				</form>
				{else}
			</td>
			<td>
				<form action="game.php?page=buildings" method="post" class="build_form">
					<input type="hidden" name="cmd" value="remove">
					<input type="hidden" name="listid" value="{$List@iteration}">
					<button type="submit" class="build_submit onlist">{$LNG.bd_cancel}</button>
				</form>
				{/if}
				<br><span style="color:lime" data-time="{$List.endtime}" class="timer">{$List.display}</span>
			</td>
		</tr>
	{/foreach}
	</table>
</div>
{/if}
<table style="width:760px">
	{foreach $BuildInfoList as $ID => $Element}
	<tr>
		<th colspan="2">
			<a href="#" onclick="return Dialog.info({$ID})">{$LNG.tech.{$ID}}</a>{if $Element.level > 0} ({$LNG.bd_lvl} {$Element.level}{if $Element.maxLevel != 255}/{$Element.maxLevel}{/if}){/if}
		</th>
	</tr>
	<tr>
		<td style="width:120px;">
			<a href="#" onclick="return Dialog.info({$ID})">
				<img src="{$dpath}gebaeude/{$ID}.gif" alt="{$LNG.tech.{$ID}}" width="120" height="120">
			</a>
		</td>
		<td>
			<table style="width:100%">
				<tr>
					<td class="transparent left" style="width:90%;padding:10px;">
						<p>{$LNG.shortDescription.{$ID}}</p>
						<p>
							{foreach $Element.costRessources as $RessID => $RessAmount}
								{$LNG.tech.{$RessID}}: <b><span style="color:{if $Element.costOverflow[$RessID] == 0}lime{else}red{/if}">{$RessAmount|number}</span></b>
							{/foreach}
						</p>
						<p>
							{$LNG.fgf_time}: {$Element.elementTime|time}
						</p>
						<p>
							{if $Element.level > 0}{if $ID == 43}<a href="#" onclick="return Dialog.info({$ID})">{$LNG.bd_jump_gate_action}</a>{/if}{/if}
						</p>
					</td>
					<td class="transparent" style="vertical-align:middle;width:100px">
					{if $Element.maxLevel == $Element.level}
						<span style="color:red">{$LNG.bd_maxlevel}</span>
					{elseif ($isBusy.research && ($ID == 6 || $ID == 31)) || ($isBusy.shipyard && ($ID == 15 || $ID == 21))}
						<span style="color:red">{$LNG.bd_working}</span>
					{else}
						{if $RoomIsOk}
							{if $CanBuildElement && $Element.buyable}
							<form action="game.php?page=buildings" method="post" class="build_form">
								<input type="hidden" name="cmd" value="insert">
								<input type="hidden" name="building" value="{$ID}">
								<input type="submit" class="build_submit" value="{if $Element.level == 0}{$LNG.bd_build}{else}{$LNG.bd_build_next_level}{/if}">
							</form>
							{else}
							<input type="submit" value="{if $Element.level == 0}{$LNG.bd_build}{else}{$LNG.bd_build_next_level}{/if}" disabled>
							{/if}
						{else}
						<input type="submit" value="{$LNG.bd_no_more_fields}" disabled>
						{/if}
					{/if}
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr><td class="transparent" colspan="2">&nbsp;</td></tr>
	{/foreach}
</table>
{/block}