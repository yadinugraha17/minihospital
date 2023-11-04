@extends('layout.master')

@section('content')
@if(session('status'))
    <script>
        Swal.fire({
        title: 'Data Berhasil di Hapus!',
        text: 'Do you want to continue',
        icon: 'error',
        confirmButtonText: 'Ok'
        })
    </script>
@endif
<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Unit</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Darah</th>
                <th scope="col">jumlah</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $item)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$item->unit->unit}}</td>
                <td>{{$item->tanggal}}</td>
                <td>{{$item->darah->darah}}</td>
                <td>{{$item->jumlah}} kantong</td>
                <td>{{$item->status}}</td>
                <td>
                    <form action="{{route('confir.permintaan', $item->id)}}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-info ti ti-checkbox" onclick="return confirm('Apakah Anda yakin ingin konfirmasi data ini?')"></button>
                    </form>
                    <form action="{{ route('permintaan.delete', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ti ti-trash" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" ></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
