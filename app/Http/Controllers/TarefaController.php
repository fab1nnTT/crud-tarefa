<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Tarefa;
 
class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarefa = Tarefa::orderBy('created_at', 'DESC')->get();
 
        return view('tarefa.index', compact('tarefa'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarefa.create');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tarefa::create($request->all());
 
        return redirect()->route('tarefa.index')->with('success', 'Tarefa adicionada com sucesso');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tarefa = Tarefa::findOrFail($id);
 
        return view('tarefa.show', compact('tarefa'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tarefa = Tarefa::findOrFail($id);
 
       
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tarefa = Tarefa::findOrFail($id);
 
        $tarefa->update($request->all());
 
        return redirect()->route('tarefa.index')->with('success', 'Tarefa editada com sucesso!');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tarefa = Tarefa::findOrFail($id);
 
        $tarefa->delete();
 
        return redirect()->route('tarefa.index')->with('success', 'Tarefa deletada com sucesso!');
    }
}