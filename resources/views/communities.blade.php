
<body>
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
        <b>сообщества</b>
    </div>
    <br>
    <div class="line_friends"></div>



    <div class="friend_list">
@foreach($communities as $community)
        <div class="communities">
            <img src="{{$community->img_url}}" class="photo_communities" height="30px " width="30px">
            <div class="info_communities"><b>{{$community->title}}<b></div>
            <br>
            <div class="sub_communities">{{$community->subs}} подписчиков</div>

        </div>


        <div class="line_friends"></div>
        @endforeach



        <div class="right_bar">
            <li class="text_bar">Мои сообщества:<div class="text"> 1</div></li>
            <li class="text_bar">события: <div class="text">223</div></li>
            <li class="text_bar">найти сообщества:<div class="text"> 334</div></li>
        </div>


















    </div>



</div>

</div>

</body>
</html>
