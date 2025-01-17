@extends('dashboard.layouts.app')

@section('title')
    Daftar Notaris
@endsection

@push('css')
@endpush

@section('breadcrumb')
    <div class="codex-breadcrumb">
        <div class="row">
            <div class="col-4">
                <h1 class="fs-5">Daftar Notaris</h1>
            </div>
            <div class="col-8">
                <ul class="breadcrumb justify-content-end mb-0">
                    <li class="breadcrumb-item"><a class="text-light" href="{{ route('ppat.index') }}">Daftar Notaris</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="theme-body common-dash" data-simplebar>
        <div class="swal-notif" data-swal="{!! Session::get('success') !!}"></div>
        <div class="custom-container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card project-summarytbl">
                        <div class="card-header">
                            <h4></h4>
                            <div class="setting-card action-menu">
                                <div>
                                    <a href="{{ route('ppat.create') }}" class="btn btn-outline-primary">Tambah Notaris</a>
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
                                        @foreach ($ppats as $ppat)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $ppat->name }}</td>
                                                <td>{{ $ppat->address }}</td>
                                                <td>
                                                    <a href="{{ route('ppat.show', $ppat) }}"
                                                        class="btn btn-outline-info">Detail Laporan</a>
                                                    <a href="{{ route('ppat.edit', $ppat) }}"
                                                        class="btn btn-outline-primary">Ubah</a>
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
    <script type="text/javascript">
        const swal = $('.swal-notif').data('swal');
        if (swal) {
            Swal.fire({
                'title': 'Success',
                'text': swal,
                'icon': 'success',
                'showConfirmButton': false,
                'timer': 2000
            })
        }
    </script>
@endpush
