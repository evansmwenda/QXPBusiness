@extends('layouts.qxphome')

@section('main')
 <div class="qxp-higered text-center">
    <img class="qxp-logo" src="{{asset('images/logo/bgAsset9.svg')}}" style="margin-top: 100px 0px" width="300" height="200">
 </div>

 <div class="container">
    <div class="qxp-higered-back">
        <img src="{{asset('images/featured/QXP-For-business-1-1536x864.jpg')}}" >
    </div>
 </div>

 <div class="container text-center qxp-higher-content">
        <h3>Remain Connected, Stay Organized</h3>
        <p>Remodel how your business works with simple, smart and trusted architecture sure to streamline tasks and drive performance. Enabled video, audio and web conferencing solutions from any region.</p>
       </div>
 {{-- Icon view --}}
 <section id="tw-facts" class="qxp-facts">
    <div class="container"> 
       <!-- Row End -->
       <hr>
       <div class="row">
          <div class="col-md-3 col-sm-12 qxp-section" style="margin: 20px 0px; ">
                <div class="row">
                   <div class="col-md-12 col-sm-12" style="padding:auto;margin-right: 0px !important">
                      <img src="{{asset('images/icons/019-instructor.svg')}}" width="50" height="60">
                   </div>
                </div>
                <h3>Join from anyplace</h3>
                <p>Join meetings and enjoy simplified video conferencing from any device</p>
            </div>
 
          <div class="col-md-3 col-sm-12 qxp-section" style="margin: 20px 0px; ">
             <div class="facts-img">
                <div class="row">
                   <div class="col-md-12 col-sm-12" style="padding:auto;margin-right: 0px !important">
                      <img src="{{asset('images/icons/005-video.svg')}}" width="50" height="60">
                   </div>
                </div>
                <h3>Quality Web Audio</h3>
                <p>Enjoy unparalleled High Definition Audio for a clear and natural sound.</p>       
         
             </div>
          </div>
 
          <div class="col-md-3 col-sm-12 qxp-section" style="margin: 20px 0px; ">
             <div class="facts-img">
                <div class="row">
                   <div class="col-md-12 col-sm-12" style="padding:auto;margin: auto">
                      <img src="{{asset('images/icons/008-video-call-3.svg')}}" width="50" height="60">
                   </div>
                  </div>
                  <h3>High Definition Video</h3>
                  <p>Experience higher resolution, high quality video conferencing solutions.</p>       

             </div>
          </div>
 
          <div class="col-md-3 col-sm-12 qxp-section" style="margin: 20px 0px; ">
             <div class="facts-img">
                <div class="row">
                   <div class="col-md-12 col-sm-12" style="padding:auto;margin: auto">
                      <img src="{{asset('images/icons/013-board.svg')}}" width="50" height="60">
                   </div>
                  </div>
                <h3>Screen Sharing</h3>
                <p>Enable real time collaboration and showcase designs and presentations live with multiple screen sharing.</p>       
         
             </div>
          </div>
 
          <div class="col-md-3 col-sm-12 qxp-section" style="margin: 20px 0px; ">
             <div class="facts-img">
                <div class="row">
                   <div class="col-md-12 col-sm-12" style="padding:auto;margin: auto">
                      <img src="{{asset('images/icons/011-video-conference-3.svg')}}" width="50" height="60">
                   </div>
                  </div>
                  <h3>Transcripts and Recording</h3>
                  <p>Unearth important meeting highlights with media recording and automated transcribing.</p>       

             </div>
          </div>
 
          <div class="col-md-3 col-sm-12 qxp-section" style="margin: 20px 0px; ">
             <div class="facts-img">
                <div class="row">
                   <div class="col-md-12 col-sm-12" style="padding:auto;margin: auto">
                      <img src="{{asset('images/icons/017-coaching.svg')}}" width="50" height="60">
                   </div>
                   </div>
                   <h3>Messaging and Team Chat</h3>
                   <p>Instantly react and interact with your colleagues either publicly or in private with enabled team chat.</p>
             </div>
          </div>
 
 
          <div class="col-md-3 col-sm-12 qxp-section" style="margin: 20px 0px; ">
             <div class="facts-img">
                <div class="row">
                   <div class="col-md-12 col-sm-12" style="padding:auto;margin: auto">
                      <img src="{{asset('images/icons/003-video-call-1.svg')}}" width="50" height="60">
                   </div>
                     </div>
                     <h3>Security Compliant</h3>
                     <p>Safeguarding our client’s data and maintaining their privacy is paramount with end-to-end encryption.</p>       
  

             </div>
          </div>

 
       </div>
    </div>
    <!-- Container End -->
 </section>
<!--  {{-- courasel --}} -->
<div id="my-carousel">
  <div class="tw-hero-slider owl-carousel">

    <div class="slider-1 slider-map-pattern">
       <!-- Slider arrow end -->
       <div class="slider-wrapper d-table">
          <div class="slider-inner d-table-cell">
             <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                       <div class="slider-content">
                         <img src="{{asset('images/sliders/200515-QXP-Customer-Experience_XUI-2.jpg')}}">
                       </div>
                    </div>
                    <!-- Col end -->
                    <!-- col end -->
                 </div>
             </div>
             <!-- Container End -->
          </div>
          <!-- Slider Inner End -->
       </div>
       <!-- Slider Wrapper End -->
    </div>
    <!-- Slider 1 end -->
 
 
   <div class="slider-2">
       <div class="slider-wrapper d-table">
          <div class="slider-inner d-table-cell">
             <div class="container">
                <div class="row">
                   <div class="col-lg-12 col-sm-12">
                      <div class="slider-content">
                        <img src="{{asset('images/sliders/200515-QXP-Customer-Experience_XUI-3.jpg')}}">
                      </div>
                   </div>
                   <!-- Col end -->
                   <!-- col end -->
                </div>
                <!-- Row End -->
             </div>
             <!-- Container End -->
          </div>
          <!-- Slider Inner End -->
       </div>
       <!-- Slider Wrapper End -->
    </div>
    <!-- Slider 2 end -->
 
 
    <div class="slider-3">
       <div class="slider-wrapper d-table">
          <div class="slider-inner d-table-cell">
             <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                       <div class="slider-content">
                         <img src="{{asset('images/sliders/200515-QXP-Customer-Experience_XUI-4.jpg')}}">
                       </div>
                    </div>
                    <!-- Col end -->
                    <!-- col end -->
                 </div>
             </div>
             <!-- COntainer End -->
          </div>
          <!-- Slider Inner End -->
       </div>
       <!-- Slider Wrapper End -->
    </div> 

    <!-- Slider 3 end -->
    {{-- end slider 4 --}}
    <div class="slider-4">
        <div class="slider-wrapper d-table">
           <div class="slider-inner d-table-cell">
              <div class="container">
                 <div class="row">
                     <div class="col-lg-12 col-sm-12">
                        <div class="slider-content">
                          <img src="{{asset('images/sliders/200515-QXP-Customer-Experience_XUI-6.jpg')}}">
                        </div>
                     </div>
                     <!-- Col end -->
                     <!-- col end -->
                  </div>
              </div>
              <!-- COntainer End -->
           </div>
           <!-- Slider Inner End -->
        </div>
        <!-- Slider Wrapper End -->
     </div> 
  </div>
</div>

 <div class="qxp-subfooter">
     <div class="container">
         <div class="row">
            <div class="col-md-9">
                <h3>Give Your Students Knowledge Without Borders</h3>
            </div>
            <div class="col-md-3">
                <a href="#"class="btn btn-white">SIGN UP</a>
            </div>
         </div>
     </div>
 </div>
@endsection
