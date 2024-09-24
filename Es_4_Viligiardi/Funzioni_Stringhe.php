<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "Donec non velit justo. Morbi turpis lorem, dapibus at diam vitae, mattis facilisis nulla. Nam eu bibendum mi. Maecenas suscipit, magna eu porta finibus, mi dolor luctus sem, ut tincidunt ex nisl nec nisi. Aenean mi erat, tempor vel sapien vel, imperdiet pharetra risus. Cras tristique nulla vel lobortis auctor. Nam sollicitudin orci nulla, et maximus libero posuere ut. Mauris pretium ut libero vitae posuere. Sed pharetra augue at odio lobortis pharetra. Duis aliquam dolor ligula. Vestibulum viverra turpis neque, a auctor erat aliquet at. Nunc magna urna, tincidunt interdum purus in, tempor sodales eros. Donec nec odio sit amet leo ullamcorper eleifend ac at felis. Praesent ultricies imperdiet facilisis. Nulla at ligula sed est ullamcorper varius et vel mauris.";

        echo "<p style='color: green'>$str</p>";
        echo "<p style='color: blue'> " . strtoupper($str) . "</p>";
        echo "<p>Il numero di caratteri sono <span style='color: red'>" . strlen($str) . "</span></p>";
        echo "<p>Il numero di parole sono <span style='color: yellow'>" . str_word_count($str) . "</span></p>";
    ?>
</body>
</html>