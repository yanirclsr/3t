<?php

function topMenu(){
    
    echo 
    '<div id="top-nav" class="navbar navbar-default navbar-fixed-top">
        <div class="top-left">
            <img class="menu-toggle" src="/files/img/toggle-nav.jpg">
            <a href="/dashboard.php"><img src="/files/img/logo3.png" style="height: 45px; margin-top: 2px;margin-left: 15px;"></a>
        </div>
        <div class="top-right">
            <span class="user-name"><b><script>Parse.actions.get.username();</script></b></span>
            <a href="/settings.php"><img src="files/img/settings-icon.png" class="settings"></a>   
            <img src="files/img/notification5.png" class="notifications">
        </div>
    </div>';


}


function sideBar(){
    echo ' <div id="wrapper">
        
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a href="dashboard.php"><img src="/files/img/dashboard.png" class="sidebar-icon"> Dashboard</a>
                </li>
                <li>
                    <a href="#"><img src="/files/img/insights.png" class="sidebar-icon"> Insights</a>
                </li>
                <li>
                    <a href="audiences.php"><img src="/files/img/audiences.png" class="sidebar-icon"> Audiences</a>
                </li>
                <li>
                    <a href="#"><img src="/files/img/upload.png" class="sidebar-icon"> Import Lists</a>
                </li>

            </ul>
            <div class="slider-bottom">bottom</div>
        </div>
        <!-- /#sidebar-wrapper -->';
}
