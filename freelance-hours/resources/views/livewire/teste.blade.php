<div>
    {{-- Do your work, then step back. --}}
    <input type="text" wire:model.live="search" />
    <br>

    <ul>
        @foreach ($users as $user)
            <li wire:key="{{ $user->id }}">{{ $user->name }}</li>
        @endforeach 
    </ul>
</div>
