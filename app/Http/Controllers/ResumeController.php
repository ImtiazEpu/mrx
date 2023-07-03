<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller {
    /**
     * @param  Request  $request
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function page( Request $request ) {
        return view( 'pages.resume' );
    }

    /**
     * @param  Request  $request
     *
     * @return Model|Builder|object|null
     */
    public function resumeLink( Request $request ) {
        return DB::table( 'resumes' )->first();
    }

    /**
     * @param  Request  $request
     *
     * @return Collection
     */
    public function experiencesData( Request $request ) {
        return DB::table( 'experiences' )->get();
    }

    /**
     * @param  Request  $request
     *
     * @return Collection
     */
    public function educationData( Request $request ) {
        return DB::table( 'educations' )->get();
    }

    /**
     * @param  Request  $request
     *
     * @return Collection
     */
    public function skillsData( Request $request ) {
        return DB::table( 'skills' )->get();
    }

    /**
     * @param  Request  $request
     *
     * @return Collection
     */
    public function languageData( Request $request ) {
        return DB::table( 'languages' )->get();
    }
}
