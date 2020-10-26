<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

    <table>
      <thead>
        <tr>
          <th>Nome</th>
          <th>Cognome</th>
          <th>Sesso</th>
          <th>Data di nascita</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
        <tr>
          <td>{{$student->name}}</td>
          <td>{{$student->lastname}}</td>
          <td>{{$student->gender}}</td>
          <td>{{$student->date_of_birth}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </body>
</html>
