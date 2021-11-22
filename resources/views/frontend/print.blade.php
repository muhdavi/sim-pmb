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
            margin: 2cm 2cm 4cm 3cm;
            /*size: 33cm 21.5cm ;*/
        }

        @page :first {
            margin-top: 5cm;
        }
        header {
            float: left;
            border: 1px solid white;
        }
        main {
            clear: right;
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
{{--    <img src="{{ $logo }}" width="150" alt="image" >--}}
</header>
<main>
    <h1 class="center">Formulir Pendaftaran SIMPMB</h1>

    <table class="data">
        <tr>
            <td class="no" colspan="5">A. Identitas Murid</td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">1. NIK</td>
            <td colspan="3">: 123456789 </td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">2. NPSN</td>
            <td colspan="3">: Rina </td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">3. TTL</td>
            <td colspan="3">: Idi, 17-08-2011 </td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">4. Jenis Kelamin</td>
            <td colspan="3">: Perempuan </td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">5. Agama</td>
            <td colspan="3">: Islam </td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">6. Alamat</td>
            <td colspan="3">: Jl Banda Aceh - Medan KM 380, Blang Seunong, Pante Bidari</td>
        </tr>
    </table>

    <table class="data">
        <tr>
            <td class="no" colspan="5">B. Pendaftaran</td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">Sekolah Asal</td>
            <td colspan="3">: SDN 1 Idi Rayeuk </td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">1. Pilihan I</td>
            <td colspan="3">: SMPN 1 Pante Bidari </td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">2. Pilihan II</td>
            <td colspan="3">: SMPN 2 Pante Bidari </td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">3. Pilihan III</td>
            <td colspan="3">: SMPN 3 Pante Bidari </td>
        </tr>
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
            <td class="ttd nama">Harun</td>
        </tr>
    </table>
</footer>

</body>
</html>
