<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition()
    {
        $services = ['Accounting','Tax','Audit','Advisory','Compliance','Company Registration','GST','Payroll'];
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->numerify('9#########'),
            'service' => $this->faker->randomElement($services),
            'message' => $this->faker->paragraphs(rand(1,3), true),
            'is_processed' => $this->faker->boolean(30),
            'created_at' => $this->faker->dateTimeBetween('-30 days', 'now'),
            'updated_at' => now(),
        ];
    }
}
