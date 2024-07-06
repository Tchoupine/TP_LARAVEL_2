<?php

namespace Database\Factories;

use App\Models\Freelancer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FreelancerFactory extends Factory
{
    protected $model = Freelancer::class;

    public function definition()
    {
        $profileImagePath = storage_path('app/public/images');
        $profileImage = $this->faker->image($profileImagePath, 640, 480, null, false);

        $cvDocumentPath = storage_path('app/public/documents');
        $cvDocument = $this->generatePdf($cvDocumentPath);

        return [
            
            'photo' =>'images/' . $profileImage,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone_number' => $this->faker->phoneNumber,
            'email_address' => $this->faker->unique()->safeEmail,
            'country' => $this->faker->randomElement(['UK', 'USA']),
            'city' => $this->faker->randomElement(['Londres', 'New York']),
            'address' => $this->faker->address,
            'profession' => $this->faker->randomElement(['Developer', 'Designer', 'Manager']),
            'cv' => 'documents/' . $cvDocument,
            'gender' => $this->faker->randomElement(['male', 'female']),
        ];
    }

    private function generatePdf($path)
    {
        $filename = Str::random(10) . '.pdf';
        $fullPath = $path . '/' . $filename;
        file_put_contents($fullPath, 'This is a fake PDF document.');
        return $filename;
    }
}
