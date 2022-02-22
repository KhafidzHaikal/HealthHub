@extends('layout.index')

@section('body')

<div>
  <div id="viewprofile" class="container" >
      <div>
        <img src="/img/emptyphoto.png">
      </div>
      
  </div>
  <div id="idlist" class="container col-2 ml-5">
    <ul class="list-group">
      <li class="list-group-item">Name</li>
      <li class="list-group-item">NIM</li>
      <li class="list-group-item">Birthdate</li>
      <li class="list-group-item">Birthplace</li>
      <li class="list-group-item">Address</li>
      <li class="list-group-item">Phone Number</li>
    </ul>
  </div>
  <div id="idisi" class="container col-5 ml-5">
    <ul class="list-group">
      @foreach ($user as $u)
        <li class="list-group-item">{{ $u->name }}</li>
        <li class="list-group-item">{{ $u->no_ktp }}</li>
        <li class="list-group-item">{{ $u->birthdate }}</li>
        <li class="list-group-item">{{ $u->birthplace }}</li>
        <li class="list-group-item">{{ $u->alamat_user }}</li>
        <li class="list-group-item">{{ $u->no_hp }}</li>
        <a type="button" href="{{ route('edit_user', $u) }}" class="btn btn-outline-success">Edit Profile</a>
      @endforeach
    </ul>
  </div>
</div>

@endsection