

$(document).ready(function(){
    $(".content").vegas({
    slides: [
        { src: "images/anıtkabir.jpg" },
        { src: "images/ankara.jpg" },
        { src: "images/ankara1.jpg" }
    ],
        slide: 1,
        delay: 10000,
        transition: 'fade'
    });
});

