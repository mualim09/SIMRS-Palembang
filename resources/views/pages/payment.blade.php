@extends('layouts.master')

@section('title')
  Pembayaran
@endsection

@section('content')

@php($active = 'payment')

<div class="container">
    <div class="row">
		<div class="col-xs-12">
			<div class="page-title-box">
                <h4 class="page-title">Master Pembayaran Rawat Jalan</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li class="active">
                    Pembayaran
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
		</div>
	</div>
    <!-- end row -->

    <div class="row">
    <div class="col-xs-12">
      <div class="card-box">

            <div class="row m-b-30">
              <div class="col-md-8">
                <div class="pull-left">
                  
                  <a class="btn btn-primary btn-bordered waves-effect waves-light" href="{{ url('payment/create') }}"><i class="mdi mdi-plus"></i> Tambah </a>
                  
                  
                  <button class="btn btn-primary btn-bordered waves-effect waves-light" onclick="on_edit()">Ubah</button>
                  
                  
                  <button class="btn btn-primary btn-bordered waves-effect waves-light" onclick="on_delete()">Hapus</button>
                 
                  </div>
              </div>
              <div class="col-md-4">
                <div class="pull-right">
                  <div class="input-group">
                    <input class="form-control input-sm" placeholder="Pencarian..." type="text" id="search">
                    <span class="input-group-btn">
                      <button class="btn btn-primary btn-sm" type="button" onclick="on_search()" data-toggle="tooltip" data-original-title="Search"><i class="mdi mdi-magnify"></i></button>
                      <button class="btn btn-primary btn-sm" type="button" onclick="on_clear_search()" data-toggle="tooltip" data-original-title="Clear"><i class="mdi mdi-close"></i></button>
                    </span>
                  </div>
                </div>    
              </div>
            </div>

              <table id="table-payment" class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th class="text-center" >
                      <div class="checkbox">
                          <input id="select-all" type="checkbox">
                          <label for="select-all"></label>
                      </div>
                    </th>
                    
                    <th>No Registrasi</th>
                    <th>Nama</th>
                    <th>Tanggal Bayar</th>
                    <th>Total Biaya</th>
                    <th>Sisa Tagihan</th>
                    <th>Sisa Pembayaran</th>
                    <th>Pembayaran</th>
                    
                  </tr>
                </thead>
              </table>
      </div>
    </div>
  </div>

</div>

<!-- Modal for question -->
<div class="modal fade in" tabindex="-1" role="dialog" id="modal-delete-confirm">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
          <div class="modal-header">
              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">??</button>
              <h4 class="modal-title">Apakah anda yakin?</h4>
            </div>
            <div class="modal-body">Data yang dipilih akan dihapus, apakah anda yakin?</div>
          <div class="modal-footer">
            <button type="button" id="btn-confirm" class="btn btn-primary btn-sm">Ya</button>
            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
</div>

<style>
.dataTables_filter, .dataTables_info { display: none; }
</style>

@endsection

@push('js')

@if (session()->has('message'))
    <script type="text/javascript">
        show_notification("{{ session('title') }}","{{ session('type') }}","{{ session('message') }}");
    </script>
@endif

<script src="{{ url('assets/js/pages/payment.js') }}"></script>
@endpush