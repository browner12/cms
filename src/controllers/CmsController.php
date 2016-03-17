<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsController extends Controller
{
    /**
     * constructor
     *
     * @param \Illuminate\Http\Request $request
     */
    public function __construct(Request $request )
    {
        //parent
        parent::__construct($request);

        //middleware
        $this->middleware('auth');

        //assign
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get pages
        $pages = Cms::all();

        //load view
        return view('main/cms/all', compact('pages'));
    }

    /**
     * manage cms pages
     *
     * @return mixed
     */
    public function manage()
    {
        //get pages
        $pages = Cms::all();

        //load view
        return view('main/cms/manage', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
