<?php
//declare(strict_types=1);

final class Email
{
    private $email;

    public function __construct()
    {
        
    }
    public function congHaiSo($a = 0,$b = 0){
        if(!$this->testHaiSoPhaiLaSoKhong($a,$b)){
            return false;
        }
        return $a+$b;
    }
    // public function truHaiSo($a = 0, $b = 0){
    //     if(!$this->testHaiSoPhaiLaSoKhong($a,$b)){
    //         return false;
    //     }
    //     return $a-$b;
    // }
    // public function nhanHaiSo($a=0,$b=0){
    //     if(!$this->testHaiSoPhaiLaSoKhong($a,$b)){
    //         return false;
    //     }
    //     return $a*$b;
    // }
    // public function chiaHaiSo($a=0,$b=0){
    //     if(!$this->testHaiSoPhaiLaSoKhong($a,$b)){
    //         return false;
    //     }
    //     if( $b == 0  ){
    //         echo 'mau so khong duoc khac 0 ';
    //         return false;
    //     }
    //     return $a/$b;
    // }
    private function testHaiSoPhaiLaSoKhong($a = 0,$b = 0){
        if( !is_numeric($a) || !is_numeric($b) ){
            sprintf(
                'a = "%s", b="%s" Khong phai la so',
                $a,$b
            );
            return false;
        }
        return true;
    }
}