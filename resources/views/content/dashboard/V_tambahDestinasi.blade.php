@extends('layouts.dashboard')

@section('content')

<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Tambah Destination</h4>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="col-md-12" style="align-content: center">
    <div class="card" style="padding: 50px">
        <div class="card-body card-block">
            <form action="/destinasi/tambah/post" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label for="nama" class=" form-control-label">NAMA TEMPAT</label>
                <input type="text" id="nama" name="nama" placeholder="Masukan Nama" class="form-control">
            </div>
             <div class="form-group">
                <label for="keterangan" class=" form-control-label">KETERANGAN</label>
                <input type="textarea" id="keterangan" name="ket" value="" class="form-control" >
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">FOTO MINI</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="fotomin" class="form-control-file">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">FOTO BROSUR</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="foto" class="form-control-file">
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> SIMPAN
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> RESET
            </button>
        </form>

        </div>
    </div>
</div>
    
@endsection