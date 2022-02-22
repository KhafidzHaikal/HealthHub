@extends('dashboard.index')

@section('body')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Diagnosa</h1>  
    </div>
    @if (session()->has('success'))
      <div class="alert alert-success col-10" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <a href="/diagnosa/create" id="tambahdiagnosa" class="btn">Tambah Diagnosa</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Diagnosa</th>
            <th scope="col">Kategori</th>
            <th scope="col">Gejala</th>
          </tr>
          @foreach ($diagnosa as $p)
              <tr>
                  <th>{{ $loop->iteration }}</th>
                  <th>{{ $p->nama_penyakit }}</th>
                  <th>{{ $p->kategori }}</th>
                  <th>{{ $p->gejala }}</th>
                  <th>
                    <a href="{{ route('edit_diagnosa', $p) }}" class="btn btn-warning"><i data-feather="edit"></i></a>
                    <form action="{{ route('delete_diagnosa', $p) }}" method="post" class="d-inline">
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
