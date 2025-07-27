<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Admin\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $companies = Company::paginate(config('app.admin.pagination.companiesPerPage'));

        return view('admin.companies.index', compact('companies'));
    }
}
