@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header"></div>
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>NIS</th>
						<th>Nama</th>
						<th>JK</th>
						<th>Nilai Pengetahuan</th>
						<th>Nilai Keterampilan</th>
						<th>Jumlah</th>
						<th>Jumlah Nilai</th>
						<th>Ranking</th>
					</tr>
				</thead>
				<tbody>
					@foreach($leger as $row)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $row->nis }}</td>
						<td>{{ $row->nama_siswa }}</td>
						<td>{{ $row->jenis_kelamin }}</td>
						<td>{{ $row->nilai_pengetahuan }}</td>
						<td>{{ $row->nilai_keterampilan }}</td>
						<td>{{ $row->jumlah }}</td>
						<td>{{ $row->jumlah_nilai }}</td>
						<td>{{ $row->ranking }}</td>
						<td class="box-footer">
                			<a href="{{route('leger.edit',$row->nis)}}" class="btn btn-success btn-xs"> Edit</a>
        				</td>
					</tr>
					@endforeach
				</tbody>
			</table>
            </div>
		</div>
	</div>
</div>
@endsection
