<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhonebookRequest;
use App\Http\Requests\UpdatePhonebookRequest;
use App\Models\Phonebook;
use Illuminate\Http\JsonResponse;

class PhonebookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new JsonResponse(Phonebook::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhonebookRequest $request)
    {
        return new JsonResponse(Phonebook::create($request->all()), JsonResponse::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Phonebook $phonebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phonebook $phonebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhonebookRequest $request, Phonebook $phonebook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phonebook $phonebook)
    {
        //
    }
}
