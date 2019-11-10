@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header">
			<p><a href="{{ route('datanilai.create') }}" class="btn btn-primary">Tambah Data Nilai</a></p>
		</div>
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr> 
						<th>No</th>
						<th>Nama</th>
						<th>Tugas 1</th>
						<th>Tugas 2</th>
						<th>UH 1</th>
						<th>UH 2</th>
						<th>UTS</th>
						<th>UAS</th>
						<th>Nilai Raport</th>
						<th>Predikat</th>
						<th>Nilai Keterampilan</th>
						<th>Predikat</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					@foreach($datanilai as $row)
						<td>{{$loop->iteration }}</td>
						<td>{{$row->siswa->nama_siswa}}</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>Edit</td>
					@endforeach
				</tbody>
			</table>
			</div>
            </div>
		</div>
	</div>
</div>
@endsection
