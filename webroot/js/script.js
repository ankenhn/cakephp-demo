jQuery(document).ready(function($) {
    var setContentHeight = function() {
        var contentHeight = $(window).height() - $('header').height() - $('.sub-header').height() - $('footer').height();
        $('#content').height(contentHeight);
    };

    setContentHeight();
    $(window).resize(function() {
        setContentHeight();
    });

    var stateLoading = false;
    $('#content').scroll(function() {
        var offset = $(this).scrollTop();
        if(offset == $(this).find('.list-view').height() - $(this).height()) {
            if(stateLoading) {
                return;
            }
            stateLoading = true;
            $('.loading').show();
            //over bottom
            var html = '';
            $(this).find('.list-view').append(html);
            $('.loading').hide();
        }
    });



});