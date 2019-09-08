@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header">
			<p><a href="{{ route('guruwalas.create') }}" class="btn btn-primary">Tambah Data Guru Wali Kelas</a></p>
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
						<th>Wali Kelas</th>
						<th>Agama</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>WK-001</td>
						<td>Ayu Lestari</td>
						<td>P</td>
						<td>Surabaya</td>
						<td>02/03/1980</td>
						<td>X IPA PI</td>
						<td>Islam</td>
						<td>Jl Tukad Badung No 1</td>
						<td>083651637828</td>
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