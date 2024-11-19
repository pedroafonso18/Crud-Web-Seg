<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center my-4">Lista de Trainer!</h1>
    <div class="container">
        <div class="row justify-content-center">
            @foreach($trainers as $trainer)
                <div class="col-md-3 mb-4">
                    <div class="card text-center border-secondary">
                        <div class="card-body">
                            <h3 class="card-title">{{ $trainer->nome }}</h3>
                            <h3 class="card-title">{{$trainer->id}}</h3>
                            <a href="{{ url('trainers/'.$trainer->id.'/edit') }}" class="btn btn-primary mb-2">Edit</a>
                            <form action="{{ url('trainers/'.$trainer->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
