<?php include_once 'databaseWorks/indexPage.php'?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8" />
<?php include_once 'head.php' ?>
</head>
<body>
<!--Brand Name section Starts-->
<?php include_once 'common/siteName.php'?>
<!--Brand Name Section Ends-->

<!--Head Navbar Starts-->
<?php include_once 'common/common-navbar.php';?>
<!--Head Navbar ends-->

<!--Search Section starts-->
<?php include "search/search.php"?>
<!--Search Section ends-->

<!--HomePage main Contents starts-->
<div class="Home-contents">
    <div class="container">
        <div class="row">
            <div class="col-md-4 cl-lg-4 col-sm-12 f-news" id="f-videos">
                <hr>
                <h4>Featured Videos</h4>

                <div class="row" id="video-card">
                    <?php foreach($f_videos as $row){?>
                    <div class="col-md-12 video-card">
                        <div class="v-container">
                        <div class="card" id="home-card">
                            <div class="row card-body">
                                <img class="col-sm-5 card-img mr-0" style=" height: 72px; margin-top: 11px;" src="<?=$row['thumbnail_link']?>" alt="Card image cap">
                                <div class="col-sm-7 mr-0" style="margin-left: -7px; margin-right: 0px">
                                <h7 class="card-subtitle m-0 p-0"><?=$row['heading']?></h7><br>
                                <button type="button" class="btn m-0 playVideo" id="play-video-btn" data-toggle="modal" data-target="#videoModal<?=$row["id"]?>"><i class="fa fa-play-circle"></i>Play</button>
                                    <input type="hidden" class="videoLink" id='videoId' value="<?=$row['video_link']?>">
                                </div>

                            </div>
                        </div>
                        </div>
                    </div>
                        <!--Featured Video Modal Starts-->
                        <div class="col-md-12">
                            <div class="modal fade bd-example-modal-lg videoModal" id="videoModal<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" id="video-modal-content">
                                        <div id="yt-player" class="embed-responsive embed-responsive-16by9">
                                            <iframe id="f-video-link" class="embed-responsive-item" src="https://www.youtube.com/embed/<?=$row['video_link']?>" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Featured Video modal ends-->
                    <?php } ?>

                   <!-- <div class="col-md-12">
                        <a href="" id="showMoreBtn">
                            <input type="button" class="btn" value="Show More">
                        </a>
                    </div>-->

                </div>


            </div>

            <!--Featured News and article Section starts-->
            <div class="col-md-4 cl-lg-4 col-sm-12 f-news" id="f-news">
                <hr>
                <h4>Featured News & Articles</h4>


                <div class="row" id="news-card">
                    <?php foreach ($f_news as $row){?>
                    <div class="col-md-12 news-card">
                        <a href="featuredNewsDetails.php?id=<?=$row['id']?>">
                            <div class="card" id="home-card">
                                <div class="row card-body">
                                    <img class="col-sm-5 card-img mr-0" style="height: 72px; margin-top: 11px;" src="admin/resources/newsCoverImages/<?=$row['cover_image']?>" alt="Card image cap">
                                    <div class="col-sm-7 mr-0" style="margin-left: -7px; margin-right: 0px">
                                        <h6 class="card-text"><?=$row['heading']?></h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php }?>
                    <div class="col-md-12">
                        <a href="featuredNewsList.php" id="showMoreBtn">
                            <input type="button" class="btn" value="Show More">
                        </a>
                    </div>


                </div>

            </div>
            <!--Featured News and article Section ends-->

            <!--International Health Days Section Starts-->
            <div class="col-md-4 cl-lg-4 col-sm-12 f-news" id="f-healthDays">
                <hr>
                <h4>International Health Days</h4>

                <div class="row" id="news-card">
                    <?php foreach ($h_days as $row){?>
                    <div class="col-md-12 health-card">
                        <a href="healthdaysDetails.php?id=<?=$row['id']?>">
                            <div class="card" id="home-card">
                                <div class="row card-body">
                                    <img class="col-sm-5 card-img" height="90px" style=" height: 72px; margin-top: 11px;" src="admin/resources/healthdaysCoverImages/<?=$row['coverImage']?>" alt="Card image cap">
                                    <div class="col-sm-7" style="margin-left: -7px; margin-right: 0px">
                                        <h5 class="card-title"><?=$row['heading']?></h5>
                                        <p class="card-text"><?=$row['date']?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>

                    <!--<div class="col-md-12">
                        <a href="" id="showMoreBtn">
                            <input type="button" class="btn" value="Show More">
                        </a>
                    </div>-->

                </div>
            </div>
            <!--International Health Days Section Starts-->
        </div>
    </div>
</div>
<!--HomePage main contents ends-->


<script type="text/javascript">


       $('.playVideo').on('click',function() {
           var url = $(".embed-responsive-item").attr('src');
           var videoLink = $(this).closest('div').find(".videoLink").val();
           var v = "https://www.youtube.com/embed/"+videoLink;
           console.log(v);
           $(".videoModal").on('hide.bs.modal', function() {
               $(".embed-responsive-item").attr('src', '');
           });
           $(".videoModal").on('show.bs.modal', function() {
               $(".embed-responsive-item").attr('src', v);
           });
       });
</script>
<!--Footer Section starts-->
<?php include 'common/common-footer.php'?>
<!--Footer Section ends-->

<!--Bootstrap js links-->
<script src="resources/js/jquery.min.js"></script>
<script src="resources/js/owl-carousel.js"></script>
<script src="resources/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="resources/js/custom.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="search/search.js"></script>
<script type="text/javascript" src="resources/js/main-body.js"></script>


</body>
</html>
