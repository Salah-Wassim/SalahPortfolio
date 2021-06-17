$('.btn-burger').click(function() {
    if($(this).hasClass('fa-bars')){
        $(this).removeClass('fas fa-bars').addClass('fas fa-time');
        $('.main-menu').animate({'left':'0'}, 'slow')
    }
    else{
        $(this).removeClass('fas fa-time').addClass('fas fa-bars');
        $('.main-menu').animate({'left':'-100%'}, 'slow');
    };
});
