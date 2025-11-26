jQuery(function () {
    // スクロールを開始したら
    $(window).on('scroll', function () {
        // ファーストビューの高さを取得
        mvHeight = $('.section-hero').height();
        if ($(window).scrollTop() > mvHeight) {
            // スクロールの位置がファーストビューより下の場合にclassを付与
            $('.site-header').addClass('add-bk-color');
        } else {
            // スクロールの位置がファーストビューより上の場合にclassを外す
            $('.site-header').removeClass('add-bk-color');
        }
    });
});
