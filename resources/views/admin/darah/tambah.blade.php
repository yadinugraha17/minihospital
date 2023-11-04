@extends('layout.master')

@section('content')
<div class="container-fluid">
  <div class="justify-content-center">
      <form method="post" action="{{ route('store.darah') }}">
          @csrf
          <div class="mb-4">
              <label for="darah">Masukkan Darah</label>
              <input type="text" class="form-control" id="darah" name="darah" placeholder="Nama Darah">
          </div>
          <div class="mb-4">
              <label for="jumlah_darah">Stok Darah</label>
              <input type="text" class="form-control" id="jumlah_darah" name="jumlah_darah" placeholder="Masukkan Stok Darah">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection
