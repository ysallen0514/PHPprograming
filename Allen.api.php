<?php

class Cart
{
    private $menber;
    private $list;
    function __construct($member)
    {
        $this ->list = array();
        $this ->menber = $member;
    }
    function addItem($pid, $qty){
        $this ->list[$pid] =  $qty;
    }
    function removeItem(){
        $pid =0;
        unset($this ->list[$pid]);
    }
    function getList(){
        return $this ->list;
    }
    function getMember(){
        return $this ->menber;
    }
}
class Member{
    var $twid;
    function __construct($twid)
    {
        $this ->twid = new TWID($twid);
    }
}


class TWID
{
    static $counter = 0;
    var $id;

    function __construct($id)
    {
        $this->id = $id;
        TWID::$counter++;
    }

    function getGender()
    {
        TWID::checkId();
            return true;
    }

    function getArea()
    {
        return '台中市';
    }

    static public function checkId($twid)
    {
        $ret = 0; //格式錯誤
        $pattern = '/^[A-Z][12][0-9]{8}$/';
        $ID = preg_match($pattern, $twid);
        if ($ID > 0) {
            $n12s = substr($twid, 0, 1);
            $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
            $n12 = strpos($letters, $n12s) + 10;
            $n1 = (int)($n12 / 10);
            $n2 = $n12 % 10;
            $n3 = substr($twid, 1, 1);
            $n4 = substr($twid, 2, 1);
            $n5 = substr($twid, 3, 1);
            $n6 = substr($twid, 4, 1);
            $n7 = substr($twid, 5, 1);
            $n8 = substr($twid, 6, 1);
            $n9 = substr($twid, 7, 1);
            $n10 = substr($twid, 8, 1);
            $n11 = substr($twid, 9, 1);
            $sum = $n1 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 + $n7 * 4 + $n8 * 3 + $n9 * 2 + $n10 + $n11;
            if ($sum % 10 == 0) {
                $ret = 1; //OK
            } else {
                $ret = -1; //檢查碼沒過
            }
        }
        return $ret;
    }
}


class bike
{
    protected $speed;

    function __construct()
    {
        echo "construct";
    }

    function speedUp($gear = 1)
    {
        $this->speed = ($this->speed < 1) ? 1 : $this->speed * 1.2;
    }

    function speedDown($gear = 1)
    {
        $this->speed = ($this->speed < 1) ? 0 : $this->speed * 0.7;
    }

    function getSpeed()
    {
        return $this->speed;
    }
}

class scooter extends bike
{
    function __construct()
    {
        parent::__construct();
        echo "v2";
    }

    function speedUp($gear = 1)
    {
        parent::speedUp($gear);
        $this->speed *= 2;
    }

    function speedDown($gear = 1)
    {
        parent::speedDown($gear); // TODO: Change the autogenerated stub
        $this->speedDown();
    }

}