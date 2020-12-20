@extends("layout.app")

@section("content")

{{-- menampilkan error validasi --}}
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $errpr)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form method="post" action="person/addProcess">
{{ csrf_field() }}
  <div class="mb-3">
    <label for="person_name" class="form-label">Nama</label>
    <input type="text" class="form-control" name="person_name" >
  </div>
  <div class="mb-3">
    <label for="person_email" class="form-label">Email</label>
    <input type="email" class="form-control" name="person_email" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop