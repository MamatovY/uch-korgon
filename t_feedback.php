<link rel="stylesheet" href="<?=$domain."/view/themes/".$contacts[5]['d_title']?>/css/contacts.css">

<main>
<div class="container">
    <section class="breadcrumb">
        <a href="<?=$domain_url?>/"><!--Главная--><?=$til['glavn']?></a>
        <span>/</span>
        <a class='active'><?=$til['feedback']?></a>
    </section>
</div>   
<?php 
if (isset($_GET['msg']))
{
  if ($_GET['msg']==2)  
  {
    ?><div class="error"><?=$til['not_all_data_entered']?></div><?php   
  }
  elseif ($_GET['msg']==3)  
  {
    ?><div class="error"><?=$til['an_error_has_occurred']?><br /><?=$_GET['error']?></div><?php   
  }
  elseif ($_GET['msg']==4)  
  {
    ?><div class="error"><?=$til['captcha_not_validated']?></div><?php   
  }
  elseif ($_GET['msg']==6)  
  {
    ?><div class="error"><?=$til['invalid_email']?></div><?php   
  }
   elseif ($_GET['msg']==5)  
  {
    ?><div class="success"><?php echo $til['successfully_sent']; ?></div><?php   
  }
}
?>
<section class="contacts">      
<div class="contacts__map">
    <div class="container">
        <form method='post' class="contacts__form" action='<?=$domain?>/controller/inc/feedback_do.php' onsubmit="return SendForm();" id='forma' enctype="multipart/form-data">
            <h2>
                <?=$til['feedback']?>
            </h2>
            <div class='contacts__form-title'>
                <div>
                    <h5 class='contacts__form-title first'>
                        <!--Адрес--><?=$til['address']?>
                    </h5>
                    <div>
                        <?=$street?>
                    </div>
                </div>
                <div>
                    <h5 class='contacts__form-title first'>
                        <?=$til['email']?>
                    </h5>
                    <div>
                        <?=$contacts[0][3]?>
                    </div>
                </div>
                <div>
                    <h5 class='contacts__form-title first'>
                        <?=$til['telephone']?><!--Телефон-->
                    </h5>
                    <div>
                        <?=$contacts[2][3]?>
                    </div>
                </div>
                <div>
                    <h5 class='contacts__form-title first'>
                        <?=$til_t['working_hours']?><!--Режим работы-->
                    </h5>
                    <div>
                        <!--Пн-Пт с-->8:30-17:30
                    </div>
                    <div>
                        <!--Перерыв--><?=$til_t['break_break']?> 12:00-13:00
                    </div>
                </div>
            </div>
            <input type="text" placeholder='<?=$til['enter_your_name']?>' name='name' class="contacts__input">
            <div class="contacts__inputFields">
                <input type="text" name='phone' placeholder='<?=$til['phone_number']?>' class="contacts__input">
                <input type="text" name='email' placeholder='<?=$til['enter_yemail_address']?>' class="contacts__input">
            </div>
            <textarea placeholder='Сообщение' class='contacts__input' cols="30" rows="10" name='text'></textarea>
            <div class="contacts__buttons">
                <div class='contacts__file'>
                    <input  name="userfile[]" type="file" multiple="multiple" id="contacts__fileInput" style="display: none;" onchange="displayFileName()">
                    <button type='button' onclick="document.getElementById('contacts__fileInput').click()"><?=$til['select_a_file']?><!--Выберите файл--></button>
                    <div id="contacts__fileName"></div>
                </div>
                <div>
                    <div class="g-recaptcha" data-sitekey="6LdQXt8gAAAAANDdvMzOq56SOpCGUqYuah6gFMxk"></div>
                    <br /><div class="text-danger" id="recaptchaError"></div>
                </div>
            </div>
            <!--<div class="contacts__politicy">
                Нажимая на кнопку «Отправить», я подтверждаю, что ознакомлен и согласен с условиями <a href="#">политики обработки персональных данных.</a>
            </div>-->
            <button type='submit' class="contacts__btn">
                <?=$til['send_to']?>
            </button>
        </form>
    </div>
    
        <iframe class="contacts__iframe" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2324.414766903923!2d72.04512974452655!3d41.67263657750544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0JTQttCw0LvQsNC7LdCQ0LHQsNC00YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsINCQ0LrRgdGL0LnRgdC60LjQuSDRgNCw0LnQvtC9INGB0LXQu9C-INCd0LDRgNGL0L0sINCj0Yct0JrQvtGA0LPQvtC9IDkx!5e1!3m2!1sru!2skg!4v1716870513618!5m2!1sru!2skg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
</section>
</main>

<script language="JavaScript">    
required = new Array("name", "phone", "text");
required_show = new Array("<?=$til['your_name']?>", "<?=$til['phone_number']?>", "<?=$til['message']?>");   
function SendForm () 
{  
  var i, j;  
  for(j=0; j<required.length; j++) 
  {
    for (i=0; i<document.forms['forma'].length; i++) 
    {
      if (document.forms['forma'].elements[i].name == required[j] && document.forms['forma'].elements[i].value == "" ) 
      {
        alert('<?=$til_c['please_enter']?> ' + required_show[j]);
        document.forms['forma'].elements[i].focus();
        return false;
      }
    }
  }      
  return true;
}   
</script>