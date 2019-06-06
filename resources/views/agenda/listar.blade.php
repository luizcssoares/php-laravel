@extends('layout')

@section('cabecalho')
    Listar Agenda
@endsection

@section('conteudo')
    @if (!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a href="/agenda/incluir" class="btn btn-dark mb-2">Adicionar</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Cpf</td>
            <td>Email</td>
            <td>Fone</td>
            <td></td>
            <td></td>
          </tr>
        </thead>
        <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
               <td>{{ $usuario->id }}</td>
               <td>{{ $usuario->nome }}</td>
               <td>{{ $usuario->cpf }}</td>
               <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->fone }}</td>
               <td>
                    <form action="/agenda/remover/{{$usuario->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Apaga</button>
                    </form>
               </td>
               <td>
                    <a href="/agenda/editar/{{$usuario->id}}">
                        <button class="btn btn-warning">Alterar</button>
                    </a>
               </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection