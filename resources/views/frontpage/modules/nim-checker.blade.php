@extends('frontpage.layouts.app-frontpage')

@section('title', 'NIM Checker')

@section('pageClass', 'blog')
@section('content')
    <div class="nim-wrapper">
        <!-- sisi kiri -->
        <div class="side left">
            <img src="{{ asset('img/bagian/1.png') }}" alt="kiri">
        </div>

        <!-- konten utama -->
        <main class="nim-main">
            <h1 class="title">NIM Checker</h1>
            <h2 class="subtitle">MAHASISWA TEKNOLOGI INFORMASI</h2>
            <p class="desc">Gunakan Pencarian Untuk Menampilkan List Detail Mahasiswa</p>

            <form action="{{ route('frontpage.nim-checker') }}" class="search-form">
                <input type="search" name="q" value="{{ Request::get('q') }}"
                    placeholder="Masukan NIM atau Nama Mahasiswa" required>
                <button type="submit"></button>
                <input type="hidden" name="limit" value="{{ Request::get('limit') ?? 8 }}">
            </form>

            <div class="nim-list">
                @foreach ($nims as $nim)
                    <div class="nim-item">
                        <p><strong>Nama:</strong> {{ $nim->name }}</p>
                        <p><strong>NIM:</strong> {{ $nim->nim }}</p>
                        <p><strong>Angkatan:</strong> {{ $nim->angkatan }}</p>
                        <p><strong>Status:</strong> {{ $nim->status }}</p>
                    </div>
                @endforeach
            </div>

            @if (isset($nims) && $nims !== [])
                <form action="{{ route('frontpage.nim-checker') }}" class="more-form">
                    <input type="hidden" name="q" value="{{ Request::get('q') }}">
                    <input type="hidden" name="limit" value="{{ Request::get('limit') + 8 }}">
                    <button type="submit" class="more-btn">Tampilkan Lebih Banyak</button>
                </form>
            @endif
        </main>

        <!-- sisi kanan -->
        <div class="side right">
            <img src="{{ asset('img/bagian/2.png') }}" alt="kanan">
        </div>
    </div>

    <style>
        body.blog {
            background: #FEF9F1;
            margin: 0;
            font-family: sans-serif;
        }

        .nim-wrapper {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 40px;
            padding: 20px 0 0 0;
            min-height: 90vh;
        }

        .side {
            width: 35px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 0;
            margin-top: -100px;
            z-index: 1000;
        }

        .side.left {
            margin-right: auto;
            left: 0;
        }

        .side.right {
            margin-left: auto;
            right: 0;
        }



        .side img {
            width: 35px !important;
            height: auto !important;
        }

        .nim-main {
            flex: 1;
            max-width: 900px;
            text-align: center;
            padding-top: 60px;
        }

        .title {
            margin-top: 40px;
            font-size: 2.2rem;
            margin-bottom: 25px;
            display: inline-block;
            background: #910E19;
            color: #fff;
            font-size: 2.5rem;
            font-weight: bold;
            padding: 12px 30px;
            border-radius: 999px;
        }

        .subtitle {
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 3.2rem;
            font-weight: bold;
            color: #222;
        }

        .desc {
            margin-bottom: 30px;
            font-size: 1.0rem;
            color: #333;
        }

        .search-form {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0;
            margin-bottom: 40px;
            width: 100%;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
        }

        .search-form input[type="search"] {
            flex: 1;
            padding: 10px 55px 10px 24px;
            border: 3px solid #222;
            border-radius: 999px;
            font-size: 1.1rem;
            background: rgba(0, 16, 26, 0.05);
            outline: none;
            text-align: left;
            transition: border 0.2s;
        }

        .search-form button {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            padding: 0;
            cursor: pointer;
            border-radius: 999px;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-form button:hover {
            /* tidak perlu efek hover, tombol hanya ikon */
        }

        .search-form input[type="search"]::placeholder {
            color: #222;
            font-size: 1.05rem;
            text-align: center;
            transition: opacity 0.2s;
        }

        .search-form input[type="search"]:focus::placeholder {
            opacity: 0;
        }

        .search-form button:focus {
            outline: none;
        }

        .search-form button::before {
            content: '';
            display: inline-block;
            width: 22px;
            height: 22px;
            background-image: url('data:image/svg+xml;utf8,<svg fill="none" stroke="black" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>');
            background-size: contain;
            background-repeat: no-repeat;
        }

        .nim-list {
            display: grid;
            gap: 20px;
            margin-bottom: 40px;
        }

        .nim-item {
            background: #fff;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-align: left;
        }

        .more-form {
            text-align: center;
        }

        .more-btn {
            background: linear-gradient(to right, #910E19, #B11226);
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 0.95rem;
        }

        .more-btn:hover {
            background: #fff;
            color: #910E19;
            border: 1px solid #910E19;
        }

        .empty {
            margin-top: 40px;
            font-size: 0.95rem;
            color: #444;
        }

        @media (max-width: 768px) {
            .side {
                display: none;
            }

            .nim-wrapper {
                padding: 10px;
            }

            .title {
                font-size: 1.5rem;
                padding: 8px 18px;
            }

            .subtitle {
                font-size: 2rem;
            }

            .desc {
                font-size: 0.85rem;
            }

            .search-form input[type="search"] {
                font-size: 0.9rem;
                padding: 8px 40px 8px 16px;
            }
        }
    </style>
@endsection
