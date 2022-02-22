@extends('dashboard.index')

@section('body')
<main class="col-lg-10 ms-sm-auto col-10 px-md-4">
    <div class="col-lg-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Buat Apotek Baru</h1>  
        </div>
        <div class="col-lg-12">
            <form action="/apotek/create" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_apotek" class="form-label @error('nama_apotek') is-invalid @enderror">Nama Apotek</label>
                    <input type="text" class="form-control" id="nama_apotek" name="nama_apotek">
                    @error('nama_apotek')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat_apotek" class="form-label @error('alamat_apotek') is-invalid @enderror">Alamat</label>
                    <input type="text" class="form-control" id="alamat_apotek" name="alamat_apotek">
                    @error('alamat_apotek')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_telp_apotek" class="form-label @error('no_telp_apotek') is-invalid @enderror">No Telp</label>
                    <input type="text" class="form-control" id="no_telp_apotek" name="no_telp_apotek">
                    @error('no_telp_apotek')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="obat" class="form-label @error('obat') is-invalid @enderror">Obat</label>
                    <input type="text" class="form-control" id="obat" name="obat">
                    @error('obat')
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
                    <label for="harga" class="form-label @error('harga') is-invalid @enderror">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                    @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</main>
@endsection