
//    window.fbAsyncInit = function() {
//        FB.init({
//          appId      : '874350532663118',
//          xfbml      : true,
//          version    : 'v2.5'
//        });
//      };
(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); 
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=874350532663118";
        fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
