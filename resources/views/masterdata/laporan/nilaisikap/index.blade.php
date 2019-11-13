@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-body">
		<div class="box-header">
			<p><a href="{{ route('nilaisikap.create') }}" class="btn btn-primary">Tambah Nilai Sikap</a></p>
		</div>
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
						<td>
							
							@if( $row->spiritual > 90 )
										A
								@elseif( $row->spiritual >= 80 && $row->spiritual <= 89)
									B
								@elseif( $row->spiritual >= 70 && $row->spiritual <= 79)
									C
								@elseif( $row->spiritual >= 60 && $row->spiritual <= 69)
									D
								@elseif( $row->spiritual >= 50 && $row->spiritual <= 59)
									E
							@endif
						
						</td>
						<td>{{ $row->sikap }}</td>
						<td>
							
							@if( $row->sikap > 90 )
										A
								@elseif( $row->sikap >= 80 && $row->sikap <= 89)
									B
								@elseif( $row->sikap >= 70 && $row->sikap <= 79)
									C
								@elseif( $row->sikap >= 60 && $row->sikap <= 69)
									D
								@elseif( $row->sikap >= 50 && $row->sikap <= 59)
									E
							@endif
						
						</td>
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
