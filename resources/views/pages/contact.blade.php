@extends('layouts.layout')

@section('content')
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Direct hulp voor iedereen</p>
      </div>

      <div class="row">

        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6 info" data-aos="fade-up">
              <i class="bx bx-map"></i>
              <h4>Adres</h4>
              <p>Schoolstraat 2,<br>2345 AD Eindhoven</p>
            </div>
            <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-phone"></i>
              <h4>Bel ons</h4>
              <p>075 - 3011 101<br>Spoednummer: <br>075 - 1001 101</p>
            </div>
            <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-envelope"></i>
              <h4>Email ons</h4>
              <p>info@easier.nl<br>contact@easier.nl</p>
            </div>
            <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-time-five"></i>
              <h4>Kantooruren</h4>
              <p>Ma - vr: 8:00 to 18:00<br>Zaterdag: 9:00 tot 17:00</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
            <div class="form-group">
              <input placeholder="Naam" type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input placeholder="Email" type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input placeholder="Onderwerp" type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea placeholder="Bericht" class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Laden</div>
              <div class="error-message"></div>
              <div class="sent-message">Je bericht is verzonden. Bedankt!</div>
            </div>
            <div class="text-center"><button type="submit">Verzenden</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>

  @endsection 