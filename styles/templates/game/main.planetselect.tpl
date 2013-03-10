<div class="planet-wrapper">
	<table>
		<tr>
			<th>{$LNG.fl_my_planets}</th>
		</tr>
		{foreach name=Planets item=Planet from=$PlanetSelect}
		<tr>
			{if $Planet.id == $current_pid}<th class="active img">{else}<th class="img">{/if}
				<center><a href="game.php?page=overview&amp;cp={$Planet.id}&amp;re=0"><img src="{$dpath}planeten/small/s_{$Planet.image}.jpg" height="60" width="60"></a></center>			
			</th>
		</tr>
		<tr>
			{if $Planet.id == $current_pid}<td class="active">{else}<td>{/if}
				{$Planet.name}{if $Planet.planet_type == 3}(Moon){/if}<br />
				[{$Planet.galaxy}:{$Planet.system}:{$Planet.planet}]
			</td>
		</tr>
		{/foreach}
	</table>
</div>