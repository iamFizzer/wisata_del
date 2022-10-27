@extends('layouts.dashboard')

@section('content')
    
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Destination</h4>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Table Destinasi</h3>
               <a href="/destinasi/tambah" class="btn btn-success"> + Destinasi </a>
               @if (session('Massage'))
               <div class="alert alert-primary alert-dismissible">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                   <h5><i class="fa-solid fa-badge-check"></i>SUCCESS</h5>
                   {{(session('Massage'))}}.
               </div>
                   
               @endif
                <div class="table-responsive">
                    <table class="table text-nowrap table-hover">
                        <thead>
                            <tr>
                                <th class="border-top-0">NO</th>
                                <th class="border-top-0">NAMA TEMPAT</th>
                                <th class="border-top-0">KETERANGAN</th>
                                <th class="border-top-0">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $no=1;?>
                           @foreach ($destinasi as $ds)
                           <tr>
                               <td>{{$no++}}</td>
                               <td>{{$ds->nama}}</td>
                               <td class="col-md-5">{{ Str::limit($ds->ket, 50, '...') }}</td>
                               <td>
                                   <a href="" class="btn btn-success btn-sm">view</a>
                                   <a href="" class="btn btn-danger btn-sm">edit</a>
                                   <a href="" class="btn btn-warning btn-sm">delete</a>
                               </td>
                           </tr>
                               
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection