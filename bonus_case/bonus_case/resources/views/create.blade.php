@extends('layouts.app')

@section('content')

 <div class="container">
 @if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	</div>
  	@endforeach
  @endif

  @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div>

  @endif
  <div class="col-lg-12 order-lg-1">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Tambah</h6>
        </div>
    <div class="card-body">
        <form action="{{route('instansi.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Intansi</label>
            <input type="text" class="form-control" name="instansi">
        </div>
        <div class="form-group">
            <label>Diskripsi</label>
            <textarea name="diskripsi" id="" class="form-control" cols="30" rows="10"></textarea>
            <!-- <input type="text" class="form-control" name="diskripsi"> -->
        </div>
        

        <div class="form-group mt-2">
            <button class="btn btn-dark btn-block">Simpan</button>
        </div>

        </form>
    </div>
  </div>
</div>
 </div>

@endsection
