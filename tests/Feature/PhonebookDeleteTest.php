<?php

it('has phonebookdelete page', function () {
    $phone = \App\Models\Phonebook::factory()->create()->toArray();
    $response = $this->delete("/api/phonebook/{$phone['id']}");

    $response->assertStatus(202);
});

it('has phonebookdelete page fails', function () {
    $response = $this->delete("/api/phonebook/3");

    $response->assertStatus(404);
});
