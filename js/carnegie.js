jQuery.noConflict();
jQuery( document ).ready(function( $ ) {
	// Random header images
	var imageClasses = ['helix', 'cells', 'glass'];
  	$('#banner').addClass(imageClasses[Math.floor(Math.random() * imageClasses.length)]);

  	// Match heights
    $('.fp-events').matchHeight({
        target: $('#fp-news')
    });

    //convert relative image url to absolute for hq feeds news
    var image = ".node-type-news-article #content .field-name-body img";
    if ($(image)) {
        $(image).each(function () {
            var rUrl = $(this).attr('src');
            // if url is relative, change it to absolute
            if (rUrl.indexOf("http") < 0) {
                rUrl = "https://carnegiescience.edu" + rUrl;
            }
            $(this).attr('src',rUrl);
        })
    }

    //click outside menu to close
    $('html').click(function () {
        var menu = $('ul.sf-menu');
        if (menu.hasClass('sf-expanded')) {
            menu.removeClass('sf-expanded');
            menu.addClass('sf-hidden');
        }
    });
    //if click on the menu or toggle button do not close, bind event to menu block instead of toggle button because it needs click to toggle
    $('#main-navigation').click(function (e) {
        e.stopPropagation();
        //Can only bind one object at a time
    });
    $('ul.sf-menu a').click(function (e) {
        e.stopPropagation();
    });

});