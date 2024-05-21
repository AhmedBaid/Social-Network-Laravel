@props(['users'])
<div>
    <h3>Home</h3>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Metier</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['nom']}}</td>
            <td>{{$user['metier']}}</td>
        </tr>
        @endforeach
    </table>
</div>
