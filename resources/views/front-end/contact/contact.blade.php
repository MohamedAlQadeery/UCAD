@extends('front-end.page_master_layout')
@section('title','Subjects')
@section('header')
    @component('front-end.header.pageHeader',['page_header'=>'Contact'])
        <span class="b-active">Contact</span>
    @endcomponent
@endsection
@section('content')
    <div class="contact">
        <section class="contact-area-02">
            <div class="container">
                <div class="row">
                    @includeIf('front-end.contact.content.contactInfo')
                    @includeIf('front-end.contact.content.sendMessageForm')
                </div>
            </div>
        </section>
    </div>
@endsection

