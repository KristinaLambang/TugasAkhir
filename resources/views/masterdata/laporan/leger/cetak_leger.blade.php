<style media="screen">
    .split {
        height: 100%;
        width: 50%;
        position: fixed;
        z-index: 1;

        overflow-x: hidden;
        padding-top: 20px;
    }

    /* Control the left side */
    .left {
        left: 0;

    }

    /* Control the right side */
    .right {
        right: 0;

    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leger Siswa</title>
</head>

<body style=" font-family:'Times New Roman', Times, serif;background-size: 50px;">
    <div style="">
        <table width="100%" border="0" style="border-collapse:collapse;margin-bottom:25px;">
            <tr>
                <td align="center" style="padding:0px;">
                    <strong style="font-size: 18px">Leger Siswa</strong>
                </td>
            </tr>
        </table>
        <div style="width:100%; border-top:1px solid black; margin-bottom:2px;"></div>
        <div style="width:100%; border-top:1px solid black; margin-bottom:25px;"></div>
    </div>
    <div class="" style="margin-bottom:25px;">
            <table width="100%" border="0" style="border-collapse:collapse;">
                <tr>
                    <td width="100%" >
                        <table width="100%" border="0">
                            <tr>
                                <td width="20%" id="tes_java">Kelas</td>
                                <td>: {{$kelas->nama_kelas}}</td>
                            </tr>
                            <tr>
                                <td width="20%" id="tes_java">Wali Kelas</td>
                                <td>: {{$walas->nama_guru_walas}}</td>
                            </tr>

                        </table>
                    </td>
                </tr>
            </table>
        </div>

    <table width="100%" border="1" style="border-collapse:collapse;">
        <thead style="font-weight: bold;">
            <tr >
                <td style="font-weight: bold;" rowspan="2">No</td>
                <td style="font-weight: bold;" colspan="1" rowspan="2">NIS</td>
                <td style="font-weight: bold;" colspan="1" rowspan="2">Nama Siswa</td>
                <td style="font-weight: bold;" colspan="1" rowspan="2">JK</td>
                <td style="font-weight: bold; text-align: center;" colspan="{{count($mapel) + 0}}">Nilai Pengetahuan</td>
                <td style="font-weight: bold; text-align: center;" colspan="{{count($mapel) + 0}}">Nilai Keterampilan</td>
                <td style="font-weight: bold; text-align: center;" colspan="2">Jumlah</td>
                <td style="font-weight: bold;" colspan="1" rowspan="2">Jumlah Nilai</td>
                <td style="font-weight: bold;" colspan="1" rowspan="2">Rangking</td>
                <td style="font-weight: bold; text-align: center;" colspan="3">Ketidakhadiran</td>
            </tr>
            <tr>
                @foreach($mapel as $row)
                    <td style="font-weight: bold;">{{$row->nama_mapel}}</td>
                @endforeach
                @foreach($mapel as $row)
                    <td style="font-weight: bold;">{{$row->nama_mapel}}</td>
                @endforeach
                <td style="font-weight: bold;">Pengetahuan</td>
                <td style="font-weight: bold;">Keterampilan</td>
                <td style="font-weight: bold;">A</td>
                <td style="font-weight: bold;">I</td>
                <td style="font-weight: bold;">S</td>
            </tr>
        </thead>
        <tbody id="items_tbody">
            @php
             $semuaNilai = [];
            @endphp
            
            @foreach($siswa as $rowSiswa)
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;" height="25" valign="middle">
                        {{ $loop->iteration }}
                    </td>
                    <td style="vertical-align: middle;">
                        {{ $rowSiswa->nis }}
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        {{ $rowSiswa->nama_siswa }}
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        {{ $rowSiswa->jenis_kelamin }}
                    </td>



                    @foreach($mapel as $rowMapel)
                        @foreach($dataNilai as $rowNilai)
                            @if ($rowNilai->id_siswa === $rowSiswa->id_siswa)
                                @if ($rowMapel->id_mapel === $rowNilai->id_mapel)
                                    <td style="vertical-align: middle;">
                                        {{$rowNilai->nilai_raport}}
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    @endforeach





                    @foreach($mapel as $rowMapel)
                        @foreach($dataNilai as $rowNilai)
                            @if ($rowNilai->id_siswa === $rowSiswa->id_siswa)
                                @if ($rowMapel->id_mapel === $rowNilai->id_mapel)
                                    <td style="vertical-align: middle;">
                                        {{$rowNilai->nilai_keterampilan}}
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    @endforeach



                    {{$totalPengetahuan = 0}}
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        @foreach($mapel as $rowMapel)
                            @foreach($dataNilai as $rowNilai)
                                @if ($rowNilai->id_siswa === $rowSiswa->id_siswa)
                                    @if ($rowMapel->id_mapel === $rowNilai->id_mapel)
                                    <p style="display: none">{{$totalPengetahuan += $rowNilai->nilai_raport}}</p>
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        {{$totalPengetahuan}}
                    </td>


                    {{$totalKeterampilan = 0}}
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        @foreach($mapel as $rowMapel)
                            @foreach($dataNilai as $rowNilai)
                                @if ($rowNilai->id_siswa === $rowSiswa->id_siswa)
                                    @if ($rowMapel->id_mapel === $rowNilai->id_mapel)
                                        <p style="display: none">{{$totalKeterampilan += $rowNilai->nilai_keterampilan}}</p>
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        {{$totalKeterampilan}}
                    </td>

                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        {{$totalPengetahuan + $totalKeterampilan}}
                    </td>

                    <!-- Ranking -->
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                    {{ $loop->iteration }}
                    </td>
                    <!-- Absensi -->
                    @foreach($absensi as $rowAbsensi)
                        @if ($rowAbsensi->id_siswa === $rowSiswa->id_siswa)
                        <td>{{$rowAbsensi->alpa}}</td>
                        @endif
                    @endforeach
                    @foreach($absensi as $rowAbsensi)
                        @if ($rowAbsensi->id_siswa === $rowSiswa->id_siswa)
                        <td>{{$rowAbsensi->ijin}}</td>
                        @endif
                    @endforeach
                    @foreach($absensi as $rowAbsensi)
                        @if ($rowAbsensi->id_siswa === $rowSiswa->id_siswa)
                        <td>{{$rowAbsensi->sakit}}</td>
                        @endif
                    @endforeach
                </tr>

            @endforeach

        </tbody>
    </table>


</html>
