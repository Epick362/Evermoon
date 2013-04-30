function showRecaptcha() 
{
	if(CONF['IsCaptchaActive'] == 0)
		return;
		
	Recaptcha.create(CONF['cappublic'], 'display_captcha', {
		theme: 'custom',
		lang: $.cookie('lang'),
		tabindex: '6',
		custom_theme_widget: 'display_captcha'
	});
}

function setLNG(uni) {
	$.cookie('uni', uni);
	document.location.reload();
}

function setLNG(LNG, Query) {
	$.cookie('lang', LNG);
	if(typeof Query === "undefined")
		document.location.reload();
	else
		document.location.href = document.location.href+Query;
}

function initLangs() {
	$.each(CONF['Lang'], function(key, name) {
		$('#lang').prepend('<li><a href="javascript:setLNG(\''+key+'\')"><span class="flags '+key+'" title="'+name+'"></span></a></li>');
		$('select.lang').append('<option value="'+key+'">'+name+'</option>');
		CONF['avaLangs'].push(key);
	});
}

function initCloseReg() {
	$('#reg_universe option').text(function(i, name) {
		return (CONF.RegClosedUnis[$(this).val()] == 1 && name.search(LANG['uni_closed']) == -1) ? name+' '+LANG['uni_closed'] : name;
	});
}

function changeUni(uni) {
	$.cookie('uni', uni);
	document.location.reload();
}

function Content(action) {
	$('#register').hide();
	$('#login').hide();
	$('#info').hide();
	$('#lostpwd').hide();
	$('#news').hide();
	$('#rules').hide();
	$('#disclaimer').hide();
	switch(action) {
		case 'login':
			showElement('#login', '180');
		break;
		case 'register':
			showRecaptcha();
			showElement('#register', '380');
		break;
		case 'lost':
			showElement('#lostpwd', '150');
		break;
		case 'back':
			showElement('#info', '180');
			showElement('#login', '180');	
		break;
		case 'news':
			$('#news').show();
		break;
		case 'rules':
			$('#rules').show();
		break;
		case 'disclaimer':
			$('#disclaimer').show();
		break;		
	}
	return false;
}

function showElement(element, width) {
	$(element).css('height', 0);
	$(element).show();
	$(element).animate({height: width+'px'}, 400);
}

function Submit(action) {
	switch(action) {
		case 'reg':
			form =	$('#reg');
			$('.error').removeClass('error');
			var button = $(form).find('input[type=button]');
			button.val('Odosielam...');
			button.addClass('disabled');
			$.post(form.attr('action'), form.serialize(), function(data) {
				data	= $.parseJSON(data);
				if(data.error === false) {
					if(data.message == 'done') {
						document.location.href = 'game.php';
					} else {
						$('#reg').remove()
						$('#regbox .fb_login').remove()
						$('#regbox').append(data.message)
						$('.contentbox').css({height: '205px'}, 300);
					}
				} else {
					var errormes = '';
					$.each(data.message, function(i, mes) {
						showRecaptcha();
						errormes	+= mes[1]+"\n";
						if(mes[0] === 'captcha')
							$('#recaptcha_response_field').addClass('error');
						else
							$('#reg_'+mes[0]).addClass('error');
					});
					alert(errormes);
				}
			}).fail(function(data) {
				alert($(data.responseText).find("td.left").html(function(i, old) {
					return old.replace(/<br>/g, "\n");
				}).text());
			});
		break;
		case 'lost':
			form =	$('#lost');
			$.post(form.attr('action'), form.serialize(), function(data) {
				data	= $.parseJSON(data);
				alert(data.message);
				if(data.error === false)
					form.find('input:text').val('');
			});
		break;
	}
	return false;
}

function initFormHandler() {
	$('input:not(:button)').each(function(i, val){
		$(this).keydown(function(event) {
			if (event.keyCode == '13')
				Submit($(this).parent().attr('id'));
		});
	});
}


function FBinit() {
        FB.init({appId: CONF['FBKey'], status: false, cookie: true});
}

function FBlogin() {
        FBUniverse      = $('#universe').val();
        FB.getLoginStatus(function(response) {
        		console.log('FB.getLoginStatus Response:');
        		console.log(response);
                if (response.session) {
                        FBCheckRegister(response.session);
                        console.log('Session Active');
                } else {
                        FB.login(function(login) {
                        		console.log(login);
                                if (login.status == 'connected') {
                                        FBCheckUser();
                                        console.log('Login successful: New session');
                                }
                        }, {scope:'publish_stream,offline_access,email'});
                }
        });
}

function FBCheckRegister(ID){
        $.getJSON('?uni='+FBUniverse+'&page=reg&action=check&mode=fbid&value='+ID, function(data) {
                if(data.exists === true) {
                		//Content('login');
                        document.location.href = '?uni='+FBUniverse+'&page=extauth&method=facebook';
                        console.log('User exists, sending to login');
                } else {
                        FBCheckUser();
                }
        });
}

function FBCheckUser(user) {
        if(typeof user !== "object") {
                FBgetUser(FBCheckUser);
                console.log('FBgetUser');
                return;
        }
        
        FBUniverse = $('#universe').val();
        $.getJSON('?uni='+FBUniverse+'&page=reg&action=check&mode=email&value='+user.email, function(data) {
                if(data.exists) {
                		//Content('login');
                        document.location.href = '?uni='+FBUniverse+'&page=extauth&method=facebook';
                        console.log('Email in DB, sending him to login');
                } else {
                        FBRegister(user);
                        console.log('Email not in DB, sending him to register');
                }
        });
}

function FBRegister(data) {
		console.log(data);
        if(typeof data !== "object") {
                FBgetUser(FBRegister);
                return;
        }
        Content('register');
        $('.fb_login').remove();
        $('#fb_id').val(data.id);
        $('#reg_email').val(data.email);
        $('#reg_email_2').val(data.email);
}

function FBgetUser(callback) {
        FB.api('/me', callback);
}

function FBHandler(data, UNI) {
        $.getJSON('?uni='+UNI+'page=reg&action=check&mode=fbid&value='+data.id, function(data) {
                if(data.exists) {
                        return;
                } else {
                        if($.inArray(data.locale.substr(0, 2), CONF['avaLangs']) !== -1)
                                setLNG(data.locale.substr(0, 2), '?fb=reg');
                }
        });
}


$(function() {
	initFormHandler();
	initLangs();
	initCloseReg();
	showElement('#info', '180');
	showElement('#login', '180');
	if(CONF['ref_active'] == 1 && document.location.search.search('/?ref=') !== -1) {
		Content('register');
	}
	
	if(CONF.htaccess) {
		$('select[name=uni]').each(function() {
			var $this	= $(this);
			$this.parents('form').attr('action', function(i, old) {
				return old.replace(/.*index\.php/, '../uni'+$this.val()+'/index.php');
			});
		}).on('change', function() {
			var $this	= $(this);
			$this.parents('form').attr('action', function(i, old) {
				return old.replace(/.*index\.php/, '../uni'+$this.val()+'/index.php');
			});
		});
	}

	$("form").submit(function() {
		var button = $(this).find(':submit');
		button.val('Odosielam...');
		button.addClass('disabled');
		$(this).submit(function() {
			return false;
		});
		return true;
	});
});