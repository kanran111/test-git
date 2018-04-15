<?php
use PHPUnit\Framework\TestCase;
require_once('src/Email.php');

final class EmailTest extends TestCase
{    
    public function testHamCongHaiSo(){ 
        $email = new Email();
        $this->assertEquals($email->congHaiSo(4,5),9);
    }
    public function testHamCongHaiSoARong(){
        $email = new Email();
        $this->assertFalse($email->congHaiSo('',5));
    }
    public function testHamCongHaiSoASoKhongPhaiLaSo(){
        $email = new Email();
        $this->assertFalse($email->congHaiSo('a',5));
    }
    public function testHamCongHaiSoALaKyTuDacBiet(){
        $email = new Email();
        $this->assertFalse($email->congHaiSo('#',5));
    }

    public function testHamCongHaiSoBRong(){
        $email = new Email();
        $this->assertFalse($email->congHaiSo(4,''));
    }
    public function testHamCongHaiSoBSoKhongPhaiLaSo(){
        $email = new Email();
        $this->assertFalse($email->congHaiSo(4,'b'));
    }
    public function testHamCongHaiSoBLaKyTuDacBiet(){
        $email = new Email();
        $this->assertFalse($email->congHaiSo(4,'#'));
    }
}
