<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Employee\StoreEmployeeRequest;
use App\Http\Requests\Employee\UpdateEmployeeRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $employees = Employee::paginate(config('app.admin.pagination.employeesPerPage'));

        return view('admin.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $companies = Company::all();
        return view('admin.employees.create', compact('companies'));
    }


    public function store(StoreEmployeeRequest $request)
    {
        $data = $request->validated();

        if (isset($data['photo'])) {
            $data['photo'] = Storage::disk('public')->put('/images', $data['photo']);;
        }

        Employee::create($data);

        return redirect()->route('admin.employees.index');
    }


    public function show(Employee $employee)
    {
        $prevUrl = URL::previous();

        return view('admin.employees.show', compact('employee', 'prevUrl'));
    }


    public function edit(Employee $employee)
    {
        $prevUrl = URL::previous();
        $companies = Company::all();

        return view('admin.employees.edit', compact('employee', 'prevUrl', 'companies'));
    }


    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $data = $request->validated();
        $this->service->update($data, $employee);

        return redirect()->route('admin.employees.index');
    }


    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->back();
    }


    private function _deletePhoto($photoPath = '')
    {
        if (Storage::disk('public')->exists($photoPath)) {
            Storage::disk('public')->delete($photoPath);
        }
    }
}
