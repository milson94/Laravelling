<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Study; 
use Illuminate\Http\Request;

class StudiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        return $request->profession;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $study3 = new Study; 
        $study3->id = $request->id; 
        $study3->school = $request->school;  
        $study3->grade= $request->grade; 
        $study3->subject = $request->subject;
        $study3->profession = $request->profession;

        $study3->save(); 

        return 'upload successful';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    public function mostra()
    {
        // $tabela = DB::table('studies')->get(); 
        

        $tabela = Study::all(); 
        return view('listar', array('tarefas'=>$tabela));

        // Other ways to send data to view
        // return view('listar', ['tabela' => $tabela]); 
        // $object = (object) $tabela; 
        // return view('listar', compact('object'));

    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        $tabela = DB::table('studies'); 
        return $tabela; 

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
