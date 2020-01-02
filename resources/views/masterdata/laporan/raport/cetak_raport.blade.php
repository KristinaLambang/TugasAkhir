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
        <title>Raport Peserta Didik dan Profil Peserta Didik</title>
    </head>

    <body style=" font-family:'Times New Roman', Times, serif;background-size: 50px;">
        <div style="">
            <table width="100%" border="0" style="border-collapse:collapse;margin-bottom:25px;">
                <tr>
                    <td align="center" style="padding:0px;">
                        <strong style="font-size: 18px">Raport Peserta Didik dan Profil Peserta Didik</strong>
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
                                    <td width="20%" id="tes_java">Nama Peserta</td>
                                    <td>: {{$siswa->nama_siswa}}</td>
                                </tr>
                                <tr>
                                    <td width="20%" id="tes_java">NIS</td>
                                    <td>: {{$siswa->nis}}</td>
                                </tr>
                                <tr>
                                    <td width="20%" id="tes_java">Nama Sekolah</td>
                                    <td>: SMA Albana Denpasar</td>
                                </tr>
                                <tr>
                                    <td>Alamat Sekolah</td>
                                    <td>: Jl Tukad Yeh Ho III No 16</td>
                                </tr>
                                <tr>
                                    <td>Kelas</td>
                                    <td>: {{ $siswa->kelas->nama_kelas }} </td>
                                </tr>
                                <tr>
                                    <td>Semester</td>
                                    <td>:
                                        @if ($nilaiFirst->created_at->format('m') >= 6)
                                           Genap
                                        @else
                                           Ganjil
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tahun Ajaran</td>
                                    <td>: {{$nilaiFirst->tahun_ajaran}}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        <p>A. Sikap</p>
        <table width="100%" border="1" style="border-collapse:collapse;">
            <thead>
                <tr style="height: 40px;">
                    <th style="width:4%;text-align: center;" height="35" valign="middle">No</th>
                    <th style="width:17%;text-align: center;">Sikap</th>
                    <th style="width:10%;text-align: center;">Angka</th>
                    <th style="width:20%;text-align: center;">Predikat</th>
                </tr>
            </thead>
            <tbody id="items_tbody">
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;" height="25" valign="middle">
                        1
                    </td>
                    <td style="vertical-align: middle;">
                        Sikap Spiritual
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        {{ $siswa->sikap->nilai_spiritual }}
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        @if( $siswa->sikap->nilai_spiritual >= 90 )
                            A
                        @elseif( $siswa->sikap->nilai_spiritual >= 80 && $siswa->sikap->nilai_spiritual <= 89)
                            B
                        @elseif( $siswa->sikap->nilai_spiritual >= 70 && $siswa->sikap->nilai_spiritual <= 79)
                            C
                        @elseif( $siswa->sikap->nilai_spiritual >= 60 && $siswa->sikap->nilai_spiritual <= 69)
                            D
                        @elseif( $siswa->sikap->nilai_spiritual >= 50 && $siswa->sikap->nilai_spiritual <= 59)
                            E
                        @endif
                    </td>
                </tr>
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;" height="25" valign="middle">
                        2
                    </td>
                    <td style="vertical-align: middle;">
                        Sikap Sosial
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        {{ $siswa->sikap->nilai_sikap }}
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                    @if( $siswa->sikap->nilai_sikap >= 90 )
                            A
                        @elseif( $siswa->sikap->nilai_sikap >= 80 && $siswa->sikap->nilai_sikap <= 89)
                            B
                        @elseif( $siswa->sikap->nilai_sikap >= 70 && $siswa->sikap->nilai_sikap <= 79)
                            C
                        @elseif( $siswa->sikap->nilai_sikap >= 60 && $siswa->sikap->nilai_sikap <= 69)
                            D
                        @elseif( $siswa->sikap->nilai_sikap >= 50 && $siswa->sikap->nilai_sikap <= 59)
                            E
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
        <p>B. Pengetahuan dan Keterampilan</p>
        <table width="100%" border="1" style="border-collapse:collapse;">
            <thead style="font-weight: bold;">
                <tr >
                    <td style="font-weight: bold;" rowspan="2">No</td>
                    <td style="font-weight: bold;" colspan="1" rowspan="2">Mata Pelajaran</td>
                    <td style="font-weight: bold;" colspan="1" rowspan="2">KKM</td>
                    <td style="font-weight: bold; text-align: center;" colspan="2">Pengetahuan</td>
                    <td style="font-weight: bold; text-align: center;" colspan="2">Keterampilan</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Angka</td>
                    <td style="font-weight: bold;">Predikat</td>
                    <td style="font-weight: bold;">Angka</td>
                    <td style="font-weight: bold;">Predikat</td>
                </tr>
            </thead>
            <tbody id="items_tbody">
                @foreach($mapel as $rowMapel)
                    <tr style="height: 20px;">
                        <td style="vertical-align: middle;" height="25" valign="middle">
                             {{ $loop->iteration }}
                        </td>
                        <td style="vertical-align: middle;">
                            {{$rowMapel->nama_mapel}}
                        </td>
                        <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                            {{$rowMapel->kkm}}
                        </td>
                        @foreach($dataNilai as $rowNilai)
                            @if ($rowNilai->id_siswa === $siswa->id_siswa)
                                @if ($rowMapel->id_mapel === $rowNilai->id_mapel)
                                <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                                    {{$rowNilai->nilai_raport}}
                                </td>
                                @endif
                            @endif
                        @endforeach

                        @foreach($dataNilai as $rowNilai)
                            @if ($rowNilai->id_siswa === $siswa->id_siswa)
                                @if ($rowMapel->id_mapel === $rowNilai->id_mapel)
                        
                        <td style="vertical-align: middle;">
                        @if($rowNilai->nilai_raport >= 90 )
                            A
                        @elseif($rowNilai->nilai_raport >= 80 &&$rowNilai->nilai_raport <= 89)
                            B
                        @elseif($rowNilai->nilai_raport >= 70 &&$rowNilai->nilai_raport <= 79)
                            C
                        @elseif($rowNilai->nilai_raport >= 60 &&$rowNilai->nilai_raport <= 69)
                            D
                        @elseif($rowNilai->nilai_raport >= 50 &&$rowNilai->nilai_raport <= 59)
                            E
                        @endif
                        </td>
                        @endif
                            @endif
                        @endforeach

                        @foreach($dataNilai as $rowNilai)
                            @if ($rowNilai->id_siswa === $siswa->id_siswa)
                                @if ($rowMapel->id_mapel === $rowNilai->id_mapel)
                                <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                                    {{$rowNilai->nilai_keterampilan}}
                                </td>
                                @endif
                            @endif
                        @endforeach

                        @foreach($dataNilai as $rowNilai)
                            @if ($rowNilai->id_siswa === $siswa->id_siswa)
                                @if ($rowMapel->id_mapel === $rowNilai->id_mapel)
                            <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                            @if($rowNilai->nilai_keterampilan >= 90 )
                                A
                            @elseif($rowNilai->nilai_keterampilan >= 80 &&$rowNilai->nilai_keterampilan <= 89)
                                B
                            @elseif($rowNilai->nilai_keterampilan >= 70 &&$rowNilai->nilai_keterampilan <= 79)
                                C
                            @elseif($rowNilai->nilai_keterampilan >= 60 &&$rowNilai->nilai_keterampilan <= 69)
                                D
                            @elseif($rowNilai->nilai_keterampilan >= 50 &&$rowNilai->nilai_keterampilan <= 59)
                                E
                            @endif
                            </td>
                        @endif
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p>Deskripsi Pengetahuan dan Keterampilan</p>
        <table width="100%" border="1" style="border-collapse:collapse;">
            <thead>
                <tr style="height: 40px;">
                    <th style="width:4%;text-align: center;" height="35" valign="middle">No</th>
                    <th style="width:17%;text-align: center;">Mata Pelajaran</th>
                    <th style="width:10%;text-align: center;">Ranah Pengetahuan</th>
                    <th style="width:20%;text-align: center;">Ranah Keterampilan</th>
                </tr>
            </thead>
            <tbody id="items_tbody">
                @foreach($mapel as $rowMapel)
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;" height="25" valign="middle">
                    {{ $loop->iteration }}
                    </td>
                    <td style="vertical-align: middle;">
                        {{$rowMapel->nama_mapel}}
                    </td>

                    @foreach($dataNilai as $rowNilai)
                        @if ($rowNilai->id_siswa === $siswa->id_siswa)
                            @if ($rowMapel->id_mapel === $rowNilai->id_mapel)
                            <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                                {{$rowNilai->deskripsi_pengetahuan}}
                            </td>
                            @endif
                        @endif
                    @endforeach

                    @foreach($dataNilai as $rowNilai)
                        @if ($rowNilai->id_siswa === $siswa->id_siswa)
                            @if ($rowMapel->id_mapel === $rowNilai->id_mapel)
                            <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                                {{$rowNilai->deskripsi_keterampilan}}
                            </td>
                            @endif
                        @endif
                    @endforeach
                </tr>
               @endforeach
            </tbody>
        </table>
        <p>C. Ekstrakulikuler</p>
        <table width="100%" border="1" style="border-collapse:collapse;">
            <thead>
                <tr style="height: 40px;">
                    <th style="width:4%;text-align: center;" height="35" valign="middle">No</th>
                    <th style="width:17%;text-align: center;">Ekstrakulikuler</th>
                    <th style="width:10%;text-align: center;">Nilai</th>
                </tr>
            </thead>
            <tbody id="items_tbody">
            @foreach($extra as $rowExtra)
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;" height="25" valign="middle">
                         {{ $loop->iteration }}
                    </td>
                    <td style="vertical-align: middle;">
                        {{$rowExtra->nama_extrakurikuler}}
                    </td>

                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        @if( $rowExtra->nilai_extrakurikuler >= 90 )
                                A
                            @elseif( $rowExtra->nilai_extrakurikuler >= 80 && $rowExtra->nilai_extrakurikuler <= 89)
                                B
                            @elseif( $rowExtra->nilai_extrakurikuler >= 70 && $rowExtra->nilai_extrakurikuler <= 79)
                                C
                            @elseif( $rowExtra->nilai_extrakurikuler >= 60 && $rowExtra->nilai_extrakurikuler <= 69)
                                D
                            @elseif( $rowExtra->nilai_extrakurikuler >= 50 && $rowExtra->nilai_extrakurikuler <= 59)
                                E
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <p>D. Ketidakhadiran</p>
        <table width="100%" border="1" style="border-collapse:collapse;">

            <tbody id="items_tbody">
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;font-weight: bold;" height="25" valign="middle">
                        Sakit 
                    </td>
                    <td style="vertical-align: middle;">
                        {{$siswa->absensi->sakit}} Hari
                    </td>
                </tr>
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;font-weight: bold;" height="25" valign="middle">
                        Izin 
                    </td>
                    <td style="vertical-align: middle;">
                        {{$siswa->absensi->ijin}} Hari
                    </td>
                </tr>
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;font-weight: bold;" height="25" valign="middle">
                        Tanpa Keterangan 
                    </td>
                    <td style="vertical-align: middle;">
                        {{$siswa->absensi->alpa}} Hari
                    </td>
                </tr>
            </tbody>
        </table>
        <table border="0" width="100%" style="text-align: center;align-content: center;">
                <tr style="width:100%;text-align: center; align-content: center;">
                    <td style="width:50%;text-align: center; align-content: center;">
                        <table width="100%" border="0" style="text-align:center; margin-top:40px;">
                            <tr>
                                <td width="0%"></td>
                                <td width="0%" align="center"  colspan="2">Mengetahui</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td align="center" colspan="2"> Orang Tua / Wali

                                </td>
                            </tr>
                            <tr>
                                <td height="65">&nbsp;</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td colspan="2"><b><u></u></b></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td colspan="2">{{$siswa->nama_ayah}}</td>
                            </tr>
                        </table>
                    </td>
                    <td style="width:50%;text-align: center;">
                        <table width="100%" border="0" style="text-align:center; margin-top:40px;">
                            <tr>
                                <td width="0%"></td>
                                <!-- <td width="0%"></td> -->
                                <td width="0%" align="center" colspan="2"> <label for="">Denpasar, {{date("d")}}-{{$namaBulan [date("n")]}}-{{date("Y") }}</label> </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <!-- <td>&nbsp;</td> -->
                                <td align="center" colspan="2">Wali Kelas

                                </td>
                            </tr>
                            <tr>
                                <td height="65">&nbsp;</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            <td colspan="2"><b><u></u></b></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td colspan="2">{{$walas->nama_guru_walas}}</td>
                            </tr>

                        </table>
                    </td>
                </tr>

            </table>

                        <table width="100%" border="0" style="text-align:center; margin-top:10px;">
                            <tr>
                                <td width="0%"></td>
                                <td width="0%" align="center"  colspan="2">Mengetahui</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td align="center" colspan="2"> Kepala Sekolah

                                </td>
                            </tr>
                            <tr>
                                <td height="65">&nbsp;</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td colspan="2"><b><u></u></b></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td colspan="2">Ruri Subiantoro, S. PT., M. Pd</td>
                            </tr>
                        </table>

    </html>
