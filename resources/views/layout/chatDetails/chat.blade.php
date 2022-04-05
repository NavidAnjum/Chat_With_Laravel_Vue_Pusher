@extends('layout/dashboard')

@section('dashboard_main_content')
        <div class="row" div="app">
            <div class="offset-lg-1 col-lg-10 offset-lg-1">
                <div class="panel panel-default"  id="app">
                    <div class="panel-heading">Chats</div>

                    <div class="panel-body">
                        <chat-messages :messages="messages"></chat-messages>

                    </div>
                    <div class="panel-footer">
                        <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}">{{ Auth::user() }}</chat-form>

                    </div>
                </div>
            </div>
        </div>

@endsection



