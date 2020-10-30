<?php
include_once("classes/DB.php");
use classes\DB;
$db = new DB("localhost", "root", "", "portalove", 3306);
$menuItems = $db->getMenuItems();
?>

<div class="cd-slider-nav">
    <nav class="navbar">
        <div class="tm-navbar-bg">

            <a class="navbar-brand text-uppercase" href="#"><i class="fa fa-picture-o tm-brand-icon"></i>Seriózny názov</a>

            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                &#9776;
            </button>
            <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                <ul class="nav navbar-nav">

                    <?php
                    foreach ($menuItems as $key => $menuItem) {
                    ?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $menuItem['file_path']; ?> "data-no="<?php echo $menuItem['data_no']; ?>"><?php echo $menuItem['nazov']; ?> <span class="sr-only">(current)</span>
                        </a>
                    </li>
                        <?php
                    }
                    ?>


                </ul>
            </div>
        </div>

    </nav>
</div>