<?php

namespace App\Http\Controllers;

use App\Models\Education;

use Illuminate\Http\Request;

class EducationsController extends Controller
{
    public function list()
    {
        return view('educations.list', [
            'educations' => Education::all()
        ]);
    }


    public function addForm()
    {
        return view('educations.add', [
            'educations' => Education::all(),
        ]);
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'school' => 'required',
            'program' => 'required',
            'country' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
            
        ]);

        $education = new Education();
        $education->school = $attributes['school'];
        $education->program = $attributes['program'];        
        $education->country = $attributes['country'];
        $education->start_date = $attributes['start_date'];
        $education->end_date = $attributes['end_date'];
        $education->save();

        return redirect('/console/educations/list')
            ->with('message', 'Education has been added!');
    }



    public function editForm(Education $education)
    {
        return view('educations.edit', [
            'education' => $education,
        ]);
    }

    public function edit(Education $education)
    {

        $attributes = request()->validate([
            'school' => 'required',
            'program' => 'required',
            'country' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $education->school = $attributes['school'];
        $education->program = $attributes['program'];
        $education->country = $attributes['country'];
        $education->start_date = $attributes['start_date'];
        $education->end_date = $attributes['end_date'];
        $education->save();

        return redirect('/console/educations/list')
            ->with('message', 'Education has been edited!');
    }

    public function delete(Education $education)
    {

        $education->delete();
        
        return redirect('/console/educations/list')
            ->with('message', 'Education has been deleted!');        
    }

}
