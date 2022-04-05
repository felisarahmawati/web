@extends('layouts.main')
@section('container')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah Formulir</h3>
          <div class="card-tools">
            <a href="/formulir/formulir" class="btn btn-sm btn-danger">
              Tutup
            </a>
          </div>
        </div>
        <div class="card-body">
          <form action="/formulir/store" method="POST">
            {{csrf_field()}}
             <div class="form-group">
              <label for="nik">Nik</label>
              <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}" id="nik" placeholder="Masukkan nik "> @error('nik')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" id="nama" placeholder="Masukkan Nama "> @error('nama')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="tgl_pesan">Tanggal Pesan</label>
              <input type="date" name="tgl_pesan" class="form-control @error('tgl_pesan') is-invalid @enderror" value="{{ old('tgl_pesan') }}" id="tgl_pesan" placeholder="Tanggal Pesan"> @error('tgl_pesan')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="lama_sewa">Lama Sewa</label>
              <input type="text" name="lama_sewa" class="form-control @error('lama_sewa') is-invalid @enderror" value="{{ old('lama_sewa') }}" id="lama_sewa" placeholder="Lama Sewa"> @error('lama_sewa')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="tgl_kembali">Tanggal Kembali</label>
              <input type="date" name="tgl_kembali" class="form-control @error('tgl_kembali') is-invalid @enderror" value="{{ old('tgl_kembali') }}" id="tgl_kembali" placeholder="Tanggal Kembali"> @error('tgl_kembali')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="gambar">Gambar</label>
              <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" value="{{ old('gambar') }}" id="gambar" placeholder="Masukkan Gambar"> @error('gambar')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="foto_ktp">Foto KTP</label>
              <input type="file" name="foto_ktp" class="form-control @error('foto_ktp') is-invalid @enderror" value="{{ old('foto_ktp') }}" id="foto_ktp" placeholder="Masukkan foto_ktp"> @error('foto_ktp')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection