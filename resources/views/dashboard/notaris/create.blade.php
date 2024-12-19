@extends('dashboard.layouts.app')

@section('title')
    Tambah Notaris
@endsection

@push('css')
@endpush

@section('breadcrumb')
    <div class="codex-breadcrumb">
        <div class="row">
            <div class="col-4">
                <h1 class="fs-5">Tambah Notaris</h1>
            </div>
            <div class="col-8">
                <ul class="breadcrumb justify-content-end mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Data Notaris</a></li>
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
              <h4></h4>
            </div>
            <div class="card-body"> 
              <form action="{{ route('notaris.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label class="form-label">Nama Notaris</label>
                  <input class="form-control" type="text" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label class="form-label">Alamat Notaris</label>
                    <input class="form-control" type="text" name="address" placeholder="Name">
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
@endpush
