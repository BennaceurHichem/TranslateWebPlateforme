<?php
use Core\Session;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=$this->siteTitle(); ?></title>
    <link rel="stylesheet" href="<?=PROOT?>css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?=PROOT?>css/custom.css" media="screen" title="no title" charset="utf-8">
    <script src="<?=PROOT?>js/jQuery-2.2.4.min.js"></script>
    <script src="<?=PROOT?>js/bootstrap.min.js"></script>
      <meta charset="UTF-8">








      <?= $this->content('head'); ?>
      <?php include 'main_menu.php' ?>
  </head>
  <body>

    <div class="container-fluid" ">
      <?= Session::displayMsg() ?>
      <?= $this->content('body'); ?>
    </div>






    <script>

        const switchers = [...document.querySelectorAll('.switcher')]

        switchers.forEach(item => {
            item.addEventListener('click', function () {
                switchers.forEach(item => item.parentElement.classList.remove('is-active'))
                this.parentElement.classList.add('is-active')
            })
        })

    </script>


    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LcLissUAAAAACdWJIJtwj5qcwwxyxkNQOdXhWPH', { action: 'homepage' }).then(function (token) {

            });
        });
    </script>


    <!--form validation with jquery -->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
    <script src="validation.js"></script>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <!-- add wow.js to make animations when scrolling-->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>



    <script>
        //animations script //
        $(function () {

            //make var for this animation to make it easer to modify
            var effects = 'animated bounce';
            var effectsEnd = 'animationend onAnimationEnd mozAnimationEnd xebkitAnimationEnd';


            $('#submit_div').hover(function () {

                $(this).addClass(effects).one(effectsEnd, function () {

                    $(this).removeClass(effects);
                });



            });


        });

    </script>

  </body>
</html>
