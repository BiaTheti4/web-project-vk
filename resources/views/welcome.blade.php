

@extends('layouts.header')
<div class="full_page">
    <div class="header_1">
        <div class="d3">
            <form method="GET">
                <input type="text" placeholder="Искать здесь...">
                <button type="submit"><img src="media\search.svg" class="search_main" type="submit"></button>
            </form>
        </div>
        <div class="header_icons">
            <img src="https://image.flaticon.com/icons/svg/2097/2097743.svg" width="36px " height="34px">

        </div>
    </div>

    <div class="stories">
        <b>Stories</b>
    </div>
    <div class="story_photo">
        <img src="media\danil.jpg" class="photo_story">
        <img src="media\danil.jpg" class="photo_story">
        <img src="media\danil.jpg" class="photo_story">
        <img src="media\danil.jpg" class="photo_story">
        <img src="media\danil.jpg" class="photo_story">
        <img src="media\danil.jpg" class="photo_story">
        <img src="media\danil.jpg" class="photo_story">



    </div>
    <b><div class="news_nadp"></B></div>
    <div class="news">
     @foreach($welcome as $welcomes)
        <div class="post_1">
            <img src="{{$welcomes->img_url}}" class="post_photo_1"><img src="media\danil.jpg" class="little_photo"><div class="tag_name">@Daniel_likhachev</div>
            <img src="https://image.flaticon.com/icons/svg/1077/1077035.svg" class="post_like">
            <div class="like_com">{{$welcomes->like_count}}</div>
            <img src="https://image.flaticon.com/icons/svg/2462/2462719.svg" class="post_like">
            <div class="like_com">{{$welcomes->comment_count}}</div>
        </div>
@endforeach



    </div>

</div>

</body>
</html>
