@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr> 
						<th>No</th>
						<th>NIS</th>
						<th>Nama</th>
						<th>Alpa</th>
						<th>Ijin</th>
						<th>Sakit</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody> 
				@foreach($absensi as $row)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="box-footer">
                			<a href="{{route('laporan.absensi.edit',$row->id_laporan_absensi)}}" class="btn btn-success btn-xs"> Edit</a>
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
