<table width="640">
	<tr><th colspan="4"><a href="game.php?page=galaxy&amp;galaxy={$targetPlanet.galaxy}&amp;system={$targetPlanet.system}">{$title}</a></th></tr>
	{foreach $classIDs as $Class => $elementIDs}
		<tr><th colspan="4">{$LNG.tech.$Class}</th></tr>
		{foreach $elementIDs as $elementID}
			{if ($elementID@iteration % 2) === 1}<tr>{/if}
				<td>{$LNG.tech.$elementID}</td>
				<td>{if $Class == 100}{$targetUser[$resource[$elementID]]|number}{else}{$targetPlanet[$resource[$elementID]]|number}{/if}</td>
			{if ($elementID@iteration % 2) === 0}</tr>{/if}
		{/foreach}
	{/foreach}
	<tr>
		<th colspan="4">
			<a href="game.php?page=fleetTable&amp;galaxy={$targetPlanet.galaxy}&amp;system={$targetPlanet.system}&amp;planet={$targetPlanet.planet}&amp;planettype={$targetPlanet.planet_type}&amp;target_mission=1">{$LNG.type_mission.1}</a>
			<br>{if $targetChance >= $spyChance}{$LNG.sys_mess_spy_destroyed}{else}{sprintf($LNG.sys_mess_spy_lostproba, $targetChance)}{/if}
			{if $isBattleSim}<br><a href="game.php?page=battleSimulator{foreach $classIDs as $Class => $elementIDs}{foreach $elementIDs as $elementID}&amp;im[{$elementID}]={if $Class == 100}{round($targetUser[$resource[$elementID]])}{else}{round($targetPlanet[$resource[$elementID]])}{/if}{/foreach}{/foreach}">{$LNG.fl_simulate}</a>{/if}
		</th>
	</tr>
</table>