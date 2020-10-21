<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ParticipantTest extends TestCase
{
    /** @test */
    public function aParticipantCanRegister(){

        $this->withoutExceptionHandling();

        $response = $this->post('/sign-up', [
            'first_name' => ['test person'],
            'last_name' => ['test person'],
            'address_1' => ['test'],
            'address_2' => ['test'],
            'gender' => ['MALE'],
            'birthday' => ['2020-10-22'],
            'contact_number' => [9268740496],
            'email_address' => ['admin@admin.com'],
            'shirt_size' => ['M'],
            'terms_and_condition' => 'on'
        ]);

        $response->assertOK();

    }

    //  ./vendor/bin/phpunit --filter aParticipantCanRegister
}