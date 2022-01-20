<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Companies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h1>Companies list</h1>

    @if (count($companies)==0)
        <p>There is no Companies</p>
    @endif
    
    <a class="btn btn-primary" href="{{route('company.create')}}">Create Company</a>

    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Company name</th>
            <th>Type</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($companies as $company)
            <tr>
                <td>{{$company->id}}</td>
                <td>{{$company->name}}</td>
                <td>{{$company->type}}</td>
                <td>{{$company->description}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('company.edit', [$company])}}">Edit</a>
                    <a class="btn btn-secondary" href="{{route('company.show', [$company])}}">Show</a>
                    <form method="post" action="{{route('company.destroy', [$company])}}">
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>