@extends('mahasiswa.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Add New Mahasiswa</h2>
        </div>
        <div>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Nama: </strong>
            <input type="text" name="nama" placeholder="Nama" class="form-control">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Kelas: </strong>
            <input type="text" name="kelas" placeholder="Kelas" class="form-control">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
@endsection