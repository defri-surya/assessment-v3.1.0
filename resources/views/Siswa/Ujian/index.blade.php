@extends('layouts.stisla')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row justify-content-center mt-5">
                <div class="col-md-12 text-center">
                    <h4 class="text-center">Selamat Mengerjakan</h4>
                </div>
            </div>

            <div class="container mt-4">
                <div class="row justify-content-center">
                    @if ($cekKategoriDISC)
                        <div class="col-md-6 text-center">
                            <img src="{{ asset('assets') }}/disc1.png" width="330" class="img-fluid" alt="">
                            <div class="row mt-3 mb-3">
                                <div class="col-md-12 text-center">
                                @empty($cek)
                                    <a href="{{ route('ujian', 'disc') }}" class="btn btn-primary"
                                        style="border-radius: 15px; background: #f08519;">Start Assessment</a>
                                @endempty
                                @isset($cek)
                                    <h6>Anda Sudah Melakukan Ujian DISC</h6>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
                @if ($cekKategoriHolland)
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('assets') }}/holland.png" width="330" class="img-fluid" alt="">
                        <div class="row mt-3 mb-3">
                            <div class="col-md-12 text-center">
                            @empty($cek2)
                                <a href="{{ route('exam', 'holland') }}" class="btn btn-primary"
                                    style="border-radius: 15px; background: #f08519;">Start Assessment</a>
                            @endempty
                            @isset($cek2)
                                <h6>Anda Sudah Melakukan Ujian Holland</h6>
                            @endisset
                        </div>
                    </div>
                </div>
            @endif
            @if ($cekKategoriAll)
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets') }}/disc1.png" width="330" class="img-fluid" alt="">
                    <div class="row mt-3 mb-3">
                        <div class="col-md-12 text-center">
                        @empty($cek)
                            <a href="{{ route('ujian', 'disc') }}" class="btn btn-primary"
                                style="border-radius: 15px; background: #f08519;">Start Assessment</a>
                        @endempty
                        @isset($cek)
                            <h6>Anda Sudah Melakukan Ujian DISC</h6>
                        @endisset
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets') }}/holland.png" width="330" class="img-fluid" alt="">
                <div class="row mt-3 mb-3">
                    <div class="col-md-12 text-center">
                    @empty($cek2)
                        <a href="{{ route('exam', 'holland') }}" class="btn btn-primary"
                            style="border-radius: 15px; background: #f08519;">Start Assessment</a>
                    @endempty
                    @isset($cek2)
                        <h6>Anda Sudah Melakukan Ujian Holland</h6>
                    @endisset
                </div>
            </div>
        </div>
    @endif
</div>
</div>
</section>
</div>
@endsection
