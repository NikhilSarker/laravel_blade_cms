<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Entry;
use App\Models\Topic;

class TopicsController extends Controller
{
    public function list()
    {
        return view('topics.list', [
            'topics' => Topic::all()
        ]);
    }


    public function addForm()
    {
        return view('entries.add', [
            'topics' => Topic::all(),
        ]);
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'learned_at' => 'required',
            'content' => 'required',
            
        ]);

        $project = new Entry();
        $project->title = $attributes['title'];
        $project->learned_at = $attributes['learned_at'];        
        $project->content = $attributes['content'];
        $project->save();

        return redirect('/console/entries/list')
            ->with('message', 'Entry has been added!');
    }



    public function editForm(Topic $topic)
    {
        return view('topics.edit', [
            'topic' => $topic,
        ]);
    }

    public function edit(Topic $topic)
    {

        $attributes = request()->validate([
            'title' => 'required',            
            'content' => 'required',
            'learned_at' => 'required'
        ]);

        $topic->title = $attributes['title'];
        $topic->content = $attributes['content'];
        $topic->learned_at = $attributes['learned_at'];
        $topic->save();

        return redirect('/console/topics/list')
            ->with('message', 'Topic has been edited!');
    }

    public function delete(Topic $topic)
    {

        $topic->delete();
        
        return redirect('/console/topics/list')
            ->with('message', 'Topic has been deleted!');        
    }

}
