<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Remove existing data from the 'users' table before creating first user
        User::truncate();

        // Create the first user (an admin)
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'is_admin' => true,
        ]);

        // Create more users if required..
        // User::factory(10)->create();

        // Clear the 'companies' table and seed 10 generic companies
        // Because there is a foreign key constraint between the 'companies' and 'employees' tables,
        // with cascade on delete, the employee records will be deleted when the company is deleted
        Company::query()->delete();
        Company::factory(10)->create();

        // For each company, create 5 employees with a corporate email address
        $numberOfEmployees = 5;
        Company::all()->each(function ($company) use ($numberOfEmployees) {
            for ($i = 0; $i < $numberOfEmployees; $i++) {
                Employee::factory()->create(
                    Employee::factory()->new()->employeeWithCorporateEmail($company->id, $company->website)
                );
            }
        });

        // Can also create new employees separately, with a new company generated for each one,
        // but without an associated corporate email address
        // Employee::factory(10)->create();
    }
}
