var scrollToElement = function(el, ms){
    var speed = (ms) ? ms : 600;
    $('html,body').animate({
        scrollTop: $(el).offset().top
    }, speed);
}

function aboutMe() {
    /* window.location.hash = '#aboutMe'; */
    /* document.getElementById('aboutMe').scrollIntoView(); */
    scrollToElement('#aboutMe', 600);
}

function works() {
    /* window.location.hash = '#works';
    document.getElementById('works').scrollIntoView(); */
    scrollToElement('#works', 600);
}

function contact() {
    /* window.location.hash = '#contact';
    document.getElementById('contact').scrollIntoView(); */
    scrollToElement('#contact', 600);
}

function copyClipboard() {
    var email = "extibax@gmail.com";
    navigator.clipboard.writeText(email);
    alertify.success('¡The email has been copied!');
}