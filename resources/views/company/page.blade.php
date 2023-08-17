@extends('layouts.template')

@section('content')


<div class="col-xl-12 ">
    <div class="card m-sm-5">
        <div class="card-header">
            <div class="card-title">
                <p>Company</p>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('company.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-xl-7">
                        <div class="form-group">
                            <label for="">Nama Company</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger">submit</button>
            </form>
        </div>
    </div>



    <div class="col-xl-12 mb-4">
        <div class="card m-sm-5">
            <div class="card-header">
                <div class="card-title">Data Company</div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <td>#</td>
                            <td>Company</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($company as $data)

                        <tr class="text-capitalize text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    @endsection
