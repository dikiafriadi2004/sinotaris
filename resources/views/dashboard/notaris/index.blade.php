@extends('dashboard.layouts.app')

@section('title')
    Data Notaris
@endsection

@push('css')
    
@endpush

@section('breadcrumb')
<div class="codex-breadcrumb">
    <div class="row">
        <div class="col-4">
            <h1 class="fs-5">Data Notaris</h1>
        </div>
        <div class="col-8">
            <ul class="breadcrumb justify-content-end mb-0">
                <li class="breadcrumb-item"><a href="{{ route('notaris.index') }}">Data Notaris</a></li>
                <li class="breadcrumb-item"><a class="text-light" href="#!">Daftar Notaris</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="theme-body common-dash" data-simplebar>
    <div class="custom-container">
        <div class="row">
            <div class="col-xxl-6">
                <div class="card project-summarytbl">
                    <div class="card-header">
                        <h4>Daftar Notaris</h4>
                        <div class="setting-card action-menu">
                            <div class="action-toggle">
                                <a href="{{ route('notaris.create') }}" class="btn btn-outline-primary">Tambah Notaris</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Notaris</th>
                                        <th>Alamat Notaris</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $notaris)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $notaris->name }}</td>
                                            <td>{{ $notaris->address }}</td>
                                            <td>
                                                <div>
                                                    <a href="{{ route('notaris.show', $notaris) }}" class="btn btn-outline-info">Laporan</a>
                                                </div>
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
    </div>
</div>
@endsection

@push('js')
    
@endpush