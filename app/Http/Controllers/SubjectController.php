<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    use HelperTrait;

    public function index (Request $request){
        return $this -> processSubjects($request);
    }

    public function store (Request $request){

        return response()-> json(['error' => 'Nao e possivel adicionar disciplinas do momento'], status: 403);
    }

    public function show (Request $request, Subject $subject){

        return response()-> json(['error' => 'Nao e possivel mostrar detalhes da disciplina do momento'], status: 403);
    }

    public function update (Request $request, Subject $subject){

        return response()-> json(['error' => 'Nao e possivel actualizar a disciplina do momento'], status: 403);
    }

    public function destroy (Request $request, Subject $subject){

        return response()-> json(['error' => 'Nao e possivel remover a disciplina do momento'], status: 403);
    }
}
