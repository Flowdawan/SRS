<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SrsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Index
     *
     * @return response()
     */
    public function index()
    {
        $project = DB::table('projects')
            ->get()
            ->where('userid', auth()->user()->id);

        return view('srs_creator', compact($project));
    }

    /**
     * @return response()
     */
    public function store_name(Request $request)
    {

        DB::table('projects')
            ->where('userid', auth()->user()->id)
            ->update(array('name' => $request->projectname));

        return redirect("start")->withSuccess('Great! You have Successfully saved your projectname!');
    }

    /**
     * @return response()
     */
    public function store_could(Request $request)
    {
        DB::table('projects')
            ->where('userid', auth()->user()->id)
            ->update(array('could_1' => $request->could_1, 'could_2' => $request->could_2, 'could_3' => $request->could_3));

        return redirect("start")->withSuccess('Great! You have Successfully saved your projectname!');
    }

    /**
     * @return response()
     */
    public function store_must(Request $request)
    {
        DB::table('projects')
            ->where('userid', auth()->user()->id)
            ->update(array('must_1' => $request->must_1, 'must_2' => $request->must_2, 'must_2' => $request->must_3));

        return redirect("start")->withSuccess('Great! You have Successfully saved your projectname!');
    }

    /**
     * @return response()
     */
    public function store_description(Request $request)
    {
        DB::table('projects')
            ->where('userid', auth()->user()->id)
            ->update(array('description' => $request->description));

        return redirect("start")->withSuccess('Great! You have Successfully saved your projectname!');
    }

    /**
     * @return response()
     */
    public function store_scope(Request $request)
    {
        DB::table('projects')
            ->where('userid', auth()->user()->id)
            ->update(array('scope' => $request->scope));

        return redirect("start")->withSuccess('Great! You have Successfully saved your projectname!');
    }

    /**
     * @return response()
     */
    public function store_should(Request $request)
    {
        DB::table('projects')
            ->where('userid', auth()->user()->id)
            ->update(array('should_1' => $request->should_1, 'should_2' => $request->should_2, 'should_3' => $request->should_3));

        return redirect("start")->withSuccess('Great! You have Successfully saved your projectname!');
    }

    /**
     * @return response()
     */
    public function store_team(Request $request)
    {
        DB::table('projects')
            ->where('userid', auth()->user()->id)
            ->update(array('team_1' => $request->team_1, 'team_2' => $request->team_2, 'team_3' => $request->team_3));

        return redirect("start")->withSuccess('Great! You have Successfully saved your projectname!');
    }

    /**
     * @return response()
     */
    public function store_wont(Request $request)
    {
        DB::table('projects')
            ->where('userid', auth()->user()->id)
            ->update(array('wont_1' => $request->wont_1, 'wont_2' => $request->wont_2, 'wont_3' => $request->wont_3));

        return redirect("start")->withSuccess('Great! You have Successfully saved your projectname!');
    }
}
