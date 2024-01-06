@extends('layouts.stisla')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Soal Holland</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-md-8">
                                <a class="btn btn-primary" href="{{ route('soalholland.create') }}">Tambah Data</a>
                            </div>
                            <div class="col-md-4">
                                <form method="GET" action="{{ route('soalholland.index') }}">
                                    <div class="input-group">
                                        <input type="text" name="cari" class="form-control" placeholder="Search">
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
                                        <h4>Data Soal Holland</h4>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-md">
                                                <tbody>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Tipe Soal</th>
                                                        <th>Soal 1</th>
                                                        <th>Soal 2</th>
                                                        <th>Soal 3</th>
                                                        <th>Soal 4</th>
                                                        <th>Soal 5</th>
                                                        <th>Soal 6</th>
                                                        <th>Soal 7</th>
                                                        <th>Soal 8</th>
                                                        <th>Soal 9</th>
                                                        <th>Soal 10</th>
                                                        <th>Soal 11</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    @forelse ($data as $item => $soalholland)
                                                        <tr>
                                                            <td>{{ $data->firstItem() + $item }}</td>
                                                            <td>{{ $soalholland->typesoal }}</td>
                                                            <td>{{ $soalholland->soal_1 }}</td>
                                                            <td>{{ $soalholland->soal_2 }}</td>
                                                            <td>{{ $soalholland->soal_3 }}</td>
                                                            <td>{{ $soalholland->soal_4 }}</td>
                                                            <td>{{ $soalholland->soal_5 }}</td>
                                                            <td>{{ $soalholland->soal_6 }}</td>
                                                            <td>{{ $soalholland->soal_7 }}</td>
                                                            <td>{{ $soalholland->soal_8 }}</td>
                                                            <td>{{ $soalholland->soal_9 }}</td>
                                                            <td>{{ $soalholland->soal_10 }}</td>
                                                            <td>{{ $soalholland->soal_11 }}</td>
                                                            <td>
                                                                <form method="POST"
                                                                    action="{{ route('soalholland.destroy', $soalholland) }}"
                                                                    onsubmit="return confirm('Hapus Data, Anda Yakin ?')">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <a class="btn btn-icon btn-primary"
                                                                        href="{{ route('soalholland.edit', $soalholland) }}"><i
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
