@extends('layout.index')

@section('body')

<div class="container" id="home">
    <h1>Solving Your Health Needs</h1>

    <p id="we">We make your medicine available</p> 
    <p id="anywhere">Anywhere</p> 
    <p id="anytime">Anytime</p>
    <p id="easier">Easier</p>

    <div id="button1">
        <a href="/login"><button type="button" class="btn" style="color: white; background-color: rgba(21, 149, 0, 1); width: 250px; font-size: 18px;">Get Started</button></a>
    </div>
    
    <p id="app">Download Our App</p>
    <div id="button2">
        <button type="button" class="btn btn-outline-success mr-5 "><img src="/img/Apple-icon.png">  Appstrore</button>
        <button type="button" class="btn btn-outline-success"><img src="/img/Playstore-Icon.png">  Playstrore</button>
    </div>

</div>

@endsection