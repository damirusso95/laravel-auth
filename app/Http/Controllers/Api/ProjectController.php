<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Boolfolio;

class ProjectController extends Controller
{
    public function index(){

        return response()->json([
            'success' => true,
            'projects' => Boolfolio::orderByDesc('id')->paginate()
        ]);
    }
}
