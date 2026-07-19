<?php

// app/Http/Controllers/EmployeeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function listing()
    {
        $Employees = Employee::all();
        return view('listing', compact('Employees'));
    }


    public function pagination()
    {
        $Employees = Employee::paginate(2);
        return view('pagination', compact('Employees'));
    }
                

    public function insert(Request $request)
    {
        Employee::create([
            'name' => $request->name,
            'Salary' => $request->Salary,
            'Department' => $request->Department,
        ]);
        return redirect()->route('listing');
    }

    public function edit($id)
    {
        $Employee = Employee::findOrFail($id);
        return view('edit', compact('Employee'));
    }

    public function update(Request $request, $id)
    {
        $Employee = Employee::findOrFail($id);
        $Employee->update($request->all());
        return redirect()->route('listing');
    }

    public function delete($id)
    {
        Employee::findOrFail($id)->delete();
        return redirect()->route('listing');
    }
}
