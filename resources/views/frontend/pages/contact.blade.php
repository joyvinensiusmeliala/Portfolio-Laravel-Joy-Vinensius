@extends('frontend.layouts.master')

@section('main-content')

<div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
    <div class="container-narrow">
      <div class="text-center mb-5">
        <h2 class="marker marker-center">Contact Me</h2>
      </div>
      <div class="row">
        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="bg-light my-2 p-3 pt-2"><form action="https://formspree.io/your@email.com"
      method="POST">
      <div class="form-group my-2">
        <label for="name" class="form-label fw-bolder">Name</label>
        <input class="form-control" type="text" id="name" name="name" required>
      </div>
      <div class="form-group my-2">
        <label for="email" class="form-label fw-bolder">Email</label>
        <input class="form-control" type="email" id="email" name="_replyto" required>
      </div>
    <div class="form-group my-2">
      <label for="message" class="form-label fw-bolder">Message</label>
      <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4" required></textarea>
    </div>
    <button class="btn btn-primary mt-2" type="submit">Send</button>
  </form>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
          <div class="mt-3 px-1">
            <div class="h5">Let’s talk how I can help you!</div>
            <p>If you like my work and want to avail my services then drop me a message using the contact form. </p>
            <p>Or get in touch using my email, skype or my contact number.</p>
            <p>See you!</p>
          </div>
          <div class="mt-53 px-1">
            <div class="row">
              <div class="col-sm-2">
                <div class="pb-1">Email:</div>
              </div>
              <div class="col-sm-10">
                <div class="pb-1 fw-bolder">walter@company.com</div>
              </div>
              <div class="col-sm-2">
                <div class="pb-1">Skype:</div>
              </div>
              <div class="col-sm-10">
                <div class="pb-1 fw-bolder">username@skype.com</div>
              </div>
              <div class="col-sm-2">
                <div class="pb-1">Phone:</div>
              </div>
              <div class="col-sm-10">
                <div class="pb-1 fw-bolder">+0718-111-0011</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
