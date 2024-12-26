@extends('dashboard.layouts.app')

@section('title')
    Tambah Laporan Notaris
@endsection

@push('css')
<!-- datepicker-->
<link href="{{ asset('assets/css/vendor/datepicker/datepicker.css') }}" rel="stylesheet">
@endpush

@section('breadcrumb')
    <div class="codex-breadcrumb">
        <div class="row">
            <div class="col-md-6">
                <h1 class="fs-5">Tambah Laporan Notaris</h1>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumb justify-content-end mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('ppat.index') }}">Daftar Notaris</a></li>
                    <li class="breadcrumb-item"><a class="text-light" href="#!">Tambah Notaris</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="theme-body codex-calendar">
    <div class="custom-container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Notaris</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('report.store', $ppat->slug) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Nama Akta</label>
                                <input class="form-control" type="text" name="name_akta" placeholder="Nama Akta">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Tanggal Laporan</label>
                                <input class="datepicker-here form-control" type="text" name="date_report" data-date-format="dd/mm/yyyy" placeholder="Tanggal Laporan" data-language="en">
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<!-- datepicker-->
<script src="{{ asset('assets/js/vendors/datepicker/datepicker.js') }}"></script>
<script src="{{ asset('assets/js/vendors/datepicker/datepicker.en.js') }}"></script>
<script src="{{ asset('assets/js/vendors/datepicker/custom-datepicker.js') }}"></script>
@endpush
