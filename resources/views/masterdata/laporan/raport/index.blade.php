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
                <table id="example1" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
