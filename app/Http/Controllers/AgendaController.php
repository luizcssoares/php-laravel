<?php 
namespace App\Http\Controllers;
use App\Http\Requests\AgendaFormRequest;
use Illuminate\Http\Request;
use App\Usuario;

class AgendaController extends Controller {

    public function listar(Request $request) {
        //$usuarios = Usuario::all();
        $usuarios = Usuario::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view ('agenda.listar', compact('usuarios','mensagem'));
    }

    public function incluir() {
        return view ('agenda.incluir');
    }

    public function gravar (AgendaFormRequest $request)
    {
        $id     = $request->id;
        $cpf    = $request->cpf;
        $nome   = $request->nome;
        $fone   = $request->fone;
        $email  = $request->email;
        $senha  = $request->senha;
        $perfil = $request->perfil;

        $usuario = new Usuario();
        $usuario->id     = $id;
        $usuario->cpf    = $cpf;
        $usuario->nome   = $nome;
        $usuario->fone   = $fone;
        $usuario->email  = $email;
        $usuario->senha  = $senha;
        $usuario->perfil = $perfil;
        $usuario->save();

        $request->session()->flash('mensagem', "Usuario {$usuario->nome} inserido com sucesso !");

        return redirect ('/agenda');
    }

    public function remover (Request $request)
    {
        $id     = $request->id;
        $usuario = Usuario::find($id);
        $usuario->delete();

        $request->session()->flash('mensagem', "Usuario {$usuario->id} removido com sucesso !");

        return redirect ('/agenda');
    }

    public function prepara_edicao (Request $request)
    {
        $id              = $request->id;
        $usuario         = Usuario::find($id);
        return view('agenda.editar')->with('usuario', $usuario);
        /*
        $usuario->id     = $request->id;
        $usuario->cpf    = $request->cpf;
        $usuario->nome   = $request->nome;
        $usuario->fone   = $request->fone;
        $usuario->email  = $request->email;
        $usuario->senha  = $request->senha;
        $usuario->perfil = $request->perfil;
        $usuario->save();
        */

        //$request->session()->flash('mensagem', "Usuario {$usuario->id} atualizado com sucesso !");
        //return redirect ('/agenda');
    }

    public function editar (Request $request)
    {
        $usuario = Usuario::find($request->id);
        //$usuario->id     = $request->id;
        $usuario->cpf    = $request->cpf;
        $usuario->nome   = $request->nome;
        $usuario->fone   = $request->fone;
        $usuario->email  = $request->email;
        $usuario->senha  = $request->senha;
        $usuario->perfil = $request->perfil;
        $usuario->update();

        $request->session()->flash('mensagem', "Usuario {$usuario->nome} alterado com sucesso !");

        return redirect ('/agenda');
    }
}