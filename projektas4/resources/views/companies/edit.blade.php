<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> {{-- jquery --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">{{-- summer note --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>{{-- summer note --}}
</head>
<body>
<div class="container">
    <h1>Company edit</h1>
    <form method="POST" action="{{route('company.update', [$company])}}">
        <input type="text" class="form-control" name="company_name" value={{$company->name}} placeholder="Company name">
        {{-- <input type="text" class="form-control" name="company_type" value={{$company->type}} placeholder="Company type"> --}}
        <select name='company_type' class="form-select">
            @foreach ($types as $type)
                @if($type->id==$company->type_id)
                    <option value="{{$type->id}}" selected>{{$type->short_name}}, {{$type->name}}</option>
                @else
                    <option value="{{$type->id}}">{{$type->short_name}}, {{$type->name}}</option>
                @endif
            @endforeach
        </select>
        {{--- <input type="text" class="form-control" name="company_description" value={{$company->description}} placeholder="Company description"> keiciame su textarea---}}
        <textarea class="form-control" name="company_description" id="summernote">
            {{$company->description}}
        </textarea>
        @csrf
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#summernote').summernote();
    });
</script>
</body>
</html>