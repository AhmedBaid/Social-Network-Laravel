<x-master title="Ajouter">
    <h3>Ajouter Profile</h3>
    @if ($errors->any())
        <x-alert type='danger'>
            <h4>Errors :</h4>
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </x-alert>
    @endif
    <form action="{{ route('profiles.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom complet</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}">
            @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{old('email')}}">
            @error('email')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" value="{{old('password')}}">
            @error('password')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Confirmation de mot de passe</label>
            <input type="password" name="password_confirmation" class="form-control" value="{{old('password_confirmation')}}">
            @error('password_confirmation')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Bio</label>
            <textarea name="bio" cols="30" rows="4" class="form-control" >{{old('bio')}}</textarea>
            @error('bio')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="d-grid my-2">
            <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
        </div>
    </form>
</x-master>
