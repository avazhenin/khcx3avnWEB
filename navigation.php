<!--Header-->
<header class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a id="logo" class="pull-left" href="index.php"></a>
            <div class="nav-collapse collapse pull-right">
                <ul class="nav">
                    <?php
                    echo'<li ' . $index . '><a href = "index.php">Home</a></li>';
                    echo'<li ' . $about . '><a href = "about-us.php">About Kazakhstan</a></li>';
                    echo'<li ' . $food . '><a href = "food.php">Food</a></li>';
                    echo'<li ' . $landscape . '><a href = "landscape.php">Landscape</a></li>';
                    echo'<li ' . $facts . '><a href = "facts.php">Interesting facts</a></li>';
                    echo'<li ' . $feedback . '><a href = "feedback.php">Leave feedback</a></li>';
                    ?>
                </ul>        
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>
<!-- /header -->
</div>