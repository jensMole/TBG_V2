if($('.cookie-banner').length){
    $('.cookie-banner').slideDown(800);
}

document.getElementById('button').onclick = function() {
    $('.cookie-banner').slideUp(800);
};