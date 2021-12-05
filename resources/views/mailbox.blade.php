<?php $tab = TAB_MAILBOX ?>
@extends("components.main.main")

@section("header_content")
@endsection

@section("content")
    <div class="row">
        <div class="card w-100">
            <div class="row">
                <div class="col-3">
                    @foreach($mails as $mail)
                        <div class="mail-item w-100 pl-3" onclick="$('#content').html(`{!! $mail->message !!}`)">
                            <h3 class="m-0">{{ $mail->name }}</h3>
                            <h4 class="m-0">{{ $mail->email }}</h4>
                            <hr class="m-1 p-0">
                        </div>
                    @endforeach
                </div>
                <div class="col-8">
                    <textarea id="content" class="w-100 h-75">

                    </textarea>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
@endsection
