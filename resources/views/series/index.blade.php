<x-layout>
<h1>Séries</h1>
        <a href="/series/create" target="_blank" class="btn-dark">Adicionar</a>
<ul class="list-group">
    @foreach($series as $serie)
        <li class="list-group-item"> {{$serie }}</li>
    @endforeach
</ul>
</x-layout>