@extends('layouts.main')
@section('container')
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="alert text-center bg-dark" style=" color:#fff;" role="alert">
            Form Peminjaman 
          </div>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card" style="background-color: rgb(219, 219, 219);">
                <div class="card-body">
                    <form action="" method="POST">
                  <h5 class="card-title" style="color: rgb(26, 25, 25);">Data Peminjaman</h5>
                  <hr>
                      <label for="nik" class="form-label">NIK/NO.SIM</label>
                      <input type="text" class="form-control" id="">
                      <label for="nama" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="" >
                      <label for="alamat" class="form-label">Alamat</label>
                      <input type="text" class="form-control" id="" >
                      <label for="no_hp" class="form-label">No Hp</label>
                      <input type="text" class="form-control" id="" >
                      <label for="tanggal_pesan" class="form-label">Tanggal Pesan</label>
                      <input type="date" class="form-control" id="" >
                      <label for="lama_sewa" class="form-label">Lama Sewa</label>
                      <input type="text" class="form-control" id="" >
                      <label for="tanggal_dikembalikan" class="form-label">Tanggal Dikembalikan</label>
                      <input type="date" class="form-control" id="" >
              </div>

            </div>
            </div>
            <div class="col">
              <div class="card" style="background-color: rgb(219, 219, 219);">
                <div class="card-body">
                    <h5 class="card-title" style="color: rgb(46, 45, 45);">Data Peminjaman</h5>
                    <hr>
                    <button type="submit" class="btn btn-danger">Konfirmasi Pembayaran Anda</button><br>
                    </form>
                    <p>Note: 
                    <br>
                        Apabila tidak dilakukan pembayaran hingga melewati tanggal sewa maka pemesanan akan dianggap hangus dan otomatis terhapus</p>
                     </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}

{{-- @extends('dashboard.dashboard')
@section('content') --}}
<div class="container-fluid">
  <!-- table kategori -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pesanan</h4>
          <div class="card-tools">
            <a href="/pesanan/tambah" class="btn btn-sm btn-primary">
              Baru
            </a>
          </div>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="row">
              <div class="col">
                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="ketik keyword disini">
              </div>
              <div class="col-auto">
                <button class="btn btn-primary">
                  Cari
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="50px">No</th>
                  <th>Id User</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                  <th>Kode</th>
                  <th>Jumlah Harga</th>
                  <th>Action </th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>@foreach($pesanans as $pesanan)
                <tr>
                <td class="text-center">{{$loop->iteration}}</td>
                <td>{{$pesanan->user_id}}</td>
                <td class="text-right">Rp.{{$pesanan->tanggal}}</td>
                <td class="text-center">{{$pesanan->status}}</td>
                <td>{{$pesanan->kode}}</td>
                <td>{{$pesanan->jumlah_harga}}</td>
                <td>
                <a href="/pesanan/edit/{{ $pesanan->id }}" class="btn btn-xs btn-primary">Edit</a>
                <a href="/pesanan/destroy/{{$pesanan->id}}" class="btn btn-xs btn-danger" onclick="return confirm('yakin?');">Delete</a>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- @endsection --}}
@endsection