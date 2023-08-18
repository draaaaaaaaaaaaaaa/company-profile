@extends('layouts.template')

@section('content')


<div class="col-xl-12 ">
    <div class="card m-sm-5">
        <div class="card-header">
            <div class="card-title">
                <p>Status</p>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('status.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-xl-7">
                        <div class="form-group">
                            <label for="">employe status</label>
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
                <div class="card-title">employe status</div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <td>#</td>
                            <td>employe status</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($status as $data)

                        <tr class="text-capitalize text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->name }}</td>
                            <td>
                                <form action="{{ route('company.destroy', $data->id) }}" method="post">
                                    @csrf
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </div>


    @endsection
