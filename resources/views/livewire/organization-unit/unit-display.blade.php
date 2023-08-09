<div class="container-fluid">
    @foreach($orgUnit->children()->get() as $unit)
    <div class="row">
        <div class="col-md-8 mb-2">
            <a href="#" wire:click="$emit('orgUnitChanged', {{ $unit->id }})">
                {{ $unit->name }}
            </a>
        </div>
        <div class="col-md-2 mb-2">
            {{ $unit->short_name }}
        </div>
    </div>
    @endforeach
</div>
