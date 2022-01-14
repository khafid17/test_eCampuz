@extends('layouts.app')

@section('content')
<div class="container">
    <form class="d-flex" action="{{route('cari')}}" method="GET">
        <input name="query" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
    </form>
<div class="card shadow mb-4">
    <div class="card-header py-3">
            <a href="{{route('instansi.create')}}" class="btn btn-dark float-right"><i class="fas fa-fw fa-plus-circle"></i>Tambah Data</a>
    </div>
                      
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th width="25%">Action</th>
                        <th>Nama</th>
                        <th>Diskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no=1;
                    @endphp
                    @foreach ($instansi as $key=>$item)

                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                        <div class="ml-4">
                                <form action="{{ route('instansi.destroy', $item->id )}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('instansi.edit', $item->id ) }}" class="btn btn-success">edit</a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apa kamu yakin akan menghapus data?')">delete</button>
                                </form>
                        </div>
                        </td>
                        <td>{{$item->instansi}}</td>
                        <td>{{$item->diskripsi}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
