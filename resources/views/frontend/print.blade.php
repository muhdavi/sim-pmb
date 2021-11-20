<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>WASIAT</title>

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
            float: right;
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

</header>
<main>
    <h1 class="center">LAPORAN HASIL PENGAWASAN</h1>

    <table class="data">
        <tr>
            <td class="no" colspan="5">A. Identitas Koperasi</td>
        </tr>
        <tr>
            <td colspan="2" class="pd25">1. Nama Koperasi</td>
            <td colspan="3">: ok </td>
        </tr>
    </table>
</main>

<footer>
    <table class="center tebal">
        <tr>
            <td colspan="3">Idi, {{ Date('m-d-Y') }}</td>
        </tr>
        <tr>
            <td colspan="3">TIM PENGAWAS KOPERASI</td>
        </tr>
    </table>
</footer>

</body>
</html>
