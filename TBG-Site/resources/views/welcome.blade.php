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
                <!-- Tekst binnenhalen en tonen. -->
                <?= htmlspecialchars_decode($tekst[0]);?>
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
        <div class="row" style="padding-bottom: 80px;">
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

    <script src="/js/Index.js"></script>

@endsection