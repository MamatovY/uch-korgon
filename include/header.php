<div class="top">
    <header class="header">
        <div class="header__top container">

            <nav class="nav">
                <ul class='nav__ul'>
                    <li class='nav__item'>
                        <a href="<?php echo $domain_url; ?>/">
                            <?php 
                            echo $til['glavn']; 
                            ?>
                            <!--Главная-->
                        </a>
                    </li>

                    <div class="nav__line"></div>
                    
                    <li class='nav__item'>
                        <a href="<?php echo $domain_url; ?>/about/">
                            <!--О нас-->
                            <?php 
                            echo $til['about_us']; 
                            ?>
                        </a>
                    </li>

                    <div class="nav__line"></div>
                    
                    <li class='nav__item'>
                        <a href="<?php echo $domain_url; ?>/sotru/">
                            <!--Сотрудники-->
                            <?php 
                            echo $til['sotrudniki']; 
                            ?>
                        </a>
                    </li>

                    <div class="nav__line"></div>

                    <?php
                    if ( $contacts[8]['d_tema'] == 'on' && $obj100->i > 0 )
                    {
                    ?>
                    <li class='nav__item dropdown'>
                        <div class='dropdown-title f'>
                            <!--Документы-->
                            <?php 
                            echo $til['documents']; 
                            ?>
                            <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_252_2025)">
                                    <path d="M12.0002 17.17C11.3431 17.1712 10.6923 17.0428 10.0849 16.7923C9.47746 16.5418 8.92538 16.174 8.46019 15.71L0.290185 7.53999C0.101882 7.35169 -0.00390625 7.09629 -0.00390625 6.82999C-0.00390625 6.56369 0.101882 6.30829 0.290185 6.11999C0.478489 5.93169 0.733884 5.8259 1.00019 5.8259C1.26649 5.8259 1.52188 5.93169 1.71019 6.11999L9.88019 14.29C10.4427 14.8518 11.2052 15.1673 12.0002 15.1673C12.7952 15.1673 13.5577 14.8518 14.1202 14.29L22.2902 6.11999C22.4785 5.93169 22.7339 5.8259 23.0002 5.8259C23.2665 5.8259 23.5219 5.93169 23.7102 6.11999C23.8985 6.30829 24.0043 6.56369 24.0043 6.82999C24.0043 7.09629 23.8985 7.35169 23.7102 7.53999L15.5402 15.71C15.075 16.174 14.5229 16.5418 13.9155 16.7923C13.3081 17.0428 12.6572 17.1712 12.0002 17.17Z"
                                                                                                                                                                                                                                            fill="#BDBABA" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_252_2025">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <ul>
                          <?php
                          for ($i=0;$i<$obj100->i;$i++)
                          {
                            ?>
                            <li class='dropdown__item'>
                              <a href="<?php echo $domain_url; echo '/documents/id='; echo $row100[$i]['d3_id']; ?>">
                                <?php
                                echo $row100[$i]["d3_title".$_lang]; 
                                ?>
                              </a>
                            </li>
                            <?php
                          }
                          ?>
                        </ul>
                    </li>
                    <?php
                    }
                    else
                    {
                      ?>
                      <li class='nav__item'>
                          <a href="<?php echo $domain_url; ?>/documents/">
                            <!--Документы-->
                            <?php 
                            echo $til['documents']; 
                            ?>
                          </a>
                      </li>
                      <?php 
                    }
                    ?>
                    <div class="nav__line"></div>
                </ul>
            </nav>

            <div class="header__right">
                <div class="header__mobile-logo">
                    <a href="<?php echo $domain_url; ?>/">
                        <img src="<?php echo $domain; ?>/view/themes/11/assets/img/gerb_logo.png" alt="logo">
                    </a>
                    <span>
                        <?php
                        echo $title_site;
                        ?>
                    </span>
                </div>
                <form class='fic' method="get" action="<?php echo $domain_url; ?>/search_result/">
                    <input type="text" class='header__input' placeholder='<?php echo $til['search_search']; ?>' name='q'>
                    <button type="submit" class='header__submit'>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" id="search" x="0px" y="0px" viewBox="0 0 24 24" height="1.8em" width="1.8em" xmlns="https://www.w3.org/2000/svg">
                            <g>
                                <path d="M20.031,20.79c0.46,0.46,1.17-0.25,0.71-0.7l-3.75-3.76c1.27-1.41,2.04-3.27,2.04-5.31
                            c0-4.39-3.57-7.96-7.96-7.96s-7.96,3.57-7.96,7.96c0,4.39,3.57,7.96,7.96,7.96c1.98,0,3.81-0.73,5.21-1.94L20.031,20.79z
                            M4.11,11.02c0-3.84,3.13-6.96,6.96-6.96c3.84,0,6.96,3.12,6.96,6.96c0,3.84-3.12,6.96-6.96,6.96C7.24,17.98,4.11,14.86,4.11,11.02
                            z"></path>
                            </g>
                        </svg>
                    </button>
                    <svg class='cross' stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 15 15" height="2em" width="2em" xmlns="https://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7816 4.03157C12.0062 3.80702 12.0062 3.44295 11.7816 3.2184C11.5571 2.99385 11.193 2.99385 10.9685 3.2184L7.50005 6.68682L4.03164 3.2184C3.80708 2.99385 3.44301 2.99385 3.21846 3.2184C2.99391 3.44295 2.99391 3.80702 3.21846 4.03157L6.68688 7.49999L3.21846 10.9684C2.99391 11.193 2.99391 11.557 3.21846 11.7816C3.44301 12.0061 3.80708 12.0061 4.03164 11.7816L7.50005 8.31316L10.9685 11.7816C11.193 12.0061 11.5571 12.0061 11.7816 11.7816C12.0062 11.557 12.0062 11.193 11.7816 10.9684L8.31322 7.49999L11.7816 4.03157Z"
                                                                                                                                                                                                                                fill="currentColor"></path>
                    </svg>
                </form>
                <a href='#' class="bvi-open header__visually fic">
                    <div>
                        <svg width="20.000000" height="16.000000" viewBox="0 0 20 16" fill="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                            <path id="Vector" d="M19.71 7.4C17.69 2.71 13.89 -0.2 9.79 -0.2C5.69 -0.2 1.89 2.71 -0.13 7.4C-0.18 7.52 -0.21 7.66 -0.21 7.8C-0.21 7.93 -0.18 8.07 -0.13 8.2C1.89 12.89 5.69 15.8 9.79 15.8C13.89 15.8 17.69 12.89 19.71 8.2C19.77 8.07 19.8 7.93 19.8 7.8C19.8 7.66 19.77 7.52 19.71 7.4ZM9.79 13.8C6.62 13.8 3.62 11.51 1.89 7.8C3.62 4.09 6.62 1.8 9.79 1.8C12.96 1.8 15.96 4.09 17.69 7.8C15.96 11.51 12.96 13.8 9.79 13.8ZM9.79 3.8C9 3.8 8.23 4.03 7.57 4.47C6.91 4.91 6.4 5.53 6.1 6.26C5.8 7 5.72 7.8 5.87 8.58C6.02 9.35 6.41 10.06 6.97 10.62C7.52 11.18 8.24 11.56 9.01 11.72C9.79 11.87 10.59 11.79 11.32 11.49C12.06 11.19 12.68 10.68 13.12 10.02C13.56 9.36 13.79 8.59 13.79 7.8C13.79 6.73 13.37 5.72 12.62 4.97C11.87 4.22 10.85 3.8 9.79 3.8ZM9.79 9.8C9.4 9.8 9.01 9.68 8.68 9.46C8.35 9.24 8.1 8.93 7.95 8.56C7.79 8.19 7.75 7.79 7.83 7.4C7.91 7.02 8.1 6.66 8.38 6.38C8.66 6.1 9.02 5.91 9.4 5.83C9.79 5.76 10.19 5.8 10.56 5.95C10.92 6.1 11.24 6.35 11.46 6.68C11.68 7.01 11.79 7.4 11.79 7.8C11.79 8.33 11.58 8.83 11.21 9.21C10.83 9.58 10.32 9.8 9.79 9.8Z"
                                                                                                                                                                                                                                    fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero" />
                        </svg>
                    </div>
                    <span>
                        <!--Версия для слабовидящих-->
                        <?php
                        echo $til['version_v_i'];
                        ?>
                    </span>
                </a>
                <div class="header__lang fic">
                    <div>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 17 17" height="1.5em" width="1.5em" xmlns="https://www.w3.org/2000/svg">
                            <g></g>
                            <path
                                                                                                                                                                                                                                    d="M8.516 0c-4.687 0-8.5 3.813-8.5 8.5s3.813 8.5 8.5 8.5 8.5-3.813 8.5-8.5-3.814-8.5-8.5-8.5zM1.041 9h2.937c0.044 1.024 0.211 2.031 0.513 3h-2.603c-0.481-0.906-0.776-1.923-0.847-3zM3.978 8h-2.937c0.071-1.077 0.366-2.094 0.847-3h2.6c-0.301 0.969-0.467 1.976-0.51 3zM5.547 5h5.896c0.33 0.965 0.522 1.972 0.569 3h-7.034c0.046-1.028 0.239-2.035 0.569-3zM4.978 9h7.035c-0.049 1.028-0.241 2.035-0.572 3h-5.891c-0.331-0.965-0.524-1.972-0.572-3zM13.013 9h2.978c-0.071 1.077-0.366 2.094-0.847 3h-2.644c0.302-0.969 0.469-1.976 0.513-3zM13.013 8c-0.043-1.024-0.209-2.031-0.51-3h2.641c0.48 0.906 0.775 1.923 0.847 3h-2.978zM14.502 4h-2.354c-0.392-0.955-0.916-1.858-1.55-2.7 1.578 0.457 2.938 1.42 3.904 2.7zM9.074 1.028c0.824 0.897 1.484 1.9 1.972 2.972h-5.102c0.487-1.071 1.146-2.073 1.97-2.97 0.199-0.015 0.398-0.030 0.602-0.030 0.188 0 0.373 0.015 0.558 0.028zM6.383 1.313c-0.629 0.838-1.151 1.737-1.54 2.687h-2.314c0.955-1.267 2.297-2.224 3.854-2.687zM2.529 13h2.317c0.391 0.951 0.915 1.851 1.547 2.689-1.561-0.461-2.907-1.419-3.864-2.689zM7.926 15.97c-0.826-0.897-1.488-1.899-1.978-2.97h5.094c-0.49 1.072-1.152 2.075-1.979 2.972-0.181 0.013-0.363 0.028-0.547 0.028-0.2 0-0.395-0.015-0.59-0.030zM10.587 15.703c0.636-0.842 1.164-1.747 1.557-2.703h2.358c-0.968 1.283-2.332 2.247-3.915 2.703z">
                            </path>
                        </svg>
                    </div>
                    <?php
                    if ($lang_value=='on')
                    {
                      ?>
                      <select name="lang" id="lang" style='text-transform: uppercase;'>
                        <?php
                        foreach($lang as $key=>$value) 
                        {
                          ?>
                          <option value="<?php echo $domain; echo '/language.php?lang='; echo $key; ?>" <?php if ($_COOKIE['lang']==$key) echo 'selected="selected"'; ?>>
                              <?php
                              echo $key; 
                              ?>
                          </option>
                          <?php
                        }
                        ?>
                      </select>
                      <?php
                    }
                    ?>

                </div>


            </div>
        </div>
        <div class="header__bottom container">
            <div class="header__logo">
                <a href="<?php echo $domain_url; ?>/">
                    <img src="<?php echo $domain; ?>/view/themes/11/assets/img/gerb_logo.png" alt="logo">
                </a>
                <span>
                    <?php
                    echo $title_site;
                    ?>
                </span>
            </div>

            <nav class="nav2">
                <ul class='nav2__ul'>
                    <li class="nav2__item">
                        <a href="<?php echo $domain_url; ?>/news/">
                            <!--Новости-->
                            <?php 
                            echo $til['news']; 
                            ?>
                        </a>
                    </li>
                    <li class="nav2__item dropdown">
                        <div class='dropdown-title f'>
                            <!--Разделы-->
                            <?php 
                            echo $til_t['sections']; 
                            ?>
                            <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_252_2025)">
                                    <path d="M12.0002 17.17C11.3431 17.1712 10.6923 17.0428 10.0849 16.7923C9.47746 16.5418 8.92538 16.174 8.46019 15.71L0.290185 7.53999C0.101882 7.35169 -0.00390625 7.09629 -0.00390625 6.82999C-0.00390625 6.56369 0.101882 6.30829 0.290185 6.11999C0.478489 5.93169 0.733884 5.8259 1.00019 5.8259C1.26649 5.8259 1.52188 5.93169 1.71019 6.11999L9.88019 14.29C10.4427 14.8518 11.2052 15.1673 12.0002 15.1673C12.7952 15.1673 13.5577 14.8518 14.1202 14.29L22.2902 6.11999C22.4785 5.93169 22.7339 5.8259 23.0002 5.8259C23.2665 5.8259 23.5219 5.93169 23.7102 6.11999C23.8985 6.30829 24.0043 6.56369 24.0043 6.82999C24.0043 7.09629 23.8985 7.35169 23.7102 7.53999L15.5402 15.71C15.075 16.174 14.5229 16.5418 13.9155 16.7923C13.3081 17.0428 12.6572 17.1712 12.0002 17.17Z"
                                                                                                                                                                                                                                            fill="#BDBABA" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_252_2025">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <ul>
                          <?php
                          for ($i=0;$i<$obj96->i;$i++)
                          {
                            if ( $row96[$i]['sub_category'] == '' )
                            {
                              ?>
                              <li class='dropdown__item'>
                                <a href="<?php echo $domain_url; echo '/'; echo $row96[$i]['r_url']; ?>/">
                                  <?php
                                  echo $row96[$i]["r_title".$_lang]; 
                                  ?>
                                </a>
                              </li>
                              <?php
                            }
                            else
                            {
                              ?>
                              <li class='dropdown__item dropdown pod'>
                                <div class="dropdown-title">
                                    <?php
                                    echo $row96[$i]["r_title".$_lang]; 
                                    ?>
                                    <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_252_2025)">
                                            <path d="M12.0002 17.17C11.3431 17.1712 10.6923 17.0428 10.0849 16.7923C9.47746 16.5418 8.92538 16.174 8.46019 15.71L0.290185 7.53999C0.101882 7.35169 -0.00390625 7.09629 -0.00390625 6.82999C-0.00390625 6.56369 0.101882 6.30829 0.290185 6.11999C0.478489 5.93169 0.733884 5.8259 1.00019 5.8259C1.26649 5.8259 1.52188 5.93169 1.71019 6.11999L9.88019 14.29C10.4427 14.8518 11.2052 15.1673 12.0002 15.1673C12.7952 15.1673 13.5577 14.8518 14.1202 14.29L22.2902 6.11999C22.4785 5.93169 22.7339 5.8259 23.0002 5.8259C23.2665 5.8259 23.5219 5.93169 23.7102 6.11999C23.8985 6.30829 24.0043 6.56369 24.0043 6.82999C24.0043 7.09629 23.8985 7.35169 23.7102 7.53999L15.5402 15.71C15.075 16.174 14.5229 16.5418 13.9155 16.7923C13.3081 17.0428 12.6572 17.1712 12.0002 17.17Z"
                                                                                                                                                                                                                                                    fill="#0F2C7C" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_252_2025">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                
                                <ul>
                                  <?php
                                  foreach($row96[$i]['sub_category'] as $v)
                                  {
                                    ?>
                                    <li class='dropdown__item'>
                                      <a href="<?php echo $domain_url; echo '/'; echo $row96[$i]['r_url']; echo '/'; echo $v['sub_url']; ?>/">
                                        <?php 
                                        echo $v['sub_title']; 
                                        ?>
                                      </a>
                                    </li>
                                    <?php
                                  }
                                  ?>
                                </ul>
                              </li>
                              <?php 
                            }
                          }
                          ?>
                        </ul>
                    </li>
                    <li class="nav2__item dropdown">
                        <div class='dropdown-title f'>
                            <!--Фотогалерея-->
                            <?php 
                            echo $til['f_galer']; 
                            ?>
                            <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_252_2025)">
                                    <path d="M12.0002 17.17C11.3431 17.1712 10.6923 17.0428 10.0849 16.7923C9.47746 16.5418 8.92538 16.174 8.46019 15.71L0.290185 7.53999C0.101882 7.35169 -0.00390625 7.09629 -0.00390625 6.82999C-0.00390625 6.56369 0.101882 6.30829 0.290185 6.11999C0.478489 5.93169 0.733884 5.8259 1.00019 5.8259C1.26649 5.8259 1.52188 5.93169 1.71019 6.11999L9.88019 14.29C10.4427 14.8518 11.2052 15.1673 12.0002 15.1673C12.7952 15.1673 13.5577 14.8518 14.1202 14.29L22.2902 6.11999C22.4785 5.93169 22.7339 5.8259 23.0002 5.8259C23.2665 5.8259 23.5219 5.93169 23.7102 6.11999C23.8985 6.30829 24.0043 6.56369 24.0043 6.82999C24.0043 7.09629 23.8985 7.35169 23.7102 7.53999L15.5402 15.71C15.075 16.174 14.5229 16.5418 13.9155 16.7923C13.3081 17.0428 12.6572 17.1712 12.0002 17.17Z"
                                                                                                                                                                                                                                            fill="#BDBABA" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_252_2025">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <ul>
                          <?php
                          for ($i=0;$i<$obj98->i;$i++)
                          {
                            ?>
                            <li class='dropdown__item'>
                              <a href="<?php echo $domain_url; echo '/gallery/?id='; echo $row98[$i]['g2_id']; ?>">
                                <?php
                                echo $row98[$i]["g2_title".$_lang];
                                ?>
                              </a>
                            </li>
                            <?php
                          }
                          ?>
                        </ul>
                    </li>
                    <li class='nav2__item dropdown'>
                        <div class='dropdown-title f'>
                            <!--Страницы-->
                            <?php 
                            echo $til_t['pages'];
                            ?>
                            <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_252_2025)">
                                    <path d="M12.0002 17.17C11.3431 17.1712 10.6923 17.0428 10.0849 16.7923C9.47746 16.5418 8.92538 16.174 8.46019 15.71L0.290185 7.53999C0.101882 7.35169 -0.00390625 7.09629 -0.00390625 6.82999C-0.00390625 6.56369 0.101882 6.30829 0.290185 6.11999C0.478489 5.93169 0.733884 5.8259 1.00019 5.8259C1.26649 5.8259 1.52188 5.93169 1.71019 6.11999L9.88019 14.29C10.4427 14.8518 11.2052 15.1673 12.0002 15.1673C12.7952 15.1673 13.5577 14.8518 14.1202 14.29L22.2902 6.11999C22.4785 5.93169 22.7339 5.8259 23.0002 5.8259C23.2665 5.8259 23.5219 5.93169 23.7102 6.11999C23.8985 6.30829 24.0043 6.56369 24.0043 6.82999C24.0043 7.09629 23.8985 7.35169 23.7102 7.53999L15.5402 15.71C15.075 16.174 14.5229 16.5418 13.9155 16.7923C13.3081 17.0428 12.6572 17.1712 12.0002 17.17Z"
                                                                                                                                                                                                                                            fill="#BDBABA" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_252_2025">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <ul>
                          <?php
                          for ($i=0;$i<$obj95->i;$i++)
                          {
                            ?>
                            <li class='dropdown__item'>
                              <a href="<?php echo $domain_url; echo '/'; echo $row95[$i]['n_url']; ?>/">
                                <?php
                                echo $row95[$i]["n_tema".$_lang];
                                ?>
                              </a>
                            </li>
                            <?php
                          }
                          ?>
                        </ul>
                    </li>
                    <li class="nav2__item">
                        <a href="<?php echo $domain_url; ?>/infographic/">
                            <!--Инфографика-->
                            <?php 
                            echo $row79[3]["r_title".$_lang];
                            ?>
                        </a>
                    </li>
                    <li class="nav2__item">
                        <a href="<?php echo $domain_url; ?>/feedback/">
                            <!--Интернет-приемная-->
                            <?php
                            echo $til_t['internet_reception'];
                            ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="mobile-header">
        <svg class='burger' stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="2.5em" width="2.5em" xmlns="https://www.w3.org/2000/svg">
            <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
        </svg>
        <div class="mobile-header__logo">
            <a href="<?php echo $domain_url; ?>/">
                <img src="<?php echo $domain; ?>/view/themes/11/assets/img/gerb_logo.png" alt="logo">
            </a>
            <span>
                <?php
                echo $title_site;
                ?>
            </span>
        </div>
        <div class="mobile-header__right fic">
            <a href='#' class="bvi-open mobile-header__visually">
                <div>
                    <svg width="20.000000" height="16.000000" viewBox="0 0 20 16" fill="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                        <path id="Vector" d="M19.71 7.4C17.69 2.71 13.89 -0.2 9.79 -0.2C5.69 -0.2 1.89 2.71 -0.13 7.4C-0.18 7.52 -0.21 7.66 -0.21 7.8C-0.21 7.93 -0.18 8.07 -0.13 8.2C1.89 12.89 5.69 15.8 9.79 15.8C13.89 15.8 17.69 12.89 19.71 8.2C19.77 8.07 19.8 7.93 19.8 7.8C19.8 7.66 19.77 7.52 19.71 7.4ZM9.79 13.8C6.62 13.8 3.62 11.51 1.89 7.8C3.62 4.09 6.62 1.8 9.79 1.8C12.96 1.8 15.96 4.09 17.69 7.8C15.96 11.51 12.96 13.8 9.79 13.8ZM9.79 3.8C9 3.8 8.23 4.03 7.57 4.47C6.91 4.91 6.4 5.53 6.1 6.26C5.8 7 5.72 7.8 5.87 8.58C6.02 9.35 6.41 10.06 6.97 10.62C7.52 11.18 8.24 11.56 9.01 11.72C9.79 11.87 10.59 11.79 11.32 11.49C12.06 11.19 12.68 10.68 13.12 10.02C13.56 9.36 13.79 8.59 13.79 7.8C13.79 6.73 13.37 5.72 12.62 4.97C11.87 4.22 10.85 3.8 9.79 3.8ZM9.79 9.8C9.4 9.8 9.01 9.68 8.68 9.46C8.35 9.24 8.1 8.93 7.95 8.56C7.79 8.19 7.75 7.79 7.83 7.4C7.91 7.02 8.1 6.66 8.38 6.38C8.66 6.1 9.02 5.91 9.4 5.83C9.79 5.76 10.19 5.8 10.56 5.95C10.92 6.1 11.24 6.35 11.46 6.68C11.68 7.01 11.79 7.4 11.79 7.8C11.79 8.33 11.58 8.83 11.21 9.21C10.83 9.58 10.32 9.8 9.79 9.8Z"
                                                                                                                                                                                                                                fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero" />
                    </svg>
                </div>
                <span>
                    <!--Версия для слабовидящих-->
                    <?php
                    echo $til['version_v_i'];
                    ?>
                </span>
            </a>
            <div class="mobile-header__lang fic">
                <div>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 17 17" height="1.5em" width="1.5em" xmlns="https://www.w3.org/2000/svg">
                        <g></g>
                        <path
                                                                                                                                                                                                                                d="M8.516 0c-4.687 0-8.5 3.813-8.5 8.5s3.813 8.5 8.5 8.5 8.5-3.813 8.5-8.5-3.814-8.5-8.5-8.5zM1.041 9h2.937c0.044 1.024 0.211 2.031 0.513 3h-2.603c-0.481-0.906-0.776-1.923-0.847-3zM3.978 8h-2.937c0.071-1.077 0.366-2.094 0.847-3h2.6c-0.301 0.969-0.467 1.976-0.51 3zM5.547 5h5.896c0.33 0.965 0.522 1.972 0.569 3h-7.034c0.046-1.028 0.239-2.035 0.569-3zM4.978 9h7.035c-0.049 1.028-0.241 2.035-0.572 3h-5.891c-0.331-0.965-0.524-1.972-0.572-3zM13.013 9h2.978c-0.071 1.077-0.366 2.094-0.847 3h-2.644c0.302-0.969 0.469-1.976 0.513-3zM13.013 8c-0.043-1.024-0.209-2.031-0.51-3h2.641c0.48 0.906 0.775 1.923 0.847 3h-2.978zM14.502 4h-2.354c-0.392-0.955-0.916-1.858-1.55-2.7 1.578 0.457 2.938 1.42 3.904 2.7zM9.074 1.028c0.824 0.897 1.484 1.9 1.972 2.972h-5.102c0.487-1.071 1.146-2.073 1.97-2.97 0.199-0.015 0.398-0.030 0.602-0.030 0.188 0 0.373 0.015 0.558 0.028zM6.383 1.313c-0.629 0.838-1.151 1.737-1.54 2.687h-2.314c0.955-1.267 2.297-2.224 3.854-2.687zM2.529 13h2.317c0.391 0.951 0.915 1.851 1.547 2.689-1.561-0.461-2.907-1.419-3.864-2.689zM7.926 15.97c-0.826-0.897-1.488-1.899-1.978-2.97h5.094c-0.49 1.072-1.152 2.075-1.979 2.972-0.181 0.013-0.363 0.028-0.547 0.028-0.2 0-0.395-0.015-0.59-0.030zM10.587 15.703c0.636-0.842 1.164-1.747 1.557-2.703h2.358c-0.968 1.283-2.332 2.247-3.915 2.703z">
                        </path>
                    </svg>
                </div>
                
                <?php
                if ($lang_value=='on')
                {
                  ?>
                  <select name="lang" id="lang" style='text-transform: uppercase;'>
                    <?php
                    foreach($lang as $key=>$value) 
                    {
                      ?>
                      <option value="<?php echo $domain; echo '/language.php?lang='; echo $key; ?>" <?php if ($_COOKIE['lang']==$key) echo 'selected="selected"'; ?>>
                          <?php
                          echo $key; 
                          ?>
                      </option>
                      <?php
                    }
                    ?>
                  </select>
                  <?php
                }
                ?>

            </div>
        </div>
    </div>


    <?php
    if ( $url_first == 'main' )
    {
    ?>
    <div class="banner">
    
        <div class="banner__slide" style="background: linear-gradient(90deg, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0.5) 50%), url('<?php echo $domain; ?>/view/themes/11/assets/img/main.jpg'), lightgray 50%;">
            <div class="banner__content container">
                <div class="banner__main">
                    <h1>
                        <?php
                        echo $title_site;
                        ?>
                    </h1>
                    <div class='banner__description'>
                        <?php 
                        echo $street; 
                        ?>
                    </div>
                    <a href="<?php echo $domain_url; ?>/about/" class="banner__btn">
                        <span>
                            <!--Подробнее-->
                            <?php
                            echo $til['more_details'];
                            ?>
                        </span>
                        <span>
                            <svg width="9.000000" height="8.000000" viewBox="0 0 12 11" fill="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">

                                <path id="Vector" d="M11.53 4.79C11.49 4.7 11.44 4.62 11.38 4.55L6.28 -0.54C6.18 -0.64 6.05 -0.71 5.91 -0.74C5.77 -0.77 5.63 -0.76 5.5 -0.7C5.41 -0.66 5.33 -0.61 5.26 -0.54C5.19 -0.48 5.14 -0.4 5.1 -0.31C5.03 -0.13 5.03 0.07 5.1 0.25C5.14 0.33 5.19 0.41 5.26 0.48L9.13 4.34L0.3 4.34C0.11 4.34 -0.07 4.42 -0.21 4.55C-0.34 4.69 -0.42 4.87 -0.42 5.06C-0.42 5.25 -0.34 5.43 -0.21 5.57C-0.07 5.7 0.11 5.78 0.3 5.78L9.13 5.78L5.26 9.64C5.19 9.71 5.14 9.79 5.1 9.88C5.03 10.05 5.03 10.25 5.1 10.43C5.18 10.61 5.32 10.75 5.5 10.82C5.58 10.85 5.68 10.87 5.77 10.87C5.87 10.87 5.96 10.86 6.05 10.82C6.14 10.78 6.22 10.73 6.28 10.66L11.38 5.57C11.44 5.5 11.49 5.42 11.53 5.33C11.6 5.16 11.6 4.96 11.53 4.79Z"
                                                                                                                                                                                                                                        fill="#D9D9DE" fill-opacity="1.000000" fill-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="banner__slide" style="background: linear-gradient(90deg, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0.5) 50%), url('<?php echo $domain; ?>/view/themes/11/assets/img/main.jpg'), lightgray 50%;">
            <div class="banner__content container">
                <div class="banner__main">
                    
                </div>
            </div>
        </div>
        
        <div class="banner__slide" style="background: linear-gradient(90deg, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0.5) 50%), url('<?php echo $domain; ?>/view/themes/11/assets/img/main.jpg'), lightgray 50%;">
            <div class="banner__content container">
                <div class="banner__main">
                    
                </div>
            </div>
        </div>
        
    </div>
    <?php
    }
    ?>
    
</div>