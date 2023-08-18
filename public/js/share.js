$(function () {
    /*Define some constants */

    var ARTICLE_TITLE = encodeURIComponent($('meta[property="og:title"]').attr('content'));
    var ARTICLE_URL = encodeURIComponent($('meta[property="og:url"]').attr('content'));
    var MAIN_IMAGE_URL = encodeURIComponent($('meta[property="og:image"]').attr('content'));

    $('#share-fb').click(function () {
        open_window('http://www.facebook.com/sharer/sharer.php?u=' + ARTICLE_URL, 'facebook_share');
    });

    $('#share-twitter').click(function () {
        open_window('http://twitter.com/share?url=' + ARTICLE_URL, 'twitter_share');
    });
    $('#share-fb2').click(function () {
        open_window('http://www.facebook.com/sharer/sharer.php?u=' + ARTICLE_URL, 'facebook_share');
    });

    $('#share-twitter2').click(function () {
        open_window('http://twitter.com/share?url=' + ARTICLE_URL, 'twitter_share');
    });

    $('#share-linkedin').click(function () {
        open_window('https://www.linkedin.com/shareArticle?mini=true&url=' + ARTICLE_URL + '&title=' + ARTICLE_TITLE + '&summary=&source=', 'linkedin_share');
    });

    $('#share-pinterest').click(function () {
        open_window('https://pinterest.com/pin/create/button/?url=' + ARTICLE_URL + '&media=' + MAIN_IMAGE_URL + '&description=' + ARTICLE_TITLE, 'pinterest_share');
    });

    $('#share-tumblr').click(function () {
        open_window('http://www.tumblr.com/share/link?url=' + ARTICLE_URL + '&name=' + ARTICLE_TITLE + '&description=' + ARTICLE_TITLE, 'tumblr_share');
    });

    function open_window(url, name) {
        window.open(url, name, 'height=320, width=640, toolbar=no, menubar=no, scrollbars=yes, resizable=yes, location=no, directories=no, status=no');
    }
});