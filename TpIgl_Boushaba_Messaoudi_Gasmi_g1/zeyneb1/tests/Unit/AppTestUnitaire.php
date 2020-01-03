<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class AppTestUnitaire extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     /**
     * @runTestInSeparateProcess
     * */

    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * @runTestInSeparateProcess
     * */
    public function testDatabaseEtudiant()
    {
        // Make call to application...

        $this->assertDatabaseHas('etudiants', [
            'Niveau' => '1cs'
        ]);
    }
    public function testDatabaseFile()
    {
        // Make call to application...

        $this->assertDatabaseHas('files', [
            'name' => 'Processus.pdf'
        ]);
    }
}
