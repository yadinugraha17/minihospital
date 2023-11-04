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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
