<?php include_once("header.php"); ?>
<body>
<?php include_once("get_info.php");?>
    <div id="wrapper">
<?php include_once("sidebar.php");?>        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> 全臺捐血資料
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<?php                               $number_1=0;
                                    $number_2=0;
                                    $number_3=0;
                                    foreach ($data as $key) {
                                        if($key["min"]==1)
                                            $number_1++;
                                        elseif($key["min"]==2)
                                            $number_2++;
                                        elseif($key["min"]==3)
                                            $number_3++;
                                             }
 ?>
                <div class="row">
                    <div class="col-lg-4  col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $number_1;?>個捐血站</div>
                                        <div>庫存四日以下</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $number_2;?>個捐血站</div>
                                        <div>庫存四到七日</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $number_3;?>個捐血站</div>
                                        <div>庫存七日以上</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>各捐血中心情形</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped"  style="text-align:center;">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;">捐血站</th>
                                                <th style="text-align:center;">A</th>
                                                <th style="text-align:center;">B</th>
                                                <th style="text-align:center;">O</th>
                                                <th style="text-align:center;">AB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             foreach ($data as $key) {
                                                echo "<tr>";
                                                echo "<td>";
                                                echo $key["region"];
                                                echo "</td>";
                                                echo "<td ";
                                                switch ($key["StorageA"]) {
                                                    case '0':
                                                        echo "class=\"active\"";
                                                        break;
                                                    case '1':
                                                        echo "class=\"danger\"";
                                                        break;
                                                    case '2':
                                                        echo "class=\"warning\"";
                                                        break;
                                                    case '3':
                                                        echo "class=\"success\"";
                                                        break;
                                                    
                                                    default:
                                                        # code...
                                                        break;
                                                }
                                                echo ">"; 
                                                echo "</td>";
                                                echo "<td ";
                                                switch ($key["StorageB"]) {
                                                    case '0':
                                                        echo "class=\"active\"";
                                                        break;
                                                    case '1':
                                                        echo "class=\"danger\"";
                                                        break;
                                                    case '2':
                                                        echo "class=\"warning\"";
                                                        break;
                                                    case '3':
                                                        echo "class=\"success\"";
                                                        break;
                                                    
                                                    default:
                                                        # code...
                                                        break;
                                                }
                                                echo ">"; 
                                                echo "</td>";
                                                echo "<td ";
                                                switch ($key["StorageO"]) {
                                                    case '0':
                                                        echo "class=\"active\"";
                                                        break;
                                                    case '1':
                                                        echo "class=\"danger\"";
                                                        break;
                                                    case '2':
                                                        echo "class=\"warning\"";
                                                        break;
                                                    case '3':
                                                        echo "class=\"success\"";
                                                        break;
                                                    
                                                    default:
                                                        # code...
                                                        break;
                                                }
                                                echo ">"; 
                                                echo "</td>";
                                                echo "<td ";
                                                switch ($key["StorageAB"]) {
                                                    case '0':
                                                        echo "class=\"active\"";
                                                        break;
                                                    case '1':
                                                        echo "class=\"danger\"";
                                                        break;
                                                    case '2':
                                                        echo "class=\"warning\"";
                                                        break;
                                                    case '3':
                                                        echo "class=\"success\"";
                                                        break;
                                                    
                                                    default:
                                                        # code...
                                                        break;
                                                }
                                                echo ">"; 
                                                echo "</td>";
                                                echo "</tr>";
                                             }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> 最新消息</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">4 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 hours ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">two days ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
