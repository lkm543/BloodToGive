<?php include_once("header.php"); ?>

<body>
<?php include_once("get_info.php");?>
    <div id="wrapper">
<?php include_once("sidebar.php");?>        
        <div id="page-wrapper">

            <div class="container-fluid">

                
                <iframe src="https://mapsengine.google.com/map/embed?mid=zGq2VJ5NdtUs.kDYAcwSlWkN8" width="100%" height="640"></iframe>

                                <div class="row">
                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="text-align:center;">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>各捐血中心資訊</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped"  style="text-align:center;width:100%;">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;">捐血站</th>
                                                <th style="text-align:center;">住址</th>
                                                <th style="text-align:center;">營業時間</th>
                                                <th style="text-align:center;">電話</th>
                                                <th style="text-align:center;">備註</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include_once("mysql_info.php");
                                            $sql = "select * from site";
                                            $result = mysqli_query($link,$sql); // 執行SQL查詢引
                                            $number_of_row=mysqli_num_rows($result);
                                            for($k = 0; $k < $number_of_row; $k ++) {
                                             $row = mysqli_fetch_array($result);
                                            echo "<tr>";
                                            echo "<td>";
                                            echo $row["name"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row["address"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row["tel"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row["openhour"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row["note"];
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
                    </div>
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
