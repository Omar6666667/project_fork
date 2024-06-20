<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">Omar</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="<?php

                    if ($status === "Dashboard") {
                        echo "active";
                    }
                    ?>"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>

        <li class="<?php

                    if ($status === "Products") {
                        echo "active";
                    }
                    ?>"><a href="products.php"><em class="fa fa-product-hunt">&nbsp;</em> Products</a></li>

        <li class="<?php

                    if ($status === "Category") {
                        echo "active";
                    }
                    ?>"><a href="category.php"><em class="fa fa-th-list">&nbsp;</em> Category</a></li>

        <li class="<?php

                    if ($status === "Brand") {
                        echo "active";
                    }
                    ?>"><a href="brand.php"><em class="fa fa-th-list">&nbsp;</em> Brand</a></li>

        <li class="<?php

                    if ($status === "Users") {
                        echo "active";
                    }
                    ?>"><a href="users.php"><em class="fa fa-user">&nbsp;</em> Users</a></li>

        <li class="<?php

                    if ($status === "Pr") {
                        echo "active";
                    }
                    ?>"><a href="pr.php"><em class="fa fa-user">&nbsp;</em> Pr</a></li>

        <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div><!--/.sidebar-->