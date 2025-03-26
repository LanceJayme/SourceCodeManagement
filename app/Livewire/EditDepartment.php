<?php

namespace App\Livewire;

use App\Models\Department;
use Livewire\Component;

class EditDepartment extends Component
{
    public $dept_id, $dept_name, $dept_code, $is_active, $college_id;

    public function mount($id)
    {
        $dept = Department::findOrFail($id);
        $this->dept_id = $dept->id;
        $this->dept_name = $dept->name;
        $this->dept_code = $dept->code;
        $this->is_active = $dept->is_active;
        $this->college_id = $dept->colleges_id;
    }

    public $departments = 
    [
        'Criminology' => 1,
        'Computer Studies' => 2,
        'Business Administration' => 3,
        'Custom Administration' => 4,
        'Hospitality and Tourism Management' => 5,
    ];

    protected $rules = [
        'dept_name' => 'required|string|max:255',
        'dept_code' => 'required|string|max:255',
        'is_active' => 'required|boolean',
        'college_id' => 'required|integer',
    ];

    public function updatedDeptName($value)
    {
        $this->college_id = $this->departments[$value] ?? null;
    }

    public function update()
    {
        $this->validate();

        $dept = Department::findOrFail($this->dept_id);
        $dept->update([
            'name' => $this->dept_name,
            'code' => $this->dept_code,
            'is_active' => $this->is_active,
            'colleges_id' => $this->college_id,
        ]);

        session()->flash('message', 'Department updated successfully!');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.edit-department')->layout('layouts.app');
    }
}
