
@extends('layouts.header')



<div class="full_page">
    <div class="header_1">
        <div class="d3">
            <form>
                <input type="text" placeholder="Искать здесь...">
                <button type="submit"><img src="media\search.svg" class="search_main" type="submit"></button>
            </form>
        </div>
        <div class="header_icons">
            <img src="https://image.flaticon.com/icons/svg/2097/2097743.svg" width="36px " height="34px">

        </div>
    </div>
    <div class="stories">
        <b>Music</b>
    </div>
    <br>







@foreach($musics as $music)

    <div class="line_song"></div>

    <div class="song_list">

        <div class="songs">
            <img src="{{$music->img_url}}" class="song_icon">
            <div class="song_name"><b>{{$music->title_name}}<b></div>
            <div class="performer">{{$music->author_name}}</div>
        </div>

    @endforeach
        <div class="line_song"></div>











        <div class="right_bar">
            <li class="text_bar">Моя музыка<div class="text"> 273</div></li>
            <li class="text_bar">музыка друзей <div class="text"></div></li>
            <li class="text_bar">рекомендации<div class="text"></div></li>
        </div>



    </div>



</div>

</div>

</body>
</html>
