<form action="18-1.php" method="get">
    Name : <input type="text" name="account"><br>
    Password : <input type="password" name="account"><br>
    Birthday : <input type="date" name="birthday"><br>
    <select name="area">
        <option value="401">東區</option>
        <option value="402">西區</option>
        <option value="403">南區</option>
        <option value="404">北區</option>
    </select><br>
    <input type="radio" name="gender" checked>Male
    <input type="radio" name="gender">Female<br>
    <input type="checkbox" name="interest[]" value="1">打電動
    <input type="checkbox" name="interest[]" value="2">打打包
    <input type="checkbox" name="interest[]" value="3">打醬油<br>
    <input type="checkbox" name="interest[]" value="4">打擊樂
    <input type="checkbox" name="interest[]" value="5">打坦克
    <input type="checkbox" name="interest[]" value="6">打輸出<br>
    <textarea name="memo"></textarea><br>
    <input type="file" name="upload"/>
    <input type="submit" id="送出">
</form>