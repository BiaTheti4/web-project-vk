
@extends('layouts.header')
</b>

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

        <b>messages</b>

    </div>



    <br>


    @foreach($messages as $message)
    <div class="line_message"></div>



    <div class="friend_list">
<a href="http://127.0.0.1:8000/chat">
        <div class="Friends">


                <img src="{{$message->user->img_url}}" class="photo_friend" height="30px " width="30px">
                <div class="info_friend"><b>{{$message->user->login}}<b></div>
                <br>
                <div class="message_text">{{$message->message}}</div>

        </div>
</a>
        @endforeach
        <div class="line_message"></div>














        <div class="right_bar">
            <li class="text_bar">все сообщения:<div class="text"> 1</div></li>
            <li class="text_bar">непрочитанные: <div class="text">223</div></li>
            <li class="text_bar">сохраненные:<div class="text"> 334</div></li>
        </div>




    </div>
</body>
</html>

