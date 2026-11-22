<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    protected static int $urutan = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jadwal = [
            ['name' => 'Web Development',       'day' => 'Senin'],
            ['name' => 'Calculus',              'day' => 'Selasa'],
            ['name' => 'Statistika',            'day' => 'Selasa'],
            ['name' => 'Jaringan Komputer',     'day' => 'Kamis'],
            ['name' => 'Visual Programming',    'day' => 'Kamis'],
            ['name' => 'Ethics in digital era', 'day' => 'Jumat'],
            ['name' => 'Web Development',       'day' => 'Jumat'],
        ];

        return $jadwal[static::$urutan++ % count($jadwal)];
    }
}