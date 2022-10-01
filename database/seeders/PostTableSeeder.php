<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $_posts = [  ["title"=> "Post 1", "description" => "ini Post pertama"],
                            ["title"=> "Post 2", "description" => "ini Post kedua"],
                            ["title"=> "Post 3", "description" => "ini Post ketiga"],
                            ["title"=> "Post 4", "description" => "ini Post keempat"],
                            ["title"=> "Post 5", "description" => "ini Post kelima"],
                            ["title"=> "Post 6", "description" => "ini Post keenam"],
                            ["title"=> "Post 7", "description" => "ini Post ketujuh"],
                            ["title"=> "Post 8", "description" => "ini Post kedelapan"],
                            ["title"=> "Post 9", "description" => "ini Post kesembilan"],
                            ["title"=> "Post 10", "description" => "ini Post kesepuluh"],

                        ];
    public function run()
    {
        $data = [];
        foreach ($this -> _posts as $post){
            $data[] = [
                'title'=>$post['title'],
                'description' => $post['description']
            ];
        }
        DB::table('posts') -> insert($data);
    }
}
