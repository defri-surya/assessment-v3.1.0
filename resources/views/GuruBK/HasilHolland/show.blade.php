@extends('layouts.stisla')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h5>Laporan Hasil Tes HOLLAND</h5>
            </div>

            <div class="row mb-1" style="padding: 12px; background-color: white; ">
                <div class="col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-md-4">Nama</div>
                        <div class="col-md-8">: <span style="color: blue; font-weight: bold">{{ $data->nama }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Jenis Kelamin</div>
                        <div class="col-md-8">: {{ $data->jeniskelamin }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tanggal Lahir</div>
                        <div class="col-md-8">: {{ Carbon\Carbon::parse($data->tanggallahir)->isoFormat('D MMMM Y') }}
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-md-4">Tanggal Tes</div>
                        <div class="col-md-8">: {{ Carbon\Carbon::parse($data->created_at)->isoFormat('D MMMM Y') }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Asal Sekolah</div>
                        <div class="col-md-8">: {{ $data->namasekolah }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">NISN</div>
                        <div class="col-md-8">: {{ $data->nisn }}</div>
                    </div>
                </div>
            </div>

            <div class="mb-1" style="padding: 12px; background-color: white; ">
                <table class="col-md-12 col-sm-12 text-center">
                    <thead style="border: solid 1px #bbb9b9">
                        <tr>
                            <th>R</th>
                            <th>I</th>
                            <th>A</th>
                            <th>S</th>
                            <th>E</th>
                            <th>C</th>
                        </tr>
                    </thead>
                    <tbody style="border: solid 1px #bbb9b9">
                        <tr>
                            <td>{{ $data->total_R }}</td>
                            <td>{{ $data->total_I }}</td>
                            <td>{{ $data->total_A }}</td>
                            <td>{{ $data->total_S }}</td>
                            <td>{{ $data->total_E }}</td>
                            <td>{{ $data->total_C }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p>
                            <b>
                                Berdasarkan tes yang telah dilakukan, diperoleh 3 minat tertinggi, yaitu :
                            </b>
                        </p>
                        <p>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($threeLargest as $val)
                                @php
                                    $deskR = App\DeskHolland::where('id', 1)->first();
                                    $deskI = App\DeskHolland::where('id', 2)->first();
                                    $deskA = App\DeskHolland::where('id', 3)->first();
                                    $deskS = App\DeskHolland::where('id', 4)->first();
                                    $deskE = App\DeskHolland::where('id', 5)->first();
                                    $deskC = App\DeskHolland::where('id', 6)->first();
                                @endphp
                                <button class="btn btn-primary" type="button" data-toggle="collapse"
                                    data-target="#collapseExample{{ $no++ }}" aria-expanded="false">
                                    @if ($data->total_R === $val)
                                        {{ $deskR->typeholland }}
                                    @elseif ($data->total_I === $val)
                                        {{ $deskI->typeholland }}
                                    @elseif ($data->total_A === $val)
                                        {{ $deskA->typeholland }}
                                    @elseif ($data->total_S === $val)
                                        {{ $deskS->typeholland }}
                                    @elseif ($data->total_E === $val)
                                        {{ $deskE->typeholland }}
                                    @elseif ($data->total_C === $val)
                                        {{ $deskC->typeholland }}
                                    @endif
                                </button>
                            @endforeach
                        </p>
                        <div class="collapse" id="collapseExample1">
                            <h5>{{ $deskEntities[0]->typeholland }}</h5>
                            <div class="row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h4>Deskripsi</h4>
                                    </div>
                                    <div class="card-body">
                                        <span>{!! $deskEntities[0]->deskripsi !!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h4>Karakter</h4>
                                    </div>
                                    <div class="card-body">
                                        <span>{!! $deskEntities[0]->karakter !!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h4>Kelebihan</h4>
                                    </div>
                                    <div class="card-body">
                                        <span>{!! $deskEntities[0]->kelebihan !!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h4>Kelemahan</h4>
                                    </div>
                                    <div class="card-body">
                                        <span>{!! $deskEntities[0]->kelemahan !!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h4>Job Match</h4>
                                    </div>
                                    <div class="card-body">
                                        <span>{!! $deskEntities[0]->job_match !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample2">
                            <h5>{{ $deskEntities[1]->typeholland }}</h5>
                            <div class="row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h4>Deskripsi</h4>
                                    </div>
                                    <div class="card-body">
                                        <span>{!! $deskEntities[1]->deskripsi !!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h4>Karakter</h4>
                                    </div>
                                    <div class="card-body">
                                        <span>{!! $deskEntities[1]->karakter !!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h4>Kelebihan</h4>
                                    </div>
                                    <div class="card-body">
                                        <span>{!! $deskEntities[1]->kelebihan !!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h4>Kelemahan</h4>
                                    </div>
                                    <div class="card-body">
                                        <span>{!! $deskEntities[1]->kelemahan !!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h4>Job Match</h4>
                                    </div>
                                    <div class="card-body">
                                        <span>{!! $deskEntities[1]->job_match !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample3">
                            <h5>{{ $deskEntities[2]->typeholland }}</h5>
                            <div class="row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h4>Deskripsi</h4>
                                    </div>
                                    <div class="card-body">
                                        <span>{!! $deskEntities[2]->deskripsi !!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h4>Karakter</h4>
                                    </div>
                                    <div class="card-body">
                                        <span>{!! $deskEntities[2]->karakter !!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h4>Kelebihan</h4>
                                    </div>
                                    <div class="card-body">
                                        <span>{!! $deskEntities[2]->kelebihan !!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h4>Kelemahan</h4>
                                    </div>
                                    <div class="card-body">
                                        <span>{!! $deskEntities[2]->kelemahan !!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h4>Job Match</h4>
                                    </div>
                                    <div class="card-body">
                                        <span>{!! $deskEntities[2]->job_match !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <button id="print" class="print btn btn-primary">Print</button>
                </div>
            </div>

        </section>
    </div>
@endsection
