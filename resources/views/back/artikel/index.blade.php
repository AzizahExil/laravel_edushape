@extends('layouts.default')
@section('content')
    
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Data Materi</div>
                        <a href="{{ route('artikel.create')}}" class="btn btn-primary btn-sm ml-auto"><i class="fas fa-plus"></i> Tambah Materi</a>
                    </div>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-primary">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Materi</th>
                                <th>Slug</th>
                                <th>Kategori Sekolah</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($artikel as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->judul }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>{{ $row->kategori->nama_kategori ?? 'Kategori Tidak Ditemukan' }}</td>
                                <td>{{ $row->users->name ?? 'User Tidak Ditemukan' }}</td>
                                <td>
                                    <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pencil"></i></a> 
                                    <form action="{{ route('kategori.destroy', $row->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">Data Masih Kosong</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
