<x-layout title="New Serie">
    <form method="post" action="/series/store">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
