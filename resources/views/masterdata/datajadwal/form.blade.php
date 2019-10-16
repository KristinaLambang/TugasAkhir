@extends('layouts.admin-lte')
@section('content')
<div class="section">
  <div class="box box-primary">
    <div class="box-harder">
      <h3>Tambah Data Jadwal</h3>
    </div>

    <form role="form" method="POST" action="{{ route('jadwal.store') }}">
        {{ csrf_field() }} {{ method_field('POST') }}
    <div class="box-body">

    <div class="form-group">
    <div class="row"> 
      <div class="col-sm-2">
        <label>Nama Pengajar</label>
      </div> 
            <div class="col-sm-10">
             <select id="nama_pengajar" name="nama_pengajar" class="form-control" requireds>
                <option value="nama_pengajar">-Pilih Nama Pengajar-</option>
                <option>Dina Kirana, S.Pd</option>
                <option>Dicky Pratama, S.Pd</option>
                <option>Puji Astuti, S.Pd</option>
              </select>
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Nama Kelas</label>
      </div>
            <div class="col-sm-10">
              <select id="nama_kelas" name="nama_kelas" class="form-control" requireds>
                <option value="">-Pilih Nama Kelas-</option>
                <option>X IPA PA</option>
                <option>X IPA PI</option>
                <option>X IPS PA</option>
                <option>XI IPA PA</option>
                <option>XI IPA PI</option>
                <option>XI IPS PA</option>
                <option>XII IPA PA</option>
                <option>XII IPA PI</option>
                <option>XII IPS PI</option>
              </select>
            </div>
    </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-2">
            <label>Guru Mata Pelajaran</label>
            </div>
            <div class="col-sm-10">
              <select id="mata_pelajaran" name="mata_pelajaran" class="form-control" requireds>
                <option>-Pilih Mata Pelajaran-</option>
                <option>Bahasa Inggris</option>
                <option>Matematika</option>
                <option>Fisika</option>
                <option>Geografi</option>
                <option>Sosiolagi</option>
              </select>
    </div>
    </div>
    </div>

    <div class="form-group">
      <label>Date range:</label>

      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
        <input type="text" class="form-control pull-right" id="reservation">
      </div>
      <!-- /.input group -->
    </div>
    <!-- /.form group -->

    <!-- Date and time range -->
      <div class="form-group">
        <label>Date and time range:</label>

        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-clock-o"></i>
          </div>
          <input type="text" class="form-control pull-right" id="reservationtime">
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->
      

    <div class="box-footer">
        <button type="submit" class="btn btn-info">Simpan</button>
    </div>  

    </form>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
  console.log('yaha');
});
</script>
@endsection