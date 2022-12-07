const bars = document.querySelector('.fa-bars');
const navbar = document.querySelector('.navbar');

bars.addEventListener('click',()=>{
    bars.classList.toggle('fa-times');
    navbar.classList.toggle('nav-toggle');
});

$(window).on('scroll load',function(){

    if($(window).scrollTop() > 30){
        $('header').addClass('header-active');
    }else{
        $('header').removeClass('header-active');
    }
});