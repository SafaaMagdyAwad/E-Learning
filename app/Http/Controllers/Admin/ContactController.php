<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends BaseController
{
    protected string $model = Contact::class;

    public function __construct() {
        $this->columns = (new Contact())->getFillable();
    }


}
