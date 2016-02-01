if ( !!('ontouchstart' in window) || !!('onmsgesturechange' in window) ) {
    document.getElementsByTagName("body")[0].classList.add("touch");
}

if (document.getElementsByClassName("articles").length > 0){
    var banner = document.getElementsByClassName('dna')[0];
    banner.classList.add("animated");
}