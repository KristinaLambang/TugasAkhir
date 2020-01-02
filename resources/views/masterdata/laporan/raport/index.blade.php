@extends('layouts.admin-lte')
@section('content')
<div class="section">
    <div class="box box-primary">
        <div class="form-group">
            <div class="box-header">
                <div class="form-group">
                    <h3>Raport</h3>
                    <div class="row">
                        <div class="col-sm-2">
                            <label>Nama Kelas</label>
                        </div>
                        <div class="col-sm-10">
                            <select name="nama_kelas" class="form-control" id="id_kelas">
                                @foreach($kelas as $row)
                                <option value="{{ $row->id_kelas }}">{{ $row->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <table id="tabel-kelas" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

    @section('javascript')
    <script type="text/javascript">
    $(document).ready(function() {
        var a= 0;
        var arrSiswa = JSON.parse('{!!$siswa!!}');

        let optionValue = $('#id_kelas').val();

        let filteredSiswa = arrSiswa.filter((siswa) => {
            return Number(siswa.nama_kelas) === Number(optionValue) 
        });

        filteredSiswa.forEach((siswa, i) => {
            $('#tabel-kelas tbody').append(`<tr>
                <td>${i+1}</td>
                <td>${siswa.nis}</td>
                <td>${siswa.nama_siswa}</td>
                <td>
                    <a href="cetak-raport/${siswa.id_siswa}" class="btn btn-primary">Cetak</button>
                </td>
            </tr>`);
        });


        $('#id_kelas').change(function() {
            optionValue = $('#id_kelas').val();
            $('#tabel-kelas tbody').empty();

            filteredSiswa = arrSiswa.filter((siswa) => {
                return Number(siswa.nama_kelas) === Number(optionValue) 
            });

            filteredSiswa.forEach((siswa, i) => {
                $('#tabel-kelas tbody').append(`<tr>
                    <td>${i+1}</td>
                    <td>${siswa.nis}</td>
                    <td>${siswa.nama_siswa}</td>
                    <td>
                        <a href='cetak-rapot/${siswa.id_siswa}' class="btn btn-primary">Cetak</a>
                    </td>
                </tr>`);
            });
        });
    });
    </script>
@endsection

@endsection
