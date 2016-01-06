Parse.actions.get.connectedTools.get();


$(document).ready(function(){
        //salesforce
    $('#sfdc-submit').click(function(){
        var instance = "https://login.salesforce.com/services/oauth2/authorize?";
        var ResponseType = "code";
        var key = $('#consumer-key').val();
        var callback = "https://x3targeting.herokuapp.com/salesforce/oauth2callback";
        var accountId= Parse.actions.get.account().id;
        var url = instance + "response_type=" + ResponseType + "&client_id=" + key + "&redirect_uri=" + callback + "&state=" + accountId;;
        window.location.assign(url);

    });


    //facebook

    $("#fbAds").click(function(){
        FB.login(function(userResponse) {
            console.log(userResponse);
            FB.api(
                '/me/adaccounts',
                'GET',
                {"fields":"name,account_status,amount_spent"},
                function(adsAccountResponse) {

                    var a = adsAccountResponse.data;
                    for(i=0;i<a.length;i++){
                        //console.log(a[i]);
                        if(a[i]["account_status"] && ["Insightera","Marketo"].indexOf(a[i].name) ===-1 && document.body.innerHTML.indexOf(a[i].id)===-1){
                            //console.log(a[i]);
                            //$('#fb-modal').append('<a href="#" class="btn btn-success btn-large" data-dismiss="modal" data-spent="' + a[i]['amount_spent'] + '" data-userid="' + a[i].id +  '">' + a[i].name + '</a><br/>');
                            $('#fb-modal').append('<button class="fb-select btn btn-success btn-large" data-dismiss="modal" data-spent="' + a[i]['amount_spent'] + '" data-accountid="' + a[i].id +  '">' + a[i].name + '</button>');
                        }
                    }
                    $('.fb-select').on("click",function(){
                        console.log("click");
                        var obj ={
                            "active":true,
                            "user_id": $(this).attr("data-accountid"),
                            'spent': $(this).attr("data-spent")
                        }
                        console.log(obj);
                        
                        Parse.actions.set.connectedTool("facebook",obj);
                    });
                }
            );
        }, {scope: 'email,ads_management,ads_read'});     
    });
    
    $('#adwords').click(function(){
        location.assign("https://accounts.google.com/o/oauth2/auth?redirect_uri=https://x3targeting.herokuapp.com/google-adwords/oauth2callback&response_type=code&client_id=280160838890-kjhls6qlss26fj1f2kr7v61fh5esmmuk.apps.googleusercontent.com&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fadwords&approval_prompt=force&access_type=offline&state="+Parse.actions.get.account().id);
    });
});
