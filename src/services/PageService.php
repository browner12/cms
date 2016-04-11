<?php namespace claritytech\cms\services;

use claritytech\cms\models\Page;

class PageService
{
    /**
     * store a page
     *
     * @param array $input
     * @return \claritytech\cms\models\Page
     */
    public function store(array $input)
    {
        //store page
        $page = new Page();
        $page->title = $input['title'];
        $page->url = $input['url'];
        $page->save();

        //return page
        return $page;
    }

    /**
     * update a page
     *
     * @param int $pageId
     * @param array $input
     */
    public function update($pageId, array $input)
    {
        //get and update page
        $page = Page::find($pageId);
        $page->title = $input['title'];
        $page->url = $input['url'];
        $page->save();

        //return page
        return $page;
    }

    /**
     * delete a page
     *
     * @param int $pageId
     */
    public function delete($pageId)
    {
        //get page
        $page = Page::find($pageId);

        //delete
        $page->delete();
    }
}
