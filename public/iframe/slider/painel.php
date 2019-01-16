<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Painel de Cadastros DOM</title>
</head>
<body>
    <div class="container">  
        <form id="contact" action="Insert.php" method="post" enctype="multipart/form-data">
            <h3>PAINEL DISITE</h3>
            <h4>Um produto <a href="http://dom.com.vc/">DOM</a></h4>
                <fieldset>
                    <input placeholder="Título" type="text" tabindex="1" required autofocus name="titulo">
                </fieldset>
                <fieldset>
                    <label for="categoria">Categoria: </label>
                    <select name="categoria">
                        <option value="com">Lojas / Comércio</option>
                        <option value="super">Supermercado</option>
                        <option value="carro">Revenda de Carros</option>
                        <option value="con">Contabilidade</option>
                        <option value="med">Clínica / Odonto</option>
                    </select>
                </fieldset>
                <fieldset>
                    <input placeholder="Link para a demonstração" type="text" tabindex="3" required name="link">
                </fieldset>
                <fieldset>
                    <input type="file" name="imagem">
                </fieldset>
                <fieldset>
                    <input type="radio" name="extensao" value=".png"> PNG<br>
                    <input type="radio" name="extensao" value=".jpg"> JPG<br>
                    <input type="radio" name="extensao" value=".gif"> GIF
                </fieldset>
                <fieldset>
                    <input name="submit" type="submit" id="contact-submit" data-submit="...Enviando" class="btn">
                </fieldset>
        </form>
    </div>
</body>
</html>