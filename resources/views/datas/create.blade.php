@extends('layouts.app')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Product</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('datas.index') }}"> Back</a>

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

   

<form action="{{ route('datas.store') }}" method="POST">

    @csrf

  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                <input type="text" name="Nama" id="Nama" class="form-control" dataholder="Name">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>tempat tanggal lahir:</strong>

                <input type="date" name="ttl" id="ttl" class="form-control" dataholder="ttl">

            </div>

        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>jk:</strong>

                <input type="text" class="form-control" id="jk"  name="jk" dataholder="......"></input>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>agama:</strong>

                <input type="text" class="form-control" id="agama"  name="agama" dataholder="......"></input>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>anakke:</strong>

                <input class="form-control" id="anakke"  name="anakke" dataholder="......"></input>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>jumlah sodara:</strong>

                <input class="form-control" id="sodara"  name="sodara" dataholder="......"></input>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>alamat:</strong>

                <input class="form-control" id="alamat"  name="alamat" dataholder="......"></input>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>telpon:</strong>

                <input class="form-control" id="telpon"  name="telpon" dataholder="......"></input>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>nama ayah:</strong>

                <input class="form-control" id="ayah"  name="ayah" dataholder="......"></input>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>nama ibu:</strong>

                <input class="form-control" id="ibu"  name="ibu" dataholder="......"></input>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <a type="submit" class="btn btn-primary">Submit</a>>

        </div>

    </div>

   

</form>

@endsection