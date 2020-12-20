@extends ("layout.app")

@section("content")
<!-- <h1>code: {{$code}}</h1>
<h1>name : {{$name}}</h1>
<h1>course : {{$course}}</h1>
<h1>Task : {{$task}}</h1>
<h1>quiz : {{$quiz}}</h1>
<h1>mid_term : {{$mid_term}}</h1>
<h1>final : {{$final}}</h1>
<br>
<br>
<h1>grade : {{$grade}}</h1> -->
<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Course</th>
      <th scope="col">Task</th>
      <th scope="col">Quiz</th>
      <th scope="col">Mid term</th>
      <th scope="col">Final</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$code}}</td>
      <td>{{$name}}</td>
      <td>{{$course}}</td>
      <td>{{$task}}</td>
      <td>{{$quiz}}</td>
      <td>{{$mid_term}}</td>
      <td>{{$final}}</td>
      <td>{{$grade}}</td>

    </tr>
  </tbody>
</table>


@stop