<!DOCTYPE html>
<html>


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
        <b>news</b>
    </div>

    <div class="news_nadp"></div>
    <div class="news">
@foreach($news as $news)

        <div class="post_1">
            <img src="{{$news->img_url}}" class="post_photo_1"><img src="media\danil.jpg" class="little_photo"><div class="tag_name">@Daniel_likhachev</div>
            <img src="https://image.flaticon.com/icons/svg/1077/1077035.svg" class="post_like">
            <div class="like_com">{{$news->like_count}}</div>
            <img src="https://image.flaticon.com/icons/svg/2462/2462719.svg" class="post_like">
            <div class="like_com">{{$news->comment_count}}</div>

        </div>

        @endforeach








    </div>

</div>

</body>
</html>


