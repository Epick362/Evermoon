<?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 13:50:52
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\page.empire.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1853850e42d2cd3abc5-89890894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee2144b473fd9fd95100b18630ed338804255231' => 
    array (
      0 => 'C:/xampp/htdocs/2Moons/styles/templates\\game\\page.empire.default.tpl',
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
  'nocache_hash' => '1853850e42d2cd3abc5-89890894',
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
  'unifunc' => 'content_50e42d2d606d02_65096235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e42d2d606d02_65096235')) {function content_50e42d2d606d02_65096235($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bodyclass'=>"full"), 0, '1853850e42d2cd3abc5-89890894');
content_50e42d2ce2cf04_33296548($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1853850e42d2cd3abc5-89890894');
content_50e42d2d09e5c2_22770957($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>
<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1853850e42d2cd3abc5-89890894');
content_50e42d2d0a9c51_19350686($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<div id="content">
<table>
	<tbody>
		<tr>
			<th colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lv_imperium_title'];?>
</th>
		</tr>
		<tr>
			<td style="width:100px"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lv_planet'];?>
</td>
			<td style="width:100px;font-size: 50px;">&Sigma;</td>
			<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['planetID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['planetList']->value['image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['planetID']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
			<td style="width:100px"><a href="game.php?page=overview&amp;cp=<?php echo $_smarty_tpl->tpl_vars['planetID']->value;?>
"><img width="80" height="80" border="0" src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.jpg"></a></td>
			<?php } ?>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lv_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lv_total'];?>
</td>
			<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planetList']->value['name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
				<td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
			<?php } ?>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lv_coords'];?>
</td>
			<td>-</td>
			<?php  $_smarty_tpl->tpl_vars['coords'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coords']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planetList']->value['coords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['coords']->key => $_smarty_tpl->tpl_vars['coords']->value){
$_smarty_tpl->tpl_vars['coords']->_loop = true;
?>
				<td><a href="game.php?page=galaxy&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['coords']->value['galaxy'];?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['coords']->value['system'];?>
">[<?php echo $_smarty_tpl->tpl_vars['coords']->value['galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['coords']->value['system'];?>
:<?php echo $_smarty_tpl->tpl_vars['coords']->value['planet'];?>
]</a></td>
			<?php } ?>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lv_fields'];?>
</td>
			<td>-</td>
			<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planetList']->value['field']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
				<td><?php echo $_smarty_tpl->tpl_vars['field']->value['current'];?>
 / <?php echo $_smarty_tpl->tpl_vars['field']->value['max'];?>
</td>
			<?php } ?>
		</tr>
		<tr>
			<th colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lv_resources'];?>
</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['resourceArray'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resourceArray']->_loop = false;
 $_smarty_tpl->tpl_vars['elementID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['planetList']->value['resource']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resourceArray']->key => $_smarty_tpl->tpl_vars['resourceArray']->value){
$_smarty_tpl->tpl_vars['resourceArray']->_loop = true;
 $_smarty_tpl->tpl_vars['elementID']->value = $_smarty_tpl->tpl_vars['resourceArray']->key;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['elementID']->value];?>
</td>
			<td><?php echo pretty_number(array_sum($_smarty_tpl->tpl_vars['resourceArray']->value));?>
</td>
			<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_smarty_tpl->tpl_vars['planetID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value){
$_smarty_tpl->tpl_vars['resource']->_loop = true;
 $_smarty_tpl->tpl_vars['planetID']->value = $_smarty_tpl->tpl_vars['resource']->key;
?>
				<td><?php echo pretty_number($_smarty_tpl->tpl_vars['resource']->value);?>
</td>
			<?php } ?>
		</tr>
		<?php } ?>
		<tr>
			<th colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lv_buildings'];?>
</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['buildArray'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['buildArray']->_loop = false;
 $_smarty_tpl->tpl_vars['elementID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['planetList']->value['build']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['buildArray']->key => $_smarty_tpl->tpl_vars['buildArray']->value){
$_smarty_tpl->tpl_vars['buildArray']->_loop = true;
 $_smarty_tpl->tpl_vars['elementID']->value = $_smarty_tpl->tpl_vars['buildArray']->key;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['elementID']->value];?>
</td>
			<td><?php echo pretty_number(array_sum($_smarty_tpl->tpl_vars['buildArray']->value));?>
</td>
			<?php  $_smarty_tpl->tpl_vars['build'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['build']->_loop = false;
 $_smarty_tpl->tpl_vars['planetID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['buildArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['build']->key => $_smarty_tpl->tpl_vars['build']->value){
$_smarty_tpl->tpl_vars['build']->_loop = true;
 $_smarty_tpl->tpl_vars['planetID']->value = $_smarty_tpl->tpl_vars['build']->key;
?>
				<td><?php echo pretty_number($_smarty_tpl->tpl_vars['build']->value);?>
</td>
			<?php } ?>
		</tr>
		<?php } ?>
		<tr>
			<th colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lv_technology'];?>
</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['tech'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tech']->_loop = false;
 $_smarty_tpl->tpl_vars['elementID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['planetList']->value['tech']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tech']->key => $_smarty_tpl->tpl_vars['tech']->value){
$_smarty_tpl->tpl_vars['tech']->_loop = true;
 $_smarty_tpl->tpl_vars['elementID']->value = $_smarty_tpl->tpl_vars['tech']->key;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['elementID']->value];?>
</td>
			<td><?php echo pretty_number($_smarty_tpl->tpl_vars['tech']->value);?>
</td>
			<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planetList']->value['name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
				<td><?php echo pretty_number($_smarty_tpl->tpl_vars['tech']->value);?>
</td>
			<?php } ?>
		</tr>
		<?php } ?>
		<tr>
			<th colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lv_ships'];?>
</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['fleetArray'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fleetArray']->_loop = false;
 $_smarty_tpl->tpl_vars['elementID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['planetList']->value['fleet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fleetArray']->key => $_smarty_tpl->tpl_vars['fleetArray']->value){
$_smarty_tpl->tpl_vars['fleetArray']->_loop = true;
 $_smarty_tpl->tpl_vars['elementID']->value = $_smarty_tpl->tpl_vars['fleetArray']->key;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['elementID']->value];?>
</td>
			<td><?php echo pretty_number(array_sum($_smarty_tpl->tpl_vars['fleetArray']->value));?>
</td>
			<?php  $_smarty_tpl->tpl_vars['fleet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fleet']->_loop = false;
 $_smarty_tpl->tpl_vars['planetID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fleetArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fleet']->key => $_smarty_tpl->tpl_vars['fleet']->value){
$_smarty_tpl->tpl_vars['fleet']->_loop = true;
 $_smarty_tpl->tpl_vars['planetID']->value = $_smarty_tpl->tpl_vars['fleet']->key;
?>
				<td><?php echo pretty_number($_smarty_tpl->tpl_vars['fleet']->value);?>
</td>
			<?php } ?>
		</tr>
		<?php } ?>
		<tr>
			<th colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lv_defenses'];?>
</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['fleetArray'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fleetArray']->_loop = false;
 $_smarty_tpl->tpl_vars['elementID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['planetList']->value['defense']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fleetArray']->key => $_smarty_tpl->tpl_vars['fleetArray']->value){
$_smarty_tpl->tpl_vars['fleetArray']->_loop = true;
 $_smarty_tpl->tpl_vars['elementID']->value = $_smarty_tpl->tpl_vars['fleetArray']->key;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['elementID']->value];?>
</td>
			<td><?php echo pretty_number(array_sum($_smarty_tpl->tpl_vars['fleetArray']->value));?>
</td>
			<?php  $_smarty_tpl->tpl_vars['fleet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fleet']->_loop = false;
 $_smarty_tpl->tpl_vars['planetID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fleetArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fleet']->key => $_smarty_tpl->tpl_vars['fleet']->value){
$_smarty_tpl->tpl_vars['fleet']->_loop = true;
 $_smarty_tpl->tpl_vars['planetID']->value = $_smarty_tpl->tpl_vars['fleet']->key;
?>
				<td><?php echo pretty_number($_smarty_tpl->tpl_vars['fleet']->value);?>
</td>
			<?php } ?>
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
<?php /*  Call merged included template "main.footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1853850e42d2cd3abc5-89890894');
content_50e42d2d5dff72_90919932($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 13:50:52
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e42d2ce2cf04_33296548')) {function content_50e42d2ce2cf04_33296548($_smarty_tpl) {?><!DOCTYPE html>

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
 | <?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_empire'];?>
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
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 13:50:53
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e42d2d09e5c2_22770957')) {function content_50e42d2d09e5c2_22770957($_smarty_tpl) {?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 13:50:53
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e42d2d0a9c51_19350686')) {function content_50e42d2d0a9c51_19350686($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\2Moons\\includes\\libs\\Smarty\\plugins\\function.html_options.php';
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
	<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 13:50:53
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\main.footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e42d2d5dff72_90919932')) {function content_50e42d2d5dff72_90919932($_smarty_tpl) {?><div class="clear"></div>
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