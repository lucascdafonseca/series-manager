<x-layout title="Series">
    <a href="/series/create" class="btn btn-dark mb-2">Add new serie</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>
