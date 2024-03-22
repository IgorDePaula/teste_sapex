<?php

it('has phonebookindex page', function () {
    $phone = \App\Models\Phonebook::factory()->create();
    $response = $this->get('/api/phonebook');

    $response->assertStatus(200)
        ->assertSeeText($phone->name);
});
