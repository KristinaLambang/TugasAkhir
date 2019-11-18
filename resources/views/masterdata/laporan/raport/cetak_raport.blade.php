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
                                    <td>: Dwiki Wiguna</td>
                                </tr>
                                <tr>
                                    <td width="20%" id="tes_java">NIS</td>
                                    <td>: 12374</td>
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
                                    <td>: XI IPA 1</td>
                                </tr>
                                <tr>
                                    <td>Semester</td>
                                    <td>: Ganjil</td>
                                </tr>
                                <tr>
                                    <td>Tahun Ajaran</td>
                                    <td>: 2018/2019</td>
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
                        Sikap Spritual
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        45
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        B
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
                        45
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        B
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
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;" height="25" valign="middle">
                        1
                    </td>
                    <td style="vertical-align: middle;">
                        Matematika
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        75
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        90
                    </td>
                    <td style="vertical-align: middle;">
                        A
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        45
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        B
                    </td>
                </tr>
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;" height="25" valign="middle">
                        2
                    </td>
                    <td style="vertical-align: middle;">
                        IPA
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        75
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        90
                    </td>
                    <td style="vertical-align: middle;">
                        A
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        45
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        B
                    </td>
                </tr>
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;" height="25" valign="middle">
                        3
                    </td>
                    <td style="vertical-align: middle;">
                        Agama
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        75
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        90
                    </td>
                    <td style="vertical-align: middle;">
                        A
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        45
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        B
                    </td>
                </tr>
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;" height="25" valign="middle">
                        4
                    </td>
                    <td style="vertical-align: middle;">
                        IPS
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        75
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        90
                    </td>
                    <td style="vertical-align: middle;">
                        A
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        45
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        B
                    </td>
                </tr>
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
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;" height="25" valign="middle">
                        1
                    </td>
                    <td style="vertical-align: middle;">
                        Matematika
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        Kurang Gini
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        Banyak Gitu
                    </td>
                </tr>
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;" height="25" valign="middle">
                        2
                    </td>
                    <td style="vertical-align: middle;">
                        IPA
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        Kurang Gitu
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        Kurang Gini
                    </td>
                </tr>
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;" height="25" valign="middle">
                        3
                    </td>
                    <td style="vertical-align: middle;">
                        Agama
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        Kurang Gitu
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        Kurang Gini
                    </td>
                </tr>
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;" height="25" valign="middle">
                        4
                    </td>
                    <td style="vertical-align: middle;">
                        IPS
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        Kurang Gitu
                    </td>
                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        Kurang Gini
                    </td>
                </tr>
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
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;" height="25" valign="middle">
                        1
                    </td>
                    <td style="vertical-align: middle;">
                        Basketball
                    </td>

                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        A
                    </td>
                </tr>
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;" height="25" valign="middle">
                        2
                    </td>
                    <td style="vertical-align: middle;">
                        E-Sport
                    </td>

                    <td style="vertical-align: middle;padding-right: 5px;padding-left: 5px;">
                        C
                    </td>
                </tr>
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
                        2 Hari
                    </td>
                </tr>
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;font-weight: bold;" height="25" valign="middle">
                        Izin
                    </td>
                    <td style="vertical-align: middle;">
                        7 Hari
                    </td>
                </tr>
                <tr style="height: 20px;">
                    <td style="vertical-align: middle;font-weight: bold;" height="25" valign="middle">
                        Tanpa Keterangan
                    </td>
                    <td style="vertical-align: middle;">
                        0 Hari
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
                                <td colspan="2">Konstantinus Cahya Lambang</td>
                            </tr>
                        </table>
                    </td>
                    <td style="width:50%;text-align: center;">
                        <table width="100%" border="0" style="text-align:center; margin-top:40px;">
                            <tr>
                                <td width="0%"></td>
                                <!-- <td width="0%"></td> -->
                                <td width="0%" align="center" colspan="2"> <label for="">Denpasar, 18 November 2019</label> </td>
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
                                <td colspan="2">Puji Astuti, S.Pd</td>
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
