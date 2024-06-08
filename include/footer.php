<footer class="footer">
    <div class="container">
        <a href='<?php echo $domain_url; ?>/' class="footer__logo">
            <img src="<?php echo $domain; ?>/view/themes/11/assets/img/gerb_logo.png" alt="logo">
            <span>
                <?php
                echo $title_site;
                ?>
            </span>
        </a>
        <div class="footer__content">
            <div class="footer__block">
                <div class="footer__item">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="https://www.w3.org/2000/svg">
                        <path d="M256 32C167.67 32 96 96.51 96 176c0 128 160 304 160 304s160-176 160-304c0-79.49-71.67-144-160-144zm0 224a64 64 0 1 1 64-64 64.07 64.07 0 0 1-64 64z"></path>
                    </svg>

                    <span>
                        <?php 
                        echo $street; 
                        ?>
                    </span>
                </div>
                <div class="footer__item">
                    <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">

                        <path id="Vector" d="M14.75 3.16L8.09 7.33L1.42 3.16L1.42 1.5L8.09 5.66L14.75 1.5L14.75 3.16ZM14.75 -0.17L1.42 -0.17C0.49 -0.17 -0.25 0.57 -0.25 1.5L-0.25 11.5C-0.25 11.94 -0.07 12.36 0.24 12.67C0.55 12.99 0.98 13.16 1.42 13.16L14.75 13.16C15.19 13.16 15.62 12.99 15.93 12.67C16.24 12.36 16.42 11.94 16.42 11.5L16.42 1.5C16.42 0.57 15.67 -0.17 14.75 -0.17Z" fill="#FFF"
                                                                                                                                                                                                                                fill-opacity="1.000000" fill-rule="nonzero" />
                    </svg>
                    <span>
                        <!--Email-->
                        <?php
                        echo $contacts[0][3];
                        ?>
                    </span>
                </div>
                <div class="footer__item">
                    <svg width="15.000000" height="15.000000" viewBox="0 0 15 15" fill="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                        <path id="Vector" d="M2.2 6.49C3.4 8.85 5.33 10.78 7.69 11.98L9.53 10.14C9.76 9.91 10.08 9.85 10.38 9.94C11.31 10.25 12.31 10.41 13.35 10.41C13.57 10.41 13.78 10.5 13.94 10.66C14.1 10.81 14.18 11.02 14.18 11.25L14.18 14.16C14.18 14.38 14.1 14.59 13.94 14.75C13.78 14.91 13.57 15 13.35 15C9.59 15 5.99 13.5 3.33 10.85C0.68 8.19 -0.82 4.59 -0.82 0.83C-0.82 0.61 -0.73 0.4 -0.57 0.24C-0.41 0.08 -0.2 0 0.02 0L2.93 0C3.16 0 3.37 0.08 3.52 0.24C3.68 0.4 3.77 0.61 3.77 0.83C3.77 1.87 3.93 2.87 4.24 3.8C4.33 4.1 4.27 4.42 4.04 4.65L2.2 6.49Z"
                                                                                                                                                                                                                                fill="#FFF" fill-opacity="1.000000" fill-rule="nonzero" />
                    </svg>

                    <span>
                        <!--Телефон-->
                        <?php
                        echo $contacts[2][3];
                        ?>
                    </span>
                </div>
                <div class="footer__metric">
                    <!--Место для метрики-->
                </div>
            </div>

            <div class="footer__block">
                <div class="footer__item footer__title">
                    <!--Режим работы-->
                    <?php
                    echo $til_t['working_hours'];
                    ?>
                </div>
                <div class="footer__item">
                    <!--Понедельник-Пятница-->
                    <?php
                    echo $til_t['monday'];
                    echo ' - ';
                    echo $til_t['friday'];
                    ?>
                </div>
                <div class="footer__item">
                    08:30-17:30
                </div>
                <div class="footer__item">
                    <!--Перерыв-->
                    <?php
                    echo $til_t['break_break'];
                    ?> 12:00-13:00
                </div>
                <div class="footer__item">
                    <!--Выходной: Суббота-Воскресенье-->
                    <?php
                    echo $til_t['day_off'];
                    echo ': ';
                    echo $til_t['saturday'];
                    echo ' - ';
                    echo $til_t['sunday'];
                    ?>
                </div>
                <a href="#" class="footer__item">
                    
                </a>
            </div>

            <div class="footer__block">
                <div class="footer__item footer__title">
                    <!--Полезные ссылки-->
                    <?php
                    echo $til['useful_links'];
                    ?>
                </div>
                <a href="<?php echo $domain_url; ?>/site_map/" class="footer__item">
                    <!--Карта сайта-->
                    <?php
                    echo $til['site_map'];
                    ?>
                </a>
                <?php  //Другие страницы
                for ($i=0;$i<$obj99->i;$i++)
                {
                  ?>
                  <a href="<?php echo $domain_url; echo '/'; echo $row99[$i]['n_url']; ?>/" class="footer__item">
                      <?php
                      echo $row99[$i]["n_tema".$_lang]; 
                      ?>
                  </a>
                  <?php
                }
                ?>
                <a href="<?php echo $domain_url; ?>/faq/" class="footer__item">
                    <!--Часто задаваемые вопросы-->
                    <?php
                    echo $til['frequently_asked_questions'];
                    ?>
                </a>
            </div>
        </div>

    </div>
    <div class="footer__copyright">
        <div class="container">
            <?php echo $title_site; ?> | &copy; 2024<script>if (new Date().getFullYear() > 2024) { document.write('-' + new Date().getFullYear()); }</script>
        </div>
    </div>
</footer>

<script src="<?php echo $domain; ?>/view/themes/11/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $domain; ?>/view/themes/11/slick/slick.min.js"></script>
<script src="<?php echo $domain; ?>/view/themes/11/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?=$domain?>/view/visually_impaired/js/bvi.js"></script>
<script>
  new isvek.Bvi({
    target: '.bvi-open',
    fontSize: 14,
  })
</script>