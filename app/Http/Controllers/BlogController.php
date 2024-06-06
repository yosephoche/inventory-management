<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illumunate\Pagination\CursorPaginator;

use App\Models\Blog;


class BlogController extends Controller
{
    public function index(Request $request)
    {
        // Default items per page
        $itemsPerPage = $request->get('itemsPerPage', 3);

        // Fetch blogs with pagination
        $blogs = Blog::paginate($itemsPerPage);

        // Pass blogs to the view
        return view('blog.index', compact('blogs'));
    }
}
