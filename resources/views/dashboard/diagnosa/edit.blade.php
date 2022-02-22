@extends('dashboard.index')

@section('body')
<main class="col-lg-10 ms-sm-auto col-10 px-md-4">
    <div class="col-lg-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Edit Diagnosa</h1>  
        </div>
        <div class="col-lg-12">
            <form action="{{ route('update_diagnosa', $diagnosa) }}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="id" id="" value="{{ $diagnosa->id }}">
                    <label for="nama_penyakit" class="form-label @error('nama_penyakit') is-invalid @enderror">Diagnosa</label>
                    <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit" value="{{ $diagnosa->nama_penyakit }}">
                    @error('nama_penyakit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label @error('kategori') is-invalid @enderror">Kategori</label>
                    <select class="form-select" name="kategori">
                        <option value="Ringan">Ringan</option>
                        <option value="Sedang">Sedang</option>
                      </select>
                    @error('kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="gejala" class="form-label @error('gejala') is-invalid @enderror">Gejala</label>
                    <input type="text" class="form-control" id="gejala" name="gejala" value="{{ $diagnosa->gejala }}">
                    @error('gejala')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</main>
@endsection
