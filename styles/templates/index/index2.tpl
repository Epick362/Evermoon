<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="{$lang}" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="{$lang}" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="{$lang}" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="{$lang}" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="{$lang}" class="no-js"> <!--<![endif]-->
<head>
<link rel="stylesheet" type="text/css" href="styles/css/login.css?v={$REV}">
<link rel="stylesheet" type="text/css" href="styles/css/jquery.fancybox.css?v={$REV}">
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<title>{block name="title"} - {$servername}{/block}</title>
<meta name="generator" content="Evermoon {$VERSION}">
<!-- 
	This website is powered by 2Moons {$VERSION}
	2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
	2Moons is copyright 2009-2012 of Jan Kröpke. Extensions are copyright of their respective owners.
	Information and contribution at http://2moons.cc/
-->
<meta name="keywords" content="Evermoon, Universe, Browser, Hra, Online, Scifi">
<meta name="description" content="Evermoon, najlepšia slovenská Sci-fi hra! Pripoj sa už dnes zadarmo!"> <!-- Noob Check :) -->
<!--[if lt IE 9]>
<script src="scripts/base/html5.js"></script>
<![endif]-->
</head>	
<body>
<div id="page">
	<div id="content">{if $contentbox === true}
		<section>
			<table class="box-out">
				<tr class="box-out-header">
					<td class="box-out-header-left"></td>
					<td class="box-out-header-center"></td>
					<td class="box-out-header-right"></td>
				</tr>
				<tr class="box-out-content">
					<td class="box-out-content-left"></td>
					<td class="box-out-content-center">
						<table class="box-inner">
							<tr class="box-inner-header">
								<td class="box-inner-header-left"></td>
								<td class="box-inner-header-center"><h1>{block name=title}{/block}</h1></td>
								<td class="box-inner-header-right"></td>
							</tr>
							<tr class="box-inner-content">
								<td class="box-inner-content-left"></td>
								<td class="box-inner-content-center">{/if}
									{block name=content} {/block}
								{if $contentbox === true}</td>
								<td class="box-inner-content-right"></td>
							</tr>
							<tr class="box-inner-footer">
								<td class="box-inner-footer-left"></td>
								<td class="box-inner-footer-center"></td>
								<td class="box-inner-footer-right"></td>
							</tr>
						</table>					
					</td>
					<td class="box-out-content-right"></td>
				</tr>
				<tr class="box-out-footer">
					<td class="box-out-footer-left"></td>
					<td class="box-out-footer-center"></td>
					<td class="box-out-footer-right"></td>
				</tr>
			</table>
		</section>
	{/if}
	</div>
</div>
<div id="dialog" style="display:none;"></div>
<script type="text/javascript" src="scripts/base/jquery.js?v={$REV}"></script>
<script type="text/javascript" src="scripts/base/jquery.cookie.js?v={$REV}"></script>
<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v={$REV}"></script>
<script type="text/javascript" src="scripts/game/login.js?v={$REV}"></script>
<script type="text/javascript">
var CONF			= {
	RegClosedUnis	: {if isset($RegClosedUnis)}{$RegClosedUnis}{else}[]{/if},
	IsCaptchaActive : {$game_captcha},
	ref_active		: {$ref_active},
	cappublic		: "{$cappublic}",
	FBActive		: {$fb_active},
	FBKey			: "{$fb_key}",
	Lang			: {$langs},
	MultiUniverse	: $('#universe').children().length !== 1 ? true : false,
	uni				: {$UNI},
	avaLangs		: new Array(),
	lang			: "{$lang}",
	htaccess		: {$htaccess}
};
var LANG			= {
	register		: "{$LNG.register_now}",
	login			: "{$LNG.login}",
	uni_closed		: "{$LNG.uni_closed}"
};

{if isset($code)}
alert("{$code}");
{/if}
</script>
{if $fb_active}
<div id="fb-root"></div>
<script>
	window.fbAsyncInit = FBinit;
	(function(d){
		var js, id = 'facebook-jssdk'; if (d.getElementById(id)) return;
		js = d.createElement('script'); js.id = id; js.async = true;
		js.src = "//connect.facebook.net/en_US/all.js";
		d.getElementsByTagName('head')[0].appendChild(js);
	}(document));
</script>
{/if}
{if $game_captcha}
<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
{/if}
{if $ga_active}
<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("{$ga_key}");
pageTracker._trackPageview();
} catch(err) {}</script>
{/if}
{block name="script"}{/block}
</body>
</html>