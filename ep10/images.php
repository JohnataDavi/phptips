<?php

require __DIR__ . "/vendor/autoload.php";

$upload = new \CoffeeCode\Uploader\Image("storage", "images");

$files = $_FILES;

if (!empty($files["image"])) {
    $file = $files["image"];

    if (empty($file["type"]) || !in_array($file["type"], $upload::isAllowed())) {
        echo "<p>Selecione uma imagem válida</p>";
    } else {
        $uploaded = $upload->upload($file, pathinfo($file["name"], PATHINFO_FILENAME), 350);
        echo "<img src='{$uploaded}'/>";
    }
}


/*Implementação personalizada para outro tipo de arquivo
$upload = new \CoffeeCode\Uploader\Send("storage", "media", []);*/

?>

<form action="" method="post" enctype="multipart/form-data">
    <h1>Single Image:</h1>
    <input type="file" name="image">
    <button>Enviar</button>
</form>

<?php
if (!empty($files["images"])) {
    $images = $files["images"];

    for ($i = 0; $i < count($images["type"]); $i++) {
        foreach (array_keys($images) as $keys) {
            $imagesFiles[$i][$keys] = $images[$keys][$i];
        }
    }

    foreach ($imagesFiles as $file) {
        if (empty($file["type"])) {
            echo "<p>Selecione uma imagem válida</p>";
        }elseif(!in_array($file["type"], $upload::isAllowed())){
            echo "<pO arquivo {$file["name"]} não é válido!</p>";
        } else {
            $uploaded = $upload->upload($file, pathinfo($file["name"], PATHINFO_FILENAME), 350);
            echo "<img src='{$uploaded}'/>";
        }
    }

    echo "<pre>";
    var_dump($imagesFiles);
    echo "</pre>";
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <h1>More Image:</h1>
    <input type="file" accept="image/jpeg, image/jpg, image/png" name="images[]" multiple>
    <button>Enviar</button>
</form>

<?php
$upload = new \CoffeeCode\Uploader\File("storage", "files");

if (!empty($files["file"])) {
    $file = $files["file"];

    if (empty($file["type"]) || !in_array($file["type"], $upload::isAllowed())) {
        echo "<p>Selecione um arquivo válido</p>";
    } else {
        $uploaded = $upload->upload($file, pathinfo($file["name"], PATHINFO_FILENAME), 350);
        echo "<a target='_blank' href='{$uploaded}'>Acessar Arquivo</a>";
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <h1>Send File:</h1>
    <input type="file" name="file">
    <button>Enviar</button>
</form>









