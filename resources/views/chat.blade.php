<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="CSS\style.css">

</head>
<body>
@extends('layouts.header')



<div class="full_page">
    <div class="header_1">
        <div class="d3">
            <form>
                <input type="text" placeholder="Искать здесь...">
                <button type="submit"><img src="https://image.flaticon.com/icons/svg/2089/2089805.svg"  type="submit" class="search_main"></button>
            </form>
        </div>
        <div class="header_icons">
            <img src="https://image.flaticon.com/icons/svg/2097/2097743.svg" width="36px " height="34px">

        </div>
    </div>
    <div class="stories">
        <b>messages</b>
        <br>
    </div>




    <div class="chat_full">



        <div class="chat_header">
            <div class="chat_header_back">
                <a href="messages.html"> back</a>
            </div>
            <div class="chat_header_name">
                Данил Лихачев
            </div>
            <div class="chat_header_search">
                <img src="https://image.flaticon.com/icons/svg/622/622669.svg" class="search_chat">
            </div>

        </div>

        <div class="chat_messages">

            <div class="box_message_1">
                123
            </div>
            <div class="box_message_2">
                123
            </div>
            <div class="box_message_2">
                123
            </div>

        </div>
        <div class="bottom_chat">

            <img src="https://image.flaticon.com/icons/svg/646/646148.svg"  class="photo_chat_skr">
            <input type="text" placeholder="Ваше сообщение" class="chat_input">
            <img src="https://image.flaticon.com/icons/svg/565/565340.svg"   class="photo_chat_send">

        </div>





    </div>

    <b>
        <div class="right_bar_chat">
            <li class="text_bar">все сообщения:<div class="text"> 1</div></li>
            <li class="text_bar">непрочитанные: <div class="text">223</div></li>
            <li class="text_bar">сохраненные:<div class="text"> 334</div></li>
        </div>
    </b>
</div>


</div>
</body>
</html>
