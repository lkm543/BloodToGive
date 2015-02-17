<?php include_once("mysql_info.php"); ?>

<?php $sidebar=4 ?>
<?php include_once("_site_header.php"); ?>

<div class="container marketing">
    <h1>捐血日誌</h1>
    <p>本資料將由台灣血液基金會網站取得，目前仍在與該基金會洽商中...</p>

    <?php if (!isset($_SESSION['MM_UserID'])){

    // $user_id = $_SESSION['MM_UserID'];
    // $sql = "SELECT * from user where fb_id = '$user_id'"; //在資料表中選擇所有欄位
    // $result = mysqli_query($link,$sql); // 執行SQL查詢
    // $row = mysqli_fetch_array($result);

    ?>
        <div class="row">
            <div class="col-md-6">
                <h3>基本資料</h3>
                <table class="table">
                    <tr>
                        <th>姓名:</th>
                        <td>王曉明</td>
                        <th>E-mail</th>
                        <td>a123@bloodtogive.org.tw</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3 ">
                <form action="logout.php">
                    <button class="btn btn-danger pull-right" type="submit" value="登出">登出</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                
                <h3>捐血總表</h3>
                <table class="table table-stripe">
                    <thead>
                        <th>#</th>
                        <th>捐血時間</th>
                        <th>捐血地點</th>
                        <th>全血捐血量</th>
                        <th>分離術捐血量</th>
                        
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2014-3-12</td>
                            <td>台大號捐血車</td>
                            <td>250cc</td>
                            <td>0cc</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2014-6-10</td>
                            <td>台大號捐血車</td>
                            <td>250cc</td>
                            <td>0cc</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2014-9-17</td>
                            <td>台大號捐血車</td>
                            <td>500cc</td>
                            <td>0cc</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>2014-12-5</td>
                            <td>台大號捐血車</td>
                            <td>250cc</td>
                            <td>0cc</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>2015-2-16</td>
                            <td>台大號捐血車</td>
                            <td>250cc</td>
                            <td>0cc</td>
                        </tr>
                        <tr>
                            <td>總計</td>
                            <td></td>
                            <td></td>
                            <td>1500cc</td>
                            <td>0cc</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2" style="text-align:center">
                <div class="panel panel-success">
                    <div class="panel-heading">捐血次數</div>
                    <div class="panel-body">
                        <p><span style="font-size:50px">5</span>次</p>

                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">捐血量</div>
                    <div class="panel-body">
                        <p><span style="font-size:50px">1500</span>cc</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3" style="text-align:center">
                <div class="panel panel-success">
                    <div class="panel-heading">下次建議捐血時間</div>
                    <div class="panel-body">
                        <p><span style="font-size:30px">2015-6-12</span></p>

                    </div>
                </div>
            </div>
        </div>
            

<?php } else { ?>

        <div style="text-align:center">
            <h2>請先用FB帳號登入</h2>
            <a class="btn btn-default btn-lg"href="fbconfig.php" style="background-color:#3a5795;color:#fff;font-size:30px">
                Facebook
                <!-- <img src="images/fbsignin.png" width="320px"> -->
            </a>
        </div>

<?php } ?>

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
