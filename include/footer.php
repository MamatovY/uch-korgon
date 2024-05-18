<footer class="footer">
    <div class="container">
        <a href='<?php echo $domain_url; ?>/' class="footer__logo">
            <img src="<?=$domain."/view/themes/".$contacts[5]['d_title']?>/assets/img/gerb-icon.png" alt="logo">
            <span>
                <?php echo $title_site; ?>
            </span>
        </a>
        <div class="footer__content">
            <div class="footer__block">
                <div class="footer__item fic">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="https://www.w3.org/2000/svg">
                        <path d="M256 32C167.67 32 96 96.51 96 176c0 128 160 304 160 304s160-176 160-304c0-79.49-71.67-144-160-144zm0 224a64 64 0 1 1 64-64 64.07 64.07 0 0 1-64 64z"></path>
                    </svg>

                    <span>
                        <?php echo $street; ?>
                    </span>
                </div>
                <div class="footer__item">
                    <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                        <path id="Vector" d="M14.75 3.16L8.09 7.33L1.42 3.16L1.42 1.5L8.09 5.66L14.75 1.5L14.75 3.16ZM14.75 -0.17L1.42 -0.17C0.49 -0.17 -0.25 0.57 -0.25 1.5L-0.25 11.5C-0.25 11.94 -0.07 12.36 0.24 12.67C0.55 12.99 0.98 13.16 1.42 13.16L14.75 13.16C15.19 13.16 15.62 12.99 15.93 12.67C16.24 12.36 16.42 11.94 16.42 11.5L16.42 1.5C16.42 0.57 15.67 -0.17 14.75 -0.17Z" fill="#FFF"
                                                                                                                                                                                                                                fill-opacity="1.000000" fill-rule="nonzero" />
                    </svg>
                    <span>
                        <?php echo $contacts[0][3]; ?>
                    </span>
                </div>
                <div class="footer__item">
                    <svg width="15.000000" height="15.000000" viewBox="0 0 15 15" fill="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                        <path id="Vector" d="M2.2 6.49C3.4 8.85 5.33 10.78 7.69 11.98L9.53 10.14C9.76 9.91 10.08 9.85 10.38 9.94C11.31 10.25 12.31 10.41 13.35 10.41C13.57 10.41 13.78 10.5 13.94 10.66C14.1 10.81 14.18 11.02 14.18 11.25L14.18 14.16C14.18 14.38 14.1 14.59 13.94 14.75C13.78 14.91 13.57 15 13.35 15C9.59 15 5.99 13.5 3.33 10.85C0.68 8.19 -0.82 4.59 -0.82 0.83C-0.82 0.61 -0.73 0.4 -0.57 0.24C-0.41 0.08 -0.2 0 0.02 0L2.93 0C3.16 0 3.37 0.08 3.52 0.24C3.68 0.4 3.77 0.61 3.77 0.83C3.77 1.87 3.93 2.87 4.24 3.8C4.33 4.1 4.27 4.42 4.04 4.65L2.2 6.49Z"
                                                                                                                                                                                                                                fill="#FFF" fill-opacity="1.000000" fill-rule="nonzero" />
                    </svg>

                    <span>
                        <?php echo $contacts[2][3]; ?>
                    </span>
                </div>
                <div class="footer__metric">
                    <!-- Yandex.Metrika informer -->
                    <a href="https://metrika.yandex.ru/stat/?id=97020750&amp;from=informer"
                    target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/97020750/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                    style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="97020750" data-lang="ru" /></a>
                    <!-- /Yandex.Metrika informer -->

                    <!-- Yandex.Metrika counter -->
                    <script type="text/javascript" >
                       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                       m[i].l=1*new Date();
                       for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
                       k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
                       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                       ym(97020750, "init", {
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true
                       });
                    </script>
                    <noscript><div><img src="https://mc.yandex.ru/watch/97020750" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                    <!-- /Yandex.Metrika counter -->
                </div>
            </div>

            <div class="footer__block">
                <div class="footer__item footer__title">
                    <?php echo $til['working_hours']; ?><!--Режим работы-->
                </div>
                <div class="footer__item">
                    <?php echo $til['monday']; echo '-'; echo $til['friday']; ?><!--Понедельник-Пятница-->
                </div>
                <div class="footer__item">
                    08:30-17:30
                </div>
                <div class="footer__item">
                    <?php echo $til['break_break']; ?><!--Перерыв--> 12:00-13:00
                </div>
                <div class="footer__item">
                    <?php echo $til['day_off']; echo ': '; echo $til['saturday']; echo '-'; echo $til['sunday']; ?><!--Выходной: Суббота-Воскресенье-->
                </div>
            </div>

            <div class="footer__block">
                <div class="footer__item footer__title">
                    <?php echo $til['useful_links']; ?>
                </div>
                
                <a href="<?php echo $domain_url; ?>/map/" class="footer__item">
                    <?php echo $til['site_map']; ?><!--Карта сайта-->
                </a>
                
                <?php
                for ($i=0;$i<$obj99->i;$i++)
                {
                  ?>
                  <a href="<?php echo $domain_url; echo '/'; echo $row99[$i]['n_url']; ?>/" class="footer__item">
                      <?php echo $row99[$i]["n_tema".$_lang]; ?><!--Политика конфиденциальности-->
                  </a>
                  <?php
                }
                ?>
                
                <a href="<?php echo $domain_url; ?>/faq/" class="footer__item">
                    <?php echo $til['frequently_asked_questions']; ?><!--Часто задаваемые вопросы-->
                </a>
                
                <a href="<?php echo $domain_url; ?>/feedback/" class="footer__item">
                    <?php echo $til_t['internet_reception']; ?><!--Интернет-приемная-->
                </a>
            </div>
        </div>

        <div class="footer__copyright">
            &copy; 2024<script>if (new Date().getFullYear() > 2024) { document.write('-' + new Date().getFullYear()); }</script> <?php echo $title_site; ?>
        </div>
    </div>
</footer>

<script type="text/javascript" src="<?=$domain."/view/themes/".$contacts[5]['d_title']?>/js/jquery.js"></script>
<script type="text/javascript" src="<?=$domain."/view/themes/".$contacts[5]['d_title']?>/slick/slick.min.js"></script>
<script type="text/javascript" src='<?=$domain."/view/themes/".$contacts[5]['d_title']?>/js/weather.js'></script>
<script type="text/javascript" src="<?=$domain."/view/themes/".$contacts[5]['d_title']?>/js/main.js"></script>