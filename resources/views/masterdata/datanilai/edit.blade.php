@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-haeder">

    <form role="form" method="POST" action="{{ route('datanilai.update', $id_nilai) }}">
        {{ csrf_field() }} {{ method_field('PUT') }}

    <div class="box-body">
      <div class="form-group">
      <div class="row"> 
      <div class="col-sm-2">
        <label>NIS</label>
      </div> 
          <div class="col-sm-10">
           <input type="text" name="nis" placeholder="NIS" required="" class="form-control" id="nis">
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
            <label>Mata Pelajaran</label>
        </div>
           <div class="col-sm-10">
              <select name="nama_mapel" class="form-control" id="id_mapel" disabled>
                 @foreach($mapel as $row)
                  <option value="{{ $row->id_mapel }}">{{ $row->nama_mapel }}</option>
                  @endforeach
                </select>
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Tahun Ajaran</label>
      </div>
            <div class="col-sm-10">
            <input name="tahun_ajaran" placeholder="" required="" class="form-control" id="tahun_ajaran">             
            </div>
    </div>
    </div>

      <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Tugas 1</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="tugas_1" placeholder="Tugas 1" required="" class="form-control" id="tugas_1">
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Tugas 2</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="tugas_2" placeholder="Tugas 2" required="" class="form-control" id="tugas_2">
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>UH 1</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="ulangan_harian_1" placeholder="UH 1" required="" class="form-control" id="ulangan_harian_1">
            </div>
    </div>
    </div>
    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>UH 2</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="ulangan_harian_2" placeholder="UH 2" required="" class="form-control" id="ulangan_harian_2">
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>UTS</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="uts" placeholder="UTS" required="" class="form-control" id="uts">
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>UAS</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="uas" placeholder="UAS" required="" class="form-control" id="uas">
            </div>
    </div>
    </div>

     <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Nilai Raport</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="nilai_raport" placeholder="Nilai Rapot" required="" class="form-control" id="nilai_raport">
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Nilai Keterampilan</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="nilai_keterampilan" placeholder="Nilai Keterampilan" required="" class="form-control" id="nilai_keterampilan">
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Deskripsi Pengetahuan</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="deskripsi_pengetahuan" placeholder="Nilai Pengetahuan" required="" class="form-control" id="deskripsi_pengetahuan">
            </div>
    </div>
    </div>

    <div class="form-group">
    <div class="row">
      <div class="col-sm-2">
        <label>Deskripsi Keterampilan</label>
      </div>
            <div class="col-sm-10">
             <input type="text" name="deskripsi_keterampilan" placeholder="Nilai Keterampilan" required="" class="form-control" id="deskripsi_keterampilan">
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
<script type="text/javascript">
$(document).ready(function() {
  var d = new Date();
  var bulanSekarang = d.getMonth();
  var tahunSekarang = d.getFullYear();
  if (bulanSekarang > 6) {
    var tahunAjaran = tahunSekarang + '/' + (tahunSekarang + 1)
    $('#tahun_ajaran').val(tahunAjaran)
  } else {
    var tahunAjaran = tahunSekarang - 1 + '/' + tahunSekarang
    $('#tahun_ajaran').val(tahunAjaran)
  }
    $('#deskripsi_keterampilan').val('{{$datanilai->deskripsi_keterampilan}}');
    $('#deskripsi_pengetahuan').val('{{$datanilai->deskripsi_pengetahuan}}');
    $('#nilai_keterampilan').val('{{$datanilai->nilai_keterampilan}}');
    $('#nilai_raport').val('{{$datanilai->nilai_raport}}');
    $('#uas').val('{{$datanilai->uas}}');
    $('#uts').val('{{$datanilai->uts}}');
    $('#ulangan_harian_2').val('{{$datanilai->ulangan_harian_2}}');
    $('#ulangan_harian_1').val('{{$datanilai->ulangan_harian_1}}');
    $('#tugas_2').val('{{$datanilai->tugas_2}}');
    $('#tugas_1').val('{{$datanilai->tugas_1}}');
    $('#id_mapel').val('{{$datanilai->id_mapel}}');
    $('#nama_siswa').val('{{$datanilai->siswa->nama_siswa}}');
    $('#nis').val('{{$datanilai->siswa->nis}}');
	});
</script>
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
    