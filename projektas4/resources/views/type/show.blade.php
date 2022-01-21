<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$type->name}} companies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2>{{$type->name}} Companies</h2>
    <p>ID: {{$type->id}}</p>
    <p>Name: {{$type->name}}</p>
    <p>Short name: {{$type->short_name}}</p>
    <p>Description: {{$type->description}}</p>

@if(count($type->typeCompanies) ==0)
    <p>There is no Companies</p>
@else
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Shortname</th>
        </tr>
    @foreach ($type->typeCompanies as $company)
        <tr>
            <td>{{$company->id}}</td>
            <td>{{$company->name}}</td>
            <td>{{$company->description}}</td>
        </tr>
    @endforeach
    </table>
@endif
    <a href="{{route('type.index')}}" class="btn btn-primary">Back</a>

    <form method="post" action="{{route('type.destroy', [$type])}}">
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>