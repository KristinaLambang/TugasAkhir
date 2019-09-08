@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header">
			<p><a href="{{ route('jadwal.create') }}" class="btn btn-primary">Tambah Data Jadwal</a></p>
		</div>
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Id Jadwal</th>
						<th>Nama Pengajar</th>
						<th>Nama Kelas</th>
						<th>Nama Mata Pelajaran</th>
						<th>Hari</th>
						<th>Jam</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>JDWL-003</td>
						<td>Dina Kirana</td>
						<td>X IPA PI</td>
						<td>Matematika</td>
						<td>Senin</td>
						<td>08:00-10:30</td>
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
@endsection