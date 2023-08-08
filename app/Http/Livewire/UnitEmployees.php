<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OrganizationUnit;
use App\Models\JobRole;
use Livewire\WithPagination;

class UnitEmployees extends Component
{
    use WithPagination;

    public $orgUnit;
    
    public $listeners = ['orgUnitChanged' => 'navigateToUnit'];
    
    public function navigateToUnit($unitId)
    {
        $unit = OrganizationUnit::findOrfail($unitId);
        $this->orgUnit = $unit;
    }

    public function render()
    {
        $employees = $this->orgUnit->employees()->paginate(5);

        $jobRoles = JobRole::pluck('name', 'id');
        return view('livewire.organization-unit.unit-employees', compact('employees', 'jobRoles'));
    }
}
