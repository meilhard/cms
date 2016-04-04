<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

use App\Http\Requests;

class PageController extends Controller
{
    public function getPages(Request $request)
    {
        $id = $request->query('id');

        $result = [];
        $pages = Page::where('pid', $id)->get();

        foreach($pages as $p) {
            $result[] = [
                'id' => $p->id,
                'text' => $p->title,
                'children' => true
            ];
        }

        return response()->json($result);

    }

}
