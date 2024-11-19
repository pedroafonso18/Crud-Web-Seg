<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar Pokémon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-4">
        <h1 class="text-center">Criar Pokémon!</h1>
        <form action="{{ url('pokemons') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <textarea class="form-control" id="tipo" name="tipo" placeholder="Tipo" required></textarea>
            </div>
            <div class="mb-3">
                <label for="pontos_de_poder" class="form-label">StatBase</label>
                <input type="number" class="form-control" id="pontos_de_poder" name="pontos_de_poder" placeholder="PP" required>
            </div>
            <label for="trainer_id" class="form-label">Treinador</label>
            <select id="trainer_id" name="trainer_id" class="form-control">
                <option selected>Selecione um treinador</option>
                @foreach($trainers as $trainer)
                    <option value="{{$trainer->id}}"> {{$trainer->nome}}</option>
                @endforeach
            </select> 
            <button type="submit" class="btn btn-success">Criar Pokémon</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
