@extends('layouts.template')

@section('content')
<div class="col-xl-12  ">
    <div class="card m-sm-5">
        <div class="card-header">
            <div class="card-title">
                Please Login
            </div>
        </div>
        <div class="card-body">
            <main class="form-signin w-100 m-auto">
                <form>
                    <div class="row">
                        <div class="col-xl-12 mb-4">
                            <div class="form-floating">
                                <input type="text" nama="name" class="form-control" id="name"
                                    placeholder="Nama Lengkap">
                                <label for="name">Nama</label>
                            </div>
                        </div>
                        <div class="col-xl-6 mb-4">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="name@example.com">
                                <label for="email">Email address</label>
                            </div>
                        </div>
                        <div class="col-xl-6 mb-4">
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="col-xl-4 mb-4">
                            <div class="form-floating">
                                <label for="">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="">Pilih Gender</option>
                                    <option value="pria">Pria</option>
                                    <option value="wanita">Wanita</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4 mb-4">
                          <div class="form-floating">
                            <label for="">marital status</label>
                            <select name="marital_status" id="marital_status" class="form-control">
                                <option value="">Pilih Status</option>
                                <option value="singele">Single</option>
                                <option value="married">Married</option>
                            </select>
                          </div>
                      </div>
                      <div class="col-xl-4 mb-4">
                        <div class="form-floating">
                            <label for="">Religion</label>
                            <select name="religion" id="religion" class="form-control">
                                <option value="">Pilih Religion</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                        </div>
                    </div>
                             






                        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                    </div>
                </form>
            </main>
        </div>

    </div>
</div>

@endsection
