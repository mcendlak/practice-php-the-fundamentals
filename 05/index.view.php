<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <ul>
        <?php
            foreach ($menu as $menuElement) {
                echo '<li><a href="' . $menuElement['url'] . '">' . $menuElement['label'] . '</a></li>';
            }
        ?>
    </ul>
    
</body>
</html>