<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StudentController extends  BaseController
{
    protected string $filesPath = "assets/images/student";

    protected string $model = Student::class;
    protected array $relationModels = [Course::class];
    protected array $relations = ['courses'];

    public function __construct() {
        $this->columns = (new Student())->getFillable();
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'=>'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone'=>'required|string',
        ]);

        dd($request->all());
        return parent::store($request);
    }

    public function update(Request $request, String $id): RedirectResponse
    {
        $request->validate([
            'name'=>'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone'=>'required|string',
        ]);

        return parent::update($request, $id);
    }
}
