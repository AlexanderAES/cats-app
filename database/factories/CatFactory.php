<?php

namespace Database\Factories;

use App\Models\Cat;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cat>
 */
class CatFactory extends Factory
{
    protected $model = Cat::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $breeds = ['Мейн-кун', 'Бенгальская', 'Сиамская', 'Невская', 'Рэгдолл', 'Персидская', 'Шотландская', 'Сибирская', 'Ангорская', 'Нибелунг', 'Русская', 'Манчкин', 'Сноу-Шу', 'Саванна', 'Корнищ-рекс', 'Бирманская', 'Русская голубая', 'Невская маскарадная'];


        $breedIndex = $this->faker->unique()->numberBetween(0, count($breeds) - 1);
        $breed = $breeds[$breedIndex];

        $slug = Str::slug($breed);

        $imageFiles = File::files(public_path('images'));
        $randomImages = collect($imageFiles)->random(5);


        $imagePaths = $randomImages->map(function ($image) {
            $relativePath = str_replace(public_path(), '', $image);
            $relativePath = str_replace('\\', '/', $relativePath);
            return ltrim($relativePath, '/');
        })->toArray();


        return [
            'breed' => $breed,
            'description' => $this->faker->paragraph(100, true),
            'slug' => $slug,
            'img' => $imagePaths,
            'color' => $this->faker->safeColorName,
            'age' => $this->faker->numberBetween(1, 5),
            'sex' => $this->faker->randomElement(['самец', 'самка']),
            'size' => $this->faker->randomElement(['маленький', 'средний', 'большой']),
            'active' => $this->faker->boolean,
            'price' => $this->faker->numberBetween(1000, 15000),
            'sale' => $this->faker->numberBetween(10, 50),
        ];
    }
}
