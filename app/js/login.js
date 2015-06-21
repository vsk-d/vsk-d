
var loginModule = (function () {
	var init = function() {
				console.log('Инициализация модуля Логина')
				},
		_setUpListners = function () {
				$('#login').on('submit', _submitForm); //send form
				},
		_submitForm = function (em) {
			console.log('Работаем с формой');
			ev.preventDefault();

		var form = $(this),
			url = 'login.php',
			defObject = _ajaxForm(form, url);

			if (defObject) {
				defObject.done(function(ans){
					var mes = ans.mes,
						status = ans.status;

					if (status === 'OK') {
						form.trigger('reset');
						form.find('.succes-mes').text(mes).show();
						} else{
							form.find('.error-mes').text(mes).show();
						}
				});
			}
		},

		_ajaxForm = function (form, url) {

			if (!validation.validateForm(form)) return false; // возвращаем false
			var data = form.serialize(); //собираем даннные и сериализуем их

			return $.ajax({
				type: 'POST',
				url: url,
				dataType: 'JSON',
				data: data
			}).fail(function(ans){
				console.log('Проблемы с PHP');
				form.find('.error-mes').text('На серевере произоршла ошибка').show();
			});
		};

		return {
			init: init
		};


}) ();

loginModule.init();

