<!DOCTYPE html>
<?php 
    require './php/page-elements/layout.php';
    require './php/page-elements/head-elements.php';
 ?>

<html lang="en">

<head>
    <title>3Targeting | Dashboard</title>
    <?php
        insertHead();
    ?>

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
                        <h1>Audience Editor</h1>
                        <div class="main-content"></div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>
