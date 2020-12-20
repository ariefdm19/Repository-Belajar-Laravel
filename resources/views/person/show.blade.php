@extends("layout.app")

@section("content")
<h3> Nama : {{ $data->person_name }} <br/>
Email : {{ $data->person_email }} </h3>
@stop