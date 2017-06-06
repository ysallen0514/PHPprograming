<!--//brad52-->
<?php
include 'PDO.dsn.php';
session_start();

$pdo = new pdo($dsn, $user, $password, $opt);

$sql = "SELECT * FROM member";
$stmt = $pdo->prepare($sql);
$stmt->execute();
echo "<table border='1'>";
while ($Obj = $stmt->fetchObject()) {
    echo "<tr>";
    echo "<td>$Obj->id</td>";
    echo "<td>$Obj->account</td>";
    echo "<td>$Obj->password</td>";
    echo "</tr>";
}
echo "</table>";