@extends('layout/dashboard')

@section('dashboard_main_content')
                <div class="panel panel-default" id="app">
                    <div class="chat_msg">
                        <chat-messages :messages="messages"></chat-messages>
                    </div>
                    <div class="panel-footer">
                        <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
                    </div>
                </div>

        <a class="chat_launcher">
            <span class="chatContent">
                <span>Live Chat</span>
                <span> </span>
                <span class="chatIcon">
                    <svg width="38px" height="38px" style="fill:white;stroke:white;display:inline-block;
                    vertical-align:middle;" viewBox="0 0 100 100"
                          x="0px" y="0px">
                        <path d="M88.272,59.79c4.025-4.372,6.228-9.787,6.228-15.38c0-13.711-13.026-24.866-29.038-24.866  c-6.555,0-12.925,1.918-18.018,5.394c-3.138-0.882-6.485-1.366-9.963-1.366c-17.634,0-31.98,12.269-31.98,27.348  c0,6.19,2.454,12.185,6.939,17.01L9.03,77.804c-0.248,0.719-0.067,1.516,0.467,2.057c0.382,0.388,0.897,0.596,1.424,0.596  c0.21,0,0.421-0.033,0.626-0.101l13.193-4.349c4.03,1.499,8.313,2.259,12.74,2.259c9.518,0,18.073-3.579,23.937-9.24  c1.281,0.159,2.641,0.24,4.045,0.24c4.001,0,7.865-0.683,11.499-2.029l11.828,3.896c0.205,0.067,0.416,0.101,0.626,0.101  c0.526,0,1.042-0.208,1.424-0.596c0.534-0.541,0.715-1.338,0.467-2.057L88.272,59.79z M25.527,72.025  c-0.437-0.173-0.918-0.188-1.362-0.04l-10.036,3.309l2.493-7.224c0.251-0.729,0.062-1.537-0.487-2.077  C11.856,61.78,9.5,56.426,9.5,50.918c0-12.874,12.552-23.348,27.98-23.348c3.408,0,6.675,0.513,9.698,1.448  c0.005,0.002,0.01,0.003,0.014,0.005c10.655,3.301,18.269,11.87,18.269,21.896c0,12.874-12.552,23.348-27.98,23.348  C33.307,74.266,29.285,73.512,25.527,72.025z M77.536,63.214c-0.447-0.148-0.929-0.134-1.364,0.041  c-3.36,1.334-6.964,2.011-10.71,2.011c-0.257,0-0.502-0.016-0.755-0.021c3.011-4.169,4.754-9.076,4.754-14.326  c0-10.509-6.972-19.647-17.165-24.224c3.925-2.036,8.481-3.151,13.166-3.151c13.806,0,25.038,9.36,25.038,20.866  c0,4.91-2.104,9.687-5.922,13.447c-0.549,0.541-0.738,1.349-0.487,2.077l2.117,6.138L77.536,63.214z M27.806,52.014  c0,1.657-1.343,3-3,3s-3-1.343-3-3c0-1.657,1.343-3,3-3S27.806,50.357,27.806,52.014z M40.48,52.014c0,1.657-1.343,3-3,3  c-1.657,0-3-1.343-3-3c0-1.657,1.343-3,3-3C39.137,49.014,40.48,50.357,40.48,52.014z M53.155,52.014c0,1.657-1.343,3-3,3  c-1.657,0-3-1.343-3-3c0-1.657,1.343-3,3-3C51.812,49.014,53.155,50.357,53.155,52.014z" data-reactid=".2clsy4il440.2.1.0.2.0.0"></path>
                    </svg></span></span></a>

@endsection



<style>
    .chat_launcher {
        -moz-transition: all 300ms;
        -ms-transition: all 300ms;
        -o-transition: all 300ms;
        width: 230px;
        height: 40px;
        background: #ff8641;
        position: fixed;
        bottom: 0;
        right: 34px;
        text-align: center;
        color: #fff;
        font-weight: 700;
        z-index: 999;
        cursor: pointer;
        -webkit-box-shadow: 0 0 4px 0 #ff8641;
        -moz-box-shadow: 0 0 4px 0 #ff8641;
        box-shadow: 0 0 4px 0 #983903;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        -webkit-transition: all 300ms ease-in-out;
        transition: all 300ms ease-in-out;
    }
    .chat_msg {
        margin: 10px;
        padding: 10px;
        overflow: scroll;
        -moz-transition: all 300ms;
        -ms-transition: all 300ms;
        -o-transition: all 300ms;
        width: 300px;
        height: 450px;
        background: white;
        position: fixed;
        bottom: 14%;
        right: 34px;
        text-align: center;
        color: gray;
        font-weight: 700;
        z-index: 999;
        cursor: pointer;
        -webkit-box-shadow: 0 0 4px 0 #ff8641;
        -moz-box-shadow: 0 0 4px 0 #ff8641;
        box-shadow: 0 0 4px 0 #983903;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        -webkit-transition: all 300ms ease-in-out;
        transition: all 300ms ease-in-out;
    }
    .panel-footer{
        position: fixed;
        top: 85%;
        right: 42px;
        width: 303px;
        height: 450px;
        z-index: 999999999999;
    }

</style>
