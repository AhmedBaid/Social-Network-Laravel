<div class="col-sm-4">
    <div class="card my-2">
        <img src="https://picsum.photos/200/300" alt="" height="250px" class="card-img-top">
        <div class="card-body">
            <h4 class="card-title">{{ Str::limit($profile->name, 40) }}</h4>
            <p class="card-text">{{ Str::limit($profile->bio, 60) }}</p>
            <a href="{{ route('profiles.show', $profile->id) }}" class="stretched-link"></a>
        </div>
    </div>
</div>
