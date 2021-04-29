@extends('admin.template.master2')

@section('title', 'Tambah Akun')

@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['url' => '/akuns']) !!}
                    <div class="form-group">
                        {!! Form::label('Akun') !!}
                        {!! Form::text('nama', null, ['placeholder' => 'Contoh Google, Facebook, Youtube ...', 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Password') !!}
                        {!! Form::text('email', null, ['placeholder' => 'Masukkan Password ..', 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Pilih Jenis Encode') !!} <br><br>
                        {!! Form::select('jenis', ['1' => 'Hash', '2' => 'Base64']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::hidden('encode'); !!}
                    </div>

                {!! Form::submit('Store', ['class' => 'btn btn-primary pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
