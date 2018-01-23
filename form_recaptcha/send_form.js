var buttonForm;

	//читываем все кнопки с классом g-recaptcha и при клике вызываем рекапчу
	document.addEventListener('click' , function(event){
		buttonForm = event.target.closest('.g-recaptcha'); // кешируем нажатую кнопу
		if(buttonForm) {
            
			grecaptcha.execute(); // данный метод проверяет на человека
		}
	});

	// запускаеться при успешной проверки на человека
	function recaptcha_active(event) {
		console.log('проверенно на робота');
		sendForm(buttonForm);
	};



		// buttonForm = document.querySelector('.g-recaptcha'); // кешируем нажатую кнопу
		// sendForm(buttonForm);

		function sendForm(button) {
			var form = button.closest('form'); // передаем нажатую кнопку 
			var namePole = form.querySelectorAll( '[name]' ); // вытаскиваем данные из формы

			var send = {
				id: form.id, // получаем id формы
				input: {}

			}
			// формируем объект инпутов
			namePole.forEach( function(element, index) {
				if(element.value) {
					send.input[element.getAttribute('name')] = [ element.value.replace(/[\n\r]/g, '') , element.getAttribute('rus-text') ]; // записываем значение поля
				} 
			});

			console.log('объект перед отправкой' , send);
			send = 'jsonData=' + JSON.stringify(send); // преобразуем объект в JSON

			var xhr = new XMLHttpRequest();
			xhr.open(form.getAttribute('metod') , form.getAttribute('action') , true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhr.send(send); // отправляем данные


			// при успешной передаче
			xhr.onreadystatechange = function () {
				if(xhr.readyState == 4) {
					console.log( xhr.responseText ); // ответ
				};
			};

			// при ошибке
			xhr.onerror = function () {
				console.log('произошла ошибка');
			};
		}