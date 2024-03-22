<?php

it('has phonebookupdate page', function () {
    $phone = \App\Models\Phonebook::factory()->create()->toArray();
    $phone['name'] = 'John Carpenter';
    $response = $this->put("/api/phonebook/{$phone['id']}", $phone);

    $response->assertStatus(200);
});
