@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data
			  	<div class="panel-title pull-right"><a href="{{ route('beranda.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('beranda.update',$berandas->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
					  {{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('asalusul') ? ' has-error' : '' }}">
			  			<label class="control-label">Asal Usul</label>	
			  			<input type="text" name="asalusul" class="form-control" value="{{ $berandas->asalusul }}"  required>
			  			@if ($errors->has('asalusul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('asalusul') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('visi_misi') ? ' has-error' : '' }}">
			  			<label class="control-label">Visi Misi</label>	
			  			<input type="text" name="visi_misi" class="form-control" value="{{ $berandas->visi_misi }}"  required>
			  			@if ($errors->has('visi_misi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('visi_misi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('struktur_or') ? ' has-error' : '' }}">
			  			<label class="control-label">Struktur Organisasi</label>	
			  			<input type="text" name="struktur_or" class="form-control" value="{{ $berandas->struktur_or }}"  required>
			  			@if ($errors->has('struktur_or'))
                            <span class="help-block">
                                <strong>{{ $errors->first('struktur_or') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('fasilitas') ? ' has-error' : '' }}">
			  			<label class="control-label">Fasilitas</label>	
			  			<input type="text" name="fasilitas" class="form-control" value="{{ $berandas->fasilitas }}"  required>
			  			@if ($errors->has('fasilitas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fasilitas') }}</strong>
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