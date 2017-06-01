<?php
include '41-1.PDO.dsn.php';
session_start();

if (!isset($_SESSION['member'])) header("Location:40.login.php");
$memberObj = $_SESSION['member'];
$pdo = new pdo($dsn, $user, $passwd, $opt);

if (isset($_GET['delete'])){
    $delete = $_GET['delete'];
    $sql = "delete from casfood where id ={$delete} ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}

$sql = "select * from casfood order by tel,addr limit 0,100";
$stmt = $pdo->prepare($sql);
$stmt->execute();

?>
hello, <?php echo $memberObj->realname;?>
<hr>
<table border="1"width="100%">
    <tr>
        <th>ProductNo</th>
        <th>ProductName</th>
        <th>CompanyAddr</th>
        <th>CompanyTel</th>
        <th>CompanyFax</th>
        <th>Delete</th>
    </tr>
    <?php
    while ($row = $stmt->fetchObject()){
        echo "<tr>";
        echo "<td>$row->No</td>";
        echo "<td>$row->Itemname</td>";
        echo "<td>$row->addr</td>";
        echo "<td>$row->tel</td>";
        echo "<td>$row->fex</td>";
        echo "<td><a href='?delete={$row->id}'>del</a> </td>";
        echo "</tr>";
    }

    ?>
</table>
<hr>
<a href="logout.php">Logout</a>
