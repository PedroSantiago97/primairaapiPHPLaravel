<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar usuario</title>
</head>
<body>
    <h1>Cadastrar usuário</h1>

    

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="name">Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome Completo" value="{{ old('name')}}"
        require><br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" placeholder="Melhor Email" value="{{ old('email')}}"
        require><br><br>

        <label for="password">Senha: </label>
        <input type="password" name="password" id="password" placeholder="No mínimo 6 caracteres" value="{{ old('password')}}"
        require><br><br>

        <button type="submit">Cadastrar</button>

    </form>
</body>
</html>
