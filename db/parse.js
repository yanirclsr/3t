//initialize
Parse.initialize("zEw8OuVGoLit8vfLuofQZuKAJa6TIWTgKmInIt1F", "fIrnrKcbRuuqMLm0Nkxdz4xoGclDhrOCNdvEveGm");
Parse.$ = jQuery;


Parse.actions= {
    test: function(){
        var TestObject = Parse.Object.extend("accounts");
            var testObject = new TestObject();
            testObject.save({"name": "yanir1"}).then(function(object) {
              console.log("account created");
        });
    },
    users: {
        
        signup: function(first,last,email,pwd){
            var user = new Parse.User();
            user.set("name", first);
            user.set("password", pwd);
            
            user.set("username", email);            
            user.set("email", email);
            user.set("account_id", accountId);


            user.set("last", last);
            user.signUp(null, {
              success: function(user) {
                console.log(user);
              },
              error: function(user, error) {
                // Show the error message somewhere and let the user try again.
                alert("Error: " + error.code + " " + error.message);
              }
            });
        },
        login: function(){
            $('.form-signin').on('submit', function(e) {

                // Prevent Default Submit Event
                e.preventDefault();

                // Get data from the form and put them into variables
                var data = $(this).serializeArray();
                var username = $('#inputEmail').val();
                var password = $('#inputPassword').val();
    //               var username = data[0].value;
    //               var password = data[1].value;

                // Call Parse Login function with those variables
                Parse.User.logIn(username, password, {
                    // If the username and password matches
                    success: function(user) {
                        location.assign("/dashboard.php")
                        console.log(user);
                    },
                    // If there is an error
                    error: function(user, error) {
                        //document.getElementById('error-msg').innerHTML = "Invalid Login Credentials";
                    }
                });

            });
        }
    },
    get:{
        userObj: Parse.User.current(),
        username:function(){
            var name= this.userObj.get("first_name") + " " + this.userObj.get("last_name");
            $('.user-name').text(name);
            return name;
        },
        account: function(){
            var account = this.userObj.get("account_id");
            return account;
        },
        connectedTools: {
            get: function(){
                //console.log(Parse.actions.get.account().id);
                var query = new Parse.Query('accounts');
                query.equalTo("objectId",Parse.actions.get.account().id);   /*Parse.actions.get.account()*/ 
                query.find({
                    success: function(results) {
                        var response = {
                            "sfdc": results[0].attributes.salesforce,
                            "ga" : results[0].attributes.ga,
                            "adwrds" : results[0].attributes.adwords,
                            "twitter" : results[0].attributes.twitter,
                            "facebook" : results[0].attributes.facebook
                        };
                      //console.log(response);
                        $(document).ready(function(){
                            $.each(response, function(key, value) {
                                if(typeof(value) === 'object'){
                                    if(value.active){
                                        $('.'+key).addClass("active-tile");
                                        console.log(key, value);
                                    }

                                }

                            });
                        });


                      window.connectedTools = response;
                      return response;
                  },
                  error: function(myObject, error) {
                    // Error occured
                    console.log( error );
                  }
                });
            }
        },
        audiences: function(){
            var allAudiences = Parse.Object.extend("audiences");
            var query = new Parse.Query(allAudiences);
            query.equalTo("account_id",Parse.actions.get.account() );
            query.find({
                success: function(results) {
                    console.log("Successfully retrieved " + results.length + " scores.");
                    // Do something with the returned Parse.Object values
                    for (var i = 0; i < results.length; i++) {
                        var object = results[i];
                        console.log(object.id + ' - ' + object.get('name'));
                        var status = (function(){if(object.get('status')){return "ON"}else{return "OFF"}});
                        var lastUpdated = (function(){
                            return object.get('updatedAt');
                        })
                        $('#audiences-tbl').append('<tr id="' + object.id +'"><th scope="row">' + status() + '</th><td>' + object.get('name') + '</td><td>' + object.get('size') + ' Leads</td><td>Salesforce</td><td>Facebook, Twitter</td><td>' + lastUpdated() +' </td></tr>');
                    }
                    appendRightClick();
                },
                error: function(error) {
                    alert("Error: " + error.code + " " + error.message);
                }
            });
        }
           
    },
    set: {
        connectedTool: function(tool,obj){
            var a = Parse.actions.get.account();
            a.save(null, {
              success: function(response) {
                // Now let's update it with some new data. In this case, only cheatMode and score
                // will get sent to the cloud. playerName hasn't changed.
                    a.set(tool,obj);
                    a.save();
                    location.reload();
                }
            });
        }
    }
};



//var user = Parse.Object.extend("users");
//var currentUser = Parse.User.current();
//var query = new Parse.Query(currentUser.id);
//query.equalTo("playerName", "Dan Stemkoski");
//query.find({
//  success: function(results) {
//    alert("Successfully retrieved " + results.length + " scores.");
//    // Do something with the returned Parse.Object values
//    for (var i = 0; i < results.length; i++) {
//      var object = results[i];
//      alert(object.id + ' - ' + object.get('playerName'));
//    }
//  },
//  error: function(error) {
//    alert("Error: " + error.code + " " + error.message);
//  }
//});
//
//
