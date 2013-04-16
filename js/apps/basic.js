$(function(){

    $(window).on('resize', showSize);
    
    $('.menu li').first().addClass('current');

    showSize();

    function showSize() {
        $('#test').html('HEIGHT : '+$(window).height()+'<br>WIDTH : '+$(window).width());
        
    }
    
    

});

