<?php

use Phpunit\Box;
use PHPUnit\Framework\TestCase;

class BoxTest extends TestCase
{
    private Box $box;

    protected function setUp(): void
    {
        $this->box = new Box(['Qalam', 'Ruchka', 'Qaychi']);
    }
    
    public function test_quti_ichidda_element_bor()
    {
        $this->assertTrue($this->box->has('Qalam'));
        $this->assertFalse($this->box->has('Igna'));
    }

    public function test_quti_ichidan_element_olib()
    {
       $this->assertSame('Qalam', $this->box->takeOne());
       $this->assertNotContains('Qalam', $this->box->items);
    }

    public function test_element_bilan_boshlanadiganlar()
    {
        $natija = $this->box->startsWith('Q');
        $this->assertCount(2, $natija);
        $this->assertContains('Qalam', $natija);
        $this->assertContains('Qaychi', $natija);

        $this->assertEmpty($this->box->startsWith('I'));
    }

    public function test_elementlar_qoshasa_bolayabti()
    {
       $ish = $this->box->addItem('Non');
            $this->assertTrue($ish);
            $this->assertContains('Non', $this->box->items);
    }

    public function test_qutudan_nomi_berilgan_elementni_olibtashlash_kerak()
    {
        $ish = $this->box->removeItem('Qalam');

        $this->assertTrue($ish);
        $this->assertNotContains('Qalam', $this->box->items);
    }
}