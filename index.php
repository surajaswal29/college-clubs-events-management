<?php 
  include "master.php";
  include "header.php";
  // echo bin2hex(random_bytes(16));
?>
    <!-- HNBGU Council Main Banner -->
    <section id="banner">
      <div class="owl-carousel">
        <div class="main-banner item-1"></div>
        <div class="main-banner item-2"></div>
        <div class="main-banner item-3"></div>
        <div class="main-banner item-4"></div>
      </div>
    </section>
    <!-- HNBGU Council Description -->
    <section id="description" class="container">
      <div class="row mt-4">
        <div class="col-md-12">
          <h1>HNBGU Councils & Clubs</h1>
        </div>
        <div class="col-md-12 d-flex tcc-img">
          <!-- <img
            src="http://www.hnbgu.ac.in/sites/default/files/2020-04/IMG-20191212-WA0001%281%29.jpg"
            alt=""
          /> -->
          <p>
            HNBGU Councils & Clubs have a lot to offer. Whether you join as a
            member or choose to lead one, simply taking part in an
            extracurricular group will enhance your college experience. Gaining
            skills, making connections, and broadening your knowledge through a
            student organization will help you become a more well-rounded
            individual — one that’s ready to take on their future career!
          </p>
        </div>
        <div class="col-12 mt-2">
          <p>The following clubs and councils have been registered.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 hnbgu-council-tab border">
          <ul>
            <li>
              <!-- Council Name -->
              <div class="row">
                <div class="col-12 dp-sb" id="down-tab">
                  <h4>Technical Council</h4>
                  <i class="fas fa-angle-down"></i>
                </div>
              </div>
              <!-- Clubs Names -->
              <div class="row">
                <div class="col-12">
                  <div id="hnbgu-clubs" class="hnbgu-clubs hnbgu-clubs-hide">
                    <ul>
                      <li><a href="clubs?cc_name=Computer Science Club" class="club-link text-dark"> Computer Science Club          </a> </li>
                      <li><a href="clubs?cc_name=Electrical Club" class="club-link text-dark"> Electrical Club                </a>  </li>
                      <li><a href="clubs?cc_name=Mechanical Club" class="club-link text-dark"> Mechanical Club                </a>   </li>
                      <li><a href="clubs?cc_name=Robotics and Instrumental Club" class="club-link text-dark"> Robotics and Instrumental Club </a>   </li>
                      <li><a href="clubs?cc_name=Designing Club" class="club-link text-dark"> Designing Club                 </a>  </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <!-- Council Name -->
              <div class="row">
                <div class="col-12 dp-sb" id="down-tab">
                  <h4>Language and Literature Council</h4>
                  <i class="fas fa-angle-down"></i>
                </div>
              </div>
              <!-- Clubs Names -->
              <div class="row">
                <div class="col-12">
                  <div id="hnbgu-clubs" class="hnbgu-clubs hnbgu-clubs-hide">
                    <ul>
                      <li><a href="clubs?cc_name=Language Club" class="club-link text-dark"> Language Club</a></li>
                      <li><a href="clubs?cc_name=Reading Club" class="club-link text-dark"> Reading Club</a></li>
                      <li><a href="clubs?cc_name=Writing Club" class="club-link text-dark"> Writing Club</a></li>
                      <li><a href="clubs?cc_name=Debate Club" class="club-link text-dark"> Debate Club</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <!-- Council Name -->
              <div class="row">
                <div class="col-12 dp-sb" id="down-tab">
                  <h4>Media and Cultural Council</h4>
                  <i class="fas fa-angle-down"></i>
                </div>
              </div>
              <!-- Clubs Names -->
              <div class="row">
                <div class="col-12">
                  <div id="hnbgu-clubs" class="hnbgu-clubs hnbgu-clubs-hide">
                    <ul>
                      <li>Drama Club</li>
                      <li>Music Club</li>
                      <li>Poetry Club</li>
                      <li>Script Writing Community</li>
                      <li>Video and Media Club</li>
                      <li>Anchor Community</li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <!-- Council Name -->
              <div class="row">
                <div class="col-12 dp-sb" id="down-tab">
                  <h4>Science Council</h4>
                  <i class="fas fa-angle-down"></i>
                </div>
              </div>
            </li>
            <li>
              <!-- Council Name -->
              <div class="row">
                <div class="col-12 dp-sb" id="down-tab">
                  <h4>Management & Commerce Council</h4>
                  <i class="fas fa-angle-down"></i>
                </div>
              </div>
            </li>
          </ul>
          <div class="row mt-3">
            <div class="col-md-12">
              <?php include "events-component.php"; ?>
            </div>
            <div class="col-md-12 view-more">
              <a href="eventlist"
                >View more <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
            <div class="col-md-12 reg-note mb-2">
              <p>
                If you want to join a group or want to participate in any event
                then you have to fill a registration form first.
              </p>
              <p> Note: This is just one time registration. You don't have to
                  register again, just login to the site and join event.
              </p>
              <a href="registration">Register Here</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="instagram">
            <blockquote
              class="instagram-media"
              data-instgrm-captioned
              data-instgrm-permalink="https://www.instagram.com/p/CXDXZ10oINv/?utm_source=ig_embed&amp;utm_campaign=loading"
              data-instgrm-version="14"
              style="
                background: #fff;
                border: 0;
                border-radius: 3px;
                box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.5),
                  0 1px 10px 0 rgba(0, 0, 0, 0.15);
                margin: 1px;
                max-width: 540px;
                min-width: 326px;
                padding: 0;
                width: 99.375%;
                width: -webkit-calc(100% - 2px);
                width: calc(100% - 2px);
              "
            >
              <div style="padding: 16px">
                <a
                  href="https://www.instagram.com/p/CXDXZ10oINv/?utm_source=ig_embed&amp;utm_campaign=loading"
                  style="
                    background: #ffffff;
                    line-height: 0;
                    padding: 0 0;
                    text-align: center;
                    text-decoration: none;
                    width: 100%;
                  "
                  target="_blank"
                >
                  <div
                    style="
                      display: flex;
                      flex-direction: row;
                      align-items: center;
                    "
                  >
                    <div
                      style="
                        background-color: #f4f4f4;
                        border-radius: 50%;
                        flex-grow: 0;
                        height: 40px;
                        margin-right: 14px;
                        width: 40px;
                      "
                    ></div>
                    <div
                      style="
                        display: flex;
                        flex-direction: column;
                        flex-grow: 1;
                        justify-content: center;
                      "
                    >
                      <div
                        style="
                          background-color: #f4f4f4;
                          border-radius: 4px;
                          flex-grow: 0;
                          height: 14px;
                          margin-bottom: 6px;
                          width: 100px;
                        "
                      ></div>
                      <div
                        style="
                          background-color: #f4f4f4;
                          border-radius: 4px;
                          flex-grow: 0;
                          height: 14px;
                          width: 60px;
                        "
                      ></div>
                    </div>
                  </div>
                  <div style="padding: 19% 0"></div>
                  <div
                    style="
                      display: block;
                      height: 50px;
                      margin: 0 auto 12px;
                      width: 50px;
                    "
                  >
                    <svg
                      width="50px"
                      height="50px"
                      viewBox="0 0 60 60"
                      version="1.1"
                      xmlns="https://www.w3.org/2000/svg"
                      xmlns:xlink="https://www.w3.org/1999/xlink"
                    >
                      <g
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd"
                      >
                        <g
                          transform="translate(-511.000000, -20.000000)"
                          fill="#000000"
                        >
                          <g>
                            <path
                              d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"
                            ></path>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div style="padding-top: 8px">
                    <div
                      style="
                        color: #3897f0;
                        font-family: Arial, sans-serif;
                        font-size: 14px;
                        font-style: normal;
                        font-weight: 550;
                        line-height: 18px;
                      "
                    >
                      View this post on Instagram
                    </div>
                  </div>
                  <div style="padding: 12.5% 0"></div>
                  <div
                    style="
                      display: flex;
                      flex-direction: row;
                      margin-bottom: 14px;
                      align-items: center;
                    "
                  >
                    <div>
                      <div
                        style="
                          background-color: #f4f4f4;
                          border-radius: 50%;
                          height: 12.5px;
                          width: 12.5px;
                          transform: translateX(0px) translateY(7px);
                        "
                      ></div>
                      <div
                        style="
                          background-color: #f4f4f4;
                          height: 12.5px;
                          transform: rotate(-45deg) translateX(3px)
                            translateY(1px);
                          width: 12.5px;
                          flex-grow: 0;
                          margin-right: 14px;
                          margin-left: 2px;
                        "
                      ></div>
                      <div
                        style="
                          background-color: #f4f4f4;
                          border-radius: 50%;
                          height: 12.5px;
                          width: 12.5px;
                          transform: translateX(9px) translateY(-18px);
                        "
                      ></div>
                    </div>
                    <div style="margin-left: 8px">
                      <div
                        style="
                          background-color: #f4f4f4;
                          border-radius: 50%;
                          flex-grow: 0;
                          height: 20px;
                          width: 20px;
                        "
                      ></div>
                      <div
                        style="
                          width: 0;
                          height: 0;
                          border-top: 2px solid transparent;
                          border-left: 6px solid #f4f4f4;
                          border-bottom: 2px solid transparent;
                          transform: translateX(16px) translateY(-4px)
                            rotate(30deg);
                        "
                      ></div>
                    </div>
                    <div style="margin-left: auto">
                      <div
                        style="
                          width: 0px;
                          border-top: 8px solid #f4f4f4;
                          border-right: 8px solid transparent;
                          transform: translateY(16px);
                        "
                      ></div>
                      <div
                        style="
                          background-color: #f4f4f4;
                          flex-grow: 0;
                          height: 12px;
                          width: 16px;
                          transform: translateY(-4px);
                        "
                      ></div>
                      <div
                        style="
                          width: 0;
                          height: 0;
                          border-top: 8px solid #f4f4f4;
                          border-left: 8px solid transparent;
                          transform: translateY(-4px) translateX(8px);
                        "
                      ></div>
                    </div>
                  </div>
                  <div
                    style="
                      display: flex;
                      flex-direction: column;
                      flex-grow: 1;
                      justify-content: center;
                      margin-bottom: 24px;
                    "
                  >
                    <div
                      style="
                        background-color: #f4f4f4;
                        border-radius: 4px;
                        flex-grow: 0;
                        height: 14px;
                        margin-bottom: 6px;
                        width: 224px;
                      "
                    ></div>
                    <div
                      style="
                        background-color: #f4f4f4;
                        border-radius: 4px;
                        flex-grow: 0;
                        height: 14px;
                        width: 144px;
                      "
                    ></div></div
                ></a>
                <p
                  style="
                    color: #c9c8cd;
                    font-family: Arial, sans-serif;
                    font-size: 14px;
                    line-height: 17px;
                    margin-bottom: 0;
                    margin-top: 8px;
                    overflow: hidden;
                    padding: 8px 0 7px;
                    text-align: center;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                  "
                >
                  <a
                    href="https://www.instagram.com/p/CXDXZ10oINv/?utm_source=ig_embed&amp;utm_campaign=loading"
                    style="
                      color: #c9c8cd;
                      font-family: Arial, sans-serif;
                      font-size: 14px;
                      font-style: normal;
                      font-weight: normal;
                      line-height: 17px;
                      text-decoration: none;
                    "
                    target="_blank"
                    >A post shared by Hnbgu Srinagar Garhwal Uttarakhand
                    (@hnbgusrinagar)</a
                  >
                </p>
              </div>
            </blockquote>
            <script async src="//www.instagram.com/embed.js"></script>
          </div>
          <div class="twitter mt-4">
            <blockquote class="twitter-tweet">
              <p lang="en" dir="ltr">
                HNBGU Councils and Clubs<a
                  href="https://twitter.com/hashtag/hnbgu?src=hash&amp;ref_src=twsrc%5Etfw"
                  >#hnbgu</a
                >
                <a
                  href="https://twitter.com/hashtag/council?src=hash&amp;ref_src=twsrc%5Etfw"
                  >#council</a
                >
                <a
                  href="https://twitter.com/hashtag/Club?src=hash&amp;ref_src=twsrc%5Etfw"
                  >#Club</a
                >
                <br />Technical and Cultural Council for SOET
                <a href="https://t.co/bEs1AlZknd">pic.twitter.com/bEs1AlZknd</a>
              </p>
              &mdash; Suraj Aswal (@SurajAs02293624)
              <a
                href="https://twitter.com/SurajAs02293624/status/1539519277371248641?ref_src=twsrc%5Etfw"
                >June 22, 2022</a
              >
            </blockquote>
            <script
              async
              src="https://platform.twitter.com/widgets.js"
              charset="utf-8"
            ></script>
          </div>
          <div class="gallery-container">
            <h2>Gallery</h2>
            <div class="photo-gallery">
              <img src="images/hackathon.png" alt="Image Gallery" />
              <a href="#">View Images</a>
            </div>
            <div class="video-gallery mt-3">
              <iframe
                src="https://www.youtube.com/embed/oIkynC-M2gA"
                title="उत्तराखण्ड में विवेकानंद पर्यटन परिपथ ||VIVEKANANDA TOURISM CIRCUT IN UTTARAKHAND ##"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
              <a href="#">View Videos</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- HNBGU Footer -->
  <?php include "footer.php"?>
    <!-- owl-carousel script -->
    <script>
      $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
          items: 1,
          nav: true,
          loop: true,
          autoplay: true,
          dots: true,
        });
      });
    </script>
  </body>
</html>
<!--Author: Suraj Aswal -->
