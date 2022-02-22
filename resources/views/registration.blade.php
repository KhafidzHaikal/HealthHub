@extends('layout.reg')

@section('body')
<main class="form-registration">
    <form action="/registration" method="POST">
        @csrf
        <h2 style="text-align: center">Registration</h2>
        <p>Silakan untuk melakukan registrasi terlebih dahulu</p>
        <div class="row mb-3 mt-3">
            <div class="col-10 mb-3">
                <label for="name" class="form-label @error('name') is-invalid @enderror">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-10">
                <label for="email" class="form-label @error('email') is-invalid @enderror">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-10 mt-3" >
                <label for="no_ktp" class="form-label @error('no_ktp') is-invalid @enderror">No. KTP</label>
                <input type="text" class="form-control" id="no_hp" placeholder="No KTP" name="no_ktp">
                @error('no_ktp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-10 mt-3" >
                <label for="birthdate" class="form-label @error('birthdate') is-invalid @enderror">Birthdate</label>
                <input type="date" class="form-control" id="no_hp" placeholder="Birthdate" name="birthdate">
                @error('birthdate')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-10 mt-3 mb-3" >
                <label for="birthplace" class="form-label @error('birthplace') is-invalid @enderror">Birthplace</label>
                <input type="text" class="form-control" id="no_hp" placeholder="birthplace" name="birthplace">
                @error('birthplace')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input-group mt-3 mb-3">
                <input type="file" class="form-control col-3" id="foto" name="foto">
                <label class="input-group-text col-2 @error('foto') is-invalid @enderror" for="foto">Upload</label>
                @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-10 mt-3">
                <label for="no_hp" class="form-label @error('no_hp') is-invalid @enderror">No. HP</label>
                <input type="text" class="form-control" id="no_hp" placeholder="No HP" name="no_hp">
                @error('no_hp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-10 mt-3">
                <label for="alamat_user" class="form-label @error('alamat_user') is-invalid @enderror">Alamat</label>
                <input type="text" class="form-control" id="no_hp" placeholder="Alamat" name="alamat_user">
                @error('alamat_user')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-10 mt-3 mb-3">
                <label for="password" class="form-label @error('password') is-invalid @enderror">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div> 
        </div>
        <button type="submit">Sign Up</button>
    </form>
</main>
@endsection