<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller {
    /**
     * @param  Request  $request
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function page( Request $request ) {
        return view( 'pages.projects' );
    }

    /**
     * @param  Request  $request
     *
     * @return Collection
     */
    public function projectsData( Request $request ) {
        return DB::table( 'projects' )->get();
    }
}
