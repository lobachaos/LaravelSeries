<x-layout>
    <h1>Adicionar série</h1>
    <form action="/series/store" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" id="name" name="name" placeholder="Name" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark">Adicionar</button>
    </form>
</x-layout>