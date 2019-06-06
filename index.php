<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>userLOL</title>
  </head>
  <body style="background-color: #e6ecf0">
    <?php $connect = mysqli_connect('127.0.0.1', 'root','','misha_ch_15');
    ?>
    <!-- Навигатор -->
    <div class="container-fluid row bg-info border-bottom mb-2">
      <div class="container">
        <div class="row">
          <div class="col-4">
        <img src="images/icons8-home-50.png" class="ml-2">
        <img src="images/icons8-notification-50.png" class="ml-2">
        <img src="images/icons8-twitter-50.png" class="ml-2">
          </div>
          <div class="col-4" style="text-align: center;">
            <img src="images/icons8-twitter-50.png" class="img-fluid lol" class="w-100">
          </div>
          <div class="col-4"></div>
        </div>
      </div>
    </div>
    <!-- Главная-->
    <div class="container">
      <div class="row">
        <div class="col-3">
          <div>
          <div>
          <img src="images/background.jpg" class="w-100">
          </div>
          <div class="container">
          <div class="row">
            <div class="bg-white col-3">
              <img src="images/avatar.jpg" class="border rounded-circle w-100">
            </div>
            <div class="col-9 bg-white">
              <div>
              <a href="#" class="text-dark">test</a>
              </div>
              <div>
              <a href="#" class="text-secondary">@testlol</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="bg-white col-3">
                <div>
                <a href="#" class="text-muted">Твиты</a>
                </div>
                <div>
                <a href="#">10</a>
                </div>
            </div>
            <div class="col-9 bg-white">
              <div>
              <a href="#" class="text-muted">Читаемые</a>
              </div>
              <div>
              <a href="#">6</a>
              </div>
            </div>
          </div>
        </div>
          <!-- start -->
          
            <div class="bg-white mt-2">
            <div>
            <h5>
              Актуальные темы для вас
            </h5>
            </div>
            
              <?php
              $query1 = mysqli_query($connect, 'SELECT * FROM actual');
               ?>
              <?php for($i=0; $i<$query1->num_rows; $i++) {?>
              <?php $res1 = $query1->fetch_assoc();?>
                <a href="">
                <div class="container mb-2">
                    <strong><?php echo $res1['title'] ?></strong>
                    <div>
                    <p class="text-muted"><?php echo $res1['text'] ?></p>
                    </div>
                </div>
                </a>
              <?php } ?>  
          </div>
          </div>
          
          <!-- end -->
        </div>
        <div class="col-6 bg-white">
          <form method="post" action="index1.php">
          <div>
            <div class="row mt-3"><input type="text" name="text" class="form-control mr-sm-2 w-50 ml-2">
            <button type="submit" class="btn btn-outline-success my-2 my-sm-0 d-flex flex-row-reverse bd-highlight float-right">Submit</button>
            </div>
          </form>
            <hr class="mt-3">
          <!-- post1 -->
          <?php
          $query = mysqli_query($connect, 'SELECT * FROM tweet ORDER BY id DESC');
          ?>
          <?php for($i=0; $i<$query->num_rows; $i++) {?>
          <div class="row border-bottom mb-3">
            <div class="col-2">
              <a href="#"><?php $res = $query->fetch_assoc(); echo '<img src="' . $res['logo'] . '" class="w rounded-circle"' ?>
               </a>
            </div>
            <div class="col-10">
                <h5>
                  <a href="#" class="text-dark"><?php echo $res['title'] ?></a>
                </h5>
              <div>
                <p><?php echo $res['text'] ?></p>
              </div>
              <div>
                 <?php echo '<img src="' . $res['img'] . '" class="w-100 rounded">'?>
              </div>
                <img src="" class="w-100 rounded"></a>
            </div>
            <div>
            </div>
            <div class="row container ml-3">
                <div class="col-3">
                  <img src="images/like.png">
                </div>
                <div class="col-3">
                  <img src="images/comment.png">
                </div>
                <div class="col-3">
                   <img src="images/envelope.png">
                </div>
                <div class="col-3">
                   <img src="images/retweet.png">
                </div>
                <form method="post" action="php2.php">
                <button name="lol" value="<?php echo $res['id'] ?>" type="submit" class="btn btn-primary ml-2">удалить</button>
                </form>
                <form method="post" action="change.php">
                <button name="lol" value="<?php echo $res['id'] ?>" type="submit" class="btn btn-primary ml-2">изменить</button>
                </form>
            </div>
          </div>
        <?php } ?>
      </div>
  </div>
          <!-- ldwa -->  
        <div class="container-fluid col-3">
          <div class="bg-white container">
          <strong>
            Кого читать:
          </strong>
            <!--Скрипт -->
            <?php $query2 = mysqli_query($connect, 'SELECT * FROM interesting');?>
              <?php for($i=0; $i<$query2->num_rows; $i++) {?>
              <?php $res2 = $query2->fetch_assoc();?>
               <div class="row mb-3">
                <div class="col-3"><img style="width: 150%" class="border rounded-circle" src="<?php echo $res2['img']?>"></div>
                <div class="col-9"><a href="" class="text-dark"><?php echo $res2['text'] ?></a></div>
              </div>
              <?php } ?>
            <!--/Скрипт -->
            </div>
        </div>
        <!-- /ldwa -->
      </div>
    </div>
  </body>
</html>
