@extends('layout.master')

@section('content')
<div class="container-fluid">
  <div class="justify-content-center">
      <form method="post" action="{{ route('store.jadwal') }}">
          @csrf
          <div class="mb-4">
              <label for="jadwal">Kegiatan</label>
              <input type="text" class="form-control" id="jadwal" name="jadwal" placeholder="Nama Kegiatan">
          </div>
          <div class="mb-4">
              <label for="jam">Jam</label>
              <input type="time" class="form-control" id="jam" name="jam" placeholder="Waktu">
          </div>
          <div class="mb-4">
              <label for="hari">Hari</label>
              <input type="text" class="form-control" id="hari" name="hari" placeholder="Hari">
          </div>
          <div class="mb-4">
              <label for="tanggal">Tanggal</label>
              <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
          </div>
          <div class="mb-4">
              <label for="tempat">Tempat</label>
              <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection
