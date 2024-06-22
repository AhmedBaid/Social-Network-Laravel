<div class="col-sm-4">
    <div class="card my-2">
        <img src="https://picsum.photos/200/300" alt="" height="250px" class="card-img-top">
        <div class="card-body">
            <h4 class="card-title">{{ Str::limit($profile->name, 40) }}</h4>
            <p class="card-text">{{ Str::limit($profile->bio, 40) }}</p>
            <a href="{{ route('profiles.show', $profile->id) }}" class="stretched-link"></a>
        </div>
        <div class="card-foot border-top px-2 py-2 bg-light" style="z-index: 9">
            <form action="{{ route('profiles.destroy', $profile->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-md float-end">supprimer</button>
            </form>
            <form action="{{ route('profiles.edit', $profile->id) }}" method="get">
                @csrf
                <button class="btn btn-primary mx-2 btn-md float-end">modifier</button>
            </form>
        </div>
    </div>
</div>
