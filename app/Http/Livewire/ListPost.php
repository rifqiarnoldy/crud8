<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ListPost extends Component
{
    public $usi = 0;
    public $body = 0;
    protected $listeners = [
        'posted' => '$refresh'
    ];
    public function showUpdateForm($postId)
    {
        # code...
        $this->usi = $postId;
        $post = Post::find($postId);
        $this->body = $post->body;
    }
    public function update($postId)
    {
        # code...
        $post = Post::find($postId);
        $post->body = $this->body;
        $post->save();
        $this->usi = 0;
    }

    public function delete($postId)
    {
        # code...
        $post = Post::find($postId);
        $post->delete();
    }
    public function render()
    {
        return view('livewire.list-post', [
            'posts' => Post::latest()->get()
        ]);
    }
}
