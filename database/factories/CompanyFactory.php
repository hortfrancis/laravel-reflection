<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *2
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $companyName = $this->faker->company();

        // Remove non-alphabetical characters except spaces
        $normalisedCompanyName = preg_replace('/[^A-Za-z ]/', '', $companyName);

        // Replace spaces with hyphens
        $normalisedCompanyName = preg_replace('/\s+/', '-', $normalisedCompanyName);

        $companyUrl = strtolower($normalisedCompanyName) . '.com';
        $companyEmail = 'contact@' . $companyUrl;

        // Add the rest of the URL
        $companyUrl = 'https://www.' . $companyUrl . '/';

        return [
            'name' => $companyName,
            'email' => $companyEmail,
            'logo' => $this->faker->imageUrl(100, 100),
            'website' => $companyUrl,
        ];
    }
}
