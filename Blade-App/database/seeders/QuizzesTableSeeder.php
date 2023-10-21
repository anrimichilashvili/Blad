<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizzesTableSeeder extends Seeder
{
    public function run()
    {
        Quiz::create([
            'title' => 'Sample Quiz 1',
            'description' => 'This is the first sample quiz.',
        ]);

        Quiz::create([
            'title' => 'Sample Quiz 2',
            'description' => 'This is the second sample quiz.',
        ]);
    }
}

