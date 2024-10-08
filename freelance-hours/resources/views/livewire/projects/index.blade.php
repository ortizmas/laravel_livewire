<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <ul>
        @foreach ($this->projects as $project)
            <li>
                <a href="/project/{{$project->id}}">{{ $project->id}}. {{ $project->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
