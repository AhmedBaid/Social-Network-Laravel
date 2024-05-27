<x-master title="Se connecter">
    <div class="container w-75 my-2 bg-light p-5">
        <h4>Authentification</h4>
        <form action={{route('login')}} method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="login" class="form-control" value="{{old('login')}}">
            @error('login')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password">
            @error('password')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </div>
    </form>
</div>
</x-master>

