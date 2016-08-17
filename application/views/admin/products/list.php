
<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <div class="fill" style="background-image:url(<?php echo base_url()?>/assets/pic/event_01_1900-1080_2.jpg);"></div>
      <div class="carousel-caption">
        <h3><font color="white">夏休みの自由研究金属実験教室開催！</font></h3>
      </div>
    </div>
    <div class="item">
      <div class="fill" style="background-image:url(<?php echo base_url()?>/assets/pic/event_02_1900-1080_02.jpg);"></div>
      <div class="carousel-caption">
        <h3><font color="white">分解ワークショップ開催！</font></h3>
      </div>
    </div>
    <div class="item">
      <div class="fill" style="background-image:url(<?php echo base_url()?>/assets/pic/blog_01_1900-1080.jpg);"></div>
      <div class="carousel-caption">
        <h3><font color="white">はやぶさプロジェクトを影で支えた中小企業イトカワの微粒子が入ったカプセルの開封作業に協力</font></h3>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>
</header>
<style>
  .hovereffect {
    width:100%;
    height:100%;
    float:left;
    overflow:hidden;
    position:relative;
    text-align:center;
    cursor:default;
  }

  .hovereffect .overlay {
    width:100%;
    height:100%;
    position:absolute;
    overflow:hidden;
    top:0;
    left:0;
    opacity:0;
    background-color:rgba(0,0,0,0.5);
    -webkit-transition:all .4s ease-in-out;
    transition:all .4s ease-in-out
  }

  .hovereffect img {
    display:block;
    position:relative;
    -webkit-transition:all .4s linear;
    transition:all .4s linear;
  }

  .hovereffect h2 {
    text-transform:uppercase;
    color:#fff;
    text-align:center;
    position:relative;
    font-size:17px;
    background:rgba(0,0,0,0.6);
    -webkit-transform:translatey(-100px);
    -ms-transform:translatey(-100px);
    transform:translatey(-100px);
    -webkit-transition:all .2s ease-in-out;
    transition:all .2s ease-in-out;
    padding:10px;
  }

  .hovereffect a.info {
    text-decoration:none;
    display:inline-block;
    text-transform:uppercase;
    color:#fff;
    border:1px solid #fff;
    background-color:transparent;
    opacity:0;
    filter:alpha(opacity=0);
    -webkit-transition:all .2s ease-in-out;
    transition:all .2s ease-in-out;
    margin:50px 0 0;
    padding:7px 14px;
  }

  .hovereffect a.info:hover {
    box-shadow:0 0 5px #fff;
  }

  .hovereffect:hover img {
    -ms-transform:scale(1.2);
    -webkit-transform:scale(1.2);
    transform:scale(1.2);
  }

  .hovereffect:hover .overlay {
    opacity:1;
    filter:alpha(opacity=100);
  }

  .hovereffect:hover h2,.hovereffect:hover a.info {
    opacity:1;
    filter:alpha(opacity=100);
    -ms-transform:translatey(0);
    -webkit-transform:translatey(0);
    transform:translatey(0);
  }

  .hovereffect:hover a.info {
    -webkit-transition-delay:.2s;
    transition-delay:.2s;
  }
</style>

<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">会社情報
      </h1>
    </div>
  </div>
  <!-- /.row -->

  <!-- Intro Content -->
  <div class="row">
    <div class="col-md-6">
      <img class="img-responsive" src="<?php echo base_url()?>/assets/pic/about.jpg" alt="">
    </div>
    <div class="col-md-6">
      <h2>TEAM 希少金属</h2>
      <p>「金属」っておもしろい！</p>
      <p>金属の魅力にとりつかれた6人で結成した『TEAM希少金属』は、</p>
      <p>金属のおもしろさを日本中に広めるために『金属ドットコム』を立ち上げました！</p>
      <p>金属の魅力、個性や金属のおもしろさを体験できるイベントを随時更新していきます。</p>
    </div>
  </div>
  <!-- /.row -->

  <!-- Team Members -->
  <div class="row">
    <div class="col-lg-12">
      <h2 class="page-header">Our Team</h2>
    </div>
    <div class="col-md-4 text-center">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url()?>/assets/pic/aoki.jpg" alt="">
        <div class="caption">
          <h3>Aoki Risa<br>
            <small>Hustler</small>
          </h3>
          <ul class="list-inline">
            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url()?>/assets/pic/watanabe.jpg" alt="">
        <div class="caption">
          <h3>Watanabe Syun<br>
            <small>Hustler</small>
          </h3>
          <ul class="list-inline">
            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url()?>/assets/pic/maeda.jpg" alt="">
        <div class="caption">
          <h3>Maeda kenko<br>
            <small>Designer</small>
          </h3>
          <ul class="list-inline">
            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url()?>/assets/pic/hirata.jpg" alt="">
        <div class="caption">
          <h3>Hirada Kenji<br>
            <small>Designer</small>
          </h3>
          <ul class="list-inline">
            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url()?>/assets/pic/iida.jpg" alt="">
        <div class="caption">
          <h3>Ida Azumi<br>
            <small>Hustler</small>
          </h3>
          <ul class="list-inline">
            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="thumbnail">
        <img class="img-responsive" src="<?php echo base_url()?>/assets/pic/tan.jpg" alt="">
        <div class="caption">
          <h3>Tan Kin Piow<br>
            <small>Hacker</small>
          </h3>
          <ul class="list-inline">
            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->


  <!-- Marketing Icons Section -->
<!--  <div class="row">-->
<!--    <div class="col-lg-12">-->
<!--      <h1 class="page-header">-->
<!--        TEAM 希少金属-->
<!--      </h1>-->
<!--    </div>-->
<!--    <div class="col-md-4">-->
<!--      <div class="panel panel-default">-->
<!--        <div class="panel-heading">-->
<!--          <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>-->
<!--        </div>-->
<!--        <div class="panel-body">-->
<!--          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>-->
<!--          <a href="#" class="btn btn-default">Learn More</a>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="col-md-4">-->
<!--      <div class="panel panel-default">-->
<!--        <div class="panel-heading">-->
<!--          <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>-->
<!--        </div>-->
<!--        <div class="panel-body">-->
<!--          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>-->
<!--          <a href="#" class="btn btn-default">Learn More</a>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="col-md-4">-->
<!--      <div class="panel panel-default">-->
<!--        <div class="panel-heading">-->
<!--          <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>-->
<!--        </div>-->
<!--        <div class="panel-body">-->
<!--          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>-->
<!--          <a href="#" class="btn btn-default">Learn More</a>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
  <!-- /.row -->

  <!-- Portfolio Section -->
  <div class="row">
    <div class="col-lg-12">
      <h2 class="page-header">イベント</h2>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
      <div class="hovereffect">
        <img class="img-responsive" src="<?php echo base_url()?>/assets/pic/event_01_400-300.jpg" alt="">
        <div class="overlay">
          <h2>夏休みの自由研究金属実験教室開催！</h2>
          <a class="info" href="<?php echo base_url()?>admin/products/project_1">リンク</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
      <div class="hovereffect">
        <img class="img-responsive" src="<?php echo base_url()?>/assets/pic/event_02_400-300.jpg" alt="">
        <div class="overlay">
          <h2>分解ワークショップ</h2>
          <a class="info" href="<?php echo base_url()?>admin/products/project_2">リンク</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->

  <!-- Portfolio Section -->
  <div class="row">
    <div class="col-lg-12">
      <h2 class="page-header">最新ブログ</h2>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
      <div class="hovereffect">
        <img class="img-responsive" src="<?php echo base_url()?>/assets/pic/blog_01_750-450.jpg" alt="">
        <div class="overlay">
          <h2>はやぶさプロジェクトを影で支えた中小企業イトカワの微粒子が入ったカプセルの開封作業に協力</h2>
          <a class="info" href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>/blog_1">リンク</a>
        </div>
      </div>
    </div>
  <!-- /.row -->



  <!-- Features Section -->
<!--  <div class="row">-->
<!--    <div class="col-lg-12">-->
<!--      <h2 class="page-header">Modern Business Features</h2>-->
<!--    </div>-->
<!--    <div class="col-md-6">-->
<!--      <p>The Modern Business template by Start Bootstrap includes:</p>-->
<!--      <ul>-->
<!--        <li><strong>Bootstrap v3.2.0</strong>-->
<!--        </li>-->
<!--        <li>jQuery v1.11.0</li>-->
<!--        <li>Font Awesome v4.1.0</li>-->
<!--        <li>Working PHP contact form with validation</li>-->
<!--        <li>Unstyled page elements for easy customization</li>-->
<!--        <li>17 HTML pages</li>-->
<!--      </ul>-->
<!--      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>-->
<!--    </div>-->
<!--    <div class="col-md-6">-->
<!--      <img class="img-responsive" src="http://placehold.it/700x450" alt="">-->
<!--    </div>-->
<!--  </div>-->
  <!-- /.row -->



  <!-- Call to Action Section -->
<!--  <div class="well">-->
<!--    <div class="row">-->
<!--      <div class="col-md-8">-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>-->
<!--      </div>-->
<!--      <div class="col-md-4">-->
<!--        <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
