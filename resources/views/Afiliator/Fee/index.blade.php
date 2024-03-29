@extends('layouts.stisla')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Fee</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <div class="col-md-8">
                                <a class="btn btn-primary" href="{{ route('camaba.create') }}">Tambah Data</a>
                            </div> --}}
                            <div class="col-md-12">
                                <form method="GET" action="{{ route('feess.index') }}">
                                    <div class="input-group">
                                        <input type="text" name="cari" class="form-control" placeholder="Cari Nama">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Daftar Siswa</h4>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-md">
                                                <thead>
                                                    <tr>
                                                        <th>Total Fee : Rp {{ number_format($sumAfil) }}</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <table class="table table-striped table-md">
                                                <tbody>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Siswa</th>
                                                        <th>Asal Sekolah</th>
                                                        <th>Fee ({{ $share->afiliator }}%)</th>
                                                    </tr>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    @forelse ($data as $item => $user)
                                                        @php
                                                            $users = App\User::where('id', $user->user_id)->first();
                                                            $sekolah = App\sekolah::where('id', $users->sekolahid)->first();
                                                            $afiliator = App\User::where('id', $user->afiliatorid)->first();
                                                        @endphp
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $users->nama }}</td>
                                                            <td>{{ $sekolah->namasekolah }}</td>
                                                            <td style="color: rgb(8, 180, 8)">Rp.
                                                                {{ number_format($user->fee_afiliator) }}
                                                            </td>
                                                        </tr>
                                                    @empty
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <nav class="d-inline-block">
                                            <ul class="pagination mb-0">
                                                {{ $data->links() }}
                                            </ul>
                                        </nav>
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
