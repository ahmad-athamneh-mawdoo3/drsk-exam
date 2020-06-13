<?php

namespace Mawdoo3\Drsk\Exam\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mawdoo3\Drsk\Exam\Models\SavedResult;
use Mawdoo3\Drsk\Exam\Auth;
class ExamController extends Controller
{
    /**
     * redirect the specified function depend on action.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return redirect to another function
     */
    public function testRoute(Request $request)
    {
        return Auth::isAuthed('ahmad');
    }
}
