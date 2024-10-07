if( $('.view-course-content').hasClass('course-page') === true )
{
 $('body').addClass('course-page-body');
}
$(function(){
    'use strict';

    $(document).on('click','.nav-profile',function(){
        var value = $(this).children('#profileDropdown-navbar').attr('aria-expanded').val();
        console.log('test');
    })

    if($("html").attr("dir") == "rtl") {
        $('body').addClass('rtl');
    }

    $(document).on('click', 'li.menu_item p', function () {
        $(this).toggleClass('open').siblings('ul').toggleClass('show');
    });


    $(".accordion .card-header a").on('click', '.change-input', function () {
        $(".change-input").addClass("mdi-plus").removeClass("mdi-minus");
        $(this).addClass("mdi-minus").removeClass("mdi-plus");
    });

    $(document).on('click','.nav-item.search', function(){
        $('body').addClass('search-open')
    })

    $(document).on('click','.close_search', function(){
        $('body').removeClass('search-open')
    })

    // To add class show in units accourdion
    $(document).on('click', '.btn_plus', function(){
        var parent = $(this).parents('.lessons_card');
        parent.find('.lessons').toggleClass('show');
        if(parent.find('.lessons').hasClass('show')){
            parent.find('.card-header').addClass('show')
        }else{
            parent.find('.card-header').removeClass('show')
        }
    })

    // To make video active scroll to top
    $(document).ready(function(){
        setTimeout(function(){
            $('.playlist-list .inner-list .accordion').animate({
                scrollTop: $('.playlist ol.lessons_list li.active').offset().top - $('.playlist-list .inner-list .accordion').innerHeight()
            }, 'slow');
        }, 10000)
    })

})
