<?php

use PHPUnit\Framework\TestCase;
use Phpunit\User;

class UserTest extends TestCase
{
    private $user;
    protected function setUp(): void
    {
        $this->user = new User(20, 'Sarvar');
    }

    protected function tearDown(): void
    {
        $this->user = null;
    }

    public function test_user_yaratsa_bolayabti()
    {
        $this->assertSame('Sarvar', $this->user->name);
        $this->assertSame(20, $this->user->age);
        $this->assertEmpty($this->user->favorite_movies);
    }

    public function test_user_name_aytsa_bolayabti()
    {
 

        $this->assertIsString($this->user->tellName());
        $this->assertStringContainsString('Sarvar', $this->user->tellName());
    }

    public function test_user_yoshini_aytsa_bolayabti()
    {
        

        $this->assertIsString($this->user->tellAge());
        $this->assertStringContainsString('20', $this->user->tellAge());
    }

    public function test_yaxshi_korgan_kinosini_qoshasa_boladimi()
    {
        

        $ish = $this->user->addFavoriteMovie('Titanic');
        $this->assertTrue($ish);
        $this->assertContains('Titanic', $this->user->favorite_movies);
        $this->assertCount(1, $this->user->favorite_movies);

    }

    public function test_yaxshi_korgan_kinosini_olib_tashlasa_boladimi()
    {
        

        $this->user->addFavoriteMovie('Titanic');
        $this->user->addFavoriteMovie('Avatar');
        $this->user->addFavoriteMovie('Inception');

        $act = $this->user->removeFavoriteMovie('Avatar');
        $this->assertTrue($act);
        $this->assertNotContains('Avatar', $this->user->favorite_movies);
        $this->assertCount(2, $this->user->favorite_movies);
    }
}
