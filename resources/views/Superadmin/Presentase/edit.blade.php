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
                                            <h4>Edit Data</h4>
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
                                            <form action="{{ route('presentase.update', $presentase) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group row mb-4">
                                                    <label
                                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga
                                                        Jual</label>
                                                    <div class="input-group col-sm-12 col-md-7">
                                                        <select name="price" id="price" class="form-control" required>
                                                            <option value="">-- Pilih --</option>
                                                            <option value="15000">Rp 15.000</option>
                                                            <option value="16000">Rp 16.000</option>
                                                            <option value="17000">Rp 17.000</option>
                                                            <option value="18000">Rp 18.000</option>
                                                            <option value="19000">Rp 19.000</option>
                                                            <option value="20000">Rp 20.000</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label
                                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Presentase
                                                        Sistem</label>
                                                    <div class="input-group col-sm-12 col-md-7">
                                                        <input type="number" name="sistem" id="sistem"
                                                            class="form-control phone-number" min="0"
                                                            value="{{ old('sistem', $presentase->sistem) }}" readonly>
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-percent"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label
                                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Presentase
                                                        Afiliator</label>
                                                    <div class="input-group col-sm-12 col-md-7">
                                                        <input type="number" name="afiliator" id="afiliator"
                                                            class="form-control phone-number" min="0"
                                                            value="{{ old('afiliator', $presentase->afiliator) }}" readonly>
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-percent"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label
                                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Presentase
                                                        Guru BK</label>
                                                    <div class="input-group col-sm-12 col-md-7">
                                                        <input type="number" name="gurubk"
                                                            class="form-control phone-number" min="0" id="gurubk"
                                                            value="{{ old('gurubk', $presentase->gurubk) }}" readonly>
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fas fa-percent"></i>
                                                            </div>
                                                        </div>
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

@section('js')
    <script>
        document.getElementById('price').addEventListener('change', function() {
            var price = parseInt(this.value);
            var presentaseSistem = 75 - Math.floor((price - 15000) / 1000);
            var presentaseAfiliator = 20 + Math.floor((price - 15000) / 1000);
            var presentaseGuruBK = 5;

            document.getElementById('sistem').value = presentaseSistem;
            document.getElementById('afiliator').value = presentaseAfiliator;
            document.getElementById('gurubk').value = presentaseGuruBK;
        });
    </script>
@endsection
