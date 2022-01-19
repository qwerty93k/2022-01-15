<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Client edit</h1>
    <form method="POST"  class="form-control" action="{{route('client.update', [$client])}}">
        <input type="text" class="form-control" name="client_name" value={{$client->name}} placeholder="Client name">
        <input type="text" class="form-control" name="client_surname" value={{$client->surname}} placeholder="Client surname">
        <input type="text" class="form-control" name="client_username" value={{$client->username}} placeholder="Client username">
        <!-- <input type="bigInteger" class="form-control" name="company_id" value={{$client->company_id}} placeholder="Company id"> -->
        <select name="company_id" class="form-control">
            @foreach ($select_values as $company)
                @if ($company->id == $client->company_id)
                    <option value="{{$company->id}}" selected>{{$company->name}}</option>
                @else
                    <option value="{{$company->id}}">{{$company->name}}</option>
                @endif
            @endforeach
        </select>
        <input type="text" class="form-control" name="image_url" value={{$client->image_url}} placeholder="Image_url">
        @csrf
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>