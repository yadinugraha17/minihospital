@extends('layout.master')

@section('content')
<div class="container mt-5">
    <div class="mb-3">
        <a href="{{route('create.jadwal')}}" class="btn btn-primary">Tambah</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kegiatan</th>
                <th scope="col">Jam</th>
                <th scope="col">Hari</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Tempat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $item)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$item->jadwal}}</td>
                <td>{{$item->jam}}</td>
                <td>{{$item->hari}}</td>
                <td>{{$item->tanggal}}</td>
                <td>{{$item->tempat}}</td>
                <td>
                    <form action="{{ route('delete.jadwal', $item->id) }}" method="POST" style="display: inline-block;">
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
