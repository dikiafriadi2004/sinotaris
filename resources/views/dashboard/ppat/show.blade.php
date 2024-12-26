@extends('dashboard.layouts.app')

@section('title')
    Detail Laporan Notaris
@endsection

@push('css')
@endpush

@section('breadcrumb')
    <div class="codex-breadcrumb">
        <div class="row">
            <div class="col-md-6">
                <h1 class="fs-5">Detail Laporan Notaris</h1>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumb justify-content-end mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('ppat.index') }}">Daftar Notaris</a></li>
                    <li class="breadcrumb-item"><a class="text-light" href="#!">Laporan Notaris</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="theme-body codex-chat">
        <div class="custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body cdx-invoice">
                            <div id="cdx-invoice">
                                <div class="invoice-user">
                                    <div class="left-user">
                                        <h5>Detail Laporan Notaris:</h5>
                                        <ul class="detail-list">
                                            <li>
                                                <div class="icon-wrap"><i class="fa fa-user"></i></div>{{ $ppat->name }}
                                            </li>
                                            <li>
                                                <div class="icon-wrap"><i class="fa fa-map-marker"></i></div>{{ $ppat->address }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="body-invoice">
                                    <a href="{{ route('report.create', $ppat->slug) }}" class="btn btn-primary mb-3">Tambah Laporan</a>
                                    <div class="table-responsive">
                                        <table class="table ml-1">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Akta</th>
                                                    <th>Tanggal Laporan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ppat->reports as $report)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $report->name_akta }}</td>
                                                        <td>{{ $report->date_report }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush
