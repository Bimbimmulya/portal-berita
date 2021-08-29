@extends('layouts.app')
@push('customcss')
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}"></script>
@endpush
@section('title','Dahboard')
@section('page-title')
@section('content')
<!-- Default box -->

<div class="col-xl-6 col-md-3 mb-5">
    <div class="box">
    <div class="box-header">
        <h4><div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Total Artikel</div></h4>
            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah : 21</div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-3 mb-5">
    <div class="box">
    <div class="box-header">
        <h4><div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> User Premium</div></h4>
            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah : 21</div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-3 mb-5">
    <div class="box">
    <div class="box-header">
        <h4><div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Jumlah Like</div></h4>
            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah : 21</div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-3 mb-5">
    <div class="box">
    <div class="box-header">
        <h4><div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Jumlah Comment</div></h4>
            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah : 21</div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-3 mb-5">
    <div class="box">
    <div class="box-header">
        <h4><div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Email Masuk</div></h4>
            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah : 21</div>
        </div>
    </div>
</div>

<!--box -->
@push('datatables')
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/datatables.bootstrap.min.js') }}"></script>
@endpush
@push('customdatatables')
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })

</script>
@endpush
@endsection