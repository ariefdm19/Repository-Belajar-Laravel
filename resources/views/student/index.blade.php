@extends('layout.app')

@section('content')
	<h3>Data Mahasiswa</h3>
	<table class="table table-striped">
		<thead>
			<th>No</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
		</thead>
		<tbody>
			@foreach($students as $student)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $student->code }}</td>
					<td>{{ $student->name }}</td>
					<td>{{ ($student->gender == 'P') ? 'Pria' : 'Wanita' }}</td>
					<td>{{ $student->birth_place }}</td>
					<td>{{ $student->birth_date }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection