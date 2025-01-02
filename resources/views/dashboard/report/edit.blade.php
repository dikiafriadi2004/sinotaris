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
                <h1 class="fs-5">Ubah Laporan Notaris</h1>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumb justify-content-end mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('ppat.index') }}">Daftar Notaris</a></li>
                    <li class="breadcrumb-item"><a class="text-light" href="#!">Ubah Laporan Notaris</a></li>
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
                            <h4>Ubah Laporan Notaris</h4>
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

                            <form action="{{ route('report.update', $report) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="form-label">Nama Laporan</label>
                                    <input class="form-control" type="text" name="name_report"
                                        value="{{ old('name_report', $report->name_report) }}" placeholder="Nama Akta">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tanggal Laporan</label>
                                    {{-- <input class="form-control" type="date" value="{{ $report->date_report }}"
                                        name="date_report"> --}}
                                    <input class="datepicker-here form-control" type="text" name="date_report"
                                        id="date_report" data-date-format="dd/mm/yyyy"
                                        value="{{ old('date_report', $report->date_report) }}" data-language="en">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Dokumen Laporan</label>
                                    <td>
                                        @if ($report->doc_report)
                                            <a
                                                href="{{ asset(getenv('CUSTOM_DOC_LOCATION') . '/' . $report->doc_report) }}">Download</a>
                                        @else
                                            <span>Tidak Ada Dokumen</span>
                                        @endif
                                    </td>
                                    <input class="form-control" type="file" name="doc_report">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Dokumen Temuan</label>
                                    @if ($report->doc_finding)
                                        <a
                                            href="{{ asset(getenv('CUSTOM_DOC_LOCATION') . '/' . $report->doc_finding) }}">Download</a>
                                    @else
                                        <span>Tidak Ada Dokumen</span>
                                    @endif
                                    <input class="form-control" type="file" name="doc_finding">
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
