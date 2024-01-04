<section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Portfolio</h2>
          <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters" id="portfolio_filter">
              <?php if(isset($portfolio_categories)) : ?>
                    <li data-filter="*" class="filter-active">All</li>
                  <?php foreach($portfolio_categories as $catego): ?>
                    <li data-filter=".filter-<?=substr($catego['category'], 0,2)?>"><?=$catego['category']?></li>
                  <?php endforeach; ?>
              <?php endif; ?>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <?php if(isset($all_portfolios)) : ?>
                  <?php foreach($all_portfolios as $portfo): ?>
                    <div class="col-xl-4 col-md-6 portfolio-item filter-<?=substr($portfo['category'], 0,2)?>">
                      <div class="portfolio-wrap">
                        <a href="uploads/<?=$portfo['shceenshoti']?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="uploads/<?=$portfo['shceenshoti']?>" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                          <h4><a href="<?=base_url('portfolio-details/'.$portfo['id'])?>" title="More Details"><?=$portfo['title']?></a></h4>
                          <p><?=$portfo['snippet']?></p>
                        </div>
                      </div>
                    </div><!-- End Portfolio Item -->
                  <?php endforeach; ?>
              <?php endif; ?>

          </div>
        </div>
      </div>
  </section>