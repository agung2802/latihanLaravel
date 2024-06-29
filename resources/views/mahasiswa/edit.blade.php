@extends('mahasiswa.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12" margin-tb>
            <div>
                <h2>Edit Mahasiswa</h2>
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

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kelas:</strong>
                    <input class="form-control" name="kelas" placeholder="Kelas" value="{{ $mahasiswa->kelas }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>

    @endsection