<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="{$lang}" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="{$lang}" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="{$lang}" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="{$lang}" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="{$lang}" class="no-js"> <!--<![endif]-->
<head>
<link rel="stylesheet" type="text/css" href="styles/css/bootstrap.css?v={$REV}">
<link rel="stylesheet" type="text/css" href="styles/css/login.css?v={$REV}">
<link rel="stylesheet" type="text/css" href="styles/css/jquery.fancybox.css?v={$REV}">
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<title>{block name="title"} - {$servername}{/block}</title>
<meta name="generator" content="Evermoon {$VERSION}">
<meta name="keywords" content="Evermoon, Universe, Browser, Hra, Online, Scifi">
<meta name="description" content="Evermoon, najlepšia slovenská Sci-fi hra! Pripoj sa už dnes zadarmo!"> <!-- Noob Check :) -->
<!--[if lt IE 9]>
<script src="scripts/base/html5.js"></script>
<![endif]-->
</head>	
<body>
	<div class="header">
		<ul class="inline">
			<li><a href="#" onclick="Content('back')">{$LNG.menu_index}</a></li>
			<li><a href="#" onclick="Content('news')">{$LNG.menu_news}</a></li>
			<li><a href="#" onclick="Content('rules')">{$LNG.menu_rules}</a></li>
			<li><a href="#" onclick="Content('disclaimer')">{$LNG.menu_disclamer}</a></li>
		</ul>
	</div>
	<div class="wrapper">
		<div class="text">
			{$servername}<span class="text-small">.sk</span>
		</div>
		<div class="box" id="login" style="display: none;">
			<form id="login" name="login" action="index.php?page=login" method="post">
				<label for="universe">{$universe}</label><select name="uni" id="universe">{html_options options=$AvailableUnis selected=$UNI}</select><br>
				<label for="username">{$user}</label><input name="username" id="username" type="text"><br>
				<label for="password">{$pass}</label><input name="password" id="password" type="password"><br>
				<div class="row-fluid">
					<div class="span4">
						<a onclick="Content('lost')" class="btn btn-block">Lost password</a>
					</div>
					<div class="span8">
						<input type="submit" class="btn btn-primary btn-block" value="{$login}">
					</div>
				</div>
				{if $fb_active}
				<div class="row-fluid" style="margin-top:5px;">
					<div class="span12">
						<a href="javascript:FBlogin();" class="fb_login btn btn-primary btn-block">Login with Facebook</a>
					</div>
				</div>
				{/if}
			</form>
		</div>

		<div class="box" id="info" style="display: none;">
			<span class="description">{$server_description}</span>
			<ul>{foreach item=InfoRow from=$server_infos}<li class="gentleman">{$InfoRow}</li>{/foreach}</ul>
			<a onclick="Content('register')" class="btn btn-primary btn-block btn-large">{$LNG.register_now}</a>
		</div>

		<div class="box" id="register" style="display: none;">
			<form id="reg" name="reg" action="index.php?page=reg&amp;action=send" method="post" onsubmit="return false;">
				{if $fb_active}<input type="hidden" name="fb_id" id="fb_id">{/if}
				{if $ref_id}<input type="hidden" name="ref_id" id="ref_id" value="{$ref_id}"><input type="hidden" name="uni" id="ref_uni" value="{$ref_uni}">{else}
				<label for="reg_universe">{$universe}</label><select name="uni" id="reg_universe">{html_options options=$AvailableUnis selected=$UNI}</select>{/if}
				<label for="reg_username">{$user}</label><input name="username" id="reg_username" type="text">
				<label for="reg_password">{$pass}</label><input name="password" id="reg_password" type="password">
				<label for="reg_password_2">{$pass_2}</label><input name="password_2" id="reg_password_2" type="password">
				<label for="reg_email">{$email}</label><input name="email" id="reg_email" type="text">
				<label for="reg_email_2">{$email_2}</label><input name="email_2" id="reg_email_2" type="text">
				<label for="reg_planet">{$planetname}</label><input name="planetname" id="reg_planet" type="text">
				{if $game_captcha}
				<div id="recaptcha_image"></div>
				<label for="recaptcha_response_field">{$captcha_reg}</label><input type="text" id="recaptcha_response_field" name="recaptcha_response_field"><br>
				{/if}
				<div class="row-fluid">
					<div class="span12">{$accept_terms_cond}<span class="reg-checkbox"><input id="reg_rgt" name="rgt" type="checkbox"></span></div>
				</div>
				<div class="row-fluid">
					<div class="span4">
						<a onclick="Content('back')" class="btn btn-block">Back</a>
					</div>
					<div class="span8">
						<input name="submit" class="btn btn-primary btn-block" value="{$register}" type="button" onclick="Submit('reg');">
					</div>
				</div>
				{if $fb_active}
				<div class="row-fluid" style="margin-top:5px;">
					<div class="span12">
						<a href="javascript:FBlogin();" class="fb_login btn btn-primary btn-block">Connect with Facebook</a>
					</div>
				</div>
				{/if}
			</form>
		</div>

		<div class="box" id="lostpwd" style="display: none;">
			<form id="lost" name="lost" action="index.php?page=lostpassword" method="post" onsubmit="return false;">
				<label for="universe_lost">{$universe}</label><select name="uni" id="universe_lost">{html_options options=$AvailableUnis selected=$UNI}</select><br>
				<label for="username_lost">{$user}</label><input name="username" id="username_lost" type="text">
				<label for="email_lost">{$email}</label><input name="email" id="email_lost" type="text">
				<div class="row-fluid">
					<div class="span4">
						<a onclick="Content('back')" class="btn btn-block">Back</a>
					</div>
					<div class="span8">
						<input name="submit" class="btn btn-primary btn-block" value="{$login}" type="button" onclick="Submit('lost');">
					</div>
				</div>
			</form>
		</div>

		<div class="box" id="news" style="display: none;">
			{foreach name=News item=NewsRow from=$NewsList}
			{if !$smarty.foreach.News.first}<hr>{/if}
			<h2>{$NewsRow.title}</h2><br>
			<div class="info">{$NewsRow.from}</div>
			<br><div><p>{$NewsRow.text}</p></div>
			{foreachelse}
			<h1>{$news_does_not_exist}</h1>
			{/foreach}
		</div>

		<div class="box" id="rules" style="display: none;">
			{$rules}
		</div>

		<div class="box" id="disclaimer" style="display: none;">
			<table class="table">
			<tr><td style="font-weight:700">{$LNG.disclamer_name}</td><td>{$smarty.const.DICLAMER_NAME}</td></tr>
			<tr><td style="font-weight:700">{$LNG.disclamer_adress}</td><td>{$smarty.const.DICLAMER_ADRESS1}<br>{$smarty.const.DICLAMER_ADRESS2}</td></tr>
			<tr><td style="font-weight:700">{$LNG.disclamer_tel}</td><td>{$smarty.const.DICLAMER_TEL}</td></tr>
			<tr><td style="font-weight:700">{$LNG.disclamer_email}</td><td>{$smarty.const.DICLAMER_EMAIL}</td></tr>
			</table>
		</div>
	</div>
	<div class="footer">
		&copy; 2013 Evermoon
	</div>
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
{literal} 
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', '{$ga_key}', 'evermoon.sk');
	  ga('send', 'pageview');

	</script>
{/literal} 
{/if}
{block name="script"}{/block}
</body>
</html>