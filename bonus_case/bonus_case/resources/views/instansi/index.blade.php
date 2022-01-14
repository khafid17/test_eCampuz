@extends('layouts.app')

@section('content')
<div class="container">
<div class="card shadow mb-4">
    <div class="card-header py-3">
            <a href="{{route('create')}}" class="btn btn-dark float-right"><i class="fas fa-fw fa-plus-circle"></i>Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Action</th>
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
                            <div class="container">
                                <a href="" class="btn bg-gradient-success btn-sm text-white"><i class="fas fa-fw fa-edit"></i></a>
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
