<?php 
  include "master.php";
  include "header.php";
?>
    <!-- HNBGU Council sub Banner -->
    <!-- <section id="banner">
      <div class="sub-banner item-3"></div>
    </section> -->
    <!-- HNBGU Council Contact Section -->
    <section id="contact">
      <main class="container">
        <div class="row mt-5">
          <div class="col-md-4 p-3">
            <address class="address border">
              <h2>Address</h2>
              <span
                >Hemvati Nandan Bahuguna Garhwal University Madhi Chauras,
                Srinagar, Uttarakhand 246174, India</span
              >
            </address>
          </div>
          <div class="col-md-4 p-3">
            <div class="contact border">
              <h2>Contact</h2>
              <!-- <span>Contact Number</span><br /> -->
              <span>Phone: +91-7535868150</span><br />
              <!-- <span>Email Address</span><br /> -->
              <span>Email: surajaswal.dev@gmail.com</span>
            </div>
          </div>
          <div class="col-md-4 p-3">
            <div class="map-loc border">
              <h2>Location</h2>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d49914.387256562906!2d78.803545!3d30.227818999999997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb995b03d1dd555b0!2sHemvati%20Nandan%20Bahuguna%20Garhwal%20University!5e1!3m2!1sen!2sus!4v1656176678952!5m2!1sen!2sus"
                style="border: 0"
                width="100%"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
        <div class="row mt-5 border-top">
          <div class="col-md-12 mt-4">
            <h3 class="text-center">Have any Suggestions/Issues/Feedback?</h3>
          </div>
          <div class="col-md-12 pr-center mt-4">
            <form action="" class="contact-form shadow">
              <div class="col-md-12">
                <label for="email"
                  ><i class="fas fa-envelope"></i> Your Email ID</label
                >
                <input
                  type="email"
                  name="c-email"
                  id="c-email"
                  class="form-control"
                />
              </div>
              <div class="col-md-12 mt-3">
                <label for="Message"
                  ><i class="fas fa-edit"></i> Write your message</label
                >
                <textarea
                  name="msg-1"
                  id="msg-1"
                  class="form-control"
                ></textarea>
              </div>
              <div class="col-md-12 mt-3">
                <button type="submit" class="btn text-light">
                  <i class="fas fa-paper-plane"></i>
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>
      </main>
    </section>
    <!-- Footer -->
    <?php include 'footer.php' ?>
