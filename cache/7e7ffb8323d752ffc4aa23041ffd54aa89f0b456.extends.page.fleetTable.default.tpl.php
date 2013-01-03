<?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 11:40:35
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\page.fleetTable.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2204650e40ea357b031-14528217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e7ffb8323d752ffc4aa23041ffd54aa89f0b456' => 
    array (
      0 => 'C:/xampp/htdocs/2Moons/styles/templates\\game\\page.fleetTable.default.tpl',
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
    '2bd2eab4093e9c521660184b0739f16c0589f2a1' => 
    array (
      0 => 'C:/xampp/htdocs/2Moons/styles/templates\\game\\shared.fleetTable.acsTable.tpl',
      1 => 1347100368,
      2 => 'file',
    ),
    'c5a3d09f6e00e0102b18e4d83501b156202bafb4' => 
    array (
      0 => 'C:/xampp/htdocs/2Moons/styles/templates\\game\\main.footer.tpl',
      1 => 1347100368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2204650e40ea357b031-14528217',
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
  'unifunc' => 'content_50e40ea3dee457_45583356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e40ea3dee457_45583356')) {function content_50e40ea3dee457_45583356($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bodyclass'=>"full"), 0, '2204650e40ea357b031-14528217');
content_50e40ea35ebe42_10773343($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2204650e40ea357b031-14528217');
content_50e40ea37ca974_77466203($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>
<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2204650e40ea357b031-14528217');
content_50e40ea37d2e61_40894271($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content">
<table style="width:760px;">
	<tr>
		<th colspan="9">
			<div class="transparent" style="text-align:left;float:left;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_fleets'];?>
 <?php echo $_smarty_tpl->tpl_vars['activeFleetSlots']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['maxFleetSlots']->value;?>
</div>
			<div class="transparent" style="text-align:right;float:right;"><?php echo $_smarty_tpl->tpl_vars['activeExpedition']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['maxExpedition']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_expeditions'];?>
</div>
		</th>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_number'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_mission'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_ammount'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_beginning'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_departure'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_destiny'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_objective'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_arrival'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_order'];?>
</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['FlyingFleetRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FlyingFleetRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FlyingFleetList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['FlyingFleets']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['FlyingFleetRow']->key => $_smarty_tpl->tpl_vars['FlyingFleetRow']->value){
$_smarty_tpl->tpl_vars['FlyingFleetRow']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['FlyingFleets']['iteration']++;
?>
	<tr>
	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['FlyingFleets']['iteration'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_mission'][$_smarty_tpl->tpl_vars['FlyingFleetRow']->value['mission']];?>

	<?php if ($_smarty_tpl->tpl_vars['FlyingFleetRow']->value['state']==1){?>
		<br><a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_returning'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_r'];?>
</a>
	<?php }else{ ?>
		<br><a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_onway'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_a'];?>
</a>
	<?php }?>
	</td>
	<td><a class="tooltip_sticky" data-tooltip-content="<table width='100%'><tr><th colspan='2' style='text-align:center;'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_info_detail'];?>
</th></tr><?php  $_smarty_tpl->tpl_vars['shipCount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipCount']->_loop = false;
 $_smarty_tpl->tpl_vars['shipID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['FleetList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipCount']->key => $_smarty_tpl->tpl_vars['shipCount']->value){
$_smarty_tpl->tpl_vars['shipCount']->_loop = true;
 $_smarty_tpl->tpl_vars['shipID']->value = $_smarty_tpl->tpl_vars['shipCount']->key;
?><tr><td class='transparent'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['shipID']->value];?>
:</td><td class='transparent'><?php echo $_smarty_tpl->tpl_vars['shipCount']->value;?>
</td></tr><?php } ?></table>"><?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['amount'];?>
</a></td>
	<td><a href="game.php?page=galaxy&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startGalaxy'];?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startSystem'];?>
">[<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startGalaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startSystem'];?>
:<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startPlanet'];?>
]</a></td>
	<td><?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startTime'];?>
</td>
	<td><a href="game.php?page=galaxy&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endGalaxy'];?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endSystem'];?>
">[<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endGalaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endSystem'];?>
:<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endPlanet'];?>
]</a></td>
	<?php if ($_smarty_tpl->tpl_vars['FlyingFleetRow']->value['mission']==4){?>
	<td>-</td>
	<td style="color:lime">-</td>
	<?php }else{ ?>
	<td><?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endTime'];?>
</td>
	<td style="color:lime"><?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['backin'];?>
</td>
	<?php }?>
	<td>
	<?php if (!$_smarty_tpl->tpl_vars['isVacation']->value&&$_smarty_tpl->tpl_vars['FlyingFleetRow']->value['state']!=1){?>
		<form action="game.php?page=fleetTable&amp;action=sendfleetback" method="post">
		<input name="fleetID" value="<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['id'];?>
" type="hidden">
		<input value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_send_back'];?>
" type="submit">
		</form>
		<?php if ($_smarty_tpl->tpl_vars['FlyingFleetRow']->value['mission']==1){?>
		<form action="game.php?page=fleetTable&amp;action=acs" method="post">
		<input name="fleetID" value="<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['id'];?>
" type="hidden">
		<input value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_acs'];?>
" type="submit">
		</form>
		<?php }?>
	<?php }else{ ?>
	&nbsp;-&nbsp;
	<?php }?>
	</td>
	</tr>
	<?php }
if (!$_smarty_tpl->tpl_vars['FlyingFleetRow']->_loop) {
?>
	<tr>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
	</tr>
	<?php } ?>
	<?php if ($_smarty_tpl->tpl_vars['maxFleetSlots']->value==$_smarty_tpl->tpl_vars['activeFleetSlots']->value){?>
	<tr><td colspan="9"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_no_more_slots'];?>
</td></tr>
	<?php }?>
</table>
<?php if (isset($_smarty_tpl->tpl_vars['acsName']->value)){?>
<?php /*  Call merged included template "shared.fleetTable.acsTable.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("shared.fleetTable.acsTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2204650e40ea357b031-14528217');
content_50e40ea3c25c76_31784521($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "shared.fleetTable.acsTable.tpl" */?>
<?php }?>
<form action="?page=fleetStep1" method="post">
<input type="hidden" name="galaxy" value="<?php echo $_smarty_tpl->tpl_vars['targetGalaxy']->value;?>
">
<input type="hidden" name="system" value="<?php echo $_smarty_tpl->tpl_vars['targetSystem']->value;?>
">
<input type="hidden" name="planet" value="<?php echo $_smarty_tpl->tpl_vars['targetPlanet']->value;?>
">
<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['targetType']->value;?>
">
<input type="hidden" name="target_mission" value="<?php echo $_smarty_tpl->tpl_vars['targetMission']->value;?>
">
<table class="table519">
	<tr>
		<th colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_new_mission_title'];?>
</th>
	</tr>
	<tr style="height:20px;">
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_ship_type'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_ship_available'];?>
</td>
		<td>-</td>
		<td>-</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['FleetRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FleetRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FleetsOnPlanet']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['FleetRow']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['Fleets']['total'] = $_smarty_tpl->tpl_vars['FleetRow']->total;
foreach ($_from as $_smarty_tpl->tpl_vars['FleetRow']->key => $_smarty_tpl->tpl_vars['FleetRow']->value){
$_smarty_tpl->tpl_vars['FleetRow']->_loop = true;
?>
	<tr style="height:20px;">
		<td><?php if ($_smarty_tpl->tpl_vars['FleetRow']->value['speed']!=0){?> <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_speed_title'];?>
 <?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['speed'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['FleetRow']->value['id']];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['FleetRow']->value['id']];?>
<?php }?></td>
		<td id="ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
_value"><?php echo pretty_number($_smarty_tpl->tpl_vars['FleetRow']->value['count']);?>
</td>
		<?php if ($_smarty_tpl->tpl_vars['FleetRow']->value['speed']!=0){?>
		<td><a href="javascript:maxShip('ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
');"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_max'];?>
</a></td>
		<td><input name="ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
" id="ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
_input" size="10" value="0"></td>
		<?php }else{ ?>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<?php }?>
	</tr>
	<?php } ?>
	<tr style="height:20px;">
	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['Fleets']['total']==0){?>
	<td colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_no_ships'];?>
</td>
	<?php }else{ ?>
	<td colspan="2"><a href="javascript:noShips();"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_remove_all_ships'];?>
</a></td>
	<td colspan="2"><a href="javascript:maxShips();"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_select_all_ships'];?>
</a></td>
	<?php }?>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['maxFleetSlots']->value!=$_smarty_tpl->tpl_vars['activeFleetSlots']->value){?>
	<tr style="height:20px;"><td colspan="4"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_continue'];?>
"></td>
	<?php }?>
</table>	
</form>
<br>
<table style="min-width:519px;width:519px;">
	<tr><th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_bonus'];?>
</th></tr>
	<tr><th style="width:33%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_bonus_attack'];?>
</th><th style="width:33%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_bonus_defensive'];?>
</th><th style="width:33%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_bonus_shield'];?>
</th></tr>
	<tr><td>+<?php echo $_smarty_tpl->tpl_vars['bonusAttack']->value;?>
 %</td><td>+<?php echo $_smarty_tpl->tpl_vars['bonusDefensive']->value;?>
 %</td><td>+<?php echo $_smarty_tpl->tpl_vars['bonusShield']->value;?>
 %</td></tr>
	<tr><th style="width:33%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][115];?>
</th><th style="width:33%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][117];?>
</th><th style="width:33%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][118];?>
</th></tr>
	<tr><td>+<?php echo $_smarty_tpl->tpl_vars['bonusCombustion']->value;?>
 %</td><td>+<?php echo $_smarty_tpl->tpl_vars['bonusImpulse']->value;?>
 %</td><td>+<?php echo $_smarty_tpl->tpl_vars['bonusHyperspace']->value;?>
 %</td></tr>
</table>
</div>
<?php /*  Call merged included template "main.footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2204650e40ea357b031-14528217');
content_50e40ea3dd2192_11114340($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 11:40:35
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e40ea35ebe42_10773343')) {function content_50e40ea35ebe42_10773343($_smarty_tpl) {?><!DOCTYPE html>

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
 | <?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleet'];?>
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
	
<?php if (isset($_GET['code'])&&isset($_smarty_tpl->tpl_vars['LNG']->value['fl_send_error'][$_GET['code']])){?>
<script type="text/javascript">
    $(function() {
     var error = "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_send_error'][$_GET['code']];?>
";
    if(error != "") alert(error);
    });
</script>
<?php }?>

	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 11:40:35
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e40ea37ca974_77466203')) {function content_50e40ea37ca974_77466203($_smarty_tpl) {?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 11:40:35
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e40ea37d2e61_40894271')) {function content_50e40ea37d2e61_40894271($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\2Moons\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
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
	<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 11:40:35
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\shared.fleetTable.acsTable.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e40ea3c25c76_31784521')) {function content_50e40ea3c25c76_31784521($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\2Moons\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
?><form action="?page=fleetTable&amp;action=acs" method="post">
<input name="fleetID" value="<?php echo $_smarty_tpl->tpl_vars['fleetID']->value;?>
" type="hidden">
	<table class="table519">
		<tr style="height:20px;">
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_sac_of_fleet'];?>
</th>
		</tr>
		<tr style="height:20px;">
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_modify_sac_name'];?>
 (<a href="javascript:Rename();"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_acs_change'];?>
</a>)</th>
		</tr>
		<tr>
			<td colspan="2" id="acsName"><?php echo $_smarty_tpl->tpl_vars['acsName']->value;?>
</td>
		</tr>
		<tr style="height:20px;">
			<th style="width:50%;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_members_invited'];?>
</th>
            <th style="width:50%;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_invite_members'];?>
</th>
		</tr>
		<?php if (!empty($_smarty_tpl->tpl_vars['statusMessage']->value)){?>
		<tr>
			<td colspan="2">
				<?php echo $_smarty_tpl->tpl_vars['statusMessage']->value;?>

			</td>
		</tr>
		<?php }?>
		<tr>
			<td>
				<select size="5" style="width:80%;">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['invitedUsers']->value),$_smarty_tpl);?>

                </select>
			</td>
			<td>
				<p><input name="username" type="text"></p>
				<p><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_continue'];?>
"></p>
			</td>
		</tr>
	</table>
</form>
<script type="text/javascript">
function Rename(){
	var Name = prompt("<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_acs_change_name'];?>
", "<?php echo $_smarty_tpl->tpl_vars['acsName']->value;?>
");
	$.get('?page=fleetTable&action=acs&fleetID=<?php echo $_smarty_tpl->tpl_vars['fleetID']->value;?>
&acsName='+Name, function(data) {
		if(data != "") {
			alert(data);
			return;
		}
		$('#acsName').text(Name);
	});
}
</script><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 11:40:35
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\main.footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e40ea3dd2192_11114340')) {function content_50e40ea3dd2192_11114340($_smarty_tpl) {?><div class="clear"></div>
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