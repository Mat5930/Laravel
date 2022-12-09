@extends('base')

@section('page_title','Accueil')
    <header>
        <nav>
             <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/menu">Menu</a></li>
                <li><a href="/Contact">Contact</a></li>
                <li><a href="/reservation">reservation</a></li>
                
            </ul>
        </nav>
    </header>

    @section('content')
    
        </ul>
        <h1> Restaurant Test </h1>
    <img class="medium-size" 
    src="{{asset('img/Image restaurant.jpg')}}"  alt="Interieur du restaurant">
    <img src="{{asset('img/Image restaurant.jpg')}}"  alt="Interieur du restaurant">
</body>
</html>