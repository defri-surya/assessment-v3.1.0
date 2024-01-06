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
                                            <h4>Edit Data Holland</h4>
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
                                            <form action="{{ route('deskholland.update', $data->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group row mb-4">
                                                    <label
                                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type
                                                        Holland</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <select name="typeholland" class="form-control mb-1" id="">
                                                            <option value="">Pilih Type Holland</option>
                                                            <option
                                                                {{ $data->typeholland == 'Realistic' ? 'selected' : '' }}
                                                                value="Realistic">Realistic</option>
                                                            <option
                                                                {{ $data->typeholland == 'Investigative' ? 'selected' : '' }}
                                                                value="Investigative">Investigative</option>
                                                            <option {{ $data->typeholland == 'Artistic' ? 'selected' : '' }}
                                                                value="Artistic">Artistic</option>
                                                            <option {{ $data->typeholland == 'Social' ? 'selected' : '' }}
                                                                value="Social">Social</option>
                                                            <option
                                                                {{ $data->typeholland == 'Enterpreneurship' ? 'selected' : '' }}
                                                                value="Enterpreneurship">Enterpreneurship</option>
                                                            <option
                                                                {{ $data->typeholland == 'Conventional' ? 'selected' : '' }}
                                                                value="Conventional">Conventional</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label
                                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <textarea name="deskripsi">{{ old('deskripsi', $data->deskripsi) }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label
                                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Karakter</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <textarea name="karakter">{{ old('karakter', $data->karakter) }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label
                                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kelebihan</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <textarea name="kelebihan">{{ old('kelebihan', $data->kelebihan) }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label
                                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kelemahan</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <textarea name="kelemahan">{{ old('kelemahan', $data->kelemahan) }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Job
                                                        Match</label>
                                                    <div class="col-sm-12 col-md-7">
                                                        <textarea name="job_match">{{ old('job_match', $data->job_match) }}</textarea>
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

@section('js')
    <script>
        CKEDITOR.replace('deskripsi');
        CKEDITOR.replace('karakter');
        CKEDITOR.replace('kelebihan');
        CKEDITOR.replace('kelemahan');
        CKEDITOR.replace('job_match');
    </script>
@endsection
