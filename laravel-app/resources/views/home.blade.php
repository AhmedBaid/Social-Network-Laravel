<x-master title="Page d'acceuill">
    <h2>Home</h2>
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
