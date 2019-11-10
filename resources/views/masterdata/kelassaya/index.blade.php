@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
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
						<th>Dari Jam</th>
						<th>Sampai Jam</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($jadwal as $row)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $row->id_jadwal }}</td>
						<td>{{ $row->gurumapel->nama_guru_mapel }}</td>
						<td>{{ $row->kelas->nama_kelas }}</td>
						<td>{{ $row->mapel->nama_mapel }}</td>
						<td>{{ $row->hari }}</td>
						<td>{{ $row->dari_jam }}</td>
						<td>{{ $row->sampai_jam }}</td>
						<td class="box-footer">
                			<a href="/datanilai/{{$row->nama_kelas}}/{{$row->nama_mapel}}" class="btn btn-success btn-xs"> Tambah Nilai</a>
        				</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection