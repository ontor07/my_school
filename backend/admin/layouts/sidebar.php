<!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-3">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                 <a href="../../index.php"> <img src="../../asset/logo.png" class="img-fluid" style="height: 50px;width: 70%";></a>
                </div>
              
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="dropdown ">
                        <a href="../../index.php" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                       
                    </li>
                        <li class="dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Developer Option</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="../main_menu/add_main_menu.php">Main Menu</a></li>
                            <li><a class="nav-link" href="../sub_menu/add_sub_menu.php">Sub Menu</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-header">Starter</li>
                    <?php 
                    $sql = $db->link->query("SELECT * FROM `main_menu` WHERE `status`=1");
                    if($sql)
                    {
                        while($main_menu = $sql->fetch_assoc())
                        {
                        ?>
                        <li class="dropdown ">
                            <a href="#" class="nav-link has-dropdown"><i class="<?php echo $main_menu['icon_name'];?>"></i><span><?php echo $main_menu['link_name']; ?></span></a>
                            <ul class="dropdown-menu">
                                <?php 
                                $sql_sub = $db->link->query("SELECT * FROM `sub_menu` WHERE `status`=1");
                                if($sql_sub)
                                {
                                    while ($sub_menu = $sql_sub->fetch_assoc()) 
                                    {
                                        if($main_menu['id'] == $sub_menu['main_menu'])
                                        {
                                    ?>
                                    <li><a class="nav-link" href="<?php echo $sub_menu['route_name'];?>"><?php echo $sub_menu['link_names']; ?></a></li>
                                    <?php
                                        }
                                    }
                                }
                                ?>
                                
                            </ul>
                        </li>
                        <?php
                        }
                    }
                    ?>
          
                </ul>
                
            </aside>
        </div>