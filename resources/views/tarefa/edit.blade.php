@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Editar Tarefa</h1>
    <hr />
    <form action="{{ route('tarefa.update', $tarefa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" placeholder="Título" value="{{ $tarefa->titulo }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Descrição</label>
                <input type="text" name="descricao" class="form-control" placeholder="Descrição" value="{{ $tarefa->descricao }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>
@endsection