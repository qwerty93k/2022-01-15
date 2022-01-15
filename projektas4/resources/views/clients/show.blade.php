<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client {{$client->name}} {{$client->surname}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2>Client {{$client->name}} {{$client->surname}} form</h2>
    <p><a href="{{$client->image_url}}" target="_blank"><img src="{{$client->image_url}}" alt="Client Profile Picture" width="150" height="150"></a></p>
    <p>ID: {{$client->id}}</p>
    <p>Name: {{$client->name}}</p>
    <p>Surname: {{$client->surname}}</p>
    <p>Username: {{$client->username}}</p>
    <p>Company Id: {{$client->company_id}}</p>

    <a href="{{route('client.index')}}" class="btn btn-primary">Back</a>

    <form method="post" action="{{route('client.destroy', [$client])}}">
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>