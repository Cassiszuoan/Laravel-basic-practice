<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();
    	$this -> call(PostsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        Model::reguard();
    }
}
