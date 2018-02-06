$(document).ready(function() {

  //E-mail Ajax Send
  $("#form").submit(function() { //Change
    var th = $(this);
    $.ajax({
      type: "POST",
      url: "mail.php", //Change
      data: th.serialize()
    }).done(function() {
      $('.feedback-modal').fadeIn('300');
        th.trigger("reset");
      setTimeout(function() {
      $('.feedback-modal').fadeOut('300');
          
      }, 2000);
        
    });
    return false;
  });

});