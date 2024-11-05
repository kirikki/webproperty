<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Agent;

class PropertyFactory extends Factory
{
    public function definition()
    {
        return [
            'agent_id' => Agent::inRandomOrder()->first()->id, // Random agen yang sudah ada
            'judul' => $this->faker->sentence(3),
            'harga' => $this->faker->randomFloat(2, 100000000, 1000000000), // Harga random antara 100M sampai 1T
            'daerah' => $this->faker->city,
            'wilayah' => $this->faker->citySuffix,
            'provinsi' => $this->faker->state,
            'satuan_luas' => 'm2',
            'lt' => $this->faker->numberBetween(100, 1000), // Luas Tanah
            'lb' => $this->faker->numberBetween(100, 1000), // Luas Bangunan
            'kt' => $this->faker->numberBetween(2, 10), // Kamar Tidur
            'km' => $this->faker->numberBetween(2, 5),  // Kamar Mandi
            'kt_p' => $this->faker->numberBetween(0, 2), // Kamar Pembantu
            'km_p' => $this->faker->numberBetween(0, 2), // Kamar Mandi Pembantu
            'hadap' => $this->faker->randomElement(['Utara', 'Selatan', 'Barat', 'Timur']),
            'lantai' => $this->faker->numberBetween(1, 5),
            'listrik' => $this->faker->numberBetween(2200, 11000), // Daya Listrik
            'status_p' => $this->faker->randomElement(['Dijual', 'Disewa']),
            'jenis_p' => $this->faker->randomElement(['Rumah', 'Apartemen', 'Ruko', 'Tanah', 'Gudang']),
            'tipe_p' => $this->faker->randomElement(['Primary', 'Second', 'Jual/Sewa']),
            'deskripsi' => $this->faker->paragraph(5),
            'image' => 'default.jpg', // Placeholder untuk image
        ];
    }
}
