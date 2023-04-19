<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Entry;
use App\Models\Topic;
use App\Models\EntryTopic;

class EntriesController extends Controller
{
    public function list()
    {
        return view('entries.list', [
            'entries' => Entry::all()
        ]);
    }


    public function addForm()
    {
        return view('entries.add',[        
              'topics'=>Topic::all(),
        ]);
    }


    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'learned_at' => 'required',
            'content' => 'required',
            'topics' => 'nullable',
        ]);

        $project = new Entry();
        $project->title = $attributes['title'];
        $project->content = $attributes['content'];
        $project->learned_at = $attributes['learned_at'];
        $project->save();

        if (isset($attributes['topics'])) 
        {
            foreach($attributes['topics'] as $topic)
            {
                $project->entryTopics()->attach($topic);
            }
        }




        return redirect('/console/entries/list')
            ->with('message', 'Entry has been added!');
    }

    public function editForm(Entry $entry)
    {
        return view('entries.edit', [
            'entry' => $entry,
        ]);
    }

    public function edit(Entry $entry)
    {

        $attributes = request()->validate([
            'title' => 'required',            
            'content' => 'required',
            'learned_at' => 'required'
        ]);

        $entry->title = $attributes['title'];
        $entry->content = $attributes['content'];
        $entry->learned_at = $attributes['learned_at'];
        $entry->save();

        return redirect('/console/entries/list')
            ->with('message', 'Entry has been edited!');
    }

    public function delete(Entry $entry)
    {

       
        
        $entry->delete();
        
        return redirect('/console/entries/list')
            ->with('message', 'Entry has been deleted!');        
    }


}
