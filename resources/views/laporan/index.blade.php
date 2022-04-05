@extends('dashboard.dashboard')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
        <div class="card-header">
          <span type="create" class="btn btn-sm btn-primary">Data Laporan</span>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input wire:model="search" type="search" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                </div>
            </div>
        </div>
            <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap" id="example1">
            <thead>
              <tr>
                  <th width="10%">No</th>
                  <th>Id User</th>
                  <th>Alamat</th>
                  <th>No HP</th>
                  <th>Upload Ktp</th>
                  <th>Rekening</th>
                  <th>Bukti Pembayaran</th>
                  <th>Tanggal Pesanan</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($laporan as $l)
              <tr>
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td class="text-center">{{ $l->id }}</td> 
                  <td class="text-center">{{ $l->alamat }}</td>
                  <td class="text-center">{{ $l->no_hp }}</td>  
                  <td class="text-center"><img width="200" src="/storage/ktp/{{
                  $l->upload_ktp }}" alt="" srcset=""></td>
                  <td class="text-center">{{ $l->rekening }}</td>
                  <td class="text-center"><img width="200" src="/storage/pembayaran/{{
                  $l->bukti_pembayaran }}" alt="" srcset=""></td> 
                  <td class="text-center">{{ $l->created_at}}</td>
              </tr>
              @endforeach
            </tbody> 
          </table>
        </div>
    </div>
  </div>
</div>
@endsection