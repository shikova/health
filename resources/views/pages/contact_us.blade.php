@extends ('layouts.app')
@section('content')
  <main id="main" class="tg-page-wrapper tg-haslayout">
    <div class="container">
      <div class="row">
        <div class="main-page-wrapper tg-haslayout"><div class="fw-page-builder-content">    <section class="tg-main-section haslayout  stretch_section_contents_corner stretch_section stretch_data" style="margin-top: -100px; position: relative; left: -96px; box-sizing: border-box; width: 1162px; background-size: cover; background-position: 0% 100%; background-repeat: no-repeat;">
              <div class="builder-items">
                <div class="col-xs-12 col-md-12 builder-column ">

                </div>
              </div>
            </section>
            <div class="section-current-width"></div>    <section class="tg-main-section haslayout  default" style="padding-top:0px;padding-bottom:0px;background-repeat:no-repeat;background-position:0% 100%; background-size: cover;">
              <div class="builder-items">
                <div class="col-xs-12  col-md-4 builder-column ">
                  <div class="sc-services">

                    <div class="tg-search-categories">
                      <div class="row">
                        <div class="col-sm-12 col-xs-12 tg-expectwidth">
                          <div class="tg-search-category">
                            <div class="tg-displaytable">

                              <div class="tg-displaytablecell">
                                <div class="tg-box">
                                  <a href="#"><h3>CONTACT INFO</h3></a>
                                  <img src="//themographics.com/wordpress/docdirect/wp-content/uploads/2016/03/contact-us.png" alt="CONTACT INFO">                                        <span class="service-list">123 Eccles Old Road, Uk, M6 7AF</span><span class="service-list">+44 235 856843</span><span class="service-list">+44 235 856843</span><span class="service-list">admin@company.com</span>
                                  <a href="#"><span class="tg-show"><em class="icon-add"></em></span></a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-xs-12 col-md-8 builder-column ">
                  <div class="sc-contact-form">
                    <div class="tg-refinesearcharea contact_wrap">
                      <div class="tg-heading-border tg-small">
                        <h2>refine search</h2>
                      </div>
                      {!!Form :: open(array('url' => url('foo/bar'), 'class'=>'form-refinesearch tg-haslayout contact_form'))!!}
                      <div class="message_contact theme-notification"></div>
                      <fieldset>
                        <div class="row form-data" data-success="Message Sent." data-error="Message Fail." data-email="">
                          {!!Form :: hidden('body', null, array('id'=>'security','name'=>'security', 'value'=>'771226f63f'))!!}
                          {!!Form :: hidden('body', null, array('name'=>'_wp_http_referer', 'value'=>'/contact-us/'))!!}
                          <div class="col-sm-6">
                            <div class="form-group">
                              {!!Form :: text('body', null, array('class'=>'col-sm-6 form-group form-control','placeholder'=>'Subject')) !!}
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              {!!Form :: text('body', null, array('class'=>'col-sm-6 form-group form-control','placeholder'=>'Name')) !!}
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              {!!Form :: text('body', null, array('class'=>'col-sm-6 form-group form-control','placeholder'=>'Email')) !!}
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              {!!Form :: text('body', null, array('class'=>'col-sm-6 form-group form-control','placeholder'=>'Phone')) !!}
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              {!!Form :: textarea('body', null, array('class'=>'col-sm-6 form-group form-control','placeholder'=>'Message')) !!}
                            </div>
                          </div>
                          <div class="col-sm-8 col-sm-offset-2">
                            {!!Form::submit('SEND!', array('class'=>'tg-btn contact_now'))!!}
                          </div>
                        </div>
                      </fieldset>
                      {!!Form :: close() !!}
                    </div>
                  </div>

                </div>
              </div>
            </section>
          </div>
        </div>				</div>
    </div>
  </main>

@endsection
