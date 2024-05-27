<x-master title="profiles">
    <h3>Profiles</h3>
    <div class="row my-4">
        @foreach ($profiles as $profile)
        <x-profile-card :profile=$profile/>
            @endforeach
    </div>
{{ $profiles->links() }}
</x-master>
