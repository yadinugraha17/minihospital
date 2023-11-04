@extends('layout.master')

@section('content')

<div class="container mt-5">
    <div class="mb-3">
        <h4>Formulir</h4>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Darah</th>
                <th scope="col">Penyakit</th>
                <th scope="col">No HP</th>
                <th scope="col">Tempat</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $item)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$item->nama}}</td>
                <td>{{$item->tanggal}}</td>
                <td>{{$item->darah->darah}}</td>
                <td>{{$item->penyakit}}</td>
                <td>{{$item->nohp}}</td>
                <td>{{$item->jadwal->tempat}}</td>
                <td>{{$item->status}}</td>
                <td>
                    <form action="{{route('confir.form', $item->id)}}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-info ti ti-checkbox" onclick="return confirm('Apakah Anda yakin ingin konfirmasi data ini?')"></button>
                    </form>
                    <form action="{{ route('formulir.delete', $item->id) }}" method="POST">
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
