<?php include_once("header.php"); ?>
<body>
<?php include_once("get_info.php");?>
    <div id="wrapper">
<?php include_once("sidebar.php");?>        
        <div id="page-wrapper">

<?if (isset($_SESSION['MM_UserID'])){

$user_id=$_SESSION['MM_UserID'];
include_once("mysql_info.php");
$sql = "select * from user where fb_id = '$user_id'"; //在資料表中選擇所有欄位

$result = mysqli_query($link,$sql); // 執行SQL查詢

$row = mysqli_fetch_array($result);

?>

<div class="row">

<div class="col-md-6 col-md-offset-3">
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-3">姓名</div>
  <div class="col-md-6"><?php echo $row[name];?></div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-3">email</div>
  <div class="col-md-6"><?php echo $row[email];?></div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-3">上次捐血日期</div>
  <div class="col-md-6"><?php echo $row[donate_date];?></div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-3">上次捐血位置</div>
  <div class="col-md-6"><?php echo $row[donate_place];?></div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-3">捐血次數</div>
  <div class="col-md-6"><?php echo $row[donate_times];?></div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-3">全血捐血量</div>
  <div class="col-md-6"><?php echo $row[donate_volume];?></div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-3">分離式捐血次數</div>
  <div class="col-md-6"><?php echo $row[donate_divide_times];?></div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-3">下次捐血時間</div>
  <div class="col-md-6"><?php echo $row[next_donate_date];?></div>
  <div class="col-md-1"></div>
</div>
<form action="logout.php">
    <input type="submit" value="登出">
</form>
</div>

</div>
<? } else {?>

<div style="text-align:center"><a href="fbconfig.php"><img src="images/fbsignin.png" width="320px"></a></div>

<?php }?>

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
