<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use Illuminate\Support\Facades\Log;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        // Get 10 companies per page
        $companies = Company::paginate(10);

        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request): \Illuminate\Http\RedirectResponse
    {
        // dd($request->all());
        // return 'in store method';

        $company = new Company($request->validated());
        $company->save();

        return redirect()->route('companies.index')->with('success', "Company added successfully: " . $company->name ?? '');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $company = Company::with('employees')->findOrFail($id);
        return view('companies.show', compact('company'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $company = Company::find($id);

        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCompanyRequest $request, string $id): \Illuminate\Http\RedirectResponse
    {
        $company = Company::find($id);
        $company->update($request->validated());

        return redirect()->route('companies.index')->with('success', "Company updated successfully: " . $company->name ?? '');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\RedirectResponse
    {
        try {
            $company = Company::findOrFail($id);
            $company->delete();

            return redirect()->route('companies.index')->with('success', 'Company deleted successfully: ' . $company->name ?? '');
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error("Error deleting company: " . $e->getMessage());

            // Redirect back with an error message
            return back()->with('error', 'Error occurred while attempting to delete the company.');
        }
    }
}
