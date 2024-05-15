<x-layout title="Series">
    @isset($successMessage)
        <div class="alert alert-success">
            {{$successMessage}}
        </div>
    @endisset
    <a href="/series/create" class="btn btn-dark mb-2">Add new serie</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->name }}
                <form action="{{ route('series.delete', ['id' => $serie->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        X
                    </button>
                </form>
            </li> 
        @endforeach
    </ul>
</x-layout>
