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
                                            <h4>Edit Data Soal Holland</h4>
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
                                            <form action="{{ route('soalholland.update', $data) }}" method="POST">
                                                @csrf
                                                @method('PUT')

                                                <div class="form-group row mb-4 text-center justify-content-center mb-3">
                                                    <label class="col-form-label text-md col-12 col-md-12 col-lg-12">
                                                        Tipe Soal
                                                    </label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <select name="typesoal" class="form-control mb-1" id="">
                                                            <option value="">Pilih Type Soal</option>
                                                            <option {{ $data->typesoal == 'R1' ? 'selected' : '' }}
                                                                value="R1">R1</option>
                                                            <option {{ $data->typesoal == 'I1' ? 'selected' : '' }}
                                                                value="I1">I1</option>
                                                            <option {{ $data->typesoal == 'A1' ? 'selected' : '' }}
                                                                value="A1">A1</option>
                                                            <option {{ $data->typesoal == 'S1' ? 'selected' : '' }}
                                                                value="S1">S1</option>
                                                            <option {{ $data->typesoal == 'E1' ? 'selected' : '' }}
                                                                value="E1">E1</option>
                                                            <option {{ $data->typesoal == 'C1' ? 'selected' : '' }}
                                                                value="C1">C1</option>
                                                            <option {{ $data->typesoal == 'R2' ? 'selected' : '' }}
                                                                value="R2">R2</option>
                                                            <option {{ $data->typesoal == 'I2' ? 'selected' : '' }}
                                                                value="I2">I2</option>
                                                            <option {{ $data->typesoal == 'A2' ? 'selected' : '' }}
                                                                value="A2">A2</option>
                                                            <option {{ $data->typesoal == 'S2' ? 'selected' : '' }}
                                                                value="S2">S2</option>
                                                            <option {{ $data->typesoal == 'E2' ? 'selected' : '' }}
                                                                value="E2">E2</option>
                                                            <option {{ $data->typesoal == 'C3' ? 'selected' : '' }}
                                                                value="C3">C2</option>
                                                            <option {{ $data->typesoal == 'R3' ? 'selected' : '' }}
                                                                value="R3">R3</option>
                                                            <option {{ $data->typesoal == 'I3' ? 'selected' : '' }}
                                                                value="I3">I3</option>
                                                            <option {{ $data->typesoal == 'A3' ? 'selected' : '' }}
                                                                value="A3">A3</option>
                                                            <option {{ $data->typesoal == 'S3' ? 'selected' : '' }}
                                                                value="S3">S3</option>
                                                            <option {{ $data->typesoal == 'E3' ? 'selected' : '' }}
                                                                value="E3">E3</option>
                                                            <option {{ $data->typesoal == 'C3' ? 'selected' : '' }}
                                                                value="C3">C3</option>
                                                        </select>
                                                        <label class="col-form-label text-md col-12 col-md-12 col-lg-12">
                                                            Soal
                                                        </label>
                                                        <input type="text" name="soal_1" class="form-control mb-1"
                                                            placeholder="Soal No 1"
                                                            value="{{ old('soal_1', $data->soal_1) }}">
                                                        <input type="text" name="soal_2" class="form-control mb-1"
                                                            placeholder="Soal No 2"
                                                            value="{{ old('soal_2', $data->soal_2) }}">
                                                        <input type="text" name="soal_3" class="form-control mb-1"
                                                            placeholder="Soal No 3"
                                                            value="{{ old('soal_3', $data->soal_3) }}">
                                                        <input type="text" name="soal_4" class="form-control mb-1"
                                                            placeholder="Soal No 4"
                                                            value="{{ old('soal_4', $data->soal_4) }}">
                                                        <input type="text" name="soal_5" class="form-control mb-1"
                                                            placeholder="Soal No 5"
                                                            value="{{ old('soal_5', $data->soal_5) }}">
                                                        <input type="text" name="soal_6" class="form-control mb-1"
                                                            placeholder="Soal No 6"
                                                            value="{{ old('soal_6', $data->soal_6) }}">
                                                        <input type="text" name="soal_7" class="form-control mb-1"
                                                            placeholder="Soal No 7"
                                                            value="{{ old('soal_7', $data->soal_7) }}">
                                                        <input type="text" name="soal_8" class="form-control mb-1"
                                                            placeholder="Soal No 8"
                                                            value="{{ old('soal_8', $data->soal_8) }}">
                                                        <input type="text" name="soal_9" class="form-control mb-1"
                                                            placeholder="Soal No 9"
                                                            value="{{ old('soal_9', $data->soal_9) }}">
                                                        <input type="text" name="soal_10" class="form-control mb-1"
                                                            placeholder="Soal No 10"
                                                            value="{{ old('soal_10', $data->soal_10) }}">
                                                        <input type="text" name="soal_11" class="form-control mb-1"
                                                            placeholder="Soal No 11"
                                                            value="{{ old('soal_11', $data->soal_11) }}">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <div class="col-sm-12 col-md-12 text-center">
                                                        <button class="btn btn-primary">Update</button>
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
