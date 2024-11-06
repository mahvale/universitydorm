<!DOCTYPE html>
<html lang="fr">
<head>
    <meta chartset="utf-8"/>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<style>
    body{
        background: url("https://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/footer_lodyas.png");
        color:rgba(255,255,255,1);
    }
    .logo{width:250px;height:auto;max-height:150px;}
    .container{margin-top:-40px;text-align:justify;}
    .title{font-size:14px;}
    .text-center{text-align:center;}
</style>
</head>
<body>

	<div class="container">
    <div class="text-center">
        <img class="logo" src="https://drive.google.com/file/d/1_eFgJUi3cbfRWS7fyBaAcnLHorOue8dr/view"/>
        <h1 class="title">Salut Mr  | {{$name}}</h1>
    </div>
    <p>
        <br>Message :
        <br>
      Votre Reservation vient d'être Valider Merci pour votre confiance
    </p>
    <div class="text-center">
        <i>
            Mail envoyé par <a href="https://getbrain.fr">admin </a>, Voir contrat <a href="{{$path}}">Telecharger</a>.
        </i>
    </div>
</div>
</body>
</html>