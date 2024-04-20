$(document).ready(function(){

    /*open panel*/
    $(".hamburger").on('click', function(){
        $(".menu").toggleClass("menu--open");
        
    });
});

$(document).ready(function(){

    /*open panel*/
    $(".hamburger").on('click', function(){
        $(".menu").toggleClass("menu--open");
    });
});


// Supponiamo che questa funzione ritorni true se l'utente è loggato, false altrimenti
function isUserLoggedIn() {
    // Implementa la logica di controllo dell'autenticazione qui
    //return localStorage.getItem('username') !== null;
    return true;
}

$(document).ready(function() {
    if (isUserLoggedIn()) {
        // Nascondi i pulsanti di login e registrazione
        $("#loginButton, #registerButton").hide();

        // Mostra l'immagine dell'utente e rendila cliccabile
       $("#userImage").show().css('cursor', 'pointer')
       $("#userImage > img").css({
        'width': '100px',  // Imposta la larghezza desiderata
        'height': 'auto'  // Mantieni le proporzioni originali
    });
    }
});