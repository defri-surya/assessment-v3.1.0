@extends('layouts.stisla')
@section('css')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection

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
                                            <h4>Tambah Data Holland</h4>
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
                                            <form action="{{ route('deskholland.store') }}" method="POST">
                                                @csrf
                                                <div class="form-group row mb-4">
                                                    <label
                                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type
                                                        Holland</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <select name="typeholland" class="form-control mb-1" id="">
                                                            <option value="">Pilih Type Holland</option>
                                                            <option
                                                                {{ old('typeholland') == 'Realistic' ? 'selected' : '' }}
                                                                value="Realistic">Realistic</option>
                                                            <option
                                                                {{ old('typeholland') == 'Investigative' ? 'selected' : '' }}
                                                                value="Investigative">Investigative</option>
                                                            <option {{ old('typeholland') == 'Artistic' ? 'selected' : '' }}
                                                                value="Artistic">Artistic</option>
                                                            <option {{ old('typeholland') == 'Social' ? 'selected' : '' }}
                                                                value="Social">Social</option>
                                                            <option
                                                                {{ old('typeholland') == 'Enterpreneurship' ? 'selected' : '' }}
                                                                value="Enterpreneurship">Enterpreneurship</option>
                                                            <option
                                                                {{ old('typeholland') == 'Conventional' ? 'selected' : '' }}
                                                                value="Conventional">Conventional</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label
                                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <textarea name="deskripsi">{{ old('deskripsi') }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label
                                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Karakter</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <textarea name="karakter">{{ old('karakter') }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label
                                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kelebihan</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <textarea name="kelebihan">{{ old('kelebihan') }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label
                                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kelemahan</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <textarea name="kelemahan">{{ old('kelemahan') }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Job
                                                        Match</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <textarea name="job_match">{{ old('job_match') }}</textarea>
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
        CKEDITOR.replace('deskripsi');
        CKEDITOR.replace('karakter');
        CKEDITOR.replace('kelebihan');
        CKEDITOR.replace('kelemahan');
        CKEDITOR.replace('job_match');
    </script>
@endsection
