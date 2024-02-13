@extends('layouts.stisla')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets') }}/holland/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="overflow-hidden">
                <!--multisteps-form-->
                <div class="multisteps-form">
                    <!--progress bar-->
                    <div class="row">
                        <div class="col-12 col-lg-8 ml-auto mr-auto mb-4 card" style="padding: 10px;">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button"
                                    title="User Info">Exam 1</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Address">Exam
                                    2</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Comments">Exam
                                    3</button>
                            </div>
                        </div>
                    </div>
                    <!--form panels-->
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <form class="multisteps-form__form" action="{{ route('holland.store') }}" method="POST"
                                onsubmit="return confirm('Anda Yakin ?')">
                                @csrf
                                <div id="step-1"
                                    class="multisteps-form__panel shadow p-4 rounded bg-white step js-active"
                                    data-animation="scaleIn">
                                    <div class="multisteps-form__content">
                                        <x-exam1 />
                                        @php
                                            $no = 1;
                                        @endphp
                                        @forelse ($R1 as $item)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>R1</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.</td>
                                                                <td>{{ $item->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.</td>
                                                                <td>{{ $item->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.</td>
                                                                <td>{{ $item->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.</td>
                                                                <td>{{ $item->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.</td>
                                                                <td>{{ $item->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.</td>
                                                                <td>{{ $item->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.</td>
                                                                <td>{{ $item->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.</td>
                                                                <td>{{ $item->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.</td>
                                                                <td>{{ $item->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.</td>
                                                                <td>{{ $item->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.</td>
                                                                <td>{{ $item->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-r1 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse

                                        @php
                                            $no1 = 1;
                                        @endphp
                                        @forelse ($I1 as $item1)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>I1</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.</td>
                                                                <td>{{ $item1->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.</td>
                                                                <td>{{ $item1->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.</td>
                                                                <td>{{ $item1->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.</td>
                                                                <td>{{ $item1->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.</td>
                                                                <td>{{ $item1->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.</td>
                                                                <td>{{ $item1->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.</td>
                                                                <td>{{ $item1->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.</td>
                                                                <td>{{ $item1->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.</td>
                                                                <td>{{ $item1->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.</td>
                                                                <td>{{ $item1->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.</td>
                                                                <td>{{ $item1->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-i1 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse

                                        @php
                                            $no2 = 1;
                                        @endphp
                                        @forelse ($A1 as $item2)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>A1</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.</td>
                                                                <td>{{ $item2->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.</td>
                                                                <td>{{ $item2->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.</td>
                                                                <td>{{ $item2->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.</td>
                                                                <td>{{ $item2->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.</td>
                                                                <td>{{ $item2->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.</td>
                                                                <td>{{ $item2->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.</td>
                                                                <td>{{ $item2->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.</td>
                                                                <td>{{ $item2->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.</td>
                                                                <td>{{ $item2->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.</td>
                                                                <td>{{ $item2->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.</td>
                                                                <td>{{ $item2->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-a1 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse

                                        @php
                                            $no3 = 1;
                                        @endphp
                                        @forelse ($S1 as $item3)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>S1</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.</td>
                                                                <td>{{ $item3->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.</td>
                                                                <td>{{ $item3->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.</td>
                                                                <td>{{ $item3->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.</td>
                                                                <td>{{ $item3->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.</td>
                                                                <td>{{ $item3->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.</td>
                                                                <td>{{ $item3->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.</td>
                                                                <td>{{ $item3->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.</td>
                                                                <td>{{ $item3->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.</td>
                                                                <td>{{ $item3->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.</td>
                                                                <td>{{ $item3->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.</td>
                                                                <td>{{ $item3->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-s1 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse

                                        @php
                                            $no4 = 1;
                                        @endphp
                                        @forelse ($E1 as $item4)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>E1</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.</td>
                                                                <td>{{ $item4->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.</td>
                                                                <td>{{ $item4->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.</td>
                                                                <td>{{ $item4->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.</td>
                                                                <td>{{ $item4->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.</td>
                                                                <td>{{ $item4->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.</td>
                                                                <td>{{ $item4->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.</td>
                                                                <td>{{ $item4->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.</td>
                                                                <td>{{ $item4->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.</td>
                                                                <td>{{ $item4->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.</td>
                                                                <td>{{ $item4->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.</td>
                                                                <td>{{ $item4->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-e1 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse

                                        @php
                                            $no5 = 1;
                                        @endphp
                                        @forelse ($C1 as $item5)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>C1</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.</td>
                                                                <td>{{ $item5->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.</td>
                                                                <td>{{ $item5->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.</td>
                                                                <td>{{ $item5->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.</td>
                                                                <td>{{ $item5->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.</td>
                                                                <td>{{ $item5->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.</td>
                                                                <td>{{ $item5->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.</td>
                                                                <td>{{ $item5->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.</td>
                                                                <td>{{ $item5->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.</td>
                                                                <td>{{ $item5->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.</td>
                                                                <td>{{ $item5->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.</td>
                                                                <td>{{ $item5->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-c1 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="step-2" class="multisteps-form__panel shadow p-4 rounded bg-white step"
                                    data-animation="scaleIn">
                                    <div class="multisteps-form__content">
                                        <x-exam2 />
                                        @php
                                            $no = 1;
                                        @endphp
                                        @forelse ($R2 as $itemr2)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>R2</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr2->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr2->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr2->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr2->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr2->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr2->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr2->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr2->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr2->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr2->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr2->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-r2 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse

                                        @php
                                            $no1 = 1;
                                        @endphp
                                        @forelse ($I2 as $itemi2)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>I2</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi2->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi2->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi2->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi2->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi2->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi2->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi2->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi2->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi2->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi2->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi2->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-i2 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse

                                        @php
                                            $no2 = 1;
                                        @endphp
                                        @forelse ($A2 as $itema2)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>A2</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema2->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema2->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema2->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema2->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema2->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema2->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema2->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema2->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema2->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema2->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema2->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-a2 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse

                                        @php
                                            $no3 = 1;
                                        @endphp
                                        @forelse ($S2 as $items2)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>S2</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items2->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items2->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items2->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items2->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items2->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items2->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items2->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items2->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items2->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items2->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items2->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-s2 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse

                                        @php
                                            $no4 = 1;
                                        @endphp
                                        @forelse ($E2 as $iteme2)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>E2</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme2->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme2->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme2->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme2->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme2->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme2->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme2->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme2->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme2->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme2->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme2->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-e2 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse

                                        @php
                                            $no5 = 1;
                                        @endphp
                                        @forelse ($C2 as $itemc2)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>C2</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc2->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc2->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc2->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc2->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc2->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc2->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc2->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc2->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc2->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc2->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc2->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-c2 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="step-3" class="multisteps-form__panel shadow p-4 rounded bg-white step"
                                    data-animation="scaleIn">
                                    <div class="multisteps-form__content">
                                        <x-exam3 />
                                        @php
                                            $no = 1;
                                        @endphp
                                        @forelse ($R3 as $itemr3)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>R3</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr3->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr3->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr3->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr3->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr3->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr3->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr3->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr3->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr3->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr3->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no++ }}.
                                                                </td>
                                                                <td>{{ $itemr3->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-r3 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse

                                        @php
                                            $no1 = 1;
                                        @endphp
                                        @forelse ($I3 as $itemi3)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>I3</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi3->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi3->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi3->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi3->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi3->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi3->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi3->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi3->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi3->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi3->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no1++ }}.
                                                                </td>
                                                                <td>{{ $itemi3->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-i3 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse

                                        @php
                                            $no2 = 1;
                                        @endphp
                                        @forelse ($A3 as $itema3)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>A3</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema3->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema3->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema3->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema3->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema3->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema3->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema3->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema3->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema3->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema3->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no2++ }}.
                                                                </td>
                                                                <td>{{ $itema3->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-a3 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse

                                        @php
                                            $no3 = 1;
                                        @endphp
                                        @forelse ($S3 as $items3)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>S3</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items3->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items3->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items3->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items3->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items3->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items3->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items3->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items3->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items3->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items3->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no3++ }}.
                                                                </td>
                                                                <td>{{ $items3->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-s3 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse

                                        @php
                                            $no4 = 1;
                                        @endphp
                                        @forelse ($E3 as $iteme3)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>E3</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme3->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme3->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme3->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme3->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme3->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme3->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme3->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme3->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme3->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme3->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no4++ }}.
                                                                </td>
                                                                <td>{{ $iteme3->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-e3 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse

                                        @php
                                            $no5 = 1;
                                        @endphp
                                        @forelse ($C3 as $itemc3)
                                            <section class="card" style="padding: 20px">
                                                <div class="row mb-2 ">
                                                    <div class="col-md-7 col-5">
                                                        <h6>C3</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc3->soal_1 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc3->soal_2 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc3->soal_3 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc3->soal_4 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc3->soal_5 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc3->soal_6 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc3->soal_7 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc3->soal_8 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc3->soal_9 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc3->soal_10 }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">{{ $no5++ }}.
                                                                </td>
                                                                <td>{{ $itemc3->soal_11 }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <x-c3 />
                                                </div>
                                            </section>
                                        @empty
                                        @endforelse
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button class="btn btn-success ml-auto" type="submit"
                                                title="Finish">Finish</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets') }}/holland/script.js"></script>
@endsection
