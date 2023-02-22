<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con Ajax</title>
</head>
<body>
    <div class="container">
        <form action="">
            <!-- <select name="" id=""></select> -->
            <input type="text" name="users" onkeyup="showUser(this.value)">
        </form>
        <div id="display">Los datos de la persona se mostrarán aquí...</div>
    </div>
    
</body>
<script>
    function showUser(text) {
        let display = document.getElementById('display');
        // Si el input está vacío, el div tb se vacía
        if (text == '') {
           display.innerHTML = ''; 
           return;
        } else {
            let ajax = new XMLHttpRequest();
            ajax.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    
                    display.innerHTML = this.responseText;
                }
            };
            ajax.open('GET', 'tablas-getuser.php?q=' + text, true);
            ajax.send();
        }
    }
</script>
</html>