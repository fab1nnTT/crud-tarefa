@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Adicionar tarefa</h1>
    <hr />
    <form action="{{ route('tarefa.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="titulo" class="form-control" placeholder="Titulo">
            </div>
            <div class="col">
                <input type="text" name="descricao" class="form-control" placeholder="Descricao">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Adicionar</button>
            </div>
        </div>
    </form>
@endsection