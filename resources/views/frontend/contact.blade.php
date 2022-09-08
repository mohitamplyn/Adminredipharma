@extends('layouts.master')

<x-frontend.header :data="$setting" />

    <div class='contact'>
      <h2 class='text-center align-middle gy-4 mt-4'>Contact Us</h2>
    </div>
    <section class="contact-us">
      <div class="container">
        <div class="row mt-5 justify-content-center gy-4 mt-4">
          <div class="col-12 show">
            <div class="row gy-4 ">
              <div class="col-md-4">
                <h5 class="section-title ff-secondary fw-normal text-start themecolor">Address</h5>
                <a href="https://goo.gl/maps/CoxubnqS7FUBuHMx9" target="_blank" class="text-reset"><i class="bi bi-geo-alt-fill" style="color:#F97E2A;"></i> {{$setting->address}}</a>
              </div>
              <div class="col-md-4">
                <h5 class="section-title ff-secondary fw-normal text-start themecolor">Email:</h5>
                <a href="mailto:admin@gamil.com" target="_blank" class="text-reset"><i class="bi bi-envelope-open-fill" style="color:#F97E2A;"></i> {{$setting->email}}</a>
              </div>
              <div class="col-md-4">
                <h5 class="section-title ff-secondary fw-normal text-start themecolor">Call:</h5>
                <a href="tel:{{$setting->mobile_no}}" target="_blank" class="text-reset"><i class="bi bi-telephone-fill" style="color:#F97E2A;"></i> {{$setting->mobile_no}}</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <form action="contact-us" method="post" class="mb-4 mb-lg-0">
            @csrf  
              <div class="form-row form">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required/>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required/>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required/>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Type Message" required></textarea>
              </div>
              <button type="submit" class="btn btn-light">Contact Now</button>
            </form>
          </div>
          <div class="col-lg-6">
            <div class="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.99973169906!2d75.6504736945107!3d26.885141680954497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1660127092673!5m2!1sen!2sin"
                width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <x-frontend.footer :data="$setting" />

