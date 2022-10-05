<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    private $_post = [
        ["title" => "Post 1", "description" => "Ini adalah post 1"],
        ["title" => "Post 2", "description" => "Ini adalah post 2"],
        ["title" => "Post 3", "description" => "Ini adalah post 3"],
        ["title" => "Post 4", "description" => "Ini adalah post 4"],
        ["title" => "Post 5", "description" => "Ini adalah post 5"],
        ["title" => "Post 6", "description" => "Ini adalah post 6"],
        ["title" => "Post 7", "description" => "Ini adalah post 7"],
        ["title" => "Post 8", "description" => "Ini adalah post 8"],
        ["title" => "Post 9", "description" => "Ini adalah post 9"],
        ["title" => "Post 10", "description" => "Ini adalah post 10"],
        ["title" => "Post 11", "description" => "Ini adalah post 11"],
        ["title" => "Post 12", "description" => "Ini adalah post 12"],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach ($this ->_post as $post) {
            $data[] = [
                'title' => $post['title'],
                'description' => $post['description'],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        DB::table('posts')->insert($data);
    }
}
