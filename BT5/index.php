<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT5</title>
    <script src="script.js"></script>
</head>
<body>
    <form>
        <h2>Click on one of the radio buttons to see a message</h2>

        1:<input type="radio" name="choice" value = "1" onclick="showMessage(this.value)">
        2:<input type="radio" name="choice" value = "2" onclick="showMessage(this.value)">
        3:<input type="radio" name="choice" value = "3" onclick="showMessage(this.value)">

        <p id="message"></p>
        
    </form>
</body>
</html>