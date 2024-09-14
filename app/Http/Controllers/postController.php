<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class postController extends Controller
{
    private Post $post;

    public function __construct()
    {
        $post = new Post();
        $this->post = $post;    
    }
    public function create(Request $request){
        $new_post = [
            "title" => "Test Post",
            "content" => "This is the content",
            "author" => "Everson Nascimento"
        ];
        $post = new Post($new_post);
        $post->save();
        // dd($post);

    }
    public function read(Request $request, Response $response){
      
        $find = $this->post->find($request->id);
        if(!$find) return ["message"=>"Nenhum resultado!"]; 
        return($find);
    }
    public function readAll(){
        $findAll = $this->post->all();
        
        return($findAll);
    }
    public function update(){
        $update = $this->post->where('id','=',1)->update([
            "author" => "Everton"
        ]);
        return $update;
    }
    public function delete(){
        $delete = $this->post->where('id','=',1)->delete();
        return $delete;
    }
}
