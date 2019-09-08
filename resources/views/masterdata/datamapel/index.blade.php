@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-header">
			<p><a href="{{ route('mapel.create') }}" class="btn btn-primary">Tambah Data Mata Pelajaran</a></p>
		</div>
		<div class="box-body">
			<table id="example1" class="table table bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Id Mata Pelajaran</th>
						<th>Nama Mapel</th>
						<th>Nama Kelas</th>
						<th>KKM</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>MP-012</td>
						<td>Bahasa Inggris</td>
						<td>X IPA PA</td>
						<td>75</td>
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