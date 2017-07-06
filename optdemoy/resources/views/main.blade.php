<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://optdemocdn.com/assets/img/favicon.ico">

    <title>Carousel Template for Bootstrap</title>


    {!! Minify::stylesheet([
    '/assets/plugins/bootstrap/3.3.7/css/bootstrap.min.css',
    '/assets/css/ie10-viewport-bug-workaround.min.css',
    '/assets/css/carousel.min.css',
    ])->withFullUrl() !!}
    {{----}}

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="http://optdemocdn.com/assets/js/ie8-responsive-file-warning.min.js"></script><![endif]-->
    <script src="http://optdemocdn.com/assets/js/ie-emulation-modes-warning.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://optdemocdn.com/assets/plugins/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="http://optdemocdn.com/assets/plugins/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://optdemocdn.com/assets/plugins/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>
<div class="navbar-wrapper">
    <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a> </li>
                        <li class="active"><a href="/main">Main</a> </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Unoptimized</li>
                                <li><a href="http://optdemon.com/">OptNHome</a> </li>
                                <li><a href="http://optdemon.com/" target="_blank">OptNHome_New</a> </li>
                                <li><a href="http://optdemon.com/main">OptNMain</a> </li>
                                <li><a href="http://optdemon.com/main" target="_blank">OptNMain_New</a> </li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Optimized</li>
                                <li><a href="http://optdemoy.com/">OptYHome</a> </li>
                                <li><a href="http://optdemoy.com/" target="_blank">OptYHome_New</a> </li>
                                <li class="active"><a href="http://optdemoy.com/main">OptYMain</a> </li>
                                <li><a href="http://optdemoy.com/main" target="_blank">OptYMain_New</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide lazy" src="http://optdemocdn.com/assets/img/grey.gif" data-original="http://optdemocdn.com/storage/ugc/img/01.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="/" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide lazy" src="http://optdemocdn.com/assets/img/grey.gif" data-original="http://optdemocdn.com/storage/ugc/img/02.jpg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="/" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide lazy" src="http://optdemocdn.com/assets/img/grey.gif" data-original="http://optdemocdn.com/storage/ugc/img/03.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="/" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->
<div class="container myaction_container">
    <div class="jumbotron">
        <h1>Jumbotron heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a id="trigger_mydata" class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
    </div>
    <div class="row well">
        <div id="mydata_ts"></div>
        <div class="col-md-10">
            <ul id="layout_mydata" class="list-inline">
            </ul>
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle lazy" src="http://optdemocdn.com/assets/img/grey.gif" data-original="http://optdemocdn.com/storage/ugc/img/04.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle lazy" src="http://optdemocdn.com/assets/img/grey.gif" data-original="http://optdemocdn.com/storage/ugc/img/05.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle lazy" src="http://optdemocdn.com/assets/img/grey.gif" data-original="http://optdemocdn.com/storage/ugc/img/06.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block lazy" src="http://optdemocdn.com/assets/img/grey.gif" data-original="http://optdemocdn.com/storage/ugc/img/07.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block lazy" src="http://optdemocdn.com/assets/img/grey.gif" data-original="http://optdemocdn.com/storage/ugc/img/08.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block lazy" src="http://optdemocdn.com/assets/img/grey.gif" data-original="http://optdemocdn.com/storage/ugc/img/09.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->


    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
{!! Minify::javascript([
'/assets/plugins/bootstrap/3.3.7/js/bootstrap.min.js',
'/assets/js/vendor/holder.min.js',
'/assets/js/vendor/jquery.lazyload.min.js',
'/assets/js/ie10-viewport-bug-workaround.min.js',
])->withFullUrl() !!}

<script>
    $(function() {
        $("img.lazy").lazyload({ threshold : 200 });
        var ajaxLoadJson = function (url, params, onLoaded) {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: url,
                data: params,
                cache: true,
                success: function (result, textStatus, jqXHR) {
                    if (result === undefined && textStatus == 'notmodified') {
                        $.ajax({
                            type: 'GET',
                            dataType: 'json',
                            url: url,
                            data: params,
                            cache: false,
                            ifModified: false,
                            success: function (cachedResult, textStatus, jqXHR) {
                                onLoaded(cachedResult);
                            }
                        });
                    } else {
                        onLoaded(result);
                    }
                }
            });
        };

        var renderResponseData = function (result) {
            $('#mydata_ts').append('<p>'+result.datetime+' TOTAL:'+result.total+'</p>');
            var mydata_layout_obj = $('#layout_mydata');
            for(var i=0,j=result.data.length;i<j;i++){
                var rowData = result.data[i];
                var rowHtml = '<li>'
                    +'<label>'+rowData.label+': </label> '
                    +'<p><a href="#'+rowData.id+'" > '+rowData.name+'</a></p>'
                    +'</li>';
                mydata_layout_obj.append(rowHtml);
            }
        };
        $('#trigger_mydata').on('click',function(e){
            if(e){ e.preventDefault(); }
            ajaxLoadJson(
                '/mydata',
                {
                    id: 123
                },
                renderResponseData
            );
        });
    });
</script>

</body>
</html>