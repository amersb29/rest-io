<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $portfolio = \DB::table('projects')->get();
      // $portfolio = Project::latest('updated_at', 'DESC')->get();
      $projects = Project::latest()->paginate();

      return view('portfolio', compact('projects'));
    }

}
