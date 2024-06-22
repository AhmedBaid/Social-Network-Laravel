<x-master title="Ajouter">
    <h3>Modifier Profile</h3>
    @if ($errors->any())
        <x-alert type='danger'>
            <h4>Errors :</h4>
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </x-alert>
    @endif
    <form action="{{ route('profiles.update',$profile->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nom complet</label>
            <input type="text" name="name" class="form-control" value="{{old('name',$profile->name)}}">
            @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{old('email',$profile->email)}}">
            @error('email')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" >
            @error('password')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Confirmation de mot de passe</label>
            <input type="password" name="password_confirmation" class="form-control">
            @error('password_confirmation')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Bio</label>
            <textarea name="bio" cols="30" rows="4" class="form-control" >{{old('bio',$profile->bio)}}</textarea>
            @error('bio')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control" value="{{old('image')}}">
            @error('image')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="d-grid my-2">
            <button type="submit" class="btn btn-primary btn-block">Modifier</button>
        </div>
    </form>
</x-master>
