<?php

it('has phonebookcreate page', function () {

    $phone = \App\Models\Phonebook::factory()->make()->toArray();

    $response = $this->post('/api/phonebook', $phone);

    $response->assertStatus(201);
});


it('has phonebookcreate page fail', function () {

    $phone = \App\Models\Phonebook::factory()->make()->toArray();
    $phone['cpf'] = 'qwe123';
    $response = $this->post('/api/phonebook', $phone);

    $response->assertStatus(302);
});
