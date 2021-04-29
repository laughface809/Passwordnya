@extends('admin.template.master')

@section('title', 'Password List')

@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="10">#</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($passwords) == 0)
                        <tr>
                            <td colspan="2" class="text-center"> Password Tidak Ditemukan</td>
                        </tr>
                    @else
                        @foreach($passwords as $password)
                        <tr>
                            <td>{!! $password->id !!}</td>
                            <td>{!! $password->string !!}</td>
                        </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
