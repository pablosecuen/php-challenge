<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response Columns</title>
</head>
<body>
    <h1>Response Columns</h1>
    
    <div style="float: left; width: 50%;">
        <h2>Names with 'yes' response:</h2>
        <?php foreach ($data['yesNames'] as $name): ?>
            <p><?php echo $name; ?></p>
        <?php endforeach; ?>
    </div>

    <div style="float: left; width: 50%;">
        <h2>Names with 'no' response:</h2>
        <?php foreach ($data['noNames'] as $name): ?>
            <p><?php echo $name; ?></p>
        <?php endforeach; ?>
    </div>
</body>
</html>
