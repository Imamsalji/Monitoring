@extends('layouts.app')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>pengisian sesuai jadwal kegiatan</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('isis.index') }}"> Back</a>

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

   

<form action="{{ route('isis.store') }}" method="POST" style="color: white">

    @csrf
    <center>
    <div class="form-group">
        <strong>nis:</strong>
        <input type="text" name="nis" id="nis" class="form-control" placeholder ="nis" style="width: 95%" value="">
    </div>
    <div class="form-group">
        <strong>masukan hari:</strong>
        <input type="datetime" name="hari" id="hari" class="form-control" placeholder ="hari" style="width: 95%">
    </div>
    <div class="form-group">
        <strong>masukan waktu:</strong>
        <input type="datetime" name="waktu" id="waktu" class="form-control" placeholder ="waktu" style="width: 95%">
    </div>
    <div class="form-group">
        <strong>masukan kegiatan:</strong>
        <input type="datetime" name="kegiatan" id="kegiatan" class="form-control" placeholder ="kegiatan" style="width: 95%">
    </div>
    <div class="form-group">
        <strong>masukan bukti:</strong>
        <input type="datetime" name="bukti" id="bukti" class="form-control" placeholder ="bukti" style="width: 95%">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</center>
    

   



@endsection