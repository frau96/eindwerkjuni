<!DOCTYPE html >
<html lang = "en" >
<head>
<title>Document</title>
    <style>
    body {
        font-family : Arial , Helvetica , sans-serif ;
    }
    </style>

</head>
    <body>
        <img src="{{ asset('assets/img/easier.png')}}">
        <h3>Beste cliënt,</h3>
        <div>Uw afspraak met psycholoog <b>{{$psycholoog}}</b> op <b>{{$date}} en {{$time}}</b> werd helaas geannuleerd</div>    


        <div><br>Voor vragen in verband met de annularing, contacteer uw psycholoog. Indien u een nieuw afspraak wilt plannen, kies dan een nieuwe afspraak op de website van Easier.</div>

        <div><br><br>Tot binnenkort</div>
    </body>
</html>