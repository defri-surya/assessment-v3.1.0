@extends('layouts.stisla')

@section('content')
    <div class="main-content">
        <section class="section">

            <div class="row justify-content-center mt-5">
                <div class="col-md-12 text-center">
                    <h3 class="text-center">Petunjuk TEST HOLLAND</h3>
                </div>
            </div>

            <div class="container mt-3 card" style="padding: 20px">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h4>Instruksi :</h4>
                        <b>Terdapat 198 soal yang terbagi dalam 3 halaman.
                            <br>
                            Pada tiap-tiap halaman terdapat berbagai pilihan pekerjaan dan situasi pekerjaan yang
                            mungkin akan bersesuaian dengan minat, kompetensi dan pilihan karir Anda.
                            <br>
                            Bacalah petunjuk pengisian pada masing-masing bagian. Tidak ada jawaban yang salah. Oleh karena
                            itu
                            isilah sesuai dengan keadaan diri Anda yang sesungguhnya, dan lengkapilah jawaban Anda pada
                            semua
                            butir pernyataan.
                        </b>
                        <div class="col-md-12 text-center">
                            <a class="btn btn-lg btn-primary mt-3" href="{{ route('ujian.holland') }}">Mulai Test</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
