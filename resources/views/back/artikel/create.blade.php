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
						<div class="card-title">Form Materi</div>
                        <a href="{{ route('artikel.index')}}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                    <form method="post" action="{{route ('artikel.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul Materi</label>
                            <input type="text" name="judul" class="form-control" id="text" placeholder="Enter Judul">
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori Sekolah</label>
                            
                            <select name="kategori_id" class="form-control">
                                @foreach ($kategori as $row)
                                    <option value="{{$row->id}}">{{ $row->nama_kategori}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Materi</label>
                            <input type="file" name="gambar_artikel" class="form-control">
                                
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="is_active" class="form-control">
                                <option value="1">Publish</option>
                                <option value="0">Draft</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                        </div>
                    </form>
                    
				</div>
			</div>
		</div>
	</div>
</div>
@endsection