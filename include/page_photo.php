<?php
if ($obj26->i>0)
{
  ?>
  <section class="gallery">
      <div class="thumbnails">
        <?php
        for ($i=0;$i<$obj26->i;$i++)   
        {
          ?>
          <a href="<?=$domain?>/photo/photo_news/<?=$row26[$i]['p_id'].$row26[$i]['p_end']?>">
            <img src="<?=$domain?>/photo/photo_news_sm/<?=$row26[$i]['p_id'].$row26[$i]['p_end']?>">
          </a>
          <?php   
        }
        ?>
      </div>
      <div class="main-content hidden">
          <div class='main-content-imgs'>
              <img src="" alt="">
          </div>
          <div class="navigation">
              <div class="prev-btn">&lt;</div>
              <div class="next-btn">&gt;</div>
          </div>
          <h2 class="closeGallery">
              &#10006;
          </h2>
          <div class="gallery__pagination">
              <div class="swiper-wrapper"></div>
          </div>

          <div class="main-content-back"></div>
      </div>
  </section>
  <?php   
}
?>