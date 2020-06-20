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
        <div>Bedankt voor het maken van een afspraak</div>
        <div>Op {{$date}} en {{$time}} hebt uw een afspraak met</div>    
        <div><b>Psycholoog {{$psycholoog}} </b> </div>

        <div><br>Indien u de afspraak wilt annuleren, dient dit 48u op voorhand te gebeuren.</div>

        <div><br><br>Tot binnenkort</div>
    </body>
</html>