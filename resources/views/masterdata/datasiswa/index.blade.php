@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		
		<div class="box-header">
		<div class="row">
		<div class="col-xs-2">
			<p><a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Data Siswa</a></p>
		</div>

		<div class="box-body">
		<div class="row">
		<div class="col-xs-3">
		        <select class="form-control select2" class="col-sm-2 control-label" style="width: 100%;">
                  <option selected="selected" disabled>Pilih Kelas</option>
                  <option>X IPA PA</option>
                  <option>X IPA PI</option>
                  <option>X IPS PA</option>
                  <option>XI IPA PA</option>
                  <option>XI IPA PI</option>
                  <option>XI IPS PA</option>
                  <option>XII IPA PA</option>
                  <option>XII IPA PI</option>
                  <option>XII IPS PA</option>
                </select>
              </div>
              </div>
            </div>
        </div>
        </div>

        
		<div class="box-body">
		<div class="row">
		<table id="example1" class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>NIS</th>
						<th>Nama Kelas</th>
						<th>Nama Siswa</th>
						<th>JK</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Agama</th>
						<th>Alamat</th>
						<th>Nama Ayah</th>
						<th>Pekerjaan</th>
						<th>Telepon</th>
						<th>Aksi</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td>1</td>
						<td>648349802</td>
						<td>X IPA PI</td>
						<td>Titin</td>
						<td>P</td>
						<td>Ambon</td>
						<td>12/05/2000</td>
						<td>Islam</td>
						<td>Jl. Sidakarya No. 2</td>
						<td>Sudirman</td>
						<td>Petani</td>
						<td>082364527875</td>
						<td>
						<div class="box-footer">
               				<button type="submit" class="btn btn-primary">Ubah</button>
             			</div>
             			</td>
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		</div>
		<!-- box body -->
	</div>
	<!-- box -->
</div>
<!-- section -->
@endsection
