<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="background" src="background.png" alt="">
    <div class="container">
        <div class="form-group">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div style="text-align:center">
                <h2>Nombre de la carpeta:</h2>
                </div>
                <input type="text" class="input-text" name="folder" required>
                <div class="content-input">
                <label class="input-file">
                <span style="display: flex; justify-content: center;align-items: center;">Upload <img width="30px" src="upload.png" alt=""></span><input type="file" name="fileUpload[]" />
                </label>
                </div>
                <div class="content-input">
                <input type="submit" class="btn-submit" name="Submit" value="Enviar" >
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>