<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
class ComputerControllers extends Controller
{
    // Array of static date
    //how we use data manually
    // private static function getData(){
    //      return[
    //         ['id' => 1,'name' => 'LG', 'origin' => 'Koria' ,'price' => '999'],
    //         ['id' => 2,'name' => 'HP', 'origin' => 'USA','price' => '1099'],
    //         ['id' => 3,'name' => 'NOKIA', 'origin' => 'Germany','price' => '599'],
    //         ['id' => 4,'name' => 'Lenovo', 'origin' => 'Frensh','price' => '699'],
    //         ['id' => 5,'name' => 'Dell', 'origin' => 'Japan','price' => '1999'],
    //      ];
    // } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('computers.index',[
            'computers' => Computer::all()             //self::getData()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => ['required','integer'],
        ]);
       $computer = new Computer();
       $computer->name = $request->input('computer-name');
       $computer->origin = $request->input('computer-origin');
       $computer->price = $request->input('computer-price');
       $computer->save();
       return redirect()->route('computers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                                                               //$computers = self::getData();  
        $index = Computer::findOrFail($id);                          //$index = array_search($id,array_column($computers,'id'));
                                                                // if($index === false){
                                                                //     abort(404);
                                                                // }
        return view('computers.show',['computer'=>$index]);     //return view('computers.show',['computer'=>$computers[$index]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('computers.edit',[
            'computer' => Computer::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => ['required','integer'],
        ]);
        $to_update = Computer::findOrFail($id);
        $to_update->name = $request->input('computer-name');
        $to_update->origin = $request->input('computer-origin');
        $to_update->price = $request->input('computer-price');
        $to_update->save();
        return redirect()->route('computers.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $to_delete = Computer::findOrFail($id);

        $to_delete->delete();
        return redirect()->route('computers.index',$id);
    }
}
