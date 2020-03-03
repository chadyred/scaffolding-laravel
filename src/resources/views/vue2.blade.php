<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma première vue</title>
</head>
<body>
<div>Je suis sur la page <?php echo $num; ?> </div>
<div>Je suis le deuxième paramêtre <?php echo $secondArg; ?></div>
<div>Je suis sur le troisieme paramêtre <?php echo $thirdArg; ?></div>
<div>Je suis sur la page BLADE SYNTHAX  {!! $num !!} </div> <!-- Protect value injected in url -->
<div>Je suis le deuxième paramêtre BLADE SYNTHAX  {{ $secondArg  }}</div>
<div>Je suis sur le troisieme paramêtre  BLADE SYNTHAX {{ $thirdArg }}</div>
</body>
</html>
