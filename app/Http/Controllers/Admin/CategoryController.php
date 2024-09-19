<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    protected string $filesPath = "assets/images/category";
    protected string $model = Category::class;
    protected array $relationModels = [Course::class];
    protected array $relations = ['courses'];

    public function __construct() {
        $this->columns = (new Category())->getFillable();
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'=>'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        return parent::store($request);
    }

    public function update(Request $request, String $id): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        return parent::update($request, $id);
    }
}
