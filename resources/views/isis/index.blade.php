@extends('layouts.app')

 

@section('content')
<br>
<br>
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2 style="color: white">Pengisian kegiatan</h2>

            </div>

            

        </div>

    </div>

  <br> 

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    
<center>
    <table class="table table-hover" style="width: 90%;font-size: 20px">
        <thead>
        <tr class="bg-primary">

            <th>No</th>

            <th>nis</th>
            <th>hari</th>

            <th>waktu</th>

            <th>kegiatan </th>


            <th>set_pelajaran </th>

              

            <th width="280px">Action</th>

        </tr>
        </thead>
        @foreach ($sets as $set)
        <tbody>
        <tr style="background-color: white">

            <td>{{ ++$i }}</td>

            <td>{{ $set->nis }}</td>
            <td>{{ $set->hari }}</td>

            <td>{{ $set->waktu }}</td>

            <td>{{ $set->kegiatan }}</td>
            
            <td>{{ $set->set_pelajaran }}</td>


            <td>

                <form action="{{ route('sets.destroy',$set->id) }}" method="POST">

                     <a class="btn btn-success" href="{{ route('isis.create') }}">Kirim bukti kegiatan</a>


                </form>

            </td>

        </tr>

        @endforeach
        </tbody>
    </table>

</center>

  

    {!! $isis->links() !!}


@endsection

