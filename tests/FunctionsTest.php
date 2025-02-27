<?php

use PHPUnit\Framework\TestCase;

require 'functions.php';
class FunctionsTest extends TestCase
{ 
    
    public function test_test()
    {
        $this->assertTrue(true);
    }
    public function test_sonlarni_qoshish_boladi()
    {
        $natija = addNumbers(31, 5);
        $this->assertSame(36, $natija);
    }
    public function test_avtomobillarni_qaytarish_boladi()
    {
        $natija = returnCars();
        $this->assertSame(['bmw', 'audi', 'tesla'], $natija);
    }

    public function test_sonlar_notogri_qoshish_xato_berayabti()
    {
        $this->assertNotEquals(40, addNumbers(50,50));
    }

    public function test_biri_nolga_tengmi()
    {
        $this->assertNotSame(0, 1);
    }

    public function test_array_qaytarilayabti()
    {
   
        $this->assertIsArray(returnCars());
    }
}