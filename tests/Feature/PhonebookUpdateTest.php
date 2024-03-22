<?php

it('has phonebookupdate page', function () {
    $phone = \App\Models\Phonebook::factory()->create()->toArray();
    $phone['name'] = 'John Carpenter';
    $response = $this->put("/api/phonebook/{$phone['id']}", $phone);

    $response->assertStatus(201);
});

it('has phonebookupdate page fails', function () {
    $phone['name'] = 'John Carpenter';
    $response = $this->put("/api/phonebook/3", $phone);

    $response->assertStatus(404);
});
