@extends('frontpage.layouts.app-frontpage')

@section('title', 'Pemilu Himatif')

@section('pageClass', 'pemilu')
@section('content')

    <div class="pemilu-info-bg min-h-screen w-full flex items-center justify-center" style="background:#FEF9F1;">
        <div class="pemilu-info-card bg-white rounded-3xl shadow-2xl p-16 max-w-4xl w-full mx-auto">
            @if (request()->query('status') === 'campaign')
                <div class="text-center flex flex-col items-center">
                    <h2 class="font-extrabold text-5xl text-[#013049] mb-10">Periode Voting Belum Dimulai</h2>
                    <img src="{{ asset('img/illustration/vote-info.svg') }}" alt=""
                        class="w-2/3 max-w-lg my-12 rounded-2xl shadow-lg" />
                    <!-- Jika ingin menampilkan logo di halaman ini, gunakan contoh berikut: -->

                    <p class="text-xl text-[#013049]">Silahkan klik
                        <a href="/pemilu"
                            class="bg-[#910E19] px-5 py-2 rounded-full text-white font-semibold hover:bg-[#013049] hover:text-[#910E19] transition">Link</a>
                        berikut untuk melihat visi & misi kandidat Pemilu HIMATIF 2025.
                    </p>
                </div>
            @elseif (request()->query('status') === 'ended')
                <div class="text-center flex flex-col items-center">
                    <h2 class="font-extrabold text-5xl text-[#013049] mb-10">Periode Pemilu Telah Berakhir</h2>
                    <img src="{{ asset('img/illustration/vote-info.svg') }}" alt=""
                        class="w-2/3 max-w-lg my-12 rounded-2xl shadow-lg" />
                    <p class="text-xl text-[#013049]">Terima kasih sudah mengikuti kegiatan Pemilu HIMATIF 2024.</p>
                </div>
            @elseif (request()->query('status') === 'notstarted')
                <div class="text-center flex flex-col items-center">
                    <h2 class="font-extrabold text-5xl text-[#013049] mb-10">Periode Pemilu Belum Dimulai</h2>
                    <img src="{{ asset('img/illustration/vote-info.svg') }}" alt=""
                        class="w-2/3 max-w-lg my-12 rounded-2xl shadow-lg" />
                    <p class="text-xl text-[#013049]">Silahkan menunggu informasi lebih lanjut terkait PEMILU HIMATIF
                        2024.</p>
                </div>
            @elseif (request()->query('status') === 'success')
                <div class="text-center flex flex-col items-center">
                    <h2 class="font-extrabold text-5xl text-[#013049] mb-10">Suara Berhasil Disimpan ✔</h2>
                    <img src="{{ asset('img/illustration/vote-info.svg') }}" alt=""
                        class="w-2/3 max-w-lg my-12 rounded-2xl shadow-lg" />
                    <p class="text-xl text-[#013049]">Terima kasih sudah mengikuti kegiatan Pemilu HIMATIF 2024.</p>
                </div>
            @else
                <div class="text-center flex flex-col items-center">
                    <h2 class="font-extrabold text-5xl text-[#013049] mb-10">Pemilu HIMATIF 2024</h2>
                    <img src="{{ asset('img/illustration/vote-info.svg') }}" alt=""
                        class="w-2/3 max-w-lg my-12 rounded-2xl shadow-lg" />
                    <p class="text-xl text-[#013049]">Silahkan nantikan informasi lebih lanjut terkait Pemilu HIMATIF
                        2024.</p>
                </div>
            @endif
        </div>
    </div>

    </div>

@endsection

@section('style')
    <style>
        .pemilu-info-bg {
            background: #FEF9F1 !important;
        }

        .pemilu-info-card {
            background: #fff;
            border-radius: 2rem;
            box-shadow: 0 12px 48px rgba(1, 48, 73, 0.16);
            padding: 4rem;
            max-width: 900px;
        }

        .pemilu-info-card h2 {
            font-size: 3rem;
        }

        .pemilu-info-card img {
            max-width: 400px;
            width: 80%;
        }

        .pemilu-info-card p {
            font-size: 1.3rem;
        }

        @media (max-width: 640px) {
            .pemilu-info-card {
                padding: 1.5rem;
            }

            .pemilu-info-card h2 {
                font-size: 2rem;
            }

            .pemilu-info-card img {
                max-width: 250px;
            }

            .pemilu-info-card p {
                font-size: 1rem;
            }
        }
    </style>
@endsection

@section('script')
    <script></script>
@endsection
