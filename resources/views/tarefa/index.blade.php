@extends('layouts.app')
 
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de Tarefas</h1>
        <a href="{{ route('tarefa.create') }}" class="btn btn-primary">Adicionar Tarefa</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($tarefa->count() > 0)
                @foreach($tarefa as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->titulo }}</td>
                        <td class="align-middle">{{ $rs->descricao }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('tarefa.show', $rs->id) }}" type="button" class="btn btn-secondary">Detalhe</a>
                                <a href="{{ route('tarefa.edit', $rs->id)}}" type="button" class="btn btn-warning">Editar</a>
                                <form action="{{ route('tarefa.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Deletar?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Deletar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Tarefa não encontrada</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection