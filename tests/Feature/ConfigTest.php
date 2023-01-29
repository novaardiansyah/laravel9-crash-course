<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigTest extends TestCase
{
  public function testConfig()
  {
    $first_name = config('contoh.author.first_name');
    $last_name = config('contoh.author.last_name');
    $github = config('contoh.github');
    $email = config('contoh.email');
    $phone = config('contoh.phone');

    $this->assertEquals('Nova', $first_name);
    $this->assertEquals('Ardiansyah', $last_name);
    $this->assertEquals('https://github.com/novaardiansyah', $github);
    $this->assertEquals('novaardiansyah78@gmail.com', $email);
    $this->assertEquals('+62 895 0666 8480', $phone);
  }
}
