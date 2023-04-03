<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CompletedTaskController extends Controller
{
        public function list(){

        return view('task.completed_list', ['completed_list' => $completed_task]);


        }
}
