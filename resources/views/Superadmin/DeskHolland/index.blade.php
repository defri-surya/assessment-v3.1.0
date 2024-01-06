@extends('layouts.stisla')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Database Holland</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-md-8">
                                <a class="btn btn-primary" href="{{ route('deskholland.create') }}">Tambah Data</a>
                            </div>
                            <div class="col-md-4">
                                {{-- <form method="GET" action="{{ route('setsoal.index') }}">
                        <div class="input-group">
                          <select name="sekolahid" id="sekolah" onchange="return submit()" class="form-control">
                            <option value="">— Semua Sekolah —</option>
                            @foreach ($sekolah as $index => $sekolah)
                            <option value="{{ $sekolah->id }}" @if ($sekolah->id == request('sekolahid'))
                                selected @endif>{{ $sekolah->namasekolah }}</option>
                            @endforeach
                        </select>
                          </div>
                        </div>
                    </form> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Database Holland</h4>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-md">
                                                <tbody>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Tipe Holland</th>
                                                        <th>Deskripsi</th>
                                                        <th>Karakter</th>
                                                        <th>Kelebihan</th>
                                                        <th>Kelemahan</th>
                                                        <th>Job Match</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    @forelse ($data as $item => $holland)
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $holland->typeholland }}</td>
                                                            <td>{!! \Illuminate\Support\Str::limit($holland->deskripsi, 20, $end = '...') !!}</td>
                                                            <td>{!! \Illuminate\Support\Str::limit($holland->karakter, 20, $end = '...') !!}</td>
                                                            <td>{!! \Illuminate\Support\Str::limit($holland->kelebihan, 20, $end = '...') !!}</td>
                                                            <td>{!! \Illuminate\Support\Str::limit($holland->kelemahan, 20, $end = '...') !!}</td>
                                                            <td>{!! \Illuminate\Support\Str::limit($holland->job_match, 20, $end = '...') !!}</td>
                                                            <td>
                                                                <form method="POST"
                                                                    action="{{ route('deskholland.destroy', $holland) }}"
                                                                    onsubmit="return confirm('Hapus Data, Anda Yakin ?')">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <a class="btn btn-icon btn-primary"
                                                                        href="{{ route('deskholland.edit', $holland) }}"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <button class="btn btn-icon btn-danger"><i
                                                                            class="fas fa-times"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                    @endforelse
                                                </tbody>
                                            </table>
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
