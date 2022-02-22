@extends('dashboard.index')

@section('body')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>  
    </div>
    <div class="box">
      <h3 style="text-align: center" class="mt-3 mb-3 dataapotek">Data Apotek</h3>
      <div class="detail-apotek">
        <small>jumlah </small><strong>{{ $jumlahApotek }}</strong><small> Apotek</small>
      </div>
      <a href="/apotek" class="btn">Lihat</a>
    </div>
    <div class="box">
      <h3 style="text-align: center" class="mt-3 mb-3 datadiagnosa">Data Diagnosa</h3>
      <div class="detail-diagnosa">
        <small>jumlah</small><strong>{{ $jumlahdiagnosa }}</strong><small>Diagnosa</small>
      </div>
      <a href="/diagnosa" class="btn" id="diagnosa">Lihat</a>
    </div>
</main>
@endsection