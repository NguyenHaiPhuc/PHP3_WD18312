<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function  test(){
// lay ra toan bo du lieu
// $posts = Post ::all();
//  return $posts;

// lay ra 1 ban ghi
// $post = Post::all() ->first();
// return $post;

//lay du lieu dieu kien
// $posts = Post::query()->where('cate_id',1)->get();
// return $posts;

//tim` du lieu gan dung
// $posts = Post::query()->where('title','like', '%aut%')->get();
// return $posts;
//su dung ham` sum,cout,avg,....
// return $sum;
// them du lieu
//1.dung` mang
// $data = [
// 'title' => fake()->text(25),
// 'image' => fake()->imageUrl(),
// 'description'=> fake()->text(30),
// 'content'=> fake()->paragraph(),
// 'view' => rand(10, 1000),
// 'cate_id' => rand(1, 4),
// ];
// Post::query()->create($data);
// return $data;   
//2 , su dung doi tuong


// $sum = Post::query()->sum('view');

// $posts = Post::orderByDesc('id')->get();


Post::query()->find(208)->update([
    'title' => 'Update data'
]);
$posts = Post::orderByDesc('id')->get();
return $posts;
    }
}
