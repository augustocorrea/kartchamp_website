jQuery(document).ready(function($){
    $('.sub-menu li a').hover(
         function(){ $('#menu-menu li.menu-item-31 a').addClass('hover-yellow') },
         function(){ $('#menu-menu li.menu-item-31 a').removeClass('hover-yellow') }
    )
});