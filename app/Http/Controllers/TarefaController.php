        $tarefa->update($request->all());
 
        return redirect()->route('tarefa.index')->with('success', 'tarefa updated successfully');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tarefa = Tarefa::findOrFail($id);
 
        $tarefa->delete();
 
        return redirect()->route('tarefa.index')->with('success', 'tarefa deleted successfully');
    }
}