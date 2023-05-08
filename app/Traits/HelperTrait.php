<?php

namespace App\Traits;

use App\Models\Subject;
use Illuminate\Http\Request;

trait HelperTrait
{
    public function processSubjects(Request $request) {
        $orderDirection = $request -> query('direction', 'desc');

        $orderColumn = $request -> query('column', 'id');
        
        $totalPerPage = $request -> query('per_page', 3);

        $subject = Subject::orderBy($orderColumn, $orderDirection) -> paginate($totalPerPage);

        return response()-> json(['success' => $subject], status: 200);
    }

    public function processQuestions(Request $request) {
        $orderDirection = $request -> query('direction', 'desc');

        $orderColumn = $request -> query('column', 'id');
        
        $totalPerPage = $request -> query('per_page', 3);

        $question = Question::orderBy($orderColumn, $orderDirection) -> paginate($totalPerPage);

        return response()-> json(['success' => $question], status: 200);
    }   
}