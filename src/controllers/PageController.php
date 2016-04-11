<?php namespace claritytech\cms\controllers;

use App\Http\Controllers\Controller;
use claritytech\cms\models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * @var \Illuminate\Http\Request
     */
    protected $request;

    /**
     * constructor
     *
     * @param \Illuminate\Http\Request $request
     */
    public function __construct(Request $request)
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
        $pages = Page::all();

        //load view
        return view('cms::all', compact('pages'));
    }

    /**
     * manage page pages
     *
     * @return mixed
     */
    public function manage()
    {
        //get pages
        $pages = Page::all();

        //load view
        return view('cms::manage', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //load view
        return view('cms::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $pageId
     * @return \Illuminate\Http\Response
     */
    public function show($pageId)
    {
        //get page
        $page = Page::findOrFail($pageId);

        //load view
        return view('cms::show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $pageId
     * @return \Illuminate\Http\Response
     */
    public function edit($pageId)
    {
        //get page
        $page = Page::findOrFail($pageId);

        //load view
        return view('cms::edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $pageId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pageId)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $pageId
     * @return \Illuminate\Http\Response
     */
    public function destroy($pageId)
    {
        //
    }
}
