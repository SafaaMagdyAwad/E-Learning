<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\user;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CourseController extends BaseController
{

    protected string $filesPath = "assets/images/course";
    protected string $model = Course::class;
    protected array $relationModels = [Instructor::class, Category::class];
    protected array $relations = ['instructor','category'];

    public function __construct() {
        $this->columns = (new Course())->getFillable();
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'=>'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price'=>'required',// adding float
            'duration'=>'required',
            'user_id'=>'required|integer|exists:users,id',
            'category_id'=>'required|integer|exists:categories,id',
        ]);
        $request['star']=0;
        $request['numberOfStudents']=0;
        return parent::store($request);
    }

    public function update(Request $request, String $id): RedirectResponse
    {
        $request->validate([
            'title'=>'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price'=>'required',
            'duration'=>'required',
            'user_id'=>'required|integer|exists:users,id',
            'category_id'=>'required|integer|exists:categories,id',
        ]);

        return parent::update($request, $id);
    }
}
