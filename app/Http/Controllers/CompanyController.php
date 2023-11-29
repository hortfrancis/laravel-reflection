<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get 10 companies per page
        $companies = Company::paginate(10);

        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        // dd($request->all());
        // return 'in store method';

        $company = new Company($request->validated());
        $company->save();

        return redirect()->route('companies.index')->with('success', "Company added successfully: " .  $company->name ?? '');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = Company::with('employees')->findOrFail($id);
        return view('companies.show', compact('company'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::find($id);

        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCompanyRequest $request, string $id)
    {
        // return 'in update method';

        $company = Company::find($id);
        $company->update($request->validated());

        return redirect()->route('companies.index')->with('success', "Company updated successfully: " .  $company->name ?? '');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
