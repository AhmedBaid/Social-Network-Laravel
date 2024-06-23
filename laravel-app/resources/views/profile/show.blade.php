<x-master title="profile">
    <div class="container-fluid">
        <div class="card my-4 py-4">
            <img class="card-img-top w-25 mx-auto" src="{{asset('storage/'.$profile->image)}}" alt="">
            <div class="card-body text-center">
                <h4 class="card-title">#{{ $profile->id }}  {{ $profile->name }} </h4>
                <p class="card-text">{{ $profile->created_at->format('d-m-y') }}</p>
                <p class="card-text"> Email : <a href="mailto:{{ $profile->email }}">{{ $profile->email }}</a></p>
                <p class="card-text">{{ $profile->bio }}</p>
            </div>
        </div>
    </div>
</x-master>
