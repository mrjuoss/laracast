@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Data Unit Utama</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('unit.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama_unit') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama Unit Utama (Eselon I)</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nama_unit" value="{{ old('nama_unit') }}" required autofocus>

                                @if ($errors->has('nama_unit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_unit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('akronim') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Akronim Unit Utama (Eselon I)</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="akronim" value="{{ old('akronim') }}" required autofocus>

                                @if ($errors->has('akronim'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('akronim') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
