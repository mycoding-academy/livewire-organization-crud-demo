<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OrganizationUnit;

class UnitDisplay extends Component
{
    public $orgUnit;

    public $listeners = ['orgUnitChanged' => 'navigateToUnit'];
    
    public function navigateToUnit($unitId)
    {
        $unit = OrganizationUnit::findOrfail($unitId);
        $this->orgUnit = $unit;
    }

    public function render()
    {
        return view('livewire.organization-unit.unit-display');
    }
}
