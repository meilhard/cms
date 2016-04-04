<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Page;

class ContentController extends Controller
{
    public function getContent(Request $request)
    {
        $id = $request->query('id');

        if ($id == 0)
            return;

        $page = Page::find($id);
        $content = [];

        foreach($page->content as $c) {
            $content[] = $c;
        }
        return response()->json($content);
    }
}
