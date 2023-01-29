<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvirontmentTest extends TestCase
{
  public function testGetEnv()
  {
    $appName = env('AUTHOR', 'Nova Ardiansyah');
    $this->assertEquals('Nova Ardiansyah', $appName);
  }
}
