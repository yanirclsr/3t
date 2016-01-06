<!DOCTYPE html>
<?php 
    require './php/page-elements/layout.php';
    require './php/page-elements/head-elements.php';
 ?>
 
<html lang="en">

<head>

    

    <title>3Targeting | Settings</title>
    <?php insertHead(); ?>
    <script src="/js/settings.js"></script>

    

    <style>
                                    /*  SECTIONS  */
    .section {
            clear: both;
            padding: 0px;
            margin: 0px;
    }

    /*  COLUMN SETUP  */
    .col {
            display: block;
            float:left;
            margin: 1% 0 1% 1.6%;
    }
    .col:first-child { margin-left: 0; }

    /*  GROUPING  */
    .group:before,
    .group:after { content:""; display:table; }
    .group:after { clear:both;}
    .group { zoom:1; /* For IE 6/7 */ }
    /*  GRID OF THREE  */
    .span_3_of_3 { width: 100%; }
    .span_2_of_3 { width: 66.13%; }
    .span_1_of_3 { width: 32.26%; }

    /*  GO FULL WIDTH BELOW 480 PIXELS */
    @media only screen and (max-width: 480px) {
            .col {  margin: 1% 0 1% 0%; }
            .span_3_of_3, .span_2_of_3, .span_1_of_3 { width: 100%; }
    }
</style>

</head>

<body>

    <?php
        topMenu();
        sideBar();
    ?>

   

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Settings</h1>
                        
                        <div class="main-content">


                            <br>
                            
                            <div class="section group" style=" width: 100%; ">
                            <div class="col span_1_of_3">
                                <span class="logo-box">
                                    <a id="sfdc" class="btn btn-info btn-lg logo-tile sfdc"  data-toggle="modal" data-target=".sfdc-modal" href="#">
                                        <img class="logo-img" src="/files/img/salesforce.png">
                                        <p>Salesforce.com</p>
                                    </a>
                                </span>
                            </div>
                            <div class="col span_1_of_3">
                                 <span class="logo-box">
                                     <a id="adwords" class="btn btn-info btn-lg logo-tile adwrds" href="#">
                                        <img class="logo-img" src="/files/img/google_adwords.png">
                                        <p>Google AdWords</p>
                                    </a>
                                </span>
                            </div>
                            <div class="col span_1_of_3">
                               <span class="logo-box">
                                   <a id="ga" class="btn btn-info btn-lg logo-tile ga" href="#">
                                        <img class="logo-img" src="/files/img/google-analytics-logo.png">
                                        <p>Google Analytics</p>
                                    </a>
                                </span >
                            </div>
                            <div class="col span_1_of_3">
                                <span class="logo-box">
                                    <a id="fbAds" class="btn btn-info btn-lg logo-tile facebook" data-toggle="modal" data-target=".fb-modal" href="#">
                                        <img class="logo-img" src="/files/img/facebook-ads.png">
                                        <div>Facebook Ads</div>
                                    </a>
                                </span>
                            </div>
                                <div class="col span_1_of_3">
                                    <span class="logo-box">
                                        <a id="twitter" class="btn btn-info btn-lg logo-tile twitter" href="#">
                                            <img class="logo-img" src="/files/img/twitter-advertising.png">
                                            <p>Twitter Ads</p>
                                        </a>
                                    </span>
                                </div>
                            </div>
                            
                        </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Large modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>-->


<!--FB Modal Start-->
<div class="modal fade fb-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <div class="modal-content" id="fb-modal">
        <h3>Select Your Facebook Ads Account:</h3>
    </div>
     
  </div>
    
</div>
<!--FB Modal End-->
<!--SFDC Modal Start-->
<div class="modal fade sfdc-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
       <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
    <div class="modal-content" id="sfdc-modal">
        <h3>Insert Your Salesfoce.com Credentials:</h3>
        <div class="form-group">
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="consumer-key" placeholder="Insert Your Consumer Key">
          </div>
            <button id="sfdc-submit" class="btn btn-success btn-large pull-left">DONE</button>
        </div>
        <br/>
        
        <a href="#"><i>Need Help?</i></a>
        
    </div>
     
  </div>
    
</div>
<!--SFDC Modal End-->



    <script src="/js/fb.js"></script>
</body>

</html>
