<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letter Counter</title>
</head>
<body>
    <h1>Letter Counter</h1>
    
    <form method="post" action="?action=countLetters">
        <label for="input_string">Enter a string:</label>
        <input type="text" name="input_string" id="input_string" required>
        <button type="submit">Count Letters</button>
    </form>

    <?php if (isset($formattedResult)): ?>
        <p>Result: <?php echo $formattedResult; ?></p>
    <?php endif; ?>
</body>
</html>
