<?php


namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Create2Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_createtest()
    {
        $this->visit('/login')->see('Login');


        //user input username and password
        $this->submitForm('Login',[
            'email' => 'ydamanik@gmail.com',
            'password' => 'password',
        ]);
        // user buka halaman buat post baru
        $this->visit('/dashboard/posts/create');

        // user isi `title`, publish slug dan body,
        // lalu klik tombol save

        $this->submitForm('submit', [
            'title' => 'Belajar Laravel 8',
            'slug' => 'belajar-laravel-8',
            'category' => 'Web Programing',
            'body' => 'Ini adalah content tutorial belajar laravel 8'
        ]);

        // lihat data post di database
        $this->seeInDatabase('posts', [
            'title' => 'Belajar Laravel 8',
            'slug' => 'belajar-laravel-8',
            'body' => 'Ini adalah content tutorial belajar laravel 8'
        ]);

        // ter-redirect ke halaman daftar post
        $this->seePageIs('/dashboard/posts');

        // lihat post yang sudah diinput
        $this->see('Belajar Laravel 8'); // ini titlenya
        // $this->see('Publish'); // ini statusnya
    }
}
