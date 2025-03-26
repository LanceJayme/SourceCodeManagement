<?php

namespace App\Livewire;

use App\Models\Department;
use Livewire\Component;

class CollegeTable extends Component
{

    public function deleteDepartment($id)
    {
        $department = Department::find($id);

        if (!$department) {
            session()->flash('error', 'Department not found.');
            return;
        }

        try {
            $department->delete();
            session()->flash('success', 'Department deleted successfully.');
        } catch (\Exception $e) {
            session()->flash('error', 'Cannot delete department. It may be linked to other records.');
        }
    }
    public function render()
    {
        return view('livewire.college-table', [
            'departments' => Department::all()
        ]);
    }

}
