<?php
/* @var $this yii\web\View */
$content = \common\models\Page::find()
    ->andWhere(['status' => 1])
    ->orderBy(['title' => ASC])
    ->all();
?>


<?php /*echo \common\widgets\DbCarousel::widget([
    'key'=>'index',
    'options' => [
        'class' => 'slide', // enables slide effect
    ],
]); */ ?>


<!--
<div class="jumbotron">
    <h1>Congratulations!</h1>

    <p class="lead">You have successfully created your Yii-powered application.</p>

    <?php echo common\widgets\DbMenu::widget([
        'key'=>'frontend-index',
        'options'=>[
            'tag'=>'p'
        ]
    ]) ?>

</div>
-->

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <i class="fa fa-star-o"></i>  <?php echo getenv('COPYRIGHT_NAME'); ?>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <?php foreach ($content as $key => $value) { ?>
                <li>
                    <a class="page-scroll" href="#<?php echo $value->slug; ?>"><?php echo $value->title; ?></a>
                </li>
                <?php }; ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading"><?php echo getenv('COPYRIGHT_NAME'); ?></h1>
                    <p class="intro-text">web developer, travel junky, craft beer lover, learning sponge.</p>
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>


<?php  foreach ($content as $key => $value) { ?>
    <!-- About Section -->
    <a name="<?php echo $value->slug; ?>"></a>
    <section id="<?php echo $value->slug; ?>" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2><?php echo $value->title; ?></h2>
                <p><?php echo $value->body; ?></p>
            </div>
        </div>
    </section>
<?php }; ?>


<!-- Footer -->
<section id="footer" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <p>Credits:</p>
            <p>Photos provided by: <a href="http://gratisography.com/">Gratisography</a>, </p>
        </div>
    </div>
</section>
