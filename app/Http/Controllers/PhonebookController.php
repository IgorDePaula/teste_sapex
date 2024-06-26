<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhonebookRequest;
use App\Http\Requests\UpdatePhonebookRequest;
use App\Models\Phonebook;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
     * Update the specified resource in storage.
     */
    public function update(UpdatePhonebookRequest $request, Phonebook $phonebook)
    {
        return new JsonResponse($phonebook->update($request->all()), JsonResponse::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phonebook $phonebook)
    {
        return new JsonResponse($phonebook->delete(), JsonResponse::HTTP_ACCEPTED);
    }

    public function report(Request $request)
    {
        $phone = new Phonebook();
        if ($request->name) {
            $phones = $phone->where('name', 'like', '%' . $request->name . '%')->get();
            return view('report', ['data' => $phones]);
        }
        return view('report', ['data' => $phone->all()]);
    }
}
