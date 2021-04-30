@extends('admin.template.master2')

@section('title', 'List Akun')
@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{!! url('akuns/create') !!}"
                   class="btn btn-primary btn-sm pull-right marginBottom20px">
                    <span class="glyphicon glyphicon-plus">
                    </span> Add Account
                </a>
                <br><br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Password</th>
                        <th  style="text-align: center;">Encode Type</th>
                        <th  style="text-align: center;">Destroy</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($akuns) == 0)
                        <tr>
                            <td colspan="3" class="text-center"> Akun Tidak Ditemukan</td>
                        </tr>
                    @else
                        @foreach($akuns as $akun)
                            <tr>
                                <td>{!! $akun->nama !!}</td>
                                <td>{!! $akun->encode !!}</td>
                                <td>
                                        <span class="label label-info">{!! $akun->jenis !!}</span>
                                </td>
                                <td>
                                    {!! Form::open(['method' => 'delete', 'url' => 'akuns/' . $akun->id, 'id' => 'deleteForm']) !!}
                                    {!! Form::submit('delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
