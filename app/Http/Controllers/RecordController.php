<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Record;

class RecordController extends Controller
{
    
    public function index(Record $record)
    {
        
        return view('records.index')->with(['records' => $record->getPaginateByLimit()]); 
    }
    
    public function show(Record $record)
    {
      
        return view('records.show')->with(['record' => $record]);
    }
    
    public function create()
    {
        return view('records.create');
    }
        
    public function store(Request $request, Record $record)
    {
        $input = $request['record'];
        $record->fill($input)->save();
        return redirect('/records/' . $record->id);

    }
    
    public function edit(Record $record)
    {
        return view('records.edit')->with(['record' => $record]);
        
    }
    
    public function update(RecordRequest $request, Record $record)
    {
        $input_record = $request['record'];
        $record->fill($input_record)->save();
        
        return redirect('/records/' . $record->id);
        
    }
    
    public function delete(Record $record)
    {
        $record->delete();
        return redirect('/');
        
    }
}
