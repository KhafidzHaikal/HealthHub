@extends('layout.index')

@section('body')

<div id="profileimage">
  <form id="form" action="{{ route('update_user', $user) }}" method="post">
    @csrf
    @method('put')
    <div class=" container row mb-3 mt-3 col-8">
      <input type="hidden" name="id" id="" value="{{ $user->id }}">
      <div class="col-10 mb-3">
          <label for="name" class="form-label @error('name') is-invalid @enderror">Name</label>
          <input type="text" class="form-control" id="name" value="{{ $user->name }}" name="name">
          @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="col-10">
          <label for="email" class="form-label @error('email') is-invalid @enderror">Email</label>
          <input type="email" class="form-control" id="email" value="{{ $user->email }}" name="email">
          @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="col-10 mt-3" >
          <label for="no_ktp" class="form-label @error('no_ktp') is-invalid @enderror">No. KTP</label>
          <input type="text" class="form-control" id="no_hp" value="{{ $user->no_ktp }}" name="no_ktp">
          @error('no_ktp')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="col-10 mt-3" >
          <label for="birthdate" class="form-label @error('birthdate') is-invalid @enderror">Birthdate</label>
          <input type="date" class="form-control" id="no_hp" value="{{ $user->birthdate }}" name="birthdate">
          @error('birthdate')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="col-10 mt-3 mb-3" >
          <label for="birthplace" class="form-label @error('birthplace') is-invalid @enderror">Birthplace</label>
          <input type="text" class="form-control" id="no_hp" value="{{ $user->birthplace }}" name="birthplace">
          @error('birthplace')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="col-10 mt-3">
          <label for="no_hp" class="form-label @error('no_hp') is-invalid @enderror">No. HP</label>
          <input type="text" class="form-control" id="no_hp" value="{{ $user->no_hp }}" name="no_hp">
          @error('no_hp')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="col-10 mt-3">
          <label for="alamat_user" class="form-label @error('alamat_user') is-invalid @enderror">Alamat</label>
          <input type="text" class="form-control" id="no_hp" value="{{ $user->alamat_user }}" name="alamat_user">
          @error('alamat_user')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</div>

@endsection