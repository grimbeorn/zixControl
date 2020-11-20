@extends('layouts.app')

@section('content')

<!-- div CONTACT -->

<div>
      <!-- MAIN -->
      <main role="main">
        <!-- TOP SECTION -->
        <header class="grid">
        	<div class="s-12 padding-2x">
            <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">Contact Us</h1>
          </div>
        </header>
  
        
        <!-- SECTION 1 -->
        <section class="grid">        
          <!-- Contact Information-->
          <div class="m-12 l-6 xl-5 padding-2x background-white">
            <div class="grid margin">
                
              <div class="s-12 m-6 l-12 xl-6 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-location-pin text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h2 class="text-size-20 margin-bottom-10 text-strong text-uppercase">Company Address</h2>                
                  <p>Aviation Way 99</p>
                  <p>Los Angeles, USA</p>             
                </div>
              </div>
              
              <div class="s-12 m-6 l-12 xl-6 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-envelope text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h2 class="text-size-20 margin-bottom-10 text-strong text-uppercase">E-mail</h2>                
                  <p><a class="text-primary-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a></p>
                  <p><a class="text-primary-hover" href="mailto:office@sampledomain.com">office@sampledomain.com</a></p>               
                </div>
              </div>
              
              <div class="s-12 m-6 l-12 xl-6 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-earphones-alt text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h2 class="text-size-20 margin-bottom-10 text-strong text-uppercase">Phone Numbers</h2>                
                  <p>0800 4521 800 50</p>
                  <p>0450 5896 625 16</p>
                  <p>0798 6546 465 </p>               
                </div>
              </div>
              
              <div class="s-12 m-6 l-12 xl-6">
                <div class="float-left">
                  <i class="icon-sli-paper-plane text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h2 class="text-size-20 margin-bottom-10 text-strong text-uppercase">Billing information</h2>
                  <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat, vel illum dolore nulla facilisis</p>                 
                </div>
              </div>
            </div>
          </div>
          
          <!-- Image-->
          <img class="s-12 l-2 hide-s hide-m hide-l" src="img/img-14.jpg">
          
          <div class="m-12 l-6 xl-5 padding-2x background-dark">
            <h2 class="text-size-20 margin-bottom-10 text-strong text-uppercase">Functional Ajax Contact Form</h2>
            <!-- If you want to make a field required, add the "required" class to the input. -->
            <!-- The form e-mail address you can change on file resp-email.php on line 4. -->
            <form name="contactForm" class="customform ajax-form" method="post" enctype="multipart/form-data">
              <div class="grid margin">
                <div class="s-12 m-12 l-6">
                  <input name="email" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text" />
                  <p class="email-error form-error">Please enter your e-mail.</p>
                </div>
                <div class="s-12 m-12 l-6">
                  <input name="name" class="name" placeholder="Your name" title="Your name" type="text" />
                  <p class="name-error form-error">Please enter your name.</p>
                </div>
              </div>
                     
              <div class="s-12">
                <input name="subject" class="required subject" placeholder="Subject" title="Subject" type="text" />
                <p class="subject-error form-error">Please enter your subject.</p>
              </div>
              <div class="s-12">
                <textarea name="message" class="required message" placeholder="Your message" rows="3"></textarea>
                <p class="message-error form-error">Please enter your message.</p>
              </div>
              <!-- full-name-field is hidden antirobot field -->
              <input name="full-name-field" type="text" id="full-name-field" class="full-name-field" />
              <div class="s-12"><a class="captcha-button text-white background-dark margin-bottom"><span class="not-a-robot-icon"><i class="icon-check text-green"></i></span> <span class="not-a-robot-text">I'm not a robot</span></a></div> 
              <!-- The submit button text you can edit in the file validation.sj on the line 8. -->
              <div class="s-12 button-parent"></div>
              <div class="grid">
                <p class="s-12 mail-success form-success">Your message has been sent successfully.</p>
                <p class="s-12 mail-fail form-error">Sorry, error occured this time sending your message.</p>
              </div>  
            </form>
          </div>
        </section>
        
        <!-- Section 2 -->
        <section class="grid">
          <!-- MAP section - change latitude, longitude and zoom data (get the latitude and the longitude from google maps) -->
          <div class="s-12" data-latitude="33.8718108" data-longitude="-118.380636" data-zoom="12" data-icon_width="220" data-icon_height="98" id="map"></div>          
        </section>
      </main>
      
</div>       

      


        
@endsection