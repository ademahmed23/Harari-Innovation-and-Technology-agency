<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BlogCategoryDataTable;
use App\DataTables\BlogCommentDataTable;
use App\DataTables\BlogDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogCreateRequest;
use App\Http\Requests\Admin\BlogUpdateRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Language;
use App\Models\BlogCateogry;
use App\Models\BlogComment;
use App\Traits\FileUploadTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Response as GlobalResponse;
use Str;
use Auth;

class BlogController extends Controller
{
    use FileUploadTrait;

    public function __construct() {
        $this->middleware(['permission:blogs index,admin'])->only(['index']);
        $this->middleware(['permission:blogs create,admin'])->only(['create']);
        $this->middleware(['permission:blogs update,admin'])->only(['update']);
        $this->middleware(['permission:blogs destroy,admin'])->only(['destroy']);
    }
    public function index(BlogDataTable $dataTable) : View|JsonResponse
    {
        $languages = Language::all();
        return $dataTable->render('admin.blog.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function fetchCategory(Request $request)
    {
        $categories = BlogCategory::where('language', $request->lang)->get();
        return $categories;
    }
    public function create(Request $request) : View
    {
        $languages = Language::all();
        // $categories = BlogCategory::where('language', getLangauge())->get();
        return view('admin.blog.create', compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogCreateRequest $request) : RedirectResponse
    {
        $imagePath = $this->uploadImage($request, 'image');

        $blog = new Blog();
        // $blog->user_id = auth()->guard('admin')->user()->id;
        $blog->user_id = Auth::guard('admin')->user()->id;
        $blog->image = $imagePath;
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->category_id = $request->category;
        $blog->language = $request->language;
        $blog->description = $request->description;
        $blog->seo_title = $request->seo_title;
        $blog->seo_description = $request->seo_description;
        $blog->status = $request->status;
        $blog->save();

        toastr()->success('Created Successfully');

        return to_route('admin.blogs.index');


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $languages = Language::all();
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::all();
        return view('admin.blog.edit', compact('blog', 'categories','languages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogUpdateRequest $request, string $id) : RedirectResponse
    {
        $imagePath = $this->uploadImage($request, 'image', $request->old_image);

        $blog = Blog::findOrFail($id);
        $blog->image = !empty($imagePath) ? $imagePath : $request->old_image;
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->category_id = $request->category;
        $blog->description = $request->description;
        $blog->language = $request->language;
        $blog->seo_title = $request->seo_title;
        $blog->seo_description = $request->seo_description;
        $blog->status = $request->status;
        $blog->save();

        toastr()->success('Created Successfully');

        return to_route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : Response
    {
        try {
            $blog = Blog::findOrFail($id);
            $this->removeImage($blog->image);
            $blog->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }

    function blogComment(BlogCommentDataTable $dataTable) : View|JsonResponse
    {
        return $dataTable->render('admin.blog.blog-comment.index');
    }

    function commentStatusUpdate(string $id) : RedirectResponse {
        $comment = BlogComment::find($id);

        $comment->status = !$comment->status;
        $comment->save();

        toastr()->success('Updated Successfully');
        return redirect()->back();
    }

    function commentDestroy(string $id) : Response {
        try {
            $comment = BlogComment::findOrFail($id);
            $comment->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}
