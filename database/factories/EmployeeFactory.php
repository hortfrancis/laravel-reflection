<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            // By default, create a new company for each employee
            'company_id' => Company::factory(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }

    /**
     *
     * Generate an employee for a given company with a corporate email
     *
     * @param int $companyId
     * @param string $companyUrl
     * @return array<string, mixed>
     */
    public function employeeWithCorporateEmail(int $companyId, string $companyUrl): array
    {
        $firstName = $this->faker->firstName();
        $lastName = $this->faker->lastName();

        // Extract only the domain from the URL (format: https://www.example.com/)
        $companyDomain = str_replace('https://www.', '', $companyUrl);
        $companyDomain = str_replace('/', '', $companyDomain);

        $corporateEmail = strtolower($firstName . '.' . $lastName . '@' . $companyDomain);

        return [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'company_id' => $companyId,
            'email' => $corporateEmail,
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
