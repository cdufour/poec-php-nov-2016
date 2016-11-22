$(document).ready(function() {

  $('#submit').click(function() {

    var client = { // variable complexe (objet)
      email: $('#email').val(),
      password: $('#password').val()
    };

    // envoyer les données au serveur via une requête ajax
    $.ajax({
      url: 'login2.php',
      method: 'POST',
      data: client,
      success: function(res) {
        if (res == 'true') {
          $('#form').hide();
          $('#message').html('<strong>Bravo, tu es connecté !</strong>');
        } else {
          $('#message').html('<strong>Désolé, connexion impossible</strong>');
        }
      },
      error: function() {
        console.log('erreur');
      }
    });

  });

});
