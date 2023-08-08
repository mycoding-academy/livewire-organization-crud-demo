@props(['breadcrumbs'=> collect()])

@unless ($breadcrumbs->isEmpty())
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @foreach($breadcrumbs as $breadcrumb)
                @if (!$loop->last)
                    <li class="breadcrumb-item">
                        <a href="#" wire:click="$emit('orgUnitChanged', {{ $breadcrumb->unit_id }})">
                            {{ $breadcrumb->name }}
                        </a>
                    </li>
                @else
                    <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb->name }}</li>
                @endif
            @endforeach
        </ol>
    </nav>    
@endunless