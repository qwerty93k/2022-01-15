<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Company Create </h1>
        <form method="POST" action="{{route('company.store')}}">
            <input type="text" class="form-control" name="company_name" placeholder="Company name">
            {{-- <input type="text" name="company_type" placeholder="Company type"> sis jau netinka--}}
            <select class='form-select' name="company_type">
                {{--atvaizduoti tipu sarasa--}}
                @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->name}},{{$type->short_name}}</option>
                @endforeach
            </select>
            <input type="text" class="form-control" name="company_description" placeholder="Company description">
            @csrf
            <button type="submit" class="btn btn-primary">Add</button>
            <a class="btn btn-secondary" href="{{route('company.index')}}">Companies</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>