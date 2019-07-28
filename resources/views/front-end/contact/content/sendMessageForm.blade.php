<div class="col-sm-6  col-sm-offset-1 contact-form">
    <div class="row">
        <div class="col-sm-12 contact-title-btm">
            <h2>@lang('front.send_message')</h2>
            <p class="content-sub_p">Welcome to our Website. We are glad to have you around.</p>
        </div>
    </div>
    <div class="input-contact-form">
        <div id="contact">
            <div id="message"></div>
            <form method="post" action=""
                  name="contactform" id="contactform">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="@lang('front.name')" name="name"
                                   id="name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="@lang('front.email')"
                                   name="email" id="email">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="@lang('front.subject')"
                                   name="subject" id="subject">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                                                <textarea class="form-control" rows="6" placeholder="@lang('front.message')"
                                                          name="comments" id="comments"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="full-width">
                            <input value="@lang('front.submit')" type="submit" name="submit" id="submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
