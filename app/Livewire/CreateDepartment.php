<?php

namespace App\Livewire;

use App\Models\Department;
use Livewire\Component;

class CreateDepartment extends Component
{

    public $dept_name, $dept_code, $isActive = 0, $college_id;
    public $id;

    protected $rules = [
        'dept_name' => 'required|string|max:255',
        'dept_code' => 'required|string|max:255',
        'isActive' => 'required|boolean',
        'college_id'=> 'required|integer',
    ];

    public $departments = 
    [
        'Criminology' => 1,
        'Computer Studies' => 2,
        'Business Administration' => 3,
        'Custom Administration' => 4,
        'Hospitality and Tourism Management' => 5,
    ];

    public function mount($id = null) 
    {
        $this->id = $id;
    }

    public function updatedDeptName($value)
    {
        $this->college_id = $this->departments[$value] ?? null;
    }

    public function save()
    {
        $this->validate();

        Department::create([
            "name" => $this->dept_name,
            "code" => $this->dept_code,
            "colleges_id" => $this->college_id,
            "is_active" => (bool) $this->isActive, // Ensure this value is set before submitting
        ]);

        session()->flash('message', 'Department created successfully!');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.create-department')->layout('layouts.app');
    }
}
