@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header">
			<p><a href="{{ route('gurumapel.create') }}" class="btn btn-primary">Tambah Data Guru Mata Pelajaran</a></p>
		</div>
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Id Guru</th>
						<th>Nama Guru</th>
						<th>JK</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Guru Mata Pelajaran</th>
						<th>Agama</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>GMP-001</td>
						<td>Dina Kirana</td>
						<td>P</td>
						<td>Solo</td>
						<td>02/06/1980</td>
						<td>Matematika</td>
						<td>Islam</td>
						<td>Jl Tukad Yeh Aya No 11</td>
						<td>085337268792</td>
						<td>
						<div class="box-footer">
               				<button type="submit" class="btn btn-primary">Ubah</button>
             			</div>
             			</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- box body -->
	</div>
	<!-- box -->
</div>
<!-- section -->
@endsection