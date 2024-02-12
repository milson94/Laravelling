<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <table>      
        <tr>
          <th>id</th>
          <th>School</th>
          <th>grade</th>
          <th>subject</th>
          <th>profession</th>
        </tr>
            
        @foreach ($tarefas as $tarefa)  
        <tr>
          <td>{{$tarefa->id}}</td>
          <td>{{$tarefa->school}}</td>
          <td>{{$tarefa->grade}}</td>
          <td>{{$tarefa->subject}}</td>
          <td>{{$tarefa->profession}}</td>

          <td> <a href="/inserir/{{$tarefa->id}}"><button>atualizar</button></a>  </td>
          <td> <a href="/apagar/{{$tarefa->id}}"><button>apagar</button></a>  </td>
        </tr>
        
        
      @endforeach
      </table>
</body>
</html>
