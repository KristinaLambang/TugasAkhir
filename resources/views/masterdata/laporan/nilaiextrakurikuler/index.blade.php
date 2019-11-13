@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
	<div class="box-header">
			<p><a href="{{ route('nilaiextrakurikuler.create') }}" class="btn btn-primary">Tambah Nilai Extrakuriler</a></p>
	</div>
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr> 
						<th>No</th>
						<th>NIS</th>
						<th>Nama</th>
						<th>Nama Extrakurikuler</th>
						<th>Predikat</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				</tbody>
			</table>
			</div>
            </div>
		</div>
	</div>
</div>
@endsection
