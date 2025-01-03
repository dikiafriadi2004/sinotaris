@extends('dashboard.layouts.app')

@section('title')
    Detail Laporan Notaris
@endsection

@push('css')
    <!--Datatable-->
    <link href="{{ asset('assets/css/vendor/datatable/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/vendor/datatable/buttons.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/vendor/datatable/custom-datatable.css') }}" rel="stylesheet">
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
                        <div class="swal-notif" data-swal="{!! Session::get('success') !!}"></div>
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
                                                <div class="icon-wrap"><i class="fa fa-map-marker"></i></div>
                                                {{ $ppat->address }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="body-invoice">
                                    <a href="{{ route('report.create', $ppat->slug) }}" class="btn btn-primary mb-3">Tambah
                                        Laporan</a>
                                    <div class="table-responsive">
                                        <table class="display dataTable cell-border table ml-1" id="basicdata-tbl"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Laporan</th>
                                                    <th>Tanggal Laporan</th>
                                                    <th>Dokumen Laporan</th>
                                                    <th>Dokumen Temuan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ppat->reports as $report)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $report->name_report }}</td>
                                                        {{-- <td>{{ $report->date_report }}</td> --}}
                                                        <td>{{ date('d M Y', strtotime($report->date_report)) }}</td>
                                                        <td>
                                                            @if ($report->doc_report)
                                                                <a
                                                                    href="{{ asset(getenv('CUSTOM_DOC_LOCATION') . '/' . $report->doc_report) }}">Download</a>
                                                            @else
                                                                <span>Tidak Ada Dokumen</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($report->doc_finding)
                                                                <a
                                                                    href="{{ asset(getenv('CUSTOM_DOC_LOCATION') . '/' . $report->doc_finding) }}">Download</a>
                                                            @else
                                                                <span>Tidak Ada Dokumen</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('report.edit', [$ppat->slug, $report]) }}"
                                                                class="btn btn-outline-primary mb-2">Ubah</a>
                                                            <form
                                                                action="{{ route('report.destroy', [$ppat->slug, $report]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-outline-danger confirm-delete"
                                                                    type="submit">Hapus</button>
                                                            </form>
                                                        </td>
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
        </div>
    </div>
@endsection

@push('js')
    <!-- Datatable-->
    <script src="{{ asset('assets/js/vendors/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/datatable/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/datatable/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/datatable/custom-datatable.js') }}"></script>
    <script type="text/javascript">
        $(".confirm-delete").click(function(event) {
            const form = $(this).closest("form")

            event.preventDefault()

            Swal.fire({
                title: "Anda Yakin?",
                text: "Data akan terhapus!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Hapus!",
                        text: "Data berhasil dihapus.",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 2000
                    })
                    form.submit()
                }
            });
        })

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
