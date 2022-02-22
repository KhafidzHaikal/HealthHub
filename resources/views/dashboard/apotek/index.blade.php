@extends('dashboard.index')

@section('body')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Apotek</h1>  
    </div>
    @if (session()->has('success'))
      <div class="alert alert-success col-10" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <a href="/apotek/create" id="tambahapotek" class="btn">Tambah Apotek</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Apotek</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. Telp</th>
            <th scope="col">Obat</th>
            <th scope="col">Karegori</th>
            <th scope="col">Harga</th>
            <th scope="col">Action</th>
          </tr>
          @foreach ($apotek as $p)
              <tr>
                  <th>{{ $loop->iteration }}</th>
                  <th>{{ $p->nama_apotek }}</th>
                  <th>{{ $p->alamat_apotek }}</th>
                  <th>{{ $p->no_telp_apotek }}</th>
                  <th>{{ $p->obat }}</th>
                  <th>{{ $p->kategori }}</th>
                  <th>{{ $p->harga }}</th>
                  <th>
                    <a href="{{ route('edit_apotek', $p) }}" class="btn btn-warning"><i data-feather="edit"></i></a>
                    <form action="{{ route('delete_apotek', $p) }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                        <button class="btn btn-danger" onclick="return confirm(Apakah Data Akan Dihapus?)"><i data-feather="trash-2"></i></button>
                    </form>
                  </th>
              </tr>
          @endforeach
        </thead>
    </table>
</main>
@endsection
