<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=Post::all();
        // foreach ($posts as $post){
        //     dd($post->id);
        // }
        return view('/posts/index',['posts' => $posts]);
    }
    public function show($id){
        $posts=[
            ['title' => 'Laravel','description'=>'laravel is a php framework','posted_by'=>['name'=>'John Doe','email'=>'John@gmail.com','created_at'=>"thursday 2nd of january 2021"]],
            ['title' => 'NodeJS','description'=>'NodeJS is a javascript runtime built on Chrome V8 JavaScript engine','posted_by'=>['name'=>'Esraa','email'=>'esraa@gmail.com','created_at'=>"friday 3rd of january 2021"]],
            ['title' => 'ReactJS','description'=>'ReactJS is a javascript library for building user interfaces','posted_by'=>['name'=>'Eman','email'=>'Eman@gmail.com','created_at'=>"saturday 4th of january 2021"]],
            ['title' => 'VueJS','description'=>'VueJS is a progressive javascript framework','posted_by'=>['name'=>'Doaa','email'=>'Doaa@gmal.com','created_at'=>"sunday 5th of january 2021"]],
        ];
        return view('/posts/show',['post'=>$posts[$id-1]]);
    }
    public function create(){
        return view('/posts/create');
    }
    public function store(){

        $title =request()->title;
        $description =request()->description;
        $postCreator=request()->post_creator;
        $post = Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $postCreator,
        ]);
        $post->save();
        return redirect()->route('posts.index');
    }
    public function edit($id){
        $posts=[
            ['title' => 'Laravel','description'=>'laravel is a php framework','posted_by'=>['name'=>'John Doe','email'=>'John@gmail.com','created_at'=>"thursday 2nd of january 2021"]],
            ['title' => 'NodeJS','description'=>'NodeJS is a javascript runtime built on Chrome V8 JavaScript engine','posted_by'=>['name'=>'Esraa','email'=>'esraa@gmail.com','created_at'=>"friday 3rd of january 2021"]],
            ['title' => 'ReactJS','description'=>'ReactJS is a javascript library for building user interfaces','posted_by'=>['name'=>'Eman','email'=>'Eman@gmail.com','created_at'=>"saturday 4th of january 2021"]],
            ['title' => 'VueJS','description'=>'VueJS is a progressive javascript framework','posted_by'=>['name'=>'Doaa','email'=>'Doaa@gmal.com','created_at'=>"sunday 5th of january 2021"]],
        ];
        return view('/posts/edit',['post'=>$posts[$id-1]]);
    }
    public function destroy($id){
        $posts= [
            ['id' => 1, 'title' => 'Laravel', 'posted_by' => 'John Doe', 'created_at' => '2021-01-01'],
            ['id' => 2, 'title' => 'NodeJS', 'posted_by' => 'Esraa', 'created_at' => '2021-01-02'],
            ['id' => 3, 'title' => 'ReactJS', 'posted_by' => 'Eman','created_at' => '2021-01-03'],
            ['id' => 4, 'title' => 'VueJS', 'posted_by' => 'Doaa','created_at' => '2021-01-03'],
        ];
    $updated=[];
    foreach($posts as $post){
        if($post['id']==$id){
            continue;
        }
        else{
            $updated[]=$post;
        }
    }
    $posts=array_values($updated);
    return view('posts.index', ['posts' => $updated]);
    }
}
