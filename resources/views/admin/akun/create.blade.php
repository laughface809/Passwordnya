@extends('admin.template.master2')

@section('title', 'Add Akun')

@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['url' => '/akuns']) !!}
                    <div class="form-group">
                        {!! Form::label('Account') !!}
                        {!! Form::text('nama', null, ['placeholder' => 'Contoh Google, Facebook, Youtube ...', 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Password') !!}
                        {!! Form::text('email', null, ['placeholder' => 'Masukkan Password ..', 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Choose Encode') !!} <br><br>
                        {!! Form::select('jenis', ['1' => 'Hash', '2' => 'Base64']) !!}
                    </div>
<!-- ALL COLLECTION
                    $user = 'md2';
                    $users = hash_algos();
                    $select = "<select name='jenis'>";
                    foreach($users as $u) {
                    $s = ($u == $user) ? 'selected' : '';
                    $select .= "<option value='$u' $s>$u</option> "; }
                    echo $select . "</select>";
-->
                    <div class="form-group">
                        {!! Form::hidden('encode'); !!}
                    </div>

                {!! Form::submit('Store', ['class' => 'btn btn-primary pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
