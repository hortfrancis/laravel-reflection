<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::paginate(10);

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $allCompanies = Company::pluck('name', 'id');

        return view('employees.create', compact('allCompanies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $employee = new Employee($request->validated());
        $employee->save();

        return redirect()->route('employees.index')->with('success',
            "Employee added successfully: "
            . ($employee->first_name ?? '')
            . ' '
            . ($employee->last_name ?? ''));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::with('company')->findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::find($id);
        $allCompanies = Company::pluck('name', 'id');

        return view('employees.edit', compact('employee', 'allCompanies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEmployeeRequest $request, string $id)
    {
        $employee = Employee::find($id);
        $employee->update($request->validated());

        return redirect()->route('employees.index')->with('success',
            "Employee updated successfully: "
            . ($employee->first_name ?? '')
            . ' '
            . ($employee->last_name ?? ''));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success',
            "Employee deleted successfully: "
            . ($employee->first_name ?? '')
            . ' '
            . ($employee->last_name ?? ''));
    }
}
