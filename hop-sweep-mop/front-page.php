<?php if(!defined("ABSPATH"))exit; $uri=get_template_directory_uri(); ?>
<?php get_header(); ?>

<!-- Hero -->
<section class="hero"><div class="wrap">
  <div>
    <div class="tag">★ Serving Dubai since 2018 · Licensed LLC</div>
    <h1>The most reliable <span>cleaning services</span> company in Dubai.</h1>
    <p class="lead">Residential & commercial cleaning delivered by full-time, background-checked staff. Book your cleaning online in under a minute — we'll confirm the same day.</p>
    <div class="hero-cta">
      <a class="btn btn-navy btn-lg" href="#book">Book a Cleaning</a>
      <a class="btn btn-wa btn-lg" href="#">💬 WhatsApp Us</a>
    </div>
    <div class="stats">
      <div class="s"><b>2018</b><span>Serving Dubai since</span></div>
      <div class="s"><b>15+</b><span>Cleaning services</span></div>
      <div class="s"><b>100%</b><span>Vetted full-time staff</span></div>
    </div>
  </div>
  <div class="book" id="book"><?php echo hsm_booking_notice(); ?><?php hsm_form_open(); ?>
    <img class="masc" src="<?php echo $uri; ?>/assets/mascot.png" alt="">
    <h3>Book Your Cleaning</h3>
    <p class="sub">Pick a service & date — we'll email you a confirmation.</p>
    <div class="field"><label>Service Type</label>
      <select name="service"><option>Home — Apartment / Villa</option><option>Deep Cleaning</option><option>Move In / Move Out</option><option>Carpet / Sofa / Curtains</option><option>Commercial — Office</option><option>Commercial — Other</option></select></div>
    <div class="two">
      <div class="field"><label>Preferred Date</label><input name="date" type="date" value="2026-07-30"></div>
      <div class="field"><label>Cleaners</label><select name="cleaners"><option>1 Cleaner</option><option>2 Cleaners</option><option>3+ Cleaners</option></select></div>
    </div>
    <div class="two">
      <div class="field"><label>Your Name</label><input name="name" type="text" placeholder="Full name"></div>
      <div class="field"><label>Phone</label><input name="phone" type="text" placeholder="+971 …"></div>
    </div>
    <div class="field"><label>Email</label><input name="email" type="email" placeholder="you@email.com"></div>
    <button class="btn btn-navy" type="submit">Request Booking</button></form>
    <div class="note">🔒 No payment now · Instant email to our team</div>
  </div>
</div></section>

<div class="strip"><div class="wrap">
  <div class="i"><span class="ic">👥</span> Full-time, background-checked staff</div>
  <div class="i"><span class="ic">🧴</span> Own equipment & eco supplies</div>
  <div class="i"><span class="ic">📅</span> One-off or monthly contracts</div>
  <div class="i"><span class="ic">⏱️</span> On-time, guaranteed</div>
</div></div>

<!-- How it works -->
<section class="how"><div class="wrap">
  <div class="sh">
    <div class="eyebrow">Easy as 1-2-3</div>
    <h2>Booking a cleaning takes a minute</h2>
    <p>No back-and-forth, no waiting around. Tell us what you need and we'll handle the rest.</p>
  </div>
  <div class="steps">
    <div class="step"><div class="n">1</div><h4>Tell us what you need</h4><p>Pick your service, date and how many cleaners — right on this page.</p></div>
    <div class="step"><div class="n">2</div><h4>We confirm same day</h4><p>Our team gets your request instantly by email and confirms your slot.</p></div>
    <div class="step"><div class="n">3</div><h4>We clean, you relax</h4><p>Our vetted cleaners arrive on time and leave your space spotless.</p></div>
  </div>
</div></section>

<!-- services -->
<section id="services" style="background:var(--soft)"><div class="wrap">
  <div class="sh">
    <div class="eyebrow">What we do</div>
    <h2>Our cleaning services in Dubai</h2>
    <p>Trusted, high-quality cleaning for homes and businesses — with room to add specialist services like deep cleaning and carpets anytime.</p>
  </div>
  <div class="svc-grid">
    <div class="scard">
      <div class="ph" style="background-image:url('<?php echo $uri; ?>/assets/home-cleaning.jpg')"><div class="lab">Home Cleaning Services</div></div>
      <div class="bd">
        <p>Regular, reliable cleaning that keeps your apartment or villa fresh, healthy and spotless.</p>
        <ul><li>Apartment</li><li>Villa</li><li>Deep Cleaning</li><li>Move In / Out</li><li>Carpet</li><li>Curtains</li><li>Sofa</li><li>Housekeeping</li></ul>
        <a class="more" href="cleaning-services.html">View home services →</a>
      </div>
    </div>
    <div class="scard">
      <div class="ph" style="background-image:url('<?php echo $uri; ?>/assets/commercial-cleaning.jpg')"><div class="lab">Commercial Cleaning</div></div>
      <div class="bd">
        <p>Professional cleaning for offices, retail and hospitality — on a schedule that suits your business.</p>
        <ul><li>Office</li><li>Restaurant</li><li>Hospital</li><li>Mall</li><li>School</li><li>Warehouse</li><li>Boat & Yacht</li></ul>
        <a class="more" href="cleaning-services.html">View commercial services →</a>
      </div>
    </div>
  </div>
  <p class="svc-note">Need something specific? <b>Deep cleaning, carpets, sofas, curtains and more</b> — just ask when you book.</p>
</div></section>

<!-- why -->
<section class="why" id="why"><div class="wrap">
  <img class="wp" src="<?php echo $uri; ?>/assets/kitchen-cleaning.jpg" alt="Professional home cleaning in Dubai">
  <div>
    <div class="eyebrow">Why Hop Sweep Mop</div>
    <h2>Cleaning you can genuinely rely on.</h2>
    <p class="intro">Established in December 2018, we provide customized cleaning tailored to your everyday needs. We personally interview and select our cleaners based on thorough background checks, experience and passion — and we never use part-time maids or third-party cleaners.</p>
    <div class="wl">
      <div class="w"><div class="ic">🛡️</div><div><h4>Background-checked</h4><p>Every cleaner vetted and on our company sponsorship.</p></div></div>
      <div class="w"><div class="ic">🤝</div><div><h4>Full responsibility</h4><p>We take full responsibility for our staff and work.</p></div></div>
      <div class="w"><div class="ic">⏱️</div><div><h4>On time, every time</h4><p>Cleaners arrive at the agreed time, finish to your approval.</p></div></div>
      <div class="w"><div class="ic">💚</div><div><h4>Trusted since 2018</h4><p>We grow through referrals from happy clients.</p></div></div>
    </div>
  </div>
</div></section>

<!-- areas -->
<section class="areas"><div class="wrap">
  <div class="sh"><div class="eyebrow">Where we clean</div><h2>Areas we serve across Dubai</h2><p>Fast, reliable cleaning right across the emirate — including:</p></div>
  <div class="area-chips">
    <span>Downtown Dubai</span><span>Dubai Marina</span><span>JBR</span><span>Business Bay</span><span>Al Barsha</span><span>Jumeirah</span><span>Al Quoz</span><span>Deira</span><span>Bur Dubai</span><span>Palm Jumeirah</span><span>JLT</span><span>Silicon Oasis</span><span>Dubai Hills</span><span>Mirdif</span>
  </div>
</div></section>

<!-- review -->
<section class="review"><div class="wrap">
  <div class="sh"><div class="eyebrow">What clients say</div><h2>Rated 5 stars by Dubai clients</h2></div>
  <div class="gsum">
    <span class="glogo">G</span>
    <div><b>5.0</b> <span class="gstars">★★★★★</span><div class="gsub">Based on our Google reviews · <a href="https://g.page/r/CXmaZpcFd92PEAI/review" target="_blank" rel="noopener">See all on Google</a></div></div>
  </div>
  <div class="rev-slider" id="revSlider">
    <button class="rnav prev" id="revPrev" aria-label="Previous review">‹</button>
    <div class="rev-track" id="revTrack"><!-- slides injected by JS --></div>
    <button class="rnav next" id="revNext" aria-label="Next review">›</button>
  </div>
  <div class="rev-dots" id="revDots"></div>
  <div style="text-align:center;margin-top:22px;display:flex;gap:12px;justify-content:center;flex-wrap:wrap">
    <a class="btn btn-out" href="https://g.page/r/CXmaZpcFd92PEAI/review" target="_blank" rel="noopener">Read our reviews on Google</a>
    <a class="btn btn-green" href="https://g.page/r/CXmaZpcFd92PEAI/review" target="_blank" rel="noopener">★ Leave a Review</a>
  </div>
</div></section>

<!-- pricing -->
<section class="pricing" id="pricing"><div class="wrap">
  <div class="sh"><div class="eyebrow">Simple, honest rates</div><h2>Transparent hourly pricing</h2><p>Pay by the hour, per cleaner. Special discounted rates on regular monthly and long-term contracts.</p></div>
  <div class="pg">
    <div class="pc">
      <h3>Without Materials</h3><div class="from">You provide equipment & supplies</div>
      <div class="amt">35<span> AED / hr</span></div>
      <ul><li><span class="c">✔</span> Per cleaner · 3-hour minimum</li><li><span class="c">✔</span> Just 30 AED/hr above 4 hours</li><li><span class="c">✔</span> Trained, full-time staff</li><li><span class="c">✔</span> Home or commercial</li></ul>
      <a class="btn btn-out" href="contact-cleaning.html">Book This</a>
    </div>
    <div class="pc feat">
      <span class="ptag">Most popular</span>
      <h3>With Materials</h3><div class="from">We bring all equipment & eco supplies</div>
      <div class="amt">45<span> AED / hr</span></div>
      <ul><li><span class="c">✔</span> Per cleaner · 3-hour minimum</li><li><span class="c">✔</span> Just 40 AED/hr above 4 hours</li><li><span class="c">✔</span> All tools & supplies included</li><li><span class="c">✔</span> Nothing for you to prepare</li></ul>
      <a class="btn btn-navy" href="contact-cleaning.html">Book This</a>
    </div>
  </div>
  <p class="pnote">Regular clean? Ask about our discounted monthly & long-term contract rates. <a href="cleaning-pricing.html" style="color:var(--green-deep);font-weight:700">See full pricing →</a></p>
</div></section>

<!-- faq -->
<section class="faq"><div class="wrap">
  <div class="sh"><div class="eyebrow">Good to know</div><h2>Frequently asked questions</h2></div>
  <div class="faq-list">
    <details class="qa"><summary>Do you bring your own cleaning equipment and supplies?</summary><p>Yes — choose our "with materials" option and our team brings everything, including eco-friendly supplies. Prefer to use your own? Our "without materials" rate is a little lower.</p></details>
    <details class="qa"><summary>Are your cleaners full-time employees?</summary><p>Absolutely. We hire full-time, background-checked staff on our own company sponsorship. We never use part-time maids or third-party cleaners, so you always know who's in your space.</p></details>
    <details class="qa"><summary>Is there a minimum booking?</summary><p>Yes, a 3-hour minimum per cleaner. Above 4 hours the hourly rate drops. For regular jobs we offer discounted monthly and long-term contract rates.</p></details>
    <details class="qa"><summary>What areas of Dubai do you cover?</summary><p>We serve all of Dubai — from Downtown, Marina and Business Bay to Al Quoz, Jumeirah, Mirdif and beyond. If you're in Dubai, we can help.</p></details>
    <details class="qa"><summary>How do I book?</summary><p>Use the booking form on this page, call us on +971 4 876 7588, or WhatsApp +971 55 985 8136. We confirm your slot the same day.</p></details>
  </div>
</div></section>

<!-- cta -->
<section class="cta" id="contact"><div class="wrap">
  <img class="masc" src="<?php echo $uri; ?>/assets/mascot.png" alt="">
  <h2>Ready for a spotless space?</h2>
  <p>Call +971 4 876 7588, WhatsApp +971 55 985 8136, or book online in under a minute.</p>
  <a class="btn btn-lg" href="#book">Book Your Cleaning</a>
</div></section>

<script>
// Google reviews slider. On the live WordPress site this list is populated
// automatically from the real Google Business reviews (auto-updates).
var REVIEWS = [
  {name:"Tam Devereux", initials:"TD", stars:5, meta:"★ Posted on Google",
   text:"I have had two positive engagements of Hop Sweep Mop Cleaning Services this week. The staff are thorough, professional and punctual as well as being friendly and accommodating. Highly recommended."}
];
(function(){
  var track=document.getElementById('revTrack'),dots=document.getElementById('revDots'),
      prev=document.getElementById('revPrev'),next=document.getElementById('revNext'),i=0,timer;
  if(!track) return;
  REVIEWS.forEach(function(r,idx){
    var s=document.createElement('div');s.className='rev-slide'+(idx===0?' on':'');
    s.innerHTML='<div class="stars">'+'★'.repeat(r.stars)+'</div><q>'+r.text+'</q>'+
      '<div class="who"><div class="av">'+r.initials+'</div><div style="text-align:left"><b>'+r.name+'</b><span>'+r.meta+'</span></div></div>';
    track.appendChild(s);
    var d=document.createElement('button');if(idx===0)d.className='on';
    d.addEventListener('click',function(){go(idx);});dots.appendChild(d);
  });
  var slides=track.querySelectorAll('.rev-slide'),ds=dots.querySelectorAll('button');
  var multi=REVIEWS.length>1;
  if(!multi){prev.style.display='none';next.style.display='none';dots.style.display='none';}
  function go(n){slides[i].classList.remove('on');ds[i].classList.remove('on');
    i=(n+slides.length)%slides.length;slides[i].classList.add('on');ds[i].classList.add('on');restart();}
  function restart(){if(!multi)return;clearInterval(timer);timer=setInterval(function(){go(i+1);},5000);}
  prev.addEventListener('click',function(){go(i-1);});
  next.addEventListener('click',function(){go(i+1);});
  restart();
})();
</script>

<?php get_footer(); ?>
