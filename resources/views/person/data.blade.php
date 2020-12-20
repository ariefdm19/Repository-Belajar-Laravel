@extends ("layout.app")

@section("content")

<h1> NAMA NAMA MAHASISWA</h1>

<ol>
    @if($names)
       @foreach($names as $name)
          <li> {{$name}}</li>
        @endforeach
    @endif
</ol>
@stop