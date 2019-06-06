@extends('layout')

@section('cabecalho')
    Incluir Agenda
@endsection

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post">
        @csrf
        <div class="form-group">
            <label for="id"    class="">Id</label>
            <input type="text" class="form-control" name="id"    id="id">
            <label for="cpf"   class="">Cpf</label>
            <input type="text" class="form-control" name="cpf"   id="cpf">
            <label for="nome"  class="">Nome</label>
            <input type="text" class="form-control" name="nome"  id="nome">
            <label for="fone"  class="">Fone</label>
            <input type="text" class="form-control" name="fone"  id="fone">
            <label for="email" class="">Email</label>
            <input type="text" class="form-control" name="email" id="email">
            <label for="senha" class="">Senha</label>
            <input type="text" class="form-control" name="senha" id="senha">
            <label for="senha" class="">Perfil</label>
            <input type="text" class="form-control" name="perfil" id="perfil">
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection
