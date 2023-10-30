<section class="accone_section">
    <div class="container_big">
      <div class="faq_accordion">
        <div class="accord">
          <?php if( have_rows('add_faqs') ): ?>
          <?php $delay =1; while( have_rows('add_faqs') ): the_row();
             $add_title = get_sub_field('add_title');
             $add_description = get_sub_field('add_description');
            ?>
          <div class="accord_box" data-aos="fade-up" data-aos-delay="<?php echo 100 * $delay; ?>">
            <?php if(!empty($add_title)) { ?>
            <div class="accord_heading"><span></span> <?php echo $add_title; ?></div>
            <?php } ?>
            <?php if(!empty($add_description)) { ?>
            <div class="accord_content">
              <?php echo $add_description; ?>
            </div>
            <?php } ?>

          </div>
          <?php $delay++; endwhile; ?>
    <?php endif; ?>
        </div>

        <div class="accord rightcolumn">
          <?php if( have_rows('add_faqs_column2') ): ?>
          <?php $delay =1; while( have_rows('add_faqs_column2') ): the_row();
             $add_title = get_sub_field('add_title');
             $add_description = get_sub_field('add_description');
            ?>
          <div class="accord_box" data-aos="fade-up" data-aos-delay="<?php echo 100 * $delay; ?>">
            <?php if(!empty($add_title)) { ?>
            <div class="accord_heading"><span></span> <?php echo $add_title; ?></div>
            <?php } ?>
            <?php if(!empty($add_description)) { ?>
            <div class="accord_content">
              <?php echo $add_description; ?>
            </div>
            <?php } ?>

          </div>
          <?php $delay++; endwhile; ?>
    <?php endif; ?>
        </div>

      </div>
    </div>
  </section>