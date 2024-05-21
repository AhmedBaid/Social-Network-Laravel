<x-master title="Page d'acceuill">
    @section('title')
    Acceuil
    @endsection
    <x-alert type='warning' nom='ahmed'>
        <strong>salam 3alaykom</strong>
    </x-alert>
    <x-alert type='danger' nom='jamaa'>
        <strong>salam 3alaykom</strong>
    </x-alert>
    <x-alert type='info' nom='3adel'>
        <strong>salam 3alaykom</strong>
    </x-alert>
    <x-users-table :users=$users />
</x-master>



{{-- <h1>salam 3alaikom {{ $prenom }} {{ $nom }}</h1>
{{-- <h3>Cours</h3>
<ul>
    <ul>
        @foreach ($languages as $language)
        <li>{{$language}}</li>
        @endforeach
    </li>
</ul> --}}



{{-- //////if methode --}}
{{-- @if (count($languages) > 0)
    <table border="2">
        <tr>
            <th>
                Cours
            </th>
        </tr>
        @foreach ($languages as $language)
            <tr>
                <td>
                    {{ $language }}
                </td>
            </tr>
        @endforeach
    </table>
@else
    <h2>Pas de cours pour l'instant</h2>
@endif --}}

{{-- /////unless methode  --}}
{{-- @empty($languages)
    <h2>Pas de cours pour l'instant</h2>
@else
    <table border="1" width="200px">
        <tr>
            <th>
                Cours
            </th>
        </tr>
        @foreach ($languages as $language)
            <tr>
                <td>
                    {{ $language }}
                </td>
            </tr>
        @endforeach
    </table>
@endempty

@switch($color)
    @case('black')
        black
    @break
    @case('pnik')
        pink
    @break
    @default
        {{$color}}
@endswitch --}}
