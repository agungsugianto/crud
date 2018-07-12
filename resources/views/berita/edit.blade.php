@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data
			  	<div class="panel-title pull-right"><a href="{{ route('berita.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('berita.update',$beritas->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
					  {{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('lampau') ? ' has-error' : '' }}">
			  			<label class="control-label">Berita Lampau</label>	
			  			<input type="text" name="lampau" class="form-control" value="{{ $beritas->lampau }}"  required>
			  			@if ($errors->has('lampau'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lampau') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('terkini') ? ' has-error' : '' }}">
			  			<label class="control-label">Berita Terkini</label>	
			  			<input type="text" name="terkini" class="form-control" value="{{ $beritas->terkini }}"  required>
			  			@if ($errors->has('terkini'))
                            <span class="help-block">
                                <strong>{{ $errors->first('terkini') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_kategori') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori</label>	
			  			<select name="id_kategori" class="form-control">
							@foreach($kategori as $data)
							<option value="{{$data->id}}" {{$selectedKategori == $data->id ?'selected = "selected"': ''}} >{{$data->nama}}</option> 
							@endforeach 
						</select>
			  			@if ($errors->has('id_kategori'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kategori') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection