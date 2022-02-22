@extends('layout.index')

@section('body')
<h1 style="text-align: left; margin-top: 50px" class="medicine">Medicine</h1>
<form class="row" style="margin-left: 20px ; margin-top: -90px">
  <div class="col-2">
      <label for="indication" class="visually-hidden">Search</label>
      <input type="text" class="form-control" id="indication" placeholder="Search">
  </div>
  <div class="col-auto" style="margin-bottom: 50px">
      <button type="submit" class="btn btn-primary" id="search">Search</button>
  </div>
</form>
<div class = "row justify-content-center mb-4">
    <div class="col-md-3">
      <div class="card text-center" >
        <img src="img/medicine1.png" width="200" height="350" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="/medicineobat" style="text-align-center" class="btn btn-primary mt-1" >Medicine</a>
        </div>
      </div>
    </div>


      <div class="col-md-3">
        <div class="card text-center" >
          <img src="img/vitamins1.png" width="200" height="330" class="card-img-top" alt="...">
          <div class="card-body">    
            <a href="#" style="text-align-center" class="btn btn-primary mt-4"  >Vitamins</a>
          </div>
        </div>
      </div>


        <div class="col-md-3">
          <div class="card text-center" >
            <img src="img/crutches1.png" width="200" height="350" class="card-img-top" alt="...">
            <div class="card-body">
              <a href="#" style="text-align-center" class="btn btn-primary mt-1 " >Medical Equipment</a>
            </div>
          </div>
        </div>
  </div>
@endsection