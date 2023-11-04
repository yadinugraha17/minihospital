@extends('layout.master')

@section('content')
<div class="container-fluid">
  <div class="justify-content-center">
    <form method="POST" action="{{ route('update.darah', ['id' => $darah->id]) }}">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="darah">Masukkan Darah</label>
            <input type="text" class="form-control" id="darah" name="darah" value="{{ $darah->darah }}">
        </div>
        <div class="mb-4">
              <label for="jumlah_darah">Stok Darah</label>
              <input type="text" class="form-control" id="jumlah_darah" name="jumlah_darah" value="{{ $darah->jumlah_darah }}">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection
