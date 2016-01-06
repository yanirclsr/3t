<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php 
    $baseUrl="";
    if(isset($_GET['url'])){
        $baseUrl= $_GET["url"];
    }else{
        $baseUrl = "http://m.ynet.co.il/8";
    };
    echo "<base href='".$baseUrl."'/>"
    
    ?>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--<script src="http://vitalets.github.io/x-editable/assets/x-editable/bootstrap-editable/js/bootstrap-editable.js"></script>-->
    <!--<script src="http://vitalets.github.io/x-editable/assets/mockjax/jquery.mockjax.js"></script>-->
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-combined.min.css">
    <!--<link rel="stylesheet" type="text/css" href="http://vitalets.github.io/x-editable/assets/x-editable/bootstrap-editable/css/bootstrap-editable.css">-->
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>




<!--    <head>
        
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      
        <script>
            alert("123");
        </script>
    </body>-->
  <?php
                $fp = fopen($baseUrl, 'r');
$data = '';
while(!feof($fp)) 
   $data .= fread($fp, 4092); 
fclose($fp); 

echo $data;
        ?>
$('a')
//class="editable editable-click"
</html>
