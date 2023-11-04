@extends('layout.master')

@section('content')

@if(session('status'))
<script>
     Swal.fire({
        icon: 'success',
        title : 'Sukses!',
        text : "{{session('status')}}",
    });
</script>
@endif

<div class="container mt-5">
    <div class="mb-3">
        <a href="{{ route('tambah.darah') }}" class="btn btn-primary">Tambah</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Darah</th>
                <th scope="col">Stok Darah</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $item)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$item->darah}}</td>
                <td>{{$item->jumlah_darah}}</td>
                <td>
                    <a href="{{ route('edit.darah', $item->id) }}" class="btn btn-info">Edit</a>
                    <form action="{{ route('delete.darah', $item->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
