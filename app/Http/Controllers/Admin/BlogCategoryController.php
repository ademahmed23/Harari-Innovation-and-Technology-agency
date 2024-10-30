<?php
namespace App\Http\Controllers\Admin;

use App\DataTables\BlogCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Language;
use Illuminate\View\View;
use Str;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BlogCategoryDataTable $dataTable, Request $request): View|JsonResponse
    {
        $languages = Language::all();
        $selectedLanguage = $request->get('language', $languages->first()->lang);
    
        return $dataTable->with('language', getLangauge())->render('admin.blog.blog-category.index', compact('languages', 'selectedLanguage'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $languages = Language::all();
        return view('admin.blog.blog-category.create', compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:blog_categories,name'],
            'status' => ['required', 'boolean'],
            'language' => ['required', 'exists:languages,lang']
        ]);

        $category = new BlogCategory();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->status = $request->status;
        $category->language = $request->language;
        $category->save();

        toastr()->success('Created Successfully!');

        return to_route('admin.blog-category.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $languages = Language::all();
        $category = BlogCategory::findOrFail($id);
        return view('admin.blog.blog-category.edit', compact('category', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:blog_categories,name,' . $id],
            'status' => ['required', 'boolean'],
            'language' => ['required', 'exists:languages,lang']
        ]);

        $category = BlogCategory::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->status = $request->status;
        $category->language = $request->language;
        $category->save();

        toastr()->success('Updated Successfully!');

        return to_route('admin.blog-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): Response
    {
        try {
            $category = BlogCategory::findOrFail($id);
            $category->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'Something went wrong!']);
        }
    }
}
