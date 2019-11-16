@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
      <h3>Tambah Absensi</h3>
    </div>
    
    <form role="form" method="POST" action="{{ route('absensi.store') }}">
        {{ csrf_field() }} {{ method_field('POST') }}
      <div class="box-body">

      <div class="box-body">
      <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label>NIS</label>
          </div>
          <div class="col-sm-10">
            <a href="" title="Pilih NIS" data-toggle="modal" data-target="#modalSiswa">
              <input type="text" name="nis" placeholder="NIS" required="" class="form-control" id="nis">
              <input type="hidden" name="id_siswa" placeholder="" required="" class="form-control" id="id_siswa">
            </a>
          </div>
      </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label>Nama Siswa</label>
          </div>
          <div class="col-sm-10">
            <input type="text" name="txtNamaSiswa" placeholder="Nama Siswa" required="" class="form-control" id="nama_siswa">
          </div>
        </div>
      </div>     

        <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label>Alpa</label>
          </div>
              <div class="col-sm-10">
                <input type="text" name="alpa" placeholder="Alpa" required="" class="form-control" id="alpa">
              </div>
        </div>
        </div>

        <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label>Ijin</label>
          </div>
              <div class="col-sm-10">
                <input type="text" name="ijin" placeholder="Ijin" required="" class="form-control" id="ijin">
              </div>
        </div>
        </div>

        <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label>Sakit</label>
          </div>
              <div class="col-sm-10">
                <input type="text" name="sakit" placeholder="Sakit" required="" class="form-control" id="sakit">
              </div>
        </div>
        </div>

    <div class="box-footer">
        <button type="submit" class="btn btn-info">Simpan</button>
    </div>  

    </form>
	</div>
</div>
<!-- <script type="text/javascript">
$(document).ready(function() {
  console.log('yaha');
});
</script> -->
@endsection

<div class="modal fade" id="modalSiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:800px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">PILIH SISWA</h4>
      </div>
      <div class="modal-body">
        <table id="lookupSiswa" class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th width="5%">No</th>
              <th>NIS</th>
              <th>Nama Siswa</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            ?>
            @foreach($siswa as $o)
            <tr class="pilihSiswa" data-id="{{$o->id_siswa}}" data-nama="{{$o->nama_siswa}}" data-nis="{{$o->nis}}">
              <td>{{$no++}}</td>
              <td>{{$o->nis}}</td>
              <td>{{$o->nama_siswa}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
