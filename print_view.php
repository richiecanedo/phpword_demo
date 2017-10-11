<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Generar PDFs con PHP</title>
        <style type="text/css">
            h2{
                color: blue;
            }
        </style>
    </head>
    <body>
        <?php if(isset($_POST['titulo'])): ?>
        <h1><?=$_POST['titulo']?></h1>
        <?php endif; ?>
        <h2>Mas informacion</h2>
        
        <table border="1">
            <tr>
                <td>Curso de pdf</td>
                <td>Desarrollo</td>
            </tr>
            <tr>
                <td>Curso de angular</td>
                <td>shdsdjhsjkdhs</td>
            </tr>
        </table>
    </body>
</html>