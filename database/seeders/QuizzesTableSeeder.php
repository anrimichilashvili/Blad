<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizzesTableSeeder extends Seeder
{
    public function run()
    {
        $quizzes = [];
        
        for ($i = 1; $i <= 13; $i++) {
            $status = $i % 2 === 0 ? 1 : 0; 
            $image = $status ? 'https://via.placeholder.com/150' : null; 

            $quizzes[] = [
                'title' => 'Sample Quiz ' . $i,
                'description' => 'This is the sample quiz number ' . $i . '.',
                'status' => $status,
                'image' => $image,
                'create_date' => now()->format('Y-m-d'), 
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }


        $quizzes[] = [
            'title' => 'Quiz without description and with photo',
            'description' => '',
            'status' => 1,
            'image' => 'https://via.placeholder.com/150',
            'create_date' => now()->format('Y-m-d'), 
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $quizzes[] = [
            'title' => 'Inactive Quiz with description',
            'description' => 'This quiz is inactive',
            'status' => 0,
            'image' => null,
            'create_date' => now()->format('Y-m-d'), 
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $quizzes[] = [
            'title' => 'Quiz with description but without photo',
            'description' => 'This quiz has a description but no photo',
            'status' => 1,
            'image' => null,
            'create_date' => now()->format('Y-m-d'), 
            'created_at' => now(),
            'updated_at' => now(),
        ];

        Quiz::insert($quizzes);
    }
}

