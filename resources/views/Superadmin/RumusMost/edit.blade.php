@extends('layouts.stisla')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h4>Edit Data Rumus Most</h4>
                        </div>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                         @endif

                        <div class="card-body">
                            <form action="{{ route('rumusmost.update', $rumusmost) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nilai</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" name="nilai" class="form-control" placeholder="Nilai Rumus" value="{{ $rumusmost->nilai }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">D</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="D" class="form-control" value="{{ $rumusmost->D }}">
                                    </div>
                                </div>

                                
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">I</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="I" class="form-control" value="{{ $rumusmost->I }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">S</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="S" class="form-control" value="{{ $rumusmost->S }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">C</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="C" class="form-control" value="{{ $rumusmost->C }}">
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <div class="col-sm-12 col-md-12 text-center">
                                    <button class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
