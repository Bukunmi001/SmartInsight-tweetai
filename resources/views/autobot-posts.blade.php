<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autobot Posts</title>
    @vite('resources/js/app.js') <!-- Ensure Vite or your assets are included -->
</head>
<body>
    <div id="app">
        <autobot-posts :autobot-id="{{ $autobot_id }}"></autobot-posts>
    </div>
</body>
</html>
