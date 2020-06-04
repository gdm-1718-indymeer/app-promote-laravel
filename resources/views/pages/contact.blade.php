<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input,textarea{
            display: block;
            box-sizing: border-box;
            width: 100%;
            padding: 1rem;
            font-size:1rem;
            margin: 0.2rem;
        }
    </style>
</head>
<body>
    
    <form action="" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Naam">
        <input type="email" name="email" id="email" placeholder="E-mail">
        <input type="text" name="subject" id="subject" placeholder="Onderwerp">
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Bericht"></textarea>
        <button type="submit">Verzend</button>
    </form>
</body>
</html>