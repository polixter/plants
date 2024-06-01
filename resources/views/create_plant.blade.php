<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Planta</title>
</head>

<body>
    <h1>Adicionar Planta</h1>
    <form action="{{ route('plants.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>

        <label for="scientific_name">Nome Científico:</label>
        <input type="text" id="scientific_name" name="scientific_name" required>

        <label for="description">Descrição:</label>
        <textarea id="description" name="description" required></textarea>

        <label for="environments">Ambientes:</label>
        <select id="environments" name="environments[]" multiple required>
            <option value="Full sun">Sol-pleno</option>
            <option value="Part sun">Sol-parcial</option>
            <option value="Part shade">Sombra-parcial</option>
            <option value="Full shade">Sombra</option>
        </select>

        <button type="submit">Adicionar Planta</button>
    </form>
</body>

</html>
