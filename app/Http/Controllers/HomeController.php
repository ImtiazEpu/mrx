<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {
    /**
     * @param  Request  $request
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function page( Request $request ) {
        return view( 'pages.home' );
    }

    /**
     * @param  Request  $request
     *
     * @return Model|Builder|null
     */
    public function heroData( Request $request ): Model|Builder|null {
        return DB::table( 'heroproperties' )->first();
    }

    /**
     * @param  Request  $request
     *
     * @return Model|Builder|null
     */
    public function aboutData( Request $request ): Model|Builder|null {
        return DB::table( 'abouts' )->first();
    }

    /**
     * @param  Request  $request
     *
     * @return Model|Builder|null
     */
    public function socialData( Request $request ): Model|Builder|null {
        return DB::table( 'socials' )->first();
    }
}
