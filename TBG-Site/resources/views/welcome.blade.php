@extends('master')

@section('title')
    The BelgiumGames-TBG
@stop

@section('content')
    
    <!--
        Zo jij bent dus de code aan het lezen. Mooi heb plezier.
                                         ,ad8888ba,            
                                        d8"'    `"8b           
                                       d8'        `8b     
                  ,adPPYba,            88          88          
                 a8"     "8a           88          88     
                 8b       d8           Y8,        ,8P          
                 "8a,   ,a8"            Y8a.    .a8P           
                  `"YbbdP"'              `"Y8888Y"'            
                
                            888888888888    
                
                Dit is trouwens nu in PHP geschreven                  
        -->
    
    <!-- Tekst -->
    <div>
        <div class="col-sm-6">
            <p id="uitleg">
                <strong>! Nieuwe website in aanbouw !</strong><br/><br/>
                Hallo en welkom op de website van The BelgiumGames.<br/>
                Deze website gaat over de YouTuber Jens en zijn video's.<br/><br/>
                Wie is Jens? Hij is een Belgische YouTuber die voor jouw video's maakt over Minecraft en andere games.<br/>
                Wat kun je verwachten op deze website? Meer info over de video's van Jens, zoals wanneer er een video uitkomt en dan ook nog meer info over Jens zelf.<br/>
                <br/>
                De video's die ik maak zijn vaak tutorials en behulpzame video's.<br/>
                Geniet van de video's en ook van je dag.<br/><br/>
                
                De <a href="https://www.thebelgiumgames.be/over.html"><strong>over pagina</strong></a> met info over Jens en Jasper is nu ook up-to-date :)<br/>
                
                Meer info over opkomende video's kan je vinden op de <a href="https://www.thebelgiumgames.be/extra.html">aankondigings</a> pagina.<br/><br/>
                
                Dit is de vernieuwde site van Thebelgiumgames gesponserd door Badskinsgarden.<br/><br/>
                
            </p>
        </div>
        
        <!-- Foto Jens -->
        <div class="col-sm-3 fotoJens hidden-xs hidden-sm hidden-md">
            <img id="fotoJens" src="afbeeldingen/jensHoofd.png" alt="Foto Jens" Title="Jens, owner van The BelgiumGames"/>
        </div>
        
        <!-- foto's twit, Yt, FB -->
        <div id="LinkenFoto" class="col-sm-3 hidden-xs hidden-sm hidden-md">
            <a href="https://twitter.com/TBG_Jensie1996" target="_blank">
                <img id="twit" src="afbeeldingen/twitter-Logo.png" alt="Twitter foto" title="Klik om naar mijn Twitter te gaan"/>
            </a>
            <a href="http://www.youtube.com/c/TheBelgiumGamesTBG" target="_blank">
                <img id="YT" src="afbeeldingen/YT.png" alt="YT Foto" title="Klik om naar mijn YouTube te gaan"/>
            </a>
            <a href="https://www.facebook.com/TheBelgiumGames/" target="_blank">
                <img id="FB" src="afbeeldingen/FB.png" alt="Fb Foto" title="Klik om naar mijn Facebook te gaan"/>
            </a>
        </div>
    </div>
            
    <!-- Video's -->
    <div id="video" class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed?start=0&max-results=1&controls=1&showinfo=1&rel=0&listType=user_uploads&list=molenaersgames"></iframe>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$newVidLink}}"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection