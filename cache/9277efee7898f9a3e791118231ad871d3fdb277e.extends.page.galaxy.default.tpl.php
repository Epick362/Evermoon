<?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 11:34:44
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\page.galaxy.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1864250e40d44804ac8-08169811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9277efee7898f9a3e791118231ad871d3fdb277e' => 
    array (
      0 => 'C:/xampp/htdocs/2Moons/styles/templates\\game\\page.galaxy.default.tpl',
      1 => 1347100368,
      2 => 'file',
    ),
    'a95353f814e16cd88eadac2a8e2282f52d1f50ef' => 
    array (
      0 => 'C:/xampp/htdocs/2Moons/styles/templates\\game\\layout.full.tpl',
      1 => 1347100368,
      2 => 'file',
    ),
    '35a40e75a4f1feeebf61c6008cd2572999d331a4' => 
    array (
      0 => 'C:/xampp/htdocs/2Moons/styles/templates\\game\\main.header.tpl',
      1 => 1347912045,
      2 => 'file',
    ),
    'fb7a5a99c1dbb01b3edcd7533a0768640c4905a8' => 
    array (
      0 => 'C:/xampp/htdocs/2Moons/styles/templates\\game\\main.navigation.tpl',
      1 => 1347703512,
      2 => 'file',
    ),
    '8bde614dc7e4b6535066482923d8af66b6ccf0ca' => 
    array (
      0 => 'C:/xampp/htdocs/2Moons/styles/templates\\game\\main.topnav.tpl',
      1 => 1347639569,
      2 => 'file',
    ),
    'c5a3d09f6e00e0102b18e4d83501b156202bafb4' => 
    array (
      0 => 'C:/xampp/htdocs/2Moons/styles/templates\\game\\main.footer.tpl',
      1 => 1347100368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1864250e40d44804ac8-08169811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasAdminAccess' => 1,
    'LNG' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e40d454706c2_70831965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e40d454706c2_70831965')) {function content_50e40d454706c2_70831965($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\2Moons\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bodyclass'=>"full"), 0, '1864250e40d44804ac8-08169811');
content_50e40d448c4269_20811764($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<?php if ($_smarty_tpl->tpl_vars['hasAdminAccess']->value){?>
<div class="globalWarning">
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_1'];?>
 <a id="drop-admin"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_link'];?>
</a><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_2'];?>

</div>
<?php }?>
<?php /*  Call merged included template "main.navigation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1864250e40d44804ac8-08169811');
content_50e40d44a493d9_46808011($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>
<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1864250e40d44804ac8-08169811');
content_50e40d44a529e3_72075778($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content">
	<form action="?page=galaxy" method="post" id="galaxy_form">
	<input type="hidden" id="auto" value="dr">
	<table style="min-width:324px;width:324px;">
		<tr>
			<td class="transparent">
				<table>
					<tr>
						<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_galaxy'];?>
</th>
					</tr>
					<tr>
						<td><input type="button" name="galaxyLeft" value="&lt;-" onclick="galaxy_submit('galaxyLeft')"></td>
						<td><input type="text" name="galaxy" value="<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
" size="5" maxlength="3" tabindex="1"></td>
						<td><input type="button" name="galaxyRight" value="-&gt;" onclick="galaxy_submit('galaxyRight')"></td>
					</tr>
				</table>
			</td>
			<td class="transparent">
				<table>
					<tr>
						<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_solar_system'];?>
</th>
					</tr>
					<tr>
						<td><input type="button" name="systemLeft" value="&lt;-" onclick="galaxy_submit('systemLeft')"></td>
						<td><input type="text" name="system" value="<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
" size="5" maxlength="3" tabindex="2"></td>
						<td><input type="button" name="systemRight" value="-&gt;" onclick="galaxy_submit('systemRight')"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="background-color:transparent;border:0px;" colspan="2"> 
				<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_show'];?>
">
			</td>
		</tr>
	</table>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['action']->value=='sendMissle'){?>
    <form action="?page=fleetMissile" method="post">
	<input type="hidden" name="galaxy" value="<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
">
	<input type="hidden" name="system" value="<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
">
	<input type="hidden" name="planet" value="<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
">
	<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
	<table class="table569">
		<tr>
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_missil_launch'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['missile_count']->value;?>
 <input type="text" name="SendMI" size="2" maxlength="7"></td>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_objective'];?>
: 
				<?php echo smarty_function_html_options(array('name'=>'Target','options'=>$_smarty_tpl->tpl_vars['MissleSelector']->value),$_smarty_tpl);?>

			</td>
		</tr>
		<tr>
			<th colspan="2" style="text-align:center;"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_missil_launch_action'];?>
"></th>
		</tr>
	</table>
	</form>
    <?php }?>
	<table class="table569">
    <tr>
		<th colspan="8"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_solar_system'];?>
 <?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
</th>
	</tr>
	<tr>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_pos'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_planet'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_name_activity'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_moon'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_debris'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_player_estate'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_alliance'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_actions'];?>
</th>
	</tr>
    <?php $_smarty_tpl->tpl_vars['planet'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['planet']->step = 1;$_smarty_tpl->tpl_vars['planet']->total = (int)ceil(($_smarty_tpl->tpl_vars['planet']->step > 0 ? $_smarty_tpl->tpl_vars['max_planets']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['max_planets']->value)+1)/abs($_smarty_tpl->tpl_vars['planet']->step));
if ($_smarty_tpl->tpl_vars['planet']->total > 0){
for ($_smarty_tpl->tpl_vars['planet']->value = 1, $_smarty_tpl->tpl_vars['planet']->iteration = 1;$_smarty_tpl->tpl_vars['planet']->iteration <= $_smarty_tpl->tpl_vars['planet']->total;$_smarty_tpl->tpl_vars['planet']->value += $_smarty_tpl->tpl_vars['planet']->step, $_smarty_tpl->tpl_vars['planet']->iteration++){
$_smarty_tpl->tpl_vars['planet']->first = $_smarty_tpl->tpl_vars['planet']->iteration == 1;$_smarty_tpl->tpl_vars['planet']->last = $_smarty_tpl->tpl_vars['planet']->iteration == $_smarty_tpl->tpl_vars['planet']->total;?>
	<tr>
    <?php if (!isset($_smarty_tpl->tpl_vars['GalaxyRows']->value[$_smarty_tpl->tpl_vars['planet']->value])){?>
		<td>
			<a href="?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=7"><?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
</a>
		</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    <?php }elseif($_smarty_tpl->tpl_vars['GalaxyRows']->value[$_smarty_tpl->tpl_vars['planet']->value]===false){?>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>

		</td>
        <td></td>
        <td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_planet_destroyed'];?>
</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    <?php }else{ ?>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>

		</td>
        <?php $_smarty_tpl->tpl_vars['currentPlanet'] = new Smarty_variable($_smarty_tpl->tpl_vars['GalaxyRows']->value[$_smarty_tpl->tpl_vars['planet']->value], true, 0);?>
		<td>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:220px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_planet'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['image'];?>
.jpg' height='75' width='75'></td><td><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][6]){?><a href='javascript:doit(6,<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][6];?>
</a><br><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['phalanx']){?><a href='javascript:OpenPopup(&quot;?page=phalanx&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&quot;, &quot;&quot;, 640, 510);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_phalanx'];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][1]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=1'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][1];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][5]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=5'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][5];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][4]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=4'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][4];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][3]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=3'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][3];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][10]){?><a href='?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][10];?>
</a><br><?php }?></td></tr></table>">
				<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['image'];?>
.jpg" height="30" width="30" alt="">
			</a>
		</td>
		<td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['lastActivity'];?>
</td>
		<td style="white-space: nowrap;">
			<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['moon']){?>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_moon'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/mond.jpg' height='75' width='75'></td><td><table style='width:100%'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_features'];?>
</th></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_diameter'];?>
</td><td><?php echo pretty_number($_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['diameter']);?>
</td></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_temperature'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['temp_min'];?>
</td></tr><tr><th colspan=2><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_actions'];?>
</th></tr><tr><td colspan='2'><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][1]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=1'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][1];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][3]){?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=3'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][3];?>
</a><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][3]){?><br><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=4'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][4];?>
</a><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][5]){?><br><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=5'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][5];?>
</a><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][6]){?><br><a href='javascript:doit(6,<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][6];?>
</a><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][9]){?><br><br><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=9'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][9];?>
</a><br><?php }?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][10]){?><a href='?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;type=3'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][10];?>
</a><br><?php }?></td></tr></table></td></tr></table>">
				<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_mond.jpg" height="22" width="22" alt="<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['name'];?>
">
			</a>
			<?php }?>
		</td>
		<td style="white-space: nowrap;">
        <?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['debris']){?>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_debris_field'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/debris.jpg' height='75' style='width:75'></td><td><table style='width:100%'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_resources'];?>
:</th></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][901];?>
: </td><td><?php echo pretty_number($_smarty_tpl->tpl_vars['currentPlanet']->value['debris']['metal']);?>
</td></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][902];?>
: </td><td><?php echo pretty_number($_smarty_tpl->tpl_vars['currentPlanet']->value['debris']['crystal']);?>
</td></tr><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][8]){?><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_actions'];?>
</th></tr><tr><td colspan='2'><a href='javascript:doit(8, <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][8];?>
</a></td></tr><?php }?></table></td></tr></table>">
			<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/debris.jpg" height="22" width="22" alt="">
			</a>
        <?php }?>
		</td>
		<td>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['playerrank'];?>
</th></tr><tr><?php if (!$_smarty_tpl->tpl_vars['currentPlanet']->value['ownPlanet']){?><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['user']['isBuddy']){?><tr><td><a href='#' onclick='return Dialog.Buddy(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
)'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_buddy_request'];?>
</a></td></tr><?php }?><tr><td><a href='#' onclick='return Dialog.Playercard(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_playercard'];?>
</a></td></tr><?php }?><tr><td><a href='?page=statistics&amp;who=1&amp;start=<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['rank'];?>
'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_see_on_stats'];?>
</a></td></tr></table>">
				<span class="<?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['class']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value){
$_smarty_tpl->tpl_vars['class']->_loop = true;
 $_smarty_tpl->tpl_vars['class']->index++;
 $_smarty_tpl->tpl_vars['class']->first = $_smarty_tpl->tpl_vars['class']->index === 0;
?><?php if (!$_smarty_tpl->tpl_vars['class']->first){?> <?php }?>galaxy-username-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php } ?> galaxy-username"><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['username'];?>
</span>
				<?php if (!empty($_smarty_tpl->tpl_vars['currentPlanet']->value['user']['class'])){?>
				<span>(</span><?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['class']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value){
$_smarty_tpl->tpl_vars['class']->_loop = true;
 $_smarty_tpl->tpl_vars['class']->index++;
 $_smarty_tpl->tpl_vars['class']->first = $_smarty_tpl->tpl_vars['class']->index === 0;
?><?php if (!$_smarty_tpl->tpl_vars['class']->first){?>&nbsp;<?php }?><span class="galaxy-short-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 galaxy-short"><?php echo $_smarty_tpl->tpl_vars['ShortStatus']->value[$_smarty_tpl->tpl_vars['class']->value];?>
</span><?php } ?><span>)</span>
				<?php }?>
			</a>
		</td>
		<td style="white-space: nowrap;">
			<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']){?>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_alliance'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['member'];?>
</th></tr><td><table><tr><td><a href='?page=alliance&amp;mode=info&amp;id=<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_alliance_page'];?>
</a></td></tr><tr><td><a href='?page=statistics&amp;start=<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['rank'];?>
&amp;who=2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_see_on_stats'];?>
</a></td></tr><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['web']){?><tr><td><a href='<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['web'];?>
' target='allyweb'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_alliance_web_page'];?>
</td></tr><?php }?></table></td></table>">
				<span class="galaxy-alliance<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['inally']){?> galaxy-alliance-member<?php }?>"><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['tag'];?>
</span>
			</a>
			<?php }else{ ?>-<?php }?>
		</td>
		<td style="white-space: nowrap;">
			<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']){?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['esp']){?>
				<a href="javascript:doit(6,<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['id'];?>
,<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['spyShips']->value), ENT_QUOTES, 'UTF-8', true);?>
)">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/e.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_spy'];?>
" alt="">
				</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['message']){?>
				<a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
)">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/m.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['write_message'];?>
" alt="">
				</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['buddy']){?>
                <a href="#" onclick="return Dialog.Buddy(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
)">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/b.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_buddy_request'];?>
" alt="">
				</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['missle']){?><a href="?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;type=1">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/r.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_missile_attack'];?>
" alt="">
				</a><?php }?>
			<?php }else{ ?>-<?php }?>
		</td>
	<?php }?>
	</tr>
	<?php }} ?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['max_planets']->value+1;?>
</td>
		<td colspan="7"><a href="?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['max_planets']->value+1;?>
&amp;planettype=1&amp;target_mission=15"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_out_space'];?>
</a></td>
	</tr>
	<tr>
		<td colspan="6">(<?php echo $_smarty_tpl->tpl_vars['planetcount']->value;?>
)</td>
		<td colspan="2">
			<a class="tooltip" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_legend'];?>
</td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_strong_player'];?>
</td><td><span class='galaxy-short-strong'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_strong'];?>
</span></td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_week_player'];?>
</td><td><span class='galaxy-short-noob'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_newbie'];?>
</span></td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_vacation'];?>
</td><td><span class='galaxy-short-vacation'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_vacation'];?>
</span></td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_banned'];?>
</td><td><span class='galaxy-short-banned'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_ban'];?>
</span></td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_inactive_seven'];?>
</td><td><span class='galaxy-short-inactive'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_inactive'];?>
</span></td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_inactive_twentyeight'];?>
</td><td><span class='galaxy-short-longinactive'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_long_inactive'];?>
</span></td></tr></table>"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_legend'];?>
</a> 
		</td>
	</tr>
	<tr>
		<td colspan="3"><span id="missiles"><?php echo pretty_number($_smarty_tpl->tpl_vars['currentmip']->value);?>
</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_avaible_missiles'];?>
</td>
		<td colspan="5"><span id="slots"><?php echo $_smarty_tpl->tpl_vars['maxfleetcount']->value;?>
</span>/<?php echo $_smarty_tpl->tpl_vars['fleetmax']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_fleets'];?>
</td>
	</tr>
	<tr>
		<td colspan="3">
			<span id="elementID210"><?php echo pretty_number($_smarty_tpl->tpl_vars['spyprobes']->value);?>
</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_avaible_spyprobes'];?>

		</td>
		<td colspan="3">
			<span id="elementID209"><?php echo pretty_number($_smarty_tpl->tpl_vars['recyclers']->value);?>
</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_avaible_recyclers'];?>

		</td>
		<td colspan="2">
			<span id="elementID219"><?php echo pretty_number($_smarty_tpl->tpl_vars['grecyclers']->value);?>
</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_avaible_grecyclers'];?>

		</td>
	</tr>
	<tr style="display: none;" id="fleetstatusrow">
		<th colspan="8"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['cff_fleet_target'];?>

	</tr>
	</table>
	<script type="text/javascript">
		status_ok		= '<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_ajax_status_ok'];?>
';
		status_fail		= '<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_ajax_status_fail'];?>
';
		MaxFleetSetting = <?php echo $_smarty_tpl->tpl_vars['settings_fleetactions']->value;?>
;
	</script>
</div>
</div>
<?php /*  Call merged included template "main.footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1864250e40d44804ac8-08169811');
content_50e40d4544faa6_05376428($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 11:34:44
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e40d448c4269_20811764')) {function content_50e40d448c4269_20811764($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['game_name']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_galaxy'];?>
 | <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
 </title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2012 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<?php if (!empty($_smarty_tpl->tpl_vars['goto']->value)){?>
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['gotoinsec']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['goto']->value;?>
">
	<?php }?>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/css/boilerplate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/ingame.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/css/validationEngine.jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
formate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo $_smarty_tpl->tpl_vars['Offset']->value;?>
;
	var serverTime 	= new Date(<?php echo $_smarty_tpl->tpl_vars['date']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[1]-1;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[2];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[3];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[4];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[5];?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo (($tmp = @$_smarty_tpl->tpl_vars['authlevel']->value)===null||$tmp==='' ? '0' : $tmp);?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo strtr($_smarty_tpl->tpl_vars['queryString']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
$_smarty_tpl->tpl_vars['scriptname']->_loop = true;
?>
	<script type="text/javascript" src="./scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php } ?>
	
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 11:34:44
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e40d44a493d9_46808011')) {function content_50e40d44a493d9_46808011($_smarty_tpl) {?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 11:34:44
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e40d44a529e3_72075778')) {function content_50e40d44a529e3_72075778($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\2Moons\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
?><div id="page">
	<div id="header">
		<table id="header-nav">
			<tr>
				<td>
					<ul id="nav">
						<?php if (isModulAvalible(@MODULE_IMPERIUM)){?><li><a href="game.php?page=imperium"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_empire'];?>
</a></li><?php }?>
						<?php if (isModulAvalible(@MODULE_SIMULATOR)){?><li><a href="game.php?page=battleSimulator"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_battlesim'];?>
</a></li><?php }?>
						<?php if (isModulAvalible(@MODULE_CHAT)){?><li><a href="game.php?page=chat"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_chat'];?>
</a></li><?php }?>
						<?php if (isModulAvalible(@MODULE_STATISTICS)){?><li><a href="game.php?page=statistics"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_statistics'];?>
(<?php echo $_smarty_tpl->tpl_vars['rankInfo']->value;?>
)</a></li><?php }?>
						<?php if (isModulAvalible(@MODULE_RECORDS)){?><li><a href="game.php?page=records"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_records'];?>
</a></li><?php }?>
						<?php if (isModulAvalible(@MODULE_BATTLEHALL)){?><li><a href="game.php?page=battleHall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_topkb'];?>
</a></li><?php }?>
						<?php if (isModulAvalible(@MODULE_SEARCH)){?><li><a href="game.php?page=search"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_search'];?>
</a></li><?php }?>
						<?php if (isModulAvalible(@MODULE_SUPPORT)){?><li><a href="game.php?page=ticket"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_support'];?>
</a></li><?php }?>
						<li><a href="game.php?page=settings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_options'];?>
</a></li>
						<li><a href="game.php?page=logout"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_logout'];?>
</a></li>
						<li><a href="game.php?page=changelog">Evermoon v2.0</a></li>
					</ul>
				</td>
			</tr>
		</table>
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="planetImage">
						<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.jpg" alt=""> 
					</td>
					<td id="planetSelectorWrapper">
						<select id="planetSelector">
							<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['PlanetSelect']->value,'selected'=>$_smarty_tpl->tpl_vars['current_pid']->value),$_smarty_tpl);?>

						</select>
					</td>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
images/metall.png" alt="" class="tooltip" data-tooltip-content="<table><tr><th width=100><center><font color=#C7C7C7><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][901];?>
</font></center></th></tr><tr><td><font color=#00FF00><?php echo $_smarty_tpl->tpl_vars['metal_max']->value;?>
</font></td></tr></table>"></td>
									<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
images/kristall.png" alt="" class="tooltip" data-tooltip-content="<table><tr><th width=100><center><font color=#6F9FC8><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][902];?>
</font></center></th></tr><tr><td><font color=#00FF00><?php echo $_smarty_tpl->tpl_vars['crystal_max']->value;?>
</font></td></tr></table>"></td>
									<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
images/deuterium.png" alt="" class="tooltip" data-tooltip-content="<table><tr><th width=100><center><font color=#00FF00><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][903];?>
</font></center></th></tr><tr><td><font color=#00FF00><?php echo $_smarty_tpl->tpl_vars['deuterium_max']->value;?>
</font></td></tr></table>"></td>
									<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
images/energie.png" alt="" class="tooltip" data-tooltip-content="<table width=200><tr><th><center><font color=#FF0000><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][911];?>
</font></center></th></tr></table>"></td>
									<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
images/darkmatter.jpg" alt="" class="tooltip" data-tooltip-content="<table width=200><tr><th><center><font color=#FFF><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][921];?>
</font></center></th></tr></table>"></td>
									<td><a href="game.php?page=messages"><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
images/message_off.png" alt=""></a></td>
								</tr>
								<?php if ($_smarty_tpl->tpl_vars['shortlyNumber']->value){?>
								<tr>
									<td class="res_current tooltip" name="<?php echo pretty_number($_smarty_tpl->tpl_vars['metal']->value);?>
" id="current_metal"><?php echo shortly_number($_smarty_tpl->tpl_vars['metal']->value);?>
</td>
									<td class="res_current tooltip" name="<?php echo pretty_number($_smarty_tpl->tpl_vars['crystal']->value);?>
" id="current_crystal"><?php echo shortly_number($_smarty_tpl->tpl_vars['crystal']->value);?>
</td>
									<td class="res_current tooltip" name="<?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium']->value);?>
" id="current_deuterium"><?php echo shortly_number($_smarty_tpl->tpl_vars['deuterium']->value);?>
</td>
									<td class="res_current tooltip" name="<?php echo pretty_number(($_smarty_tpl->tpl_vars['energy']->value+$_smarty_tpl->tpl_vars['energy_used']->value));?>
&nbsp;/&nbsp;<?php echo pretty_number($_smarty_tpl->tpl_vars['energy']->value);?>
"><span<?php if ($_smarty_tpl->tpl_vars['energy']->value+$_smarty_tpl->tpl_vars['energy_used']->value<0){?> style="color:red"<?php }?>><?php echo shortly_number($_smarty_tpl->tpl_vars['energy']->value+$_smarty_tpl->tpl_vars['energy_used']->value);?>
&nbsp;/&nbsp;<?php echo shortly_number($_smarty_tpl->tpl_vars['energy']->value);?>
</span></td>
									<td class="res_current tooltip" name="<?php echo pretty_number($_smarty_tpl->tpl_vars['darkmatter']->value);?>
" id="current_darkmatter"><?php echo shortly_number($_smarty_tpl->tpl_vars['darkmatter']->value);?>
 </td>
									<td class="res_current">&nbsp;</td>
								</tr>
								<tr>
									<td class="res_max tooltip" name="<?php echo pretty_number($_smarty_tpl->tpl_vars['metal_max']->value);?>
" id="max_metal"><?php echo shortly_number($_smarty_tpl->tpl_vars['metal_max']->value);?>
</td>
									<td class="res_max tooltip" name="<?php echo pretty_number($_smarty_tpl->tpl_vars['crystal_max']->value);?>
" id="max_crystal"><?php echo shortly_number($_smarty_tpl->tpl_vars['crystal_max']->value);?>
</td>
									<td class="res_max tooltip" name="<?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium_max']->value);?>
" id="max_deuterium"><?php echo shortly_number($_smarty_tpl->tpl_vars['deuterium_max']->value);?>
</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<?php }else{ ?>
								<tr>
									<td class="res_current" id="current_metal"><?php echo pretty_number($_smarty_tpl->tpl_vars['metal']->value);?>
</td>
									<td class="res_current" id="current_crystal"><?php echo pretty_number($_smarty_tpl->tpl_vars['crystal']->value);?>
</td>
									<td class="res_current" id="current_deuterium"><?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium']->value);?>
</td>
									<td class="res_current"><span<?php if ($_smarty_tpl->tpl_vars['energy']->value+$_smarty_tpl->tpl_vars['energy_used']->value<0){?> style="color:red"<?php }?>><?php echo pretty_number(($_smarty_tpl->tpl_vars['energy']->value+$_smarty_tpl->tpl_vars['energy_used']->value));?>
</span></td>
									<td class="res_current" id="current_darkmatter"><?php echo pretty_number($_smarty_tpl->tpl_vars['darkmatter']->value);?>
 </td>
									<td class="res_current"><?php echo $_smarty_tpl->tpl_vars['new_message']->value;?>
</td>
								</tr>
								<tr>
									<td class="res_max" id="max_metal"><?php echo pretty_number($_smarty_tpl->tpl_vars['metal_max']->value);?>
</td>
									<td class="res_max" id="max_crystal"><?php echo pretty_number($_smarty_tpl->tpl_vars['crystal_max']->value);?>
</td>
									<td class="res_max" id="max_deuterium"><?php echo pretty_number($_smarty_tpl->tpl_vars['deuterium_max']->value);?>
</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<?php }?>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<table id="topnav" width="880" height="40" cellspacing="0" cellpadding="0">    
			<tr>
				<td><a href="game.php?page=overview"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_overview'];?>
</a></td>
				<?php if (isModulAvalible(@MODULE_BUILDING)){?><td><a href="game.php?page=buildings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buildings'];?>
</a></td><?php }?>
				<?php if (isModulAvalible(@MODULE_RESSOURCE_LIST)){?><td><a href="game.php?page=resources"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_resources'];?>
</a></td><?php }?>
				<?php if (isModulAvalible(@MODULE_RESEARCH)){?><td><a href="game.php?page=research"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_research'];?>
</a></td><?php }?>
				<?php if (isModulAvalible(@MODULE_SHIPYARD_FLEET)){?><td><a href="game.php?page=shipyard&amp;mode=fleet"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_shipshard'];?>
</a></td><?php }?>
				<?php if (isModulAvalible(@MODULE_SHIPYARD_DEFENSIVE)){?><td><a href="game.php?page=shipyard&amp;mode=defense"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_defenses'];?>
</a></td><?php }?>
				<?php if (isModulAvalible(@MODULE_TRADER)){?><td><a href="game.php?page=fleetTable"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleet'];?>
</a></td><?php }?>
				<?php if (isModulAvalible(@MODULE_TECHTREE)){?><td><a href="game.php?page=techtree"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_technology'];?>
</a></td><?php }?>
				<?php if (isModulAvalible(@MODULE_GALAXY)){?><td><a href="game.php?page=galaxy"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_galaxy'];?>
</a></td><?php }?>
				<?php if (isModulAvalible(@MODULE_ALLIANCE)){?><td><a href="game.php?page=alliance"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_alliance'];?>
</a></td><?php }?>
				<?php if (isModulAvalible(@MODULE_MESSAGES)){?><td><a href="game.php?page=messages"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_messages'];?>
<?php if ($_smarty_tpl->tpl_vars['new_message']->value>0){?><span id="newmes"> (<span id="newmesnum"><?php echo $_smarty_tpl->tpl_vars['new_message']->value;?>
</span>)</span><?php }?></a></td><?php }?>
			</tr>
		</table>
		<script type="text/javascript">
		var resourceTickerMetal = {
			available: <?php echo $_smarty_tpl->tpl_vars['metal']->value;?>
,
			limit: [0, <?php echo $_smarty_tpl->tpl_vars['js_metal_max']->value;?>
],
			production: <?php echo $_smarty_tpl->tpl_vars['js_metal_hr']->value;?>
,
			valueElem: "current_metal"
		};
		var resourceTickerCrystal = {
			available: <?php echo $_smarty_tpl->tpl_vars['crystal']->value;?>
,
			limit: [0, <?php echo $_smarty_tpl->tpl_vars['js_crystal_max']->value;?>
],
			production: <?php echo $_smarty_tpl->tpl_vars['js_crystal_hr']->value;?>
,
			valueElem: "current_crystal"
		};
		var resourceTickerDeuterium = {
			available: <?php echo $_smarty_tpl->tpl_vars['deuterium']->value;?>
,
			limit: [0, <?php echo $_smarty_tpl->tpl_vars['js_deuterium_max']->value;?>
],
			production: <?php echo $_smarty_tpl->tpl_vars['js_deuterium_hr']->value;?>
,
			valueElem: "current_deuterium"
		};
		
		var shortlyNumber	= <?php echo json_encode($_smarty_tpl->tpl_vars['shortlyNumber']->value);?>

		var vacation = <?php echo $_smarty_tpl->tpl_vars['vmode']->value;?>
;
		if (!vacation) {
			resourceTicker(resourceTickerMetal, true);
			resourceTicker(resourceTickerCrystal, true);
			resourceTicker(resourceTickerDeuterium, true);
		}
		</script>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['closed']->value){?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['closed']->value;?>
</div>
	<?php }elseif($_smarty_tpl->tpl_vars['delete']->value){?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
</div>
	<?php }elseif($_smarty_tpl->tpl_vars['vacation']->value){?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tn_vacation_mode'];?>
 <?php echo $_smarty_tpl->tpl_vars['vacation']->value;?>
</div>
	<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 11:34:45
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\main.footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e40d4544faa6_05376428')) {function content_50e40d4544faa6_05376428($_smarty_tpl) {?><div class="clear"></div>
<div id="footer">
	<?php echo $_smarty_tpl->tpl_vars['cron']->value;?>

	<?php if ($_smarty_tpl->tpl_vars['ga_active']->value){?>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php echo $_smarty_tpl->tpl_vars['ga_key']->value;?>
']);
	_gaq.push(['_trackPageview']);

	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['debug']->value==1){?>
	<script type="text/javascript">
	onerror = handleErr;
	</script>
	<?php }?>
</div>
</body>
</html><?php }} ?>