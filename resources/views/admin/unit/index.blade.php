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
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Unit</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Darah</th>
                <th scope="col">jumlah</th>
                <th scope="col">Status</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
