<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ServiceController extends BaseController
{

    protected string $model = Service::class;


    public function __construct() {
        $this->columns = (new Service())->getFillable();
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'=>'required|string',
            'description'=>'required|string',
        ]);

        return parent::store($request);
    }

    public function update(Request $request, String $id): RedirectResponse
    {
        $request->validate([
            'title'=>'required|string',
            'description'=>'required|string',
        ]);

        return parent::update($request, $id);
    }
}
