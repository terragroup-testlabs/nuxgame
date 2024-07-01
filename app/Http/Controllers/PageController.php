<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function create(RegisterRequest $request, Page $page)
    {
        $page->username = $request->validated('username');
        $page->save();
        return response()->redirectToRoute('page.view', ['page' => $page]);
    }

    public function view(Page $page)
    {
        return view('page.view', compact('page'));
    }

    public function updateSlug(Page $page)
    {
        $page->setSlug();
        $page->save();
        return response()->redirectToRoute('page.view', ['page' => $page]);
    }

    public function delete(Page $page)
    {
        return response()->redirectToRoute('home')->with('danger', 'Page was deleted');
    }
}
