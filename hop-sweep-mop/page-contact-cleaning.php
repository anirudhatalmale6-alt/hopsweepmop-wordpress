<?php if(!defined("ABSPATH"))exit; $uri=get_template_directory_uri(); ?>
<?php get_header(); ?>

<div class="phero"><div class="wrap">
  <img class="masc" src="<?php echo $uri; ?>/assets/mascot.png" alt="">
  <div><h1>Book a Cleaning or Get in Touch</h1><div class="crumb"><a href="index.html">Home</a> › Contact Us</div></div>
</div></div>

<section><div class="wrap">
  <div class="cwrap">
    <!-- booking form -->
    <div class="book" id="book"><?php echo hsm_booking_notice(); ?><?php hsm_form_open(); ?>
      <h3>Book Your Cleaning</h3>
      <p class="sub">Fill this in and our team gets an email instantly — we'll confirm your slot the same day.</p>
      <div class="field"><label>Service Type</label>
        <select name="service"><option>Home — Apartment / Villa</option><option>Deep Cleaning</option><option>Move In / Move Out</option><option>Carpet / Sofa / Curtains</option><option>Commercial — Office</option><option>Commercial — Restaurant / Retail</option><option>Commercial — Other</option></select></div>
      <div class="two">
        <div class="field"><label>Preferred Date</label><input name="date" type="date" value="2026-07-30"></div>
        <div class="field"><label>Cleaners</label><select name="cleaners"><option>1 Cleaner</option><option>2 Cleaners</option><option>3+ Cleaners</option></select></div>
      </div>
      <div class="two">
        <div class="field"><label>Materials</label><select name="materials"><option>With materials (45 AED/hr)</option><option>Without materials (35 AED/hr)</option></select></div>
        <div class="field"><label>Hours</label><select name="hours"><option>3 hours (min)</option><option>4 hours</option><option>5+ hours</option></select></div>
      </div>
      <div class="two">
        <div class="field"><label>Your Name</label><input name="name" type="text" placeholder="Full name"></div>
        <div class="field"><label>Phone</label><input name="phone" type="text" placeholder="+971 …"></div>
      </div>
      <div class="field"><label>Email</label><input name="email" type="email" placeholder="you@email.com"></div>
      <div class="field"><label>Address / Notes</label><textarea name="notes" placeholder="Area, building, and anything we should know…"></textarea></div>
      <button class="btn btn-navy" type="submit">Request Booking</button></form>
      <div class="note">🔒 No payment now · Sent straight to info@hopsweepmop.com</div>
    </div>
    <!-- contact info -->
    <div class="cinfo">
      <div class="card">
        <div class="row"><div class="ic">📞</div><div><h4>Office</h4><p>+971 4 876 7588</p></div></div>
        <div class="row"><div class="ic">💬</div><div><h4>Mobile & WhatsApp</h4><p>+971 55 985 8136</p></div></div>
        <div class="row"><div class="ic">✉️</div><div><h4>Email</h4><p>info@hopsweepmop.com</p></div></div>
        <div class="row"><div class="ic">📍</div><div><h4>Office</h4><p>Office 206, Dynatrade Commercial Complex, Al Quoz 3, Dubai, UAE</p></div></div>
      </div>
      <div class="card">
        <h4 style="font-family:'Montserrat';color:var(--navy);margin-bottom:10px">Working Hours</h4>
        <table class="hours">
          <tr><td>Saturday – Thursday</td><td>8:00 – 20:00</td></tr>
          <tr><td>Friday</td><td>On request</td></tr>
          <tr><td>Public Holidays</td><td>On request</td></tr>
        </table>
      </div>
      <div class="mapwrap">
        <iframe loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=Dynatrade%20Commercial%20Complex%20Al%20Quoz%203%20Dubai&output=embed"></iframe>
      </div>
    </div>
  </div>
</div></section>

<?php get_footer(); ?>
