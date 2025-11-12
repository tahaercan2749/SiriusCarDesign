<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::updateOrCreate([
            'id' => 1,
            'name' => 'Türkçe',
            'code' => 'tr'
        ]);
    }
}
