<table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Cognome</th>
      <th>Sesso</th>
      <th>Data di nascita</th>
    </tr>
  </thead>
  @foreach ($students as $student)
    <tr>
      <td>{{$student->name}}</td>
      <td>{{$student->lastname}}</td>
      <td>{{$student->gender}}</td>
      <td>{{$student->date_of_birth}}</td>
    </tr>
  @endforeach
</table>
