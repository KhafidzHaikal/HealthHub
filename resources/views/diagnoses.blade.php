@extends('layout.index')

@section('body')
<div id="diagnosesimage">
    <link rel="stylesheet" href="/css/diagnoses.css">
    <form class="row g-3 justify-content-center mt-lg-5">
        <h1 style="text-align: center" class="diagnoses">Diagnoses</h1>
        <div class="col-5">
            <label for="indication" class="visually-hidden">Idication</label>
            <input type="text" class="form-control" id="indication" placeholder="Indications">
        </div>
        <div class="col-auto" style="margin-bottom: 300px">
            <button type="submit" class="btn" id="search">Search</button>
        </div>
    </form>
</div>
@endsection