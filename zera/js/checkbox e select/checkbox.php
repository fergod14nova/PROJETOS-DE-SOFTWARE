<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="verificar.php" name="teste" method="POST">
    Selecione as tecnologias que deseja aprender: (Segure a tecla Ctrl para selecionar mais de uma tecnologia)<br/>
    <select name="tecnologias[]" multiple>
        <!-- NOTA: AQUI ESTAMOS USANDO O SINAL DE [] PARA DIZER QUE ESSA PORRA VAI SER UM VETOR -->
        <option value="ASP">ASP.NET</option>
        <option value="C" selected>Linguagem C</option>
        <option value="C++">C++</option>
        <option value="Java">Java</option>
        <option value="PHP">PHP</option>
        <option value="Python">Python</option>
        <option value="Ruby">Ruby</option>
    </select><br>
    <input type="submit" value="enviar">
    </form>
</body>
</html>