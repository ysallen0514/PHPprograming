<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<form class="bs-example bs-example-form" id="form1" name="form1" action="" method="post">
    <div class="col-lg-6">
        <div class="input-group">
            <input class="form-control" type="text" id="addr" name="addr" placeholder="地點">
            <span class="input-group-btn">
            <input type="submit" class="btn btn-default" id="button" name="button" value="搜尋">
          </span>
        </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
</form>

<div id="result" style="margin-top: 10px;">
<?php
include '../41-1.PDO.dsn.php';

if (!isset($_POST['addr'])) die("");
$addr = $_POST['addr'];
$pdo = new pdo($dsn, $user, $passwd, $opt);
$sql = "select * from casfood where addr LIKE '%$addr%'";
$stmt = $pdo->prepare($sql);
$stmt->execute();

if ($addr != "") {
    echo "";
    echo "<table border=\"1\" width=\"100%\">";
    echo "<tr>";
    echo "<th>商品</th>";
    echo "<th>地址</th>";
    echo "<th>電話</th>";
    echo "</tr>";


    while ($row = $stmt->fetchObject()) {
        echo "<tr>";
        echo "<td>$row->Itemname</td>";
        echo "<td>$row->addr</td>";
        echo "<td>$row->tel</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "";
}
?>
</div>

</body>
</html>