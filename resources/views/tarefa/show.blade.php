@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Detalhe da Tarefa</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" placeholder="Título" value="{{ $tarefa->titulo }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Descrição</label>
            <input type="text" name="descricao" class="form-control" placeholder="Descrição" value="{{ $tarefa->descricao }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Criado em</label>
            <input type="text" name="created_at" class="form-control" placeholder="Criado em" value="{{ $tarefa->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Atualizado em</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Atualizado em" value="{{ $tarefa->updated_at }}" readonly>
        </div>
    </div>
@endsection