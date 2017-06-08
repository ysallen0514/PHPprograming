<head>
    <link rel="stylesheet" href="./css/jquery.mobile-1.3.2.min.css" />
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/jquery.mobile-1.3.2.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCs4xqnWr2UbCS-4GzLg3nPwfDFHrdSylQ"></script>
</head>
<body>

<?php
include 'PDO.dsn.php';
session_start();
if (!isset($_GET['editid'])) header('Location:38.ID.PW.php');
$editid = $_GET['editid'];
$_SESSION['id'] = $editid;
$pdo = new pdo($dsn, $user, $passwd, $opt);
$sql = "select * from travel where id={$editid}";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$editObj = $stmt->fetchObject()
?>
<div class="landmark">
    <div id="photo"><img src="<?php echo $editObj->photo; ?>"></div>
    <div id="name"><?php echo $editObj->name; ?></div>
    <div id="tel"><?php echo $editObj->tel; ?></div>
    <div id="intro"><?php echo $editObj->intro; ?></div>
    <div id="addr"><?php echo $editObj->addr; ?></div>
</div>

<hr>
<div>
<div id="googleMap" style="width: 400px; height: 300px;"></div>
</div>

<script>
    var coordinate = new google.maps.LatLng(<?php echo $editObj->coordinate; ?>)
    var mapProp = {

        center : coordinate,
        zoom : 15,
        mapTypeId : google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(
        $("#googleMap")[0],
        mapProp);
    var marker = new google.maps.Marker({
        position: coordinate,
        animation: google.maps.Animation.BOUNCE
    });

    marker.setMap(map);
</script>

</body>

