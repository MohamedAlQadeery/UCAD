@extends('front-end.page_master_layout')
@section('title',''.'About')
@section('header')
    @component('front-end.header.pageHeader',['page_header'=>'About'])
        <span class="b-active">About</span>
    @endcomponent
@endsection
@section('content')
    <div class="register">
        <section class="register-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <form action="#" class="learnpro-register-form">
                            <p class="lead">How you know about us?</p>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" placeholder="Name" type="text">
                            </div>
                            <textarea class="form-control" placeholder="About / Bio" name="bio" rows="3"
                                      style="resize: none;"></textarea>
                            <div class="form-group register-btn">
                                <button class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

