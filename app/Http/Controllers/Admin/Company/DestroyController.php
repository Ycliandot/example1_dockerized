<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Company $company)
    {
        $company->delete();

        return redirect()->route('admin.company.index');
    }
}
