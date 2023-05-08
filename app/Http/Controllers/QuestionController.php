<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    use HelperTrait;

    public function index (Request $request){

        return $this -> processQuestions($request);
    }

    public function store (Request $request){

        return response()-> json(['error' => 'Nao e possivel adicionar pergunta do momento'], status: 403);
    }

    public function show (Request $request, Question $question){

        return response()-> json(['error' => 'Nao e possivel mostrar detalhes da perguntas do momento'], status: 403);
    }

    public function update (Request $request, Question $question){

        return response()-> json(['error' => 'Nao e possivel actualizar a pergunta do momento'], status: 403);
    }

    public function destroy (Request $request, Question $question){

        return response()-> json(['error' => 'Nao e possivel remover a pergunta do momento'], status: 403);
    }
}
