@extends('layout')

@section('cabecalho')
    Alterar Agenda
@endsection

@section('conteudo')
    <form method="post" action="/agenda/editar">
        @csrf
        <div class="form-group">
            <label for="id"    class="">Id</label>
            <input type="text" class="form-control" name="id"    id="id" value="{{$usuario->id}}">
            <label for="cpf"   class="">Cpf</label>
            <input type="text" class="form-control" name="cpf"   id="cpf" value="{{$usuario->cpf}}">
            <label for="nome"  class="">Nome</label>
            <input type="text" class="form-control" name="nome"  id="nome" value="{{$usuario->nome}}">
            <label for="fone"  class="">Fone</label>
            <input type="text" class="form-control" name="fone"  id="fone" value="{{$usuario->fone}}">
            <label for="email" class="">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{$usuario->email}}">
            <label for="senha" class="">Senha</label>
            <input type="text" class="form-control" name="senha" id="senha" value="{{$usuario->senha}}">
            <label for="senha" class="">Perfil</label>
            <input type="text" class="form-control" name="perfil" id="perfil" value="{{$usuario->perfil}}">
        </div>
        <button class="btn btn-primary">Atualizar</button>
    </form>
@endsection
