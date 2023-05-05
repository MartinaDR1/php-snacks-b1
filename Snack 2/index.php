<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Snack 2</title>
</head>
<body>
    
    <div class="container">
        <form action="myscript.php" method="get">
            <div class="mb-3">
                <label for="name">Inserisci il tuo nome</label>
                <input type="text" name="name" id="name" >
            </div>
            <div class="mb-3">
                <label for="age">Inserisci la tua età</label>
                <input type="number" name="age" id="age">
            </div>
            <div class="mb-3">
                <label for="email">Inserisci la tua email</label>
                <input type="email" name="email" id="email">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
</body>
</html>