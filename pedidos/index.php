<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=League+Gothic&family=Nunito:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="img/png" href="../assets/logo.png">
    <link rel="stylesheet" href="../css/pedido.css">
    <link rel="stylesheet" href="../css/default.css">
    <title>Produtos do Futuro</title>
</head>

<body class="">
    <div class="container bg-secondary">
        <form action="">
            <label for="imageUpload">Escolha uma imagem de exemplo:</label>
            <input type="file" name="image" id="imageUpload" accept="image/*">
            <img src="#" alt="Preview" id="preview" style="display: none;">
            <label for="">Titulo e descrição
                <input type="text" name="" id="tituto">
                <input type="text" name="" id="descricao">
            </label>
            <label for="">Escolha uma area
                <select name="" id="">
                    <option value="">:3</option>
                    <option value="">:3</option>
                    <option value="">:3</option>
                    <option value="">:3</option>
                </select>
            </label>
            <button>cancelar</button>
            <button>enviar</button>
        </form>
    </div>
    <script>
        const imageUpload = document.getElementById('imageUpload');
        const preview = document.getElementById('preview');
        preview.style.width = '150px';


        imageUpload.addEventListener('change', function() {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };

                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none';
            }
        });
        // :3
    </script>
</body>
</html>