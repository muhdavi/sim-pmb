<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>SIMPMB</title>

    <style type="text/css">
        body {
            font-size: 12pt;
            line-height: 1.5;
        }
        @page {
            margin: .5cm 2cm 4cm 2cm;
            /*size: 33cm 21.5cm ;*/
        }

        header {
            float: left;
            border: 1px solid white;
            clear: both;
        }
        main {
            clear: both;
            float: none;
            border: 1px solid white;
            margin: 25px 0;
        }
        footer {
            float: right;
            page-break-inside: avoid;
            border: 1px solid white;
            width: 100%;
            line-height: 1;
        }
        table.data td {
            border-collapse: collapse;
            width: 100%;
        }

        table.data th {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }

        table.data {
            border-collapse: collapse;
            width: 100%;
        }

        table.data .no {
            width: 10px;
            padding: 5px;
            text-align: left;
            font-weight: bold;
        }
        table.data .nrk {
            width: 15%;
            padding: 5px;
            text-align: center;
        }
        table.data .nama {
            width: auto;
            padding: 5px;
            text-align: center;
        }
        table.data .dt_nama {
            width: auto;
            padding: 5px;
        }
        table.data .ttl {
            width: auto;
            padding: 5px;
            text-align: center;
        }
        table.data .dt_ttl {
            width: auto;
            padding: 5px;
        }
        table.data .pendidikan {
            width: 15%;
            padding: 5px;
            text-align: center;
        }
        table.head {
            width: 35%;
            border: 1px solid white;
        }
        table.foot {
            float: right;
            width: 35%;
            border: 1px solid white;
        }

        h1 {
            line-height: 0.2;
            font-size: 14pt;
            font-weight: bolder;
        }
        .kop {
            font-size: 14pt;
            float: left;
            font-weight: bolder;
            padding-left: 175px;
        }
        .tebal {
            font-weight: bolder;
        }
        .pd40 {
            padding-left: 40px 0;
        }
        .pd25 {
            padding-left: 25px 0;
        }
        .pd10 {
            padding-left: 10px 0;
        }
        .ttd {
            padding-top: 50px;
        }
        .nama {
            text-decoration: underline;
        }
        .jarak {
            padding-left: 20px;
        }
        .justify {
            text-align: justify;
            text-justify: inter-word;
        }
        .center {
            text-align: center;
        }
        .right {
            text-align: right;
        }
        .signature {
            float: right;
        }
        .nomor_pendaftaran {
            margin-top: -10px;
        }
    </style>
</head>
<body>

<script type="text/php">
    if ( isset($pdf) ) {
        // v.0.7.0 and greater
        $text = "Halaman {PAGE_NUM}/{PAGE_COUNT}";
        $font = $fontMetrics->get_font("helvetica", "bold");
        $size = 12;
        $color = array(0,0,0);

        $textWidth = $fontMetrics->getTextWidth($text, $font, $size);
        $x = $pdf->get_width() - 130;
        $y = $pdf->get_height() - 20;

        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;       //  default

        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
    }
</script>
<header>
    <img src="{{ $logo }}" width="150" alt="image" >
    <div class="kop">
        <h1 class="center">SIMPMB</h1>
        <h1>(SISTEM INFORMASI PENERIMAAN MURID BARU)</h1>
        <h1 class="center">KABUPATEN ACEH TIMUR</h1>
    </div>
</header>
<main>
    <h1 class="center nama">Formulir Pendaftaran</h1>
    <p class="center nomor_pendaftaran">Nomor: {{ $murid->nomor_pendaftaran }}</p>
    <p class="center"><img src="{{ $foto }}" width="150" alt="image" ></p>

    <table class="data">
        <tr>
            <td class="no" colspan="5">A. Identitas Murid</td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">1. NISN</td>
            <td colspan="3">: {{ $murid->nisn }} </td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">2. Nama</td>
            <td colspan="3">: {{ $murid->murid }} </td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">3. TTL</td>
            <td colspan="3">: {{ $murid->tempat_lahir }}, {{ Date('d-m-Y', strtotime($murid->tanggal_lahir)) }} </td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">4. Jenis Kelamin</td>
            <td colspan="3">:
                @if($murid->jenis_kelamin == 1)
                    {{ __('Laki-laki') }}
                @else
                    {{ __('Perempuan') }}
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">5. Agama</td>
            <td colspan="3">: {{ $murid->agamas->agama }} </td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">6. Alamat</td>
            <td colspan="3">: {{ $murid->alamat }} {{ $murid->kelurahans->kelurahan }}</td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">7. Sekolah Asal</td>
            <td colspan="3">: {{ $murid->sekolah_asal }} </td>
        </tr>
    </table>

    <table class="data">
        <tr>
            <td class="no" colspan="5">B. Pendaftaran</td>
        </tr>
        @foreach($murid->sekolahs as $key => $ms)
        <tr>
            <td colspan="2" class="pd25">Pilihan {{ $key+1 }}</td>
            <td colspan="3">: {{ $ms->sekolah }} </td>
        </tr>
        @endforeach
    </table>
</main>

<footer>
    <table class="signature center tebal">
        <tr>
            <td>Idi, {{ Date('d-m-Y') }}</td>
        </tr>
        <tr>
            <td>Wali Murid</td>
        </tr>
        <tr>
            <td class="ttd nama">{{ $murid->users->name }}</td>
        </tr>
    </table>
</footer>

</body>
</html>
