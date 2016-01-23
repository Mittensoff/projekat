//============================//
//category/sub_category menu JS
//============================//
$(document).ready(function () {

    //$('li[class^="sub_category_li"]').css({'display': 'none'});

    $(".category_li").hover(
        function () {

            $(".sub_category_ul").find('.sub_'+$(this).attr('id')).css({'display':'list-item'});
            $('.sub_'+$(this).attr('id')).css({'display':'list-item'});

        },
        function () {
            $(".sub_category_ul").find('.sub_'+$(this).attr('id')).css({'display':'none'});
        }
    )
});


