@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-haeder">

    <form role="form" method="POST" action="{{ route('datanilai.store') }}">
        {{ csrf_field() }} {{ method_field('POST') }}

      <div class="box-body">
        <div class="form-group">
        <div class="row"> 
        <div class="col-sm-2">
          <label>NIS</label>
        </div> 
            <div class="col-sm-10">
            <a href="" title="Pilih NIS" data-toggle="modal" data-target="#modalSiswa">
             <input type="text" name="txtNis" placeholder="NIS" required="" class="form-control" id="NisSiswa">
             <input type="hidden" name="txtIdSiswa" placeholder="" required="" class="form-control" id="IdSiswa">
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
             <input type="text" name="txtNamaSiswa" placeholder="Nama Siswa" required="" class="form-control" id="NamaSiswa">
            </div>
    </div>
    </div>

      <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Tugas 1</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="txtTugas1" placeholder="Tugas 1" required="" class="form-control">
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Tugas 2</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="txtTugas2" placeholder="Tugas 2" required="" class="form-control">
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>UH 1</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="txtUh1" placeholder="UH 1" required="" class="form-control">
            </div>
    </div>
    </div>
    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>UH 2</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="txtUh2" placeholder="UH 2" required="" class="form-control">
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>UTS</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="txtUTS" placeholder="UTS" required="" class="form-control">
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>UAS</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="txtUAS" placeholder="UAS" required="" class="form-control">
            </div>
    </div>
    </div>

     <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Nilai Rapot</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="txtNilaiRapot" placeholder="Nilai Rapot" required="" class="form-control">
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Nilai Keterampilan</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="txtNilaiKeterampilan" placeholder="Nilai Keterampilan" required="" class="form-control">
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Deskripsi Pengetahuan</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="txtNilaiPengetahuan" placeholder="Nilai Pengetahuan" required="" class="form-control">
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Deskripsi Keterampilan</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="txtNilaiKeterampilan" placeholder="Nilai Keterampilan" required="" class="form-control">
            </div>
    </div>
    </div>

    <div class="box-footer">
        <button type="submit" class="btn btn-info">Simpan</button>
    </div>  


    </form>
	</div>
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
                                $no=1;
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
        