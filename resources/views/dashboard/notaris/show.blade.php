@extends('dashboard.layouts.app')

@section('title')
    Detail Notaris
@endsection

@push('css')
@endpush

@section('breadcrumb')
    <div class="codex-breadcrumb">
        <div class="row">
            <div class="col-4">
                <h1 class="fs-5">Detail Notaris</h1>
            </div>
            <div class="col-8">
                <ul class="breadcrumb justify-content-end mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('notaris.index') }}">Data Notaris</a></li>
                    <li class="breadcrumb-item"><a class="text-light" href="#!">Detail Notaris</a></li>
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
                                        <ul class="detail-list">
                                            <li>
                                                <div class="icon-wrap"><i class="fa fa-user"></i></div>{{ $notaris->name }}
                                            </li>
                                            <li>
                                                <div class="icon-wrap"><i class="fa fa-phone"></i></div>+123585844859
                                            </li>
                                            <li>
                                                <div class="icon-wrap"><i class="fa fa-map-marker"></i></div>368 mega get ,
                                                Rohi store
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="right-user">
                                        <ul class="detail-list">
                                            <li>invoice date: <span> 21/3/2022</span></li>
                                            <li>invoice no: <span>21/3/2022</span></li>
                                            <li>account no: <span>5848598585 </span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="body-invoice">
                                    <div class="table-responsive">
                                        <table class="table ml-1">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Amout </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>01</td>
                                                    <td>dark green jacket</td>
                                                    <td>$90</td>
                                                    <td>2</td>
                                                    <td>$180</td>
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td> red jacket</td>
                                                    <td>$80</td>
                                                    <td>4</td>
                                                    <td>$320</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>Short kurti</td>
                                                    <td>$50</td>
                                                    <td>3</td>
                                                    <td>$150</td>
                                                </tr>
                                                <tr>
                                                    <td>04</td>
                                                    <td>printed yellow dress</td>
                                                    <td>$150</td>
                                                    <td>2</td>
                                                    <td>$300</td>
                                                </tr>
                                                <tr>
                                                    <td>05</td>
                                                    <td>white T-shirt</td>
                                                    <td>$120</td>
                                                    <td>1</td>
                                                    <td>$120</td>
                                                </tr>
                                                <tr>
                                                    <td>06</td>
                                                    <td>black Sweater</td>
                                                    <td>$85</td>
                                                    <td>4</td>
                                                    <td>$340</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="footer-invoice">
                                    <table class="table">
                                        <tr>
                                            <td>sub total</td>
                                            <td>$1410</td>
                                        </tr>
                                        <tr>
                                            <td>tax</td>
                                            <td>$250</td>
                                        </tr>
                                        <tr>
                                            <td>total</td>
                                            <td>$1670 </td>
                                        </tr>
                                    </table>
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
