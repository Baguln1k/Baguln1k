

$(document).ready(function() {
	
$('.date_click').click(function(event) {

var el = $('#date-range12-container');

if (el.hasClass('date-range12-container_active')) {
el.removeClass('date-range12-container_active');	
el.slideUp("slow");

} else {
el.addClass('date-range12-container_active');
el.slideDown("slow");

}




});





	$('#form').on('submit', function() {

// Получение ID формы
    var formID = $(this).attr('id');

// Добавление решётки к имени ID
    var formNm = $('#' + formID);

    $.ajax({
        type: "POST",
        url: 'mail.php',
        data: formNm.serialize(),
        success: function (data) {

		//Прячем окно формы
            //$('body').find('#form').hide();
			$('body').find('#bookModalSuccess').modal('show');
			$('#form input.user').val('');
			$('#form input.tel').val('');
			$('#form input.email').val('');
			$('#form textarea').val('');
			setTimeout(function() {document.location.replace("/");}, 2000);


        },
        error: function (jqXHR, text, error) {

// Вывод текста ошибки отправки
            $(formNm).html(error);
        }
    });
    return false;

});








});

