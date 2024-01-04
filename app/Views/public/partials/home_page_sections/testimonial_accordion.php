    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Explore the satisfaction of our clients in our Testimonials section. Read real experiences from homeowners, business owners, and individuals who've entrusted their projects to Hights Construction & Beautification. These testimonials offer a glimpse into the quality, dedication, and innovation that define our approach. Imagine the possibilities as you peruse these firsthand accounts</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <?php if(isset($all_testimonials)) : ?>
              <?php foreach($all_testimonials as $tsm) : ?>
                <div class="swiper-slide">
                  <div class="testimonial-wrap">
                    <div class="testimonial-item">
                      <div class="d-flex align-items-center">
                        <img src="<?=base_url('uploads/'.$tsm['customer_pic'])?>" class="testimonial-img flex-shrink-0" alt="">
                        <div>
                          <h3><?=$tsm['customer_name']?></h3>
                          <h4><?=$tsm['customer_title']?></h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <?=$tsm['customer_testimoney']?>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
              <?php endforeach; ?>
            <?php endif; ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>