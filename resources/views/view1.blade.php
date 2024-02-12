<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>First Page</title>
</head>

<body>
    <h3>Enter the requested Data</h3>
    <form action="index" method="post" class="formy">
        @csrf   {{-- fucking token  --}}
            <div>
                <label for="school">Enter the id: </label>
                <input type="text" id="id" name="id" >
            </div>
            <div>
                <label for="school">Name of school: </label>
                <input type="text" id="school" name="school" >
            </div>
            <div>
                <label for="school">Grade attended:  </label>
                <input type="number" id="grade" name="grade" >
            </div>
            <div>
                <label for="Subject">Subject: </label>
                <input type="text" id="subject" name="subject" >
            </div>
            <div>
                <label for="">Profession</label>
                <input type="text" id="profession" name="profession">
            </div>

            <div>
                <button  type="submit">
                    submit
                </button>
            </div>
    </form>    
</body>
</html>