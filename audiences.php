<!DOCTYPE html>
<?php 
    require './php/page-elements/layout.php';
    require './php/page-elements/head-elements.php';
 ?>
 
<html lang="en">

<head>


    <title>3Targeting | Audiences</title>
<!--    <script src="/js/moments.js"></script>-->
    <link href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="http://swisnl.github.io/jQuery-contextMenu/dist/jquery.contextMenu.min.css" rel="stylesheet">
    <?php insertHead(); ?>
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
    <script src="/js/bootstrap-mouse.js"></script>

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
                        <h1>Audiences</h1>
                            
                        
                        <div class="form-group pull-left">
                                <input type="text" class="search form-control" placeholder="Search">
                        </div>
                        <div class="create-audience pull-right form-group">
                            <a href="/audience-editor.php" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> CREATE NEW</a>
                            <!--<a href="/audience-editor.php"><button>CREATE NEW</button></a>-->
                        </div>
                            
                        <table class="table table-hover table-bordered results " cellspacing="0" id="audiences-table">
                            
                              <thead>
                                <tr>
                                  <th >Status</th>
                                  <th class="col-md-4 col-xs-4">Audience Name</th>
                                  <th class="col-md-4 col-xs-4">Size</th>
                                  <th class="col-md-4 col-xs-4">Source</th>
                                  <th class="col-md-4 col-xs-4">Target Channels</th>
                                  <th class="col-md-3 col-xs-3">Last Synced</th>
                                </tr>
                                <tr class="warning no-result">
                                  <td colspan="5"><i class="fa fa-warning"></i> No result</td>
                                </tr>
                              </thead>
                              <tbody id="audiences-tbl">
                              </tbody>
                            </table>
                        <script>Parse.actions.get.audiences();</script>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
<ul id="contextMenu" class="dropdown-menu" role="menu" style="display:none" >
    <li><a tabindex="-1" href="#" value="menu1:action-1">Edit</a></li>
    <li><a tabindex="-1" href="#" value="menu1:action-2">Delete</a></li>
    <li class="divider"></li>
    <li><a tabindex="-1" href="#" value="action-3">Pause</a></li>
    <li><a tabindex="-1" href="#" value="action-4">Launch</a></li>
</ul>
<ul id="contextMenuUsername" class="dropdown-menu" role="menu" style="display:none" >
    <li><a tabindex="-1" href="#" value="menu2:action-1">User action</a></li>
    <li><a tabindex="-1" href="#" value="menu2:action-2">Another user action</a></li>
</ul>
    <span class="context-menu-one btn btn-neutral">press that button</span>

</body>

</html>
