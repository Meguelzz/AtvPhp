<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="aluno.js"></script>
    <script>
        function processoresult(response) {
            response.json().then(
                data => {console.log(data.nome);
                        console.log(data.idade);
                }
            );
        }
        fetch("/main.php").then(processoresult);
    </script>
</head>
<body>
    <h1>Gerenciar Alunos</h1>
</body>
</html>