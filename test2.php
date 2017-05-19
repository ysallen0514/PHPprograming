<?php
if(isset($_GET["x"])) {
    $x = $_GET["x"];
    $y = $_GET["y"];
    $r = $x + $y;
}
?>




<form /*action="test3.php"*/>
    <input type = "text" name = "x" id = "x" value="<?php echo $x; ?>"/>
    <select>
        <option>+</option>
        <option>-</option>
        <option></option>
        <option></option>
    </select>
    <input type = "text" name = "y" id = "x" value="<?php echo $y; ?>"/>
<!--    <input type = "button" >-->
    <input type = "submit" value = "=" />
    <?php
    echo $r;
    ?>




</form>







