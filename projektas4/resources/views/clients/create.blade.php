<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Client Create</h1>
        <form method="POST" class="form-control" action="{{route('client.store')}}">
            <input type="text" class="form-control" name="client_name" placeholder="Client name">
            <input type="text" class="form-control" name="client_surname" placeholder="Client surname">
            <input type="text" class="form-control" name="client_username" placeholder="Client username">
            <!--  <input type="bigInteger" name="company_id" placeholder="Company id">  -->
            <select name="company_id" class="form-control">
                {{--<?php for($x=1; $x<251; $x++) : ?>
                    <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                <?php endfor;?> buvau pasirases toki, bet blade sintakse variantas butu teisingesnis, naudojant controleri--}}
                @foreach ($select_values as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach

            </select>
            <input type="text" class="form-control" name="image_url" placeholder="Image_url">
            @csrf
            <button type="submit" class="btn btn-primary">Add</button>
            <a class="btn btn-secondary" href="{{route('client.index')}}">Clients</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>