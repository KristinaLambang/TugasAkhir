@extends('layouts.admin-lte')
@section('content')
<div class="section">
	<div class="box box-primary">
		<div class="box-harder">
		<h3>Laporan Nilai</h3>
			<p><a href="{{ route('laporan.create') }}"></a></p>
		</div>
		<table id="example1" class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nilai Tugas</th>
					<th>Ulangan Harian 1</th>
					<th>Ulangan Harian 2</th>
					<th>UTS</th>
					<th>UAS</th>
					<th>Nilai Akhir</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>75</td>
					<td>80</td>
					<td>85</td>
					<td>70</td>
					<td>90</td>
					<td>80</td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>
</div>
@endsection