<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <p>Welcome to the home page</p>

<script>
   fetch('/getuser').then(response => response.json()).then(data => {
        console.log(data);
   });

   let xhr = new XMLHttpRequest();
    xhr.open('GET', '/getuser', true);
    xhr.send();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            //console.log(xhr.responseText);
            let json = JSON.parse(xhr.responseText);
            console.log(json);
        }
    }
</script>
</body>
</html>

