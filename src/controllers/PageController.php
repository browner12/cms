<?php namespace claritytech\cms\controllers;

use App\Http\Controllers\Controller;
use claritytech\cms\models\Page;
use claritytech\cms\services\PageService;
use Exception;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * @var \Illuminate\Http\Request
     */
    protected $request;
    /**
     * @var \claritytech\cms\services\PageService
     */
    private $service;

    /**
     * constructor
     *
     * @param \Illuminate\Http\Request              $request
     * @param \claritytech\cms\services\PageService $service
     */
    public function __construct(Request $request, PageService $service)
    {
        //parent
        parent::__construct($request);

        //middleware
        $this->middleware('auth');

        //assign
        $this->service = $service;
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
        return view('cms::pages/all', compact('pages'));
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
        return view('cms::pages/manage', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //load view
        return view('cms::pages/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //try
        try {
            $page = $this->service->store($this->request->only(['title', 'url', 'body']));
        }

        //exception
        catch(Exception $e){

            //message
            modal('Error', $e);

            //send back
            return back();
        }

        //message
        alert('Success', 'You have successfully stored the page <b>' . $page->title . '</b>.');

        //send back
        return back();
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
        return view('cms::pages/show', compact('page'));
    }

    /**
     * display the page
     *
     * @param string $slug
     * @return mixed
     */
    public function slug($slug)
    {
        //get page
        $page = Page::where('url', $slug)->first();

        //load view
        return view('cms::pages/show', compact('page'));
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
        return view('cms::pages/edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $pageId
     * @return \Illuminate\Http\Response
     */
    public function update($pageId)
    {
        //try
        try {
            $page = $this->service->update($pageId, $this->request->only(['title', 'url', 'body']));
        }

        //exception
        catch(Exception $e){

            //message
            modal('Error', $e);

            //send back
            return back();
        }

        //message
        alert('Success', 'You have successfully updated the page <b>' . $page->title . '</b>.');

        //send back
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $pageId
     * @return \Illuminate\Http\Response
     */
    public function destroy($pageId)
    {
        //try
        try {
            $page = $this->service->delete($pageId);
        }
        
        //exception
        catch(Exception $e){
        
            //message
            modal('Error', $e);
            
            //send back
            return back();
        }

        //message
        alert('Success', 'You have successfully deleted the page <b>' . $page->title . '</b>.');

        //send back
        return back();
    }
}
