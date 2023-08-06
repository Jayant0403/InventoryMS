<div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">NIKE</h3>
            <div class="dashboard_sidebar_user">
                <img src="https://lh3.googleusercontent.com/a/AGNmyxZKsxbBQbZy3owjh7WpX5noh8AVYcg-sEHcDTYvIw=s360" alt="User Image." id="newimg"/>

                <span> 
                <?= $user['first_name']. ' ' .$user['last_name']?>
                </span>
            </div>
            <div class="dashboard_sidebar_menu">
                <ul class="dashboard_menu_lists">
                    <ul  class="menuActive">
                        <a href="./dashboard.php"><i id="ico" class="fa-solid fa-gauge "></i><span class="menutext">Dashboard</span></a>
                    </ul>
                    
                    <ul  class="menuActive">
                        <a href="javascript:void(0);" class="showHideSubmenu"  >
                        <i id="ico" class="fa-sharp fa-solid fa-tag showHideSubmenu" ></i>
                        <span class="menutext showHideSubmenu" >Product Management</span>
                        <i class="fa fa-angle-left MainMenuangle showHideSubmenu"  ></i>
                    </a>

                        <ul class="subMenus" id="user">
                            <ul class="subMenuLinks">
                            <a href="./product-add.php"><i class="fa fa-circle-o"></i>View Products</a>
                            </ul>
                            <ul class="subMenuLinks">
                            <a href="./product-add.php"><i class="fa fa-circle-o"></i>Add Products</a>
                            </ul>
                    </ul>
                    <ul  class="menuActive">
                        <a href="javascript:void(0);" class="showHideSubmenu"  >
                        <i id="ico" class="fa-sharp fa-solid fa-truck showHideSubmenu" ></i>
                        <span class="menutext showHideSubmenu" >Supplier Management</span>
                        <i class="fa fa-angle-left MainMenuangle showHideSubmenu"  ></i>
                    </a>

                        <ul class="subMenus" id="user">
                            <ul class="subMenuLinks">
                            <a href=""><i class="fa fa-circle-o"></i>View Supplier</a>
                            </ul>
                            <ul class="subMenuLinks">
                            <a href=""><i class="fa fa-circle-o"></i>Add Supplier</a>
                            </ul>
                    </ul>
                    <ul  class="menuActive showHideSubmenu " >
                        <a href="javascript:void(0);" class="showHideSubmenu"  >
                        <i id="ico" class="fa-sharp fa-solid fa-user-plus showHideSubmenu" ></i>
                        <span class="menutext showHideSubmenu" >User Management</span>
                        <i class="fa fa-angle-left MainMenuangle showHideSubmenu"  ></i>
                    </a>

                        <ul class="subMenus" id="user">
                            <ul class="subMenuLinks">
                            <a href=""><i class="fa fa-circle-o"></i>View Users</a>
                            </ul>
                            <ul class="subMenuLinks">
                            <a href="./user-add.php"><i class="fa fa-circle-o"></i>Add Users</a>
                            </ul>
                        </ul>
                       
                    </ul>
                </ul>
            </div>
            
        </div>