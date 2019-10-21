@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header">
			<p><a href="{{ route('nilaisikap.create') }}" class="btn btn-primary">Tambah Data Nilai Sikap</a></p>
		</div>
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr> 
						<th>No</th>
						<th>NIS</th>
						<th>Nama Siswa</th>
						<th>Spiritual</th>
						<th>Predikat</th>
						<th>Sikap</th>
						<th>Predikat</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($nilaisikap as $row)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $row->nis }}</td>
						<td>{{ $row->nama_siswa }}</td>
						<td>{{ $row->spiritual }}</td>
						<td>{{ $row->predikat }}</td>
						<td>{{ $row->sikap }}</td>
						<td>{{ $row->predikat }}</td>
						<td class="box-footer">
                			<a href="{{route('nilaisikap.edit',$row->id_nilai)}}" class="btn btn-success btn-xs"> Edit</a>
        				</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			</div>
            </div>
		</div>
	</div>
</div>
@endsection
