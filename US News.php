<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SourceSphere - US News</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Your Trustworthy Collaborator for World News">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Styles/main-stylepage.css">
    <link rel="stylesheet" type="text/css" href="Styles/materialize.css" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="JS/jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body id="gradient-colour-3">
    <header class="header">
        <div class="container hide-on-med-and-down">
            <br>
            <div class="row">
                <nav class="card">
                    <div class="nav-wrapper white">
                        <ul>
                            <li><a class="waves-effect cyan btn" href="Index.html">Home</a></li>
                            <li><a class="waves-effect cyan btn" href="UK%20News.html">UK News</a></li>
                            <li><a class="waves-effect cyan btn active" href="US%20News.html">US News</a></li>
                            <li><a class="waves-effect cyan btn" href="Worldwide%20News.html">Worldwide News</a></li>
                            <li><a href="#loginmodal" class="waves-effect cyan btn modal-trigger">Sign In</a></li>
                            <li><a href="#registermodal" class="waves-effect cyan btn modal-trigger">Register</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <div class="container">
        <div class="row">
            <div class="newsletter_border"></div>
        </div>
        <div class="row">
            <!--Paragraph text within card-->
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="card white">
                    <div class="card-content PRFont">Read the latest US news from sources like ABC News, CBS News, The Wall Street Journal and USA Today</div>
                </div>
                <br>
            </div>


            <!-- Sign in modal -->

            <div class="modal" id="loginmodal">
                <div class="modal-content center">
                    <h2>Login</h2>
                    <form method="post" action="loginCONNECT.php">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email address</label>
                        </div>
                        <br>
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                        <br>
                        <input type="submit" value="Submit" name="sign_in" class="modal-close waves-effect btn-flat"></input>
                    </form>
                </div>
            </div>

            <!-- Register modal -->

            <div class="modal" id="registermodal">
                <div class="modal-content center">
                    <h2>Register</h2>
                    <form method="post" action="registerCONNECT.php">
                        <div class="input-group col s12">
                            <input name="full_name" type="text" class="validate">
                            <label for="full_name">Full name*</label>
                        </div>
                        <br>
                        <div class="input-group col s12">
                            <input name="email" type="email" class="validate">
                            <label for="email">Email*</label>
                        </div>
                        <br>
                        <div class="input-group col s12">
                            <input name="password1" type="password" class="validate">
                            <label for="password1">Password*</label>
                        </div>
                        <div class="input-group col s12">
                            <input name="password2" type="password" class="validate">
                            <label for="password2">Confirm password*</label>
                        </div>
                        <br>
                        <input type="submit" value="Submit" name="Submit" class="waves-effect btn-flat"></input>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <!--Sidenav-->
            <div class="fixed-action-btn direction-left">
                <a id="sidenav_btn" href="#" class="sidenav-trigger cyan btn-floating btn-large waves-effect waves-light" data-target="slide-out"><i class="material-icons">menu</i></a>
            </div>

            <ul id="slide-out" class="sidenav" style="transform: translateX(-105%);">
                <li><a class="waves-effect" href="Index.html">Home</a></li>
                <li><a class="waves-effect" href="UK%20News.html">UK News</a></li>
                <li><a class="waves-effect" href="US%20News.html">US News</a></li>
                <li><a class="waves-effect" href="Worldwide%20News.html">Worldwide News</a></li>
                <li><a href="#loginmodal" class="waves-effect cyan btn modal-trigger">Sign In</a></li>
                <li><a href="#registermodal" class="waves-effect cyan btn modal-trigger">Register</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!--Reload source feed-->
            <div class="col-lg-8 offset-lg-2 text-center">
                <a class="red btn-floating btn-large waves-effect waves-light" onclick="LOAD_LATEST()"><i class="material-icons md-dark">refresh</i></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <!--Social Media share buttons-->

            <div class="col-sm-3">

                <div style="margin-top: 75px" class="fixed-action-btn direction-left"><a id="Facebook_Share" class="blue darken-4 btn-floating btn-large waves-effect waves-light"></a></div>

                <div style="margin-top: 150px" class="fixed-action-btn direction-left"><a id="Twitter_Share" class="white btn-floating btn-large waves-effect waves-light"></a></div>

                <div style="margin-top: 225px" class="fixed-action-btn direction-left"><a id="Google_Plus_Share" class="red btn-floating btn-large waves-effect waves-light"></a></div>

            </div>

            <div class="col-sm-9">

                <!--'Sort by' filter button-->

                <ul id="sortby_filter" class="dropdown-content" tabindex="0">
                    <li tabindex="0"><a onclick="LOAD_LATEST()">Latest News</a></li>
                    <li tabindex="0"><a onclick="LOAD_POPULAR()">Most Popular News</a></li>
                </ul>

                <a style="margin-left: 850px;" class="red fixed-action-btn waves-effect waves-light dropdown-trigger btn" href="#" data-target="sortby_filter">Sort By...</a>

                <br> <br>

                <!--'News source' filter button-->

                <ul id="source_filter" class="dropdown-content" tabindex="0">
                    <li tabindex="0"><a onclick="LOAD_LATEST()">Show all news articles</a></li>
                    <li tabindex="0"><a onclick="LOAD_NBCNews()">NBC News</a></li>
                    <li tabindex="0"><a onclick="LOAD_CBSNews()">CBS News</a></li>
                    <li tabindex="0"><a onclick="LOAD_TheWallStreetJournal()">The Wall Street Journal</a></li>
                    <li tabindex="0"><a onclick="LOAD_USAToday()">USA Today</a></li>
                    <li tabindex="0"><a onclick="LOAD_ABCNews()">ABC News</a></li>
                </ul>

                <a style="margin-left: 850px;" class="red fixed-action-btn waves-effect waves-light dropdown-trigger btn" href="#" data-target="source_filter">News sources...</a>

                <br> <br>

                <!--'News category' filter button-->

                <ul id="category_filter" class="dropdown-content" tabindex="0">
                    <li tabindex="0"><a onclick="LOAD_LATEST()">Show all news categories</a></li>
                    <li tabindex="0"><a onclick="LOAD_Business()">Business</a></li>
                    <li tabindex="0"><a onclick="LOAD_Entertainment()">Entertainment</a></li>
                    <li tabindex="0"><a onclick="LOAD_General()">General</a></li>
                    <li tabindex="0"><a onclick="LOAD_Health()">Health</a></li>
                    <li tabindex="0"><a onclick="LOAD_Science()">Science</a></li>
                    <li tabindex="0"><a onclick="LOAD_Sports()">Sports</a></li>
                    <li tabindex="0"><a onclick="LOAD_Technology()">Technology</a></li>
                </ul>

                <a style="margin-left: 850px;" class="red fixed-action-btn waves-effect waves-light dropdown-trigger btn" href="#" data-target="category_filter">Categories...</a>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <div class="col">
                    <div class="border"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-image"><img class="materialboxed" id="ArticleImgID1"></div>
                <div class="card-content">
                    <h1 class="card-title" id="ArticleTitleID1">
                        <h5 id="ArticleSourceID1"></h5>
                    </h1>
                    <p class="card-content" id="ArticleDescID1"></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="border"></div>
                </div>
            </div>
            <div class="card">
                <div class="card-image"><img class="materialboxed" id="ArticleImgID2"></div>
                <div class="card-content">
                    <h1 class="card-title" id="ArticleTitleID2">
                        <h5 id="ArticleSourceID2"></h5>
                    </h1>
                    <p class="card-content" id="ArticleDescID2"></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="border"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-image"><img class="materialboxed" id="ArticleImgID3"></div>
                <div class="card-content">
                    <h1 class="card-title" id="ArticleTitleID3">
                        <h5 id="ArticleSourceID3"></h5>
                    </h1>
                    <p class="card-content" id="ArticleDescID3"></p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="border"></div>
                </div>
            </div>
            <div class="card">
                <div class="card-image"><img class="materialboxed" id="ArticleImgID4"></div>
                <div class="card-content">
                    <h1 class="card-title" id="ArticleTitleID4">
                        <h5 id="ArticleSourceID4"></h5>
                    </h1>
                    <p class="card-content" id="ArticleDescID4"></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="border"></div>
                </div>
            </div>
            <div class="card">
                <div class="card-image"><img class="materialboxed" id="ArticleImgID5"></div>
                <div class="card-content">
                    <h1 class="card-title" id="ArticleTitleID5">
                        <h5 id="ArticleSourceID5"></h5>
                    </h1>
                    <p class="card-content" id="ArticleDescID5"></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="border"></div>
                </div>
            </div>
            <div class="card">
                <div class="card-image"><img class="materialboxed" id="ArticleImgID6"></div>
                <div class="card-content">
                    <h1 class="card-title" id="ArticleTitleID6">
                        <h5 id="ArticleSourceID6"></h5>
                    </h1>
                    <p class="card-content" id="ArticleDescID6"></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="border"></div>
                </div>
            </div>
            <div class="card">
                <div class="card-image"><img class="materialboxed" id="ArticleImgID7"></div>
                <div class="card-content">
                    <h1 class="card-title" id="ArticleTitleID7">
                        <h5 id="ArticleSourceID7"></h5>
                    </h1>
                    <p class="card-content" id="ArticleDescID7"></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="border"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-image"><img class="materialboxed" id="ArticleImgID8"></div>
                <div class="card-content">
                    <h1 class="card-title" id="ArticleTitleID8">
                        <h5 id="ArticleSourceID8"></h5>
                    </h1>
                    <p class="card-content" id="ArticleDescID8"></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="border"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-image"><img class="materialboxed" id="ArticleImgID9"></div>
                <div class="card-content">
                    <h1 class="card-title" id="ArticleTitleID9">
                        <h5 id="ArticleSourceID9"></h5>
                    </h1>
                    <p class="card-content" id="ArticleDescID9"></p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="border"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-image"><img class="materialboxed" id="ArticleImgID10"></div>
                <div class="card-content">
                    <h1 class="card-title" id="ArticleTitleID10">
                        <h5 id="ArticleSourceID10"></h5>
                    </h1>
                    <p class="card-content" id="ArticleDescID10"></p>
                </div>
            </div>
        </div>
    </div>


    <script>
        function LOAD_LATEST() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myarr = JSON.parse(this.responseText);
                    document.getElementById("ArticleImgID1").src = myarr.articles[0].urlToImage;
                    document.getElementById("ArticleTitleID1").innerHTML = myarr.articles[0].title;
                    document.getElementById("ArticleSourceID1").innerHTML = myarr.articles[0].source.name;
                    document.getElementById("ArticleDescID1").innerHTML = myarr.articles[0].description;

                    document.getElementById("ArticleImgID2").src = myarr.articles[1].urlToImage;
                    document.getElementById("ArticleTitleID2").innerHTML = myarr.articles[1].title;
                    document.getElementById("ArticleSourceID2").innerHTML = myarr.articles[1].source.name;
                    document.getElementById("ArticleDescID2").innerHTML = myarr.articles[1].description;

                    document.getElementById("ArticleImgID3").src = myarr.articles[2].urlToImage;
                    document.getElementById("ArticleTitleID3").innerHTML = myarr.articles[2].title;
                    document.getElementById("ArticleSourceID3").innerHTML = myarr.articles[2].source.name;
                    document.getElementById("ArticleDescID3").innerHTML = myarr.articles[2].description;

                    document.getElementById("ArticleImgID4").src = myarr.articles[3].urlToImage;
                    document.getElementById("ArticleTitleID4").innerHTML = myarr.articles[3].title;
                    document.getElementById("ArticleSourceID4").innerHTML = myarr.articles[3].source.name;
                    document.getElementById("ArticleDescID4").innerHTML = myarr.articles[3].description;

                    document.getElementById("ArticleImgID5").src = myarr.articles[4].urlToImage;
                    document.getElementById("ArticleTitleID5").innerHTML = myarr.articles[4].title;
                    document.getElementById("ArticleSourceID5").innerHTML = myarr.articles[4].source.name;
                    document.getElementById("ArticleDescID5").innerHTML = myarr.articles[4].description;

                    document.getElementById("ArticleImgID6").src = myarr.articles[5].urlToImage;
                    document.getElementById("ArticleTitleID6").innerHTML = myarr.articles[5].title;
                    document.getElementById("ArticleSourceID6").innerHTML = myarr.articles[5].source.name;
                    document.getElementById("ArticleDescID6").innerHTML = myarr.articles[5].description;

                    document.getElementById("ArticleImgID7").src = myarr.articles[6].urlToImage;
                    document.getElementById("ArticleTitleID7").innerHTML = myarr.articles[6].title;
                    document.getElementById("ArticleSourceID7").innerHTML = myarr.articles[6].source.name;
                    document.getElementById("ArticleDescID7").innerHTML = myarr.articles[6].description;

                    document.getElementById("ArticleImgID8").src = myarr.articles[7].urlToImage;
                    document.getElementById("ArticleTitleID8").innerHTML = myarr.articles[7].title;
                    document.getElementById("ArticleSourceID8").innerHTML = myarr.articles[7].source.name;
                    document.getElementById("ArticleDescID8").innerHTML = myarr.articles[7].description;

                    document.getElementById("ArticleImgID9").src = myarr.articles[8].urlToImage;
                    document.getElementById("ArticleTitleID9").innerHTML = myarr.articles[8].title;
                    document.getElementById("ArticleSourceID9").innerHTML = myarr.articles[8].source.name;
                    document.getElementById("ArticleDescID9").innerHTML = myarr.articles[8].description;

                    document.getElementById("ArticleImgID10").src = myarr.articles[9].urlToImage;
                    document.getElementById("ArticleTitleID10").innerHTML = myarr.articles[9].title;
                    document.getElementById("ArticleSourceID10").innerHTML = myarr.articles[9].source.name;
                    document.getElementById("ArticleDescID10").innerHTML = myarr.articles[9].description;
                }
            }
            xhttp.open("GET", "https://newsapi.org/v2/top-headlines?sources=nbc-news,cbs-news,the-wall-street-journal,usa-today,abc-news&sortBy=publishedAt&apiKey=05730bf65e39405fa50a3345ea89ffac", true);
            xhttp.send();


        }

        function LOAD_POPULAR() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myarr = JSON.parse(this.responseText);
                    document.getElementById("ArticleImgID1").src = myarr.articles[0].urlToImage;
                    document.getElementById("ArticleTitleID1").innerHTML = myarr.articles[0].title;
                    document.getElementById("ArticleSourceID1").innerHTML = myarr.articles[0].source.name;
                    document.getElementById("ArticleDescID1").innerHTML = myarr.articles[0].description;

                    document.getElementById("ArticleImgID2").src = myarr.articles[1].urlToImage;
                    document.getElementById("ArticleTitleID2").innerHTML = myarr.articles[1].title;
                    document.getElementById("ArticleSourceID2").innerHTML = myarr.articles[1].source.name;
                    document.getElementById("ArticleDescID2").innerHTML = myarr.articles[1].description;

                    document.getElementById("ArticleImgID3").src = myarr.articles[2].urlToImage;
                    document.getElementById("ArticleTitleID3").innerHTML = myarr.articles[2].title;
                    document.getElementById("ArticleSourceID3").innerHTML = myarr.articles[2].source.name;
                    document.getElementById("ArticleDescID3").innerHTML = myarr.articles[2].description;

                    document.getElementById("ArticleImgID4").src = myarr.articles[3].urlToImage;
                    document.getElementById("ArticleTitleID4").innerHTML = myarr.articles[3].title;
                    document.getElementById("ArticleSourceID4").innerHTML = myarr.articles[3].source.name;
                    document.getElementById("ArticleDescID4").innerHTML = myarr.articles[3].description;

                    document.getElementById("ArticleImgID5").src = myarr.articles[4].urlToImage;
                    document.getElementById("ArticleTitleID5").innerHTML = myarr.articles[4].title;
                    document.getElementById("ArticleSourceID5").innerHTML = myarr.articles[4].source.name;
                    document.getElementById("ArticleDescID5").innerHTML = myarr.articles[4].description;

                    document.getElementById("ArticleImgID6").src = myarr.articles[5].urlToImage;
                    document.getElementById("ArticleTitleID6").innerHTML = myarr.articles[5].title;
                    document.getElementById("ArticleSourceID6").innerHTML = myarr.articles[5].source.name;
                    document.getElementById("ArticleDescID6").innerHTML = myarr.articles[5].description;

                    document.getElementById("ArticleImgID7").src = myarr.articles[6].urlToImage;
                    document.getElementById("ArticleTitleID7").innerHTML = myarr.articles[6].title;
                    document.getElementById("ArticleSourceID7").innerHTML = myarr.articles[6].source.name;
                    document.getElementById("ArticleDescID7").innerHTML = myarr.articles[6].description;

                    document.getElementById("ArticleImgID8").src = myarr.articles[7].urlToImage;
                    document.getElementById("ArticleTitleID8").innerHTML = myarr.articles[7].title;
                    document.getElementById("ArticleSourceID8").innerHTML = myarr.articles[7].source.name;
                    document.getElementById("ArticleDescID8").innerHTML = myarr.articles[7].description;

                    document.getElementById("ArticleImgID9").src = myarr.articles[8].urlToImage;
                    document.getElementById("ArticleTitleID9").innerHTML = myarr.articles[8].title;
                    document.getElementById("ArticleSourceID9").innerHTML = myarr.articles[8].source.name;
                    document.getElementById("ArticleDescID9").innerHTML = myarr.articles[8].description;

                    document.getElementById("ArticleImgID10").src = myarr.articles[9].urlToImage;
                    document.getElementById("ArticleTitleID10").innerHTML = myarr.articles[9].title;
                    document.getElementById("ArticleSourceID10").innerHTML = myarr.articles[9].source.name;
                    document.getElementById("ArticleDescID10").innerHTML = myarr.articles[9].description;
                }
            }
            xhttp.open("GET", "https://newsapi.org/v2/top-headlines?sources=nbc-news,cbs-news,the-wall-street-journal,usa-today,abc-news&sortBy=popularity&apiKey=05730bf65e39405fa50a3345ea89ffac", true);
            xhttp.send();

        }

        function LOAD_NBCNews() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myarr = JSON.parse(this.responseText);
                    document.getElementById("ArticleImgID1").src = myarr.articles[0].urlToImage;
                    document.getElementById("ArticleTitleID1").innerHTML = myarr.articles[0].title;
                    document.getElementById("ArticleSourceID1").innerHTML = myarr.articles[0].source.name;
                    document.getElementById("ArticleDescID1").innerHTML = myarr.articles[0].description;

                    document.getElementById("ArticleImgID2").src = myarr.articles[1].urlToImage;
                    document.getElementById("ArticleTitleID2").innerHTML = myarr.articles[1].title;
                    document.getElementById("ArticleSourceID2").innerHTML = myarr.articles[1].source.name;
                    document.getElementById("ArticleDescID2").innerHTML = myarr.articles[1].description;

                    document.getElementById("ArticleImgID3").src = myarr.articles[2].urlToImage;
                    document.getElementById("ArticleTitleID3").innerHTML = myarr.articles[2].title;
                    document.getElementById("ArticleSourceID3").innerHTML = myarr.articles[2].source.name;
                    document.getElementById("ArticleDescID3").innerHTML = myarr.articles[2].description;

                    document.getElementById("ArticleImgID4").src = myarr.articles[3].urlToImage;
                    document.getElementById("ArticleTitleID4").innerHTML = myarr.articles[3].title;
                    document.getElementById("ArticleSourceID4").innerHTML = myarr.articles[3].source.name;
                    document.getElementById("ArticleDescID4").innerHTML = myarr.articles[3].description;

                    document.getElementById("ArticleImgID5").src = myarr.articles[4].urlToImage;
                    document.getElementById("ArticleTitleID5").innerHTML = myarr.articles[4].title;
                    document.getElementById("ArticleSourceID5").innerHTML = myarr.articles[4].source.name;
                    document.getElementById("ArticleDescID5").innerHTML = myarr.articles[4].description;

                    document.getElementById("ArticleImgID6").src = myarr.articles[5].urlToImage;
                    document.getElementById("ArticleTitleID6").innerHTML = myarr.articles[5].title;
                    document.getElementById("ArticleSourceID6").innerHTML = myarr.articles[5].source.name;
                    document.getElementById("ArticleDescID6").innerHTML = myarr.articles[5].description;

                    document.getElementById("ArticleImgID7").src = myarr.articles[6].urlToImage;
                    document.getElementById("ArticleTitleID7").innerHTML = myarr.articles[6].title;
                    document.getElementById("ArticleSourceID7").innerHTML = myarr.articles[6].source.name;
                    document.getElementById("ArticleDescID7").innerHTML = myarr.articles[6].description;

                    document.getElementById("ArticleImgID8").src = myarr.articles[7].urlToImage;
                    document.getElementById("ArticleTitleID8").innerHTML = myarr.articles[7].title;
                    document.getElementById("ArticleSourceID8").innerHTML = myarr.articles[7].source.name;
                    document.getElementById("ArticleDescID8").innerHTML = myarr.articles[7].description;

                    document.getElementById("ArticleImgID9").src = myarr.articles[8].urlToImage;
                    document.getElementById("ArticleTitleID9").innerHTML = myarr.articles[8].title;
                    document.getElementById("ArticleSourceID9").innerHTML = myarr.articles[8].source.name;
                    document.getElementById("ArticleDescID9").innerHTML = myarr.articles[8].description;

                    document.getElementById("ArticleImgID10").src = myarr.articles[9].urlToImage;
                    document.getElementById("ArticleTitleID10").innerHTML = myarr.articles[9].title;
                    document.getElementById("ArticleSourceID10").innerHTML = myarr.articles[9].source.name;
                    document.getElementById("ArticleDescID10").innerHTML = myarr.articles[9].description;
                }
            }
            xhttp.open("GET", "https://newsapi.org/v2/top-headlines?sources=nbc-news&sortBy=publishedAt&apiKey=05730bf65e39405fa50a3345ea89ffac", true);
            xhttp.send();

        }



        function LOAD_CBSNews() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myarr = JSON.parse(this.responseText);
                    document.getElementById("ArticleImgID1").src = myarr.articles[0].urlToImage;
                    document.getElementById("ArticleTitleID1").innerHTML = myarr.articles[0].title;
                    document.getElementById("ArticleSourceID1").innerHTML = myarr.articles[0].source.name;
                    document.getElementById("ArticleDescID1").innerHTML = myarr.articles[0].description;

                    document.getElementById("ArticleImgID2").src = myarr.articles[1].urlToImage;
                    document.getElementById("ArticleTitleID2").innerHTML = myarr.articles[1].title;
                    document.getElementById("ArticleSourceID2").innerHTML = myarr.articles[1].source.name;
                    document.getElementById("ArticleDescID2").innerHTML = myarr.articles[1].description;

                    document.getElementById("ArticleImgID3").src = myarr.articles[2].urlToImage;
                    document.getElementById("ArticleTitleID3").innerHTML = myarr.articles[2].title;
                    document.getElementById("ArticleSourceID3").innerHTML = myarr.articles[2].source.name;
                    document.getElementById("ArticleDescID3").innerHTML = myarr.articles[2].description;

                    document.getElementById("ArticleImgID4").src = myarr.articles[3].urlToImage;
                    document.getElementById("ArticleTitleID4").innerHTML = myarr.articles[3].title;
                    document.getElementById("ArticleSourceID4").innerHTML = myarr.articles[3].source.name;
                    document.getElementById("ArticleDescID4").innerHTML = myarr.articles[3].description;

                    document.getElementById("ArticleImgID5").src = myarr.articles[4].urlToImage;
                    document.getElementById("ArticleTitleID5").innerHTML = myarr.articles[4].title;
                    document.getElementById("ArticleSourceID5").innerHTML = myarr.articles[4].source.name;
                    document.getElementById("ArticleDescID5").innerHTML = myarr.articles[4].description;

                    document.getElementById("ArticleImgID6").src = myarr.articles[5].urlToImage;
                    document.getElementById("ArticleTitleID6").innerHTML = myarr.articles[5].title;
                    document.getElementById("ArticleSourceID6").innerHTML = myarr.articles[5].source.name;
                    document.getElementById("ArticleDescID6").innerHTML = myarr.articles[5].description;

                    document.getElementById("ArticleImgID7").src = myarr.articles[6].urlToImage;
                    document.getElementById("ArticleTitleID7").innerHTML = myarr.articles[6].title;
                    document.getElementById("ArticleSourceID7").innerHTML = myarr.articles[6].source.name;
                    document.getElementById("ArticleDescID7").innerHTML = myarr.articles[6].description;

                    document.getElementById("ArticleImgID8").src = myarr.articles[7].urlToImage;
                    document.getElementById("ArticleTitleID8").innerHTML = myarr.articles[7].title;
                    document.getElementById("ArticleSourceID8").innerHTML = myarr.articles[7].source.name;
                    document.getElementById("ArticleDescID8").innerHTML = myarr.articles[7].description;

                    document.getElementById("ArticleImgID9").src = myarr.articles[8].urlToImage;
                    document.getElementById("ArticleTitleID9").innerHTML = myarr.articles[8].title;
                    document.getElementById("ArticleSourceID9").innerHTML = myarr.articles[8].source.name;
                    document.getElementById("ArticleDescID9").innerHTML = myarr.articles[8].description;

                    document.getElementById("ArticleImgID10").src = myarr.articles[9].urlToImage;
                    document.getElementById("ArticleTitleID10").innerHTML = myarr.articles[9].title;
                    document.getElementById("ArticleSourceID10").innerHTML = myarr.articles[9].source.name;
                    document.getElementById("ArticleDescID10").innerHTML = myarr.articles[9].description;
                }
            }
            xhttp.open("GET", "https://newsapi.org/v2/top-headlines?sources=cbs-news&sortBy=publishedAt&apiKey=05730bf65e39405fa50a3345ea89ffac", true);
            xhttp.send();

        }


        function LOAD_TheWallStreetJournal() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myarr = JSON.parse(this.responseText);
                    document.getElementById("ArticleImgID1").src = myarr.articles[0].urlToImage;
                    document.getElementById("ArticleTitleID1").innerHTML = myarr.articles[0].title;
                    document.getElementById("ArticleSourceID1").innerHTML = myarr.articles[0].source.name;
                    document.getElementById("ArticleDescID1").innerHTML = myarr.articles[0].description;

                    document.getElementById("ArticleImgID2").src = myarr.articles[1].urlToImage;
                    document.getElementById("ArticleTitleID2").innerHTML = myarr.articles[1].title;
                    document.getElementById("ArticleSourceID2").innerHTML = myarr.articles[1].source.name;
                    document.getElementById("ArticleDescID2").innerHTML = myarr.articles[1].description;

                    document.getElementById("ArticleImgID3").src = myarr.articles[2].urlToImage;
                    document.getElementById("ArticleTitleID3").innerHTML = myarr.articles[2].title;
                    document.getElementById("ArticleSourceID3").innerHTML = myarr.articles[2].source.name;
                    document.getElementById("ArticleDescID3").innerHTML = myarr.articles[2].description;

                    document.getElementById("ArticleImgID4").src = myarr.articles[3].urlToImage;
                    document.getElementById("ArticleTitleID4").innerHTML = myarr.articles[3].title;
                    document.getElementById("ArticleSourceID4").innerHTML = myarr.articles[3].source.name;
                    document.getElementById("ArticleDescID4").innerHTML = myarr.articles[3].description;

                    document.getElementById("ArticleImgID5").src = myarr.articles[4].urlToImage;
                    document.getElementById("ArticleTitleID5").innerHTML = myarr.articles[4].title;
                    document.getElementById("ArticleSourceID5").innerHTML = myarr.articles[4].source.name;
                    document.getElementById("ArticleDescID5").innerHTML = myarr.articles[4].description;

                    document.getElementById("ArticleImgID6").src = myarr.articles[5].urlToImage;
                    document.getElementById("ArticleTitleID6").innerHTML = myarr.articles[5].title;
                    document.getElementById("ArticleSourceID6").innerHTML = myarr.articles[5].source.name;
                    document.getElementById("ArticleDescID6").innerHTML = myarr.articles[5].description;

                    document.getElementById("ArticleImgID7").src = myarr.articles[6].urlToImage;
                    document.getElementById("ArticleTitleID7").innerHTML = myarr.articles[6].title;
                    document.getElementById("ArticleSourceID7").innerHTML = myarr.articles[6].source.name;
                    document.getElementById("ArticleDescID7").innerHTML = myarr.articles[6].description;

                    document.getElementById("ArticleImgID8").src = myarr.articles[7].urlToImage;
                    document.getElementById("ArticleTitleID8").innerHTML = myarr.articles[7].title;
                    document.getElementById("ArticleSourceID8").innerHTML = myarr.articles[7].source.name;
                    document.getElementById("ArticleDescID8").innerHTML = myarr.articles[7].description;

                    document.getElementById("ArticleImgID9").src = myarr.articles[8].urlToImage;
                    document.getElementById("ArticleTitleID9").innerHTML = myarr.articles[8].title;
                    document.getElementById("ArticleSourceID9").innerHTML = myarr.articles[8].source.name;
                    document.getElementById("ArticleDescID9").innerHTML = myarr.articles[8].description;

                    document.getElementById("ArticleImgID10").src = myarr.articles[9].urlToImage;
                    document.getElementById("ArticleTitleID10").innerHTML = myarr.articles[9].title;
                    document.getElementById("ArticleSourceID10").innerHTML = myarr.articles[9].source.name;
                    document.getElementById("ArticleDescID10").innerHTML = myarr.articles[9].description;
                }
            }
            xhttp.open("GET", "https://newsapi.org/v2/top-headlines?sources=the-wall-street-journal&sortBy=publishedAt&apiKey=05730bf65e39405fa50a3345ea89ffac", true);
            xhttp.send();

        }


        function LOAD_USAToday() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myarr = JSON.parse(this.responseText);
                    document.getElementById("ArticleImgID1").src = myarr.articles[0].urlToImage;
                    document.getElementById("ArticleTitleID1").innerHTML = myarr.articles[0].title;
                    document.getElementById("ArticleSourceID1").innerHTML = myarr.articles[0].source.name;
                    document.getElementById("ArticleDescID1").innerHTML = myarr.articles[0].description;

                    document.getElementById("ArticleImgID2").src = myarr.articles[1].urlToImage;
                    document.getElementById("ArticleTitleID2").innerHTML = myarr.articles[1].title;
                    document.getElementById("ArticleSourceID2").innerHTML = myarr.articles[1].source.name;
                    document.getElementById("ArticleDescID2").innerHTML = myarr.articles[1].description;

                    document.getElementById("ArticleImgID3").src = myarr.articles[2].urlToImage;
                    document.getElementById("ArticleTitleID3").innerHTML = myarr.articles[2].title;
                    document.getElementById("ArticleSourceID3").innerHTML = myarr.articles[2].source.name;
                    document.getElementById("ArticleDescID3").innerHTML = myarr.articles[2].description;

                    document.getElementById("ArticleImgID4").src = myarr.articles[3].urlToImage;
                    document.getElementById("ArticleTitleID4").innerHTML = myarr.articles[3].title;
                    document.getElementById("ArticleSourceID4").innerHTML = myarr.articles[3].source.name;
                    document.getElementById("ArticleDescID4").innerHTML = myarr.articles[3].description;

                    document.getElementById("ArticleImgID5").src = myarr.articles[4].urlToImage;
                    document.getElementById("ArticleTitleID5").innerHTML = myarr.articles[4].title;
                    document.getElementById("ArticleSourceID5").innerHTML = myarr.articles[4].source.name;
                    document.getElementById("ArticleDescID5").innerHTML = myarr.articles[4].description;

                    document.getElementById("ArticleImgID6").src = myarr.articles[5].urlToImage;
                    document.getElementById("ArticleTitleID6").innerHTML = myarr.articles[5].title;
                    document.getElementById("ArticleSourceID6").innerHTML = myarr.articles[5].source.name;
                    document.getElementById("ArticleDescID6").innerHTML = myarr.articles[5].description;

                    document.getElementById("ArticleImgID7").src = myarr.articles[6].urlToImage;
                    document.getElementById("ArticleTitleID7").innerHTML = myarr.articles[6].title;
                    document.getElementById("ArticleSourceID7").innerHTML = myarr.articles[6].source.name;
                    document.getElementById("ArticleDescID7").innerHTML = myarr.articles[6].description;

                    document.getElementById("ArticleImgID8").src = myarr.articles[7].urlToImage;
                    document.getElementById("ArticleTitleID8").innerHTML = myarr.articles[7].title;
                    document.getElementById("ArticleSourceID8").innerHTML = myarr.articles[7].source.name;
                    document.getElementById("ArticleDescID8").innerHTML = myarr.articles[7].description;

                    document.getElementById("ArticleImgID9").src = myarr.articles[8].urlToImage;
                    document.getElementById("ArticleTitleID9").innerHTML = myarr.articles[8].title;
                    document.getElementById("ArticleSourceID9").innerHTML = myarr.articles[8].source.name;
                    document.getElementById("ArticleDescID9").innerHTML = myarr.articles[8].description;

                    document.getElementById("ArticleImgID10").src = myarr.articles[9].urlToImage;
                    document.getElementById("ArticleTitleID10").innerHTML = myarr.articles[9].title;
                    document.getElementById("ArticleSourceID10").innerHTML = myarr.articles[9].source.name;
                    document.getElementById("ArticleDescID10").innerHTML = myarr.articles[9].description;
                }
            }
            xhttp.open("GET", "https://newsapi.org/v2/top-headlines?sources=usa-today&sortBy=publishedAt&apiKey=05730bf65e39405fa50a3345ea89ffac", true);
            xhttp.send();

        }


        function LOAD_ABCNews() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myarr = JSON.parse(this.responseText);
                    document.getElementById("ArticleImgID1").src = myarr.articles[0].urlToImage;
                    document.getElementById("ArticleTitleID1").innerHTML = myarr.articles[0].title;
                    document.getElementById("ArticleSourceID1").innerHTML = myarr.articles[0].source.name;
                    document.getElementById("ArticleDescID1").innerHTML = myarr.articles[0].description;

                    document.getElementById("ArticleImgID2").src = myarr.articles[1].urlToImage;
                    document.getElementById("ArticleTitleID2").innerHTML = myarr.articles[1].title;
                    document.getElementById("ArticleSourceID2").innerHTML = myarr.articles[1].source.name;
                    document.getElementById("ArticleDescID2").innerHTML = myarr.articles[1].description;

                    document.getElementById("ArticleImgID3").src = myarr.articles[2].urlToImage;
                    document.getElementById("ArticleTitleID3").innerHTML = myarr.articles[2].title;
                    document.getElementById("ArticleSourceID3").innerHTML = myarr.articles[2].source.name;
                    document.getElementById("ArticleDescID3").innerHTML = myarr.articles[2].description;

                    document.getElementById("ArticleImgID4").src = myarr.articles[3].urlToImage;
                    document.getElementById("ArticleTitleID4").innerHTML = myarr.articles[3].title;
                    document.getElementById("ArticleSourceID4").innerHTML = myarr.articles[3].source.name;
                    document.getElementById("ArticleDescID4").innerHTML = myarr.articles[3].description;

                    document.getElementById("ArticleImgID5").src = myarr.articles[4].urlToImage;
                    document.getElementById("ArticleTitleID5").innerHTML = myarr.articles[4].title;
                    document.getElementById("ArticleSourceID5").innerHTML = myarr.articles[4].source.name;
                    document.getElementById("ArticleDescID5").innerHTML = myarr.articles[4].description;

                    document.getElementById("ArticleImgID6").src = myarr.articles[5].urlToImage;
                    document.getElementById("ArticleTitleID6").innerHTML = myarr.articles[5].title;
                    document.getElementById("ArticleSourceID6").innerHTML = myarr.articles[5].source.name;
                    document.getElementById("ArticleDescID6").innerHTML = myarr.articles[5].description;

                    document.getElementById("ArticleImgID7").src = myarr.articles[6].urlToImage;
                    document.getElementById("ArticleTitleID7").innerHTML = myarr.articles[6].title;
                    document.getElementById("ArticleSourceID7").innerHTML = myarr.articles[6].source.name;
                    document.getElementById("ArticleDescID7").innerHTML = myarr.articles[6].description;

                    document.getElementById("ArticleImgID8").src = myarr.articles[7].urlToImage;
                    document.getElementById("ArticleTitleID8").innerHTML = myarr.articles[7].title;
                    document.getElementById("ArticleSourceID8").innerHTML = myarr.articles[7].source.name;
                    document.getElementById("ArticleDescID8").innerHTML = myarr.articles[7].description;

                    document.getElementById("ArticleImgID9").src = myarr.articles[8].urlToImage;
                    document.getElementById("ArticleTitleID9").innerHTML = myarr.articles[8].title;
                    document.getElementById("ArticleSourceID9").innerHTML = myarr.articles[8].source.name;
                    document.getElementById("ArticleDescID9").innerHTML = myarr.articles[8].description;

                    document.getElementById("ArticleImgID10").src = myarr.articles[9].urlToImage;
                    document.getElementById("ArticleTitleID10").innerHTML = myarr.articles[9].title;
                    document.getElementById("ArticleSourceID10").innerHTML = myarr.articles[9].source.name;
                    document.getElementById("ArticleDescID10").innerHTML = myarr.articles[9].description;
                }
            }
            xhttp.open("GET", "https://newsapi.org/v2/top-headlines?sources=abc-news&sortBy=publishedAt&apiKey=05730bf65e39405fa50a3345ea89ffac", true);
            xhttp.send();

        }

    </script>


    <script>
        function LOAD_Business() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myarr = JSON.parse(this.responseText);
                    document.getElementById("ArticleImgID1").src = myarr.articles[0].urlToImage;
                    document.getElementById("ArticleTitleID1").innerHTML = myarr.articles[0].title;
                    document.getElementById("ArticleSourceID1").innerHTML = myarr.articles[0].source.name;
                    document.getElementById("ArticleDescID1").innerHTML = myarr.articles[0].description;

                    document.getElementById("ArticleImgID2").src = myarr.articles[1].urlToImage;
                    document.getElementById("ArticleTitleID2").innerHTML = myarr.articles[1].title;
                    document.getElementById("ArticleSourceID2").innerHTML = myarr.articles[1].source.name;
                    document.getElementById("ArticleDescID2").innerHTML = myarr.articles[1].description;

                    document.getElementById("ArticleImgID3").src = myarr.articles[2].urlToImage;
                    document.getElementById("ArticleTitleID3").innerHTML = myarr.articles[2].title;
                    document.getElementById("ArticleSourceID3").innerHTML = myarr.articles[2].source.name;
                    document.getElementById("ArticleDescID3").innerHTML = myarr.articles[2].description;

                    document.getElementById("ArticleImgID4").src = myarr.articles[3].urlToImage;
                    document.getElementById("ArticleTitleID4").innerHTML = myarr.articles[3].title;
                    document.getElementById("ArticleSourceID4").innerHTML = myarr.articles[3].source.name;
                    document.getElementById("ArticleDescID4").innerHTML = myarr.articles[3].description;

                    document.getElementById("ArticleImgID5").src = myarr.articles[4].urlToImage;
                    document.getElementById("ArticleTitleID5").innerHTML = myarr.articles[4].title;
                    document.getElementById("ArticleSourceID5").innerHTML = myarr.articles[4].source.name;
                    document.getElementById("ArticleDescID5").innerHTML = myarr.articles[4].description;

                    document.getElementById("ArticleImgID6").src = myarr.articles[5].urlToImage;
                    document.getElementById("ArticleTitleID6").innerHTML = myarr.articles[5].title;
                    document.getElementById("ArticleSourceID6").innerHTML = myarr.articles[5].source.name;
                    document.getElementById("ArticleDescID6").innerHTML = myarr.articles[5].description;

                    document.getElementById("ArticleImgID7").src = myarr.articles[6].urlToImage;
                    document.getElementById("ArticleTitleID7").innerHTML = myarr.articles[6].title;
                    document.getElementById("ArticleSourceID7").innerHTML = myarr.articles[6].source.name;
                    document.getElementById("ArticleDescID7").innerHTML = myarr.articles[6].description;

                    document.getElementById("ArticleImgID8").src = myarr.articles[7].urlToImage;
                    document.getElementById("ArticleTitleID8").innerHTML = myarr.articles[7].title;
                    document.getElementById("ArticleSourceID8").innerHTML = myarr.articles[7].source.name;
                    document.getElementById("ArticleDescID8").innerHTML = myarr.articles[7].description;

                    document.getElementById("ArticleImgID9").src = myarr.articles[8].urlToImage;
                    document.getElementById("ArticleTitleID9").innerHTML = myarr.articles[8].title;
                    document.getElementById("ArticleSourceID9").innerHTML = myarr.articles[8].source.name;
                    document.getElementById("ArticleDescID9").innerHTML = myarr.articles[8].description;

                    document.getElementById("ArticleImgID10").src = myarr.articles[9].urlToImage;
                    document.getElementById("ArticleTitleID10").innerHTML = myarr.articles[9].title;
                    document.getElementById("ArticleSourceID10").innerHTML = myarr.articles[9].source.name;
                    document.getElementById("ArticleDescID10").innerHTML = myarr.articles[9].description;
                }
            }
            xhttp.open("GET", "https://newsapi.org/v2/top-headlines?category=business&sortBy=publishedAt&apiKey=05730bf65e39405fa50a3345ea89ffac", true);
            xhttp.send();


        }


        function LOAD_Entertainment() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myarr = JSON.parse(this.responseText);
                    document.getElementById("ArticleImgID1").src = myarr.articles[0].urlToImage;
                    document.getElementById("ArticleTitleID1").innerHTML = myarr.articles[0].title;
                    document.getElementById("ArticleSourceID1").innerHTML = myarr.articles[0].source.name;
                    document.getElementById("ArticleDescID1").innerHTML = myarr.articles[0].description;

                    document.getElementById("ArticleImgID2").src = myarr.articles[1].urlToImage;
                    document.getElementById("ArticleTitleID2").innerHTML = myarr.articles[1].title;
                    document.getElementById("ArticleSourceID2").innerHTML = myarr.articles[1].source.name;
                    document.getElementById("ArticleDescID2").innerHTML = myarr.articles[1].description;

                    document.getElementById("ArticleImgID3").src = myarr.articles[2].urlToImage;
                    document.getElementById("ArticleTitleID3").innerHTML = myarr.articles[2].title;
                    document.getElementById("ArticleSourceID3").innerHTML = myarr.articles[2].source.name;
                    document.getElementById("ArticleDescID3").innerHTML = myarr.articles[2].description;

                    document.getElementById("ArticleImgID4").src = myarr.articles[3].urlToImage;
                    document.getElementById("ArticleTitleID4").innerHTML = myarr.articles[3].title;
                    document.getElementById("ArticleSourceID4").innerHTML = myarr.articles[3].source.name;
                    document.getElementById("ArticleDescID4").innerHTML = myarr.articles[3].description;

                    document.getElementById("ArticleImgID5").src = myarr.articles[4].urlToImage;
                    document.getElementById("ArticleTitleID5").innerHTML = myarr.articles[4].title;
                    document.getElementById("ArticleSourceID5").innerHTML = myarr.articles[4].source.name;
                    document.getElementById("ArticleDescID5").innerHTML = myarr.articles[4].description;

                    document.getElementById("ArticleImgID6").src = myarr.articles[5].urlToImage;
                    document.getElementById("ArticleTitleID6").innerHTML = myarr.articles[5].title;
                    document.getElementById("ArticleSourceID6").innerHTML = myarr.articles[5].source.name;
                    document.getElementById("ArticleDescID6").innerHTML = myarr.articles[5].description;

                    document.getElementById("ArticleImgID7").src = myarr.articles[6].urlToImage;
                    document.getElementById("ArticleTitleID7").innerHTML = myarr.articles[6].title;
                    document.getElementById("ArticleSourceID7").innerHTML = myarr.articles[6].source.name;
                    document.getElementById("ArticleDescID7").innerHTML = myarr.articles[6].description;

                    document.getElementById("ArticleImgID8").src = myarr.articles[7].urlToImage;
                    document.getElementById("ArticleTitleID8").innerHTML = myarr.articles[7].title;
                    document.getElementById("ArticleSourceID8").innerHTML = myarr.articles[7].source.name;
                    document.getElementById("ArticleDescID8").innerHTML = myarr.articles[7].description;

                    document.getElementById("ArticleImgID9").src = myarr.articles[8].urlToImage;
                    document.getElementById("ArticleTitleID9").innerHTML = myarr.articles[8].title;
                    document.getElementById("ArticleSourceID9").innerHTML = myarr.articles[8].source.name;
                    document.getElementById("ArticleDescID9").innerHTML = myarr.articles[8].description;

                    document.getElementById("ArticleImgID10").src = myarr.articles[9].urlToImage;
                    document.getElementById("ArticleTitleID10").innerHTML = myarr.articles[9].title;
                    document.getElementById("ArticleSourceID10").innerHTML = myarr.articles[9].source.name;
                    document.getElementById("ArticleDescID10").innerHTML = myarr.articles[9].description;
                }
            }
            xhttp.open("GET", "https://newsapi.org/v2/top-headlines?category=entertainment&sortBy=publishedAt&apiKey=05730bf65e39405fa50a3345ea89ffac", true);
            xhttp.send();


        }


        function LOAD_General() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myarr = JSON.parse(this.responseText);
                    document.getElementById("ArticleImgID1").src = myarr.articles[0].urlToImage;
                    document.getElementById("ArticleTitleID1").innerHTML = myarr.articles[0].title;
                    document.getElementById("ArticleSourceID1").innerHTML = myarr.articles[0].source.name;
                    document.getElementById("ArticleDescID1").innerHTML = myarr.articles[0].description;

                    document.getElementById("ArticleImgID2").src = myarr.articles[1].urlToImage;
                    document.getElementById("ArticleTitleID2").innerHTML = myarr.articles[1].title;
                    document.getElementById("ArticleSourceID2").innerHTML = myarr.articles[1].source.name;
                    document.getElementById("ArticleDescID2").innerHTML = myarr.articles[1].description;

                    document.getElementById("ArticleImgID3").src = myarr.articles[2].urlToImage;
                    document.getElementById("ArticleTitleID3").innerHTML = myarr.articles[2].title;
                    document.getElementById("ArticleSourceID3").innerHTML = myarr.articles[2].source.name;
                    document.getElementById("ArticleDescID3").innerHTML = myarr.articles[2].description;

                    document.getElementById("ArticleImgID4").src = myarr.articles[3].urlToImage;
                    document.getElementById("ArticleTitleID4").innerHTML = myarr.articles[3].title;
                    document.getElementById("ArticleSourceID4").innerHTML = myarr.articles[3].source.name;
                    document.getElementById("ArticleDescID4").innerHTML = myarr.articles[3].description;

                    document.getElementById("ArticleImgID5").src = myarr.articles[4].urlToImage;
                    document.getElementById("ArticleTitleID5").innerHTML = myarr.articles[4].title;
                    document.getElementById("ArticleSourceID5").innerHTML = myarr.articles[4].source.name;
                    document.getElementById("ArticleDescID5").innerHTML = myarr.articles[4].description;

                    document.getElementById("ArticleImgID6").src = myarr.articles[5].urlToImage;
                    document.getElementById("ArticleTitleID6").innerHTML = myarr.articles[5].title;
                    document.getElementById("ArticleSourceID6").innerHTML = myarr.articles[5].source.name;
                    document.getElementById("ArticleDescID6").innerHTML = myarr.articles[5].description;

                    document.getElementById("ArticleImgID7").src = myarr.articles[6].urlToImage;
                    document.getElementById("ArticleTitleID7").innerHTML = myarr.articles[6].title;
                    document.getElementById("ArticleSourceID7").innerHTML = myarr.articles[6].source.name;
                    document.getElementById("ArticleDescID7").innerHTML = myarr.articles[6].description;

                    document.getElementById("ArticleImgID8").src = myarr.articles[7].urlToImage;
                    document.getElementById("ArticleTitleID8").innerHTML = myarr.articles[7].title;
                    document.getElementById("ArticleSourceID8").innerHTML = myarr.articles[7].source.name;
                    document.getElementById("ArticleDescID8").innerHTML = myarr.articles[7].description;

                    document.getElementById("ArticleImgID9").src = myarr.articles[8].urlToImage;
                    document.getElementById("ArticleTitleID9").innerHTML = myarr.articles[8].title;
                    document.getElementById("ArticleSourceID9").innerHTML = myarr.articles[8].source.name;
                    document.getElementById("ArticleDescID9").innerHTML = myarr.articles[8].description;

                    document.getElementById("ArticleImgID10").src = myarr.articles[9].urlToImage;
                    document.getElementById("ArticleTitleID10").innerHTML = myarr.articles[9].title;
                    document.getElementById("ArticleSourceID10").innerHTML = myarr.articles[9].source.name;
                    document.getElementById("ArticleDescID10").innerHTML = myarr.articles[9].description;
                }
            }
            xhttp.open("GET", "https://newsapi.org/v2/top-headlines?category=general&sortBy=publishedAt&apiKey=05730bf65e39405fa50a3345ea89ffac", true);
            xhttp.send();


        }


        function LOAD_Health() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myarr = JSON.parse(this.responseText);
                    document.getElementById("ArticleImgID1").src = myarr.articles[0].urlToImage;
                    document.getElementById("ArticleTitleID1").innerHTML = myarr.articles[0].title;
                    document.getElementById("ArticleSourceID1").innerHTML = myarr.articles[0].source.name;
                    document.getElementById("ArticleDescID1").innerHTML = myarr.articles[0].description;

                    document.getElementById("ArticleImgID2").src = myarr.articles[1].urlToImage;
                    document.getElementById("ArticleTitleID2").innerHTML = myarr.articles[1].title;
                    document.getElementById("ArticleSourceID2").innerHTML = myarr.articles[1].source.name;
                    document.getElementById("ArticleDescID2").innerHTML = myarr.articles[1].description;

                    document.getElementById("ArticleImgID3").src = myarr.articles[2].urlToImage;
                    document.getElementById("ArticleTitleID3").innerHTML = myarr.articles[2].title;
                    document.getElementById("ArticleSourceID3").innerHTML = myarr.articles[2].source.name;
                    document.getElementById("ArticleDescID3").innerHTML = myarr.articles[2].description;

                    document.getElementById("ArticleImgID4").src = myarr.articles[3].urlToImage;
                    document.getElementById("ArticleTitleID4").innerHTML = myarr.articles[3].title;
                    document.getElementById("ArticleSourceID4").innerHTML = myarr.articles[3].source.name;
                    document.getElementById("ArticleDescID4").innerHTML = myarr.articles[3].description;

                    document.getElementById("ArticleImgID5").src = myarr.articles[4].urlToImage;
                    document.getElementById("ArticleTitleID5").innerHTML = myarr.articles[4].title;
                    document.getElementById("ArticleSourceID5").innerHTML = myarr.articles[4].source.name;
                    document.getElementById("ArticleDescID5").innerHTML = myarr.articles[4].description;

                    document.getElementById("ArticleImgID6").src = myarr.articles[5].urlToImage;
                    document.getElementById("ArticleTitleID6").innerHTML = myarr.articles[5].title;
                    document.getElementById("ArticleSourceID6").innerHTML = myarr.articles[5].source.name;
                    document.getElementById("ArticleDescID6").innerHTML = myarr.articles[5].description;

                    document.getElementById("ArticleImgID7").src = myarr.articles[6].urlToImage;
                    document.getElementById("ArticleTitleID7").innerHTML = myarr.articles[6].title;
                    document.getElementById("ArticleSourceID7").innerHTML = myarr.articles[6].source.name;
                    document.getElementById("ArticleDescID7").innerHTML = myarr.articles[6].description;

                    document.getElementById("ArticleImgID8").src = myarr.articles[7].urlToImage;
                    document.getElementById("ArticleTitleID8").innerHTML = myarr.articles[7].title;
                    document.getElementById("ArticleSourceID8").innerHTML = myarr.articles[7].source.name;
                    document.getElementById("ArticleDescID8").innerHTML = myarr.articles[7].description;

                    document.getElementById("ArticleImgID9").src = myarr.articles[8].urlToImage;
                    document.getElementById("ArticleTitleID9").innerHTML = myarr.articles[8].title;
                    document.getElementById("ArticleSourceID9").innerHTML = myarr.articles[8].source.name;
                    document.getElementById("ArticleDescID9").innerHTML = myarr.articles[8].description;

                    document.getElementById("ArticleImgID10").src = myarr.articles[9].urlToImage;
                    document.getElementById("ArticleTitleID10").innerHTML = myarr.articles[9].title;
                    document.getElementById("ArticleSourceID10").innerHTML = myarr.articles[9].source.name;
                    document.getElementById("ArticleDescID10").innerHTML = myarr.articles[9].description;
                }
            }
            xhttp.open("GET", "https://newsapi.org/v2/top-headlines?category=health&sortBy=publishedAt&apiKey=05730bf65e39405fa50a3345ea89ffac", true);
            xhttp.send();


        }


        function LOAD_Science() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myarr = JSON.parse(this.responseText);
                    document.getElementById("ArticleImgID1").src = myarr.articles[0].urlToImage;
                    document.getElementById("ArticleTitleID1").innerHTML = myarr.articles[0].title;
                    document.getElementById("ArticleSourceID1").innerHTML = myarr.articles[0].source.name;
                    document.getElementById("ArticleDescID1").innerHTML = myarr.articles[0].description;

                    document.getElementById("ArticleImgID2").src = myarr.articles[1].urlToImage;
                    document.getElementById("ArticleTitleID2").innerHTML = myarr.articles[1].title;
                    document.getElementById("ArticleSourceID2").innerHTML = myarr.articles[1].source.name;
                    document.getElementById("ArticleDescID2").innerHTML = myarr.articles[1].description;

                    document.getElementById("ArticleImgID3").src = myarr.articles[2].urlToImage;
                    document.getElementById("ArticleTitleID3").innerHTML = myarr.articles[2].title;
                    document.getElementById("ArticleSourceID3").innerHTML = myarr.articles[2].source.name;
                    document.getElementById("ArticleDescID3").innerHTML = myarr.articles[2].description;

                    document.getElementById("ArticleImgID4").src = myarr.articles[3].urlToImage;
                    document.getElementById("ArticleTitleID4").innerHTML = myarr.articles[3].title;
                    document.getElementById("ArticleSourceID4").innerHTML = myarr.articles[3].source.name;
                    document.getElementById("ArticleDescID4").innerHTML = myarr.articles[3].description;

                    document.getElementById("ArticleImgID5").src = myarr.articles[4].urlToImage;
                    document.getElementById("ArticleTitleID5").innerHTML = myarr.articles[4].title;
                    document.getElementById("ArticleSourceID5").innerHTML = myarr.articles[4].source.name;
                    document.getElementById("ArticleDescID5").innerHTML = myarr.articles[4].description;

                    document.getElementById("ArticleImgID6").src = myarr.articles[5].urlToImage;
                    document.getElementById("ArticleTitleID6").innerHTML = myarr.articles[5].title;
                    document.getElementById("ArticleSourceID6").innerHTML = myarr.articles[5].source.name;
                    document.getElementById("ArticleDescID6").innerHTML = myarr.articles[5].description;

                    document.getElementById("ArticleImgID7").src = myarr.articles[6].urlToImage;
                    document.getElementById("ArticleTitleID7").innerHTML = myarr.articles[6].title;
                    document.getElementById("ArticleSourceID7").innerHTML = myarr.articles[6].source.name;
                    document.getElementById("ArticleDescID7").innerHTML = myarr.articles[6].description;

                    document.getElementById("ArticleImgID8").src = myarr.articles[7].urlToImage;
                    document.getElementById("ArticleTitleID8").innerHTML = myarr.articles[7].title;
                    document.getElementById("ArticleSourceID8").innerHTML = myarr.articles[7].source.name;
                    document.getElementById("ArticleDescID8").innerHTML = myarr.articles[7].description;

                    document.getElementById("ArticleImgID9").src = myarr.articles[8].urlToImage;
                    document.getElementById("ArticleTitleID9").innerHTML = myarr.articles[8].title;
                    document.getElementById("ArticleSourceID9").innerHTML = myarr.articles[8].source.name;
                    document.getElementById("ArticleDescID9").innerHTML = myarr.articles[8].description;

                    document.getElementById("ArticleImgID10").src = myarr.articles[9].urlToImage;
                    document.getElementById("ArticleTitleID10").innerHTML = myarr.articles[9].title;
                    document.getElementById("ArticleSourceID10").innerHTML = myarr.articles[9].source.name;
                    document.getElementById("ArticleDescID10").innerHTML = myarr.articles[9].description;
                }
            }
            xhttp.open("GET", "https://newsapi.org/v2/top-headlines?category=science&sortBy=publishedAt&apiKey=05730bf65e39405fa50a3345ea89ffac", true);
            xhttp.send();


        }


        function LOAD_Sports() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myarr = JSON.parse(this.responseText);
                    document.getElementById("ArticleImgID1").src = myarr.articles[0].urlToImage;
                    document.getElementById("ArticleTitleID1").innerHTML = myarr.articles[0].title;
                    document.getElementById("ArticleSourceID1").innerHTML = myarr.articles[0].source.name;
                    document.getElementById("ArticleDescID1").innerHTML = myarr.articles[0].description;

                    document.getElementById("ArticleImgID2").src = myarr.articles[1].urlToImage;
                    document.getElementById("ArticleTitleID2").innerHTML = myarr.articles[1].title;
                    document.getElementById("ArticleSourceID2").innerHTML = myarr.articles[1].source.name;
                    document.getElementById("ArticleDescID2").innerHTML = myarr.articles[1].description;

                    document.getElementById("ArticleImgID3").src = myarr.articles[2].urlToImage;
                    document.getElementById("ArticleTitleID3").innerHTML = myarr.articles[2].title;
                    document.getElementById("ArticleSourceID3").innerHTML = myarr.articles[2].source.name;
                    document.getElementById("ArticleDescID3").innerHTML = myarr.articles[2].description;

                    document.getElementById("ArticleImgID4").src = myarr.articles[3].urlToImage;
                    document.getElementById("ArticleTitleID4").innerHTML = myarr.articles[3].title;
                    document.getElementById("ArticleSourceID4").innerHTML = myarr.articles[3].source.name;
                    document.getElementById("ArticleDescID4").innerHTML = myarr.articles[3].description;

                    document.getElementById("ArticleImgID5").src = myarr.articles[4].urlToImage;
                    document.getElementById("ArticleTitleID5").innerHTML = myarr.articles[4].title;
                    document.getElementById("ArticleSourceID5").innerHTML = myarr.articles[4].source.name;
                    document.getElementById("ArticleDescID5").innerHTML = myarr.articles[4].description;

                    document.getElementById("ArticleImgID6").src = myarr.articles[5].urlToImage;
                    document.getElementById("ArticleTitleID6").innerHTML = myarr.articles[5].title;
                    document.getElementById("ArticleSourceID6").innerHTML = myarr.articles[5].source.name;
                    document.getElementById("ArticleDescID6").innerHTML = myarr.articles[5].description;

                    document.getElementById("ArticleImgID7").src = myarr.articles[6].urlToImage;
                    document.getElementById("ArticleTitleID7").innerHTML = myarr.articles[6].title;
                    document.getElementById("ArticleSourceID7").innerHTML = myarr.articles[6].source.name;
                    document.getElementById("ArticleDescID7").innerHTML = myarr.articles[6].description;

                    document.getElementById("ArticleImgID8").src = myarr.articles[7].urlToImage;
                    document.getElementById("ArticleTitleID8").innerHTML = myarr.articles[7].title;
                    document.getElementById("ArticleSourceID8").innerHTML = myarr.articles[7].source.name;
                    document.getElementById("ArticleDescID8").innerHTML = myarr.articles[7].description;

                    document.getElementById("ArticleImgID9").src = myarr.articles[8].urlToImage;
                    document.getElementById("ArticleTitleID9").innerHTML = myarr.articles[8].title;
                    document.getElementById("ArticleSourceID9").innerHTML = myarr.articles[8].source.name;
                    document.getElementById("ArticleDescID9").innerHTML = myarr.articles[8].description;

                    document.getElementById("ArticleImgID10").src = myarr.articles[9].urlToImage;
                    document.getElementById("ArticleTitleID10").innerHTML = myarr.articles[9].title;
                    document.getElementById("ArticleSourceID10").innerHTML = myarr.articles[9].source.name;
                    document.getElementById("ArticleDescID10").innerHTML = myarr.articles[9].description;
                }
            }
            xhttp.open("GET", "https://newsapi.org/v2/top-headlines?category=sports&sortBy=publishedAt&apiKey=05730bf65e39405fa50a3345ea89ffac", true);
            xhttp.send();


        }


        function LOAD_Technology() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myarr = JSON.parse(this.responseText);
                    document.getElementById("ArticleImgID1").src = myarr.articles[0].urlToImage;
                    document.getElementById("ArticleTitleID1").innerHTML = myarr.articles[0].title;
                    document.getElementById("ArticleSourceID1").innerHTML = myarr.articles[0].source.name;
                    document.getElementById("ArticleDescID1").innerHTML = myarr.articles[0].description;

                    document.getElementById("ArticleImgID2").src = myarr.articles[1].urlToImage;
                    document.getElementById("ArticleTitleID2").innerHTML = myarr.articles[1].title;
                    document.getElementById("ArticleSourceID2").innerHTML = myarr.articles[1].source.name;
                    document.getElementById("ArticleDescID2").innerHTML = myarr.articles[1].description;

                    document.getElementById("ArticleImgID3").src = myarr.articles[2].urlToImage;
                    document.getElementById("ArticleTitleID3").innerHTML = myarr.articles[2].title;
                    document.getElementById("ArticleSourceID3").innerHTML = myarr.articles[2].source.name;
                    document.getElementById("ArticleDescID3").innerHTML = myarr.articles[2].description;

                    document.getElementById("ArticleImgID4").src = myarr.articles[3].urlToImage;
                    document.getElementById("ArticleTitleID4").innerHTML = myarr.articles[3].title;
                    document.getElementById("ArticleSourceID4").innerHTML = myarr.articles[3].source.name;
                    document.getElementById("ArticleDescID4").innerHTML = myarr.articles[3].description;

                    document.getElementById("ArticleImgID5").src = myarr.articles[4].urlToImage;
                    document.getElementById("ArticleTitleID5").innerHTML = myarr.articles[4].title;
                    document.getElementById("ArticleSourceID5").innerHTML = myarr.articles[4].source.name;
                    document.getElementById("ArticleDescID5").innerHTML = myarr.articles[4].description;

                    document.getElementById("ArticleImgID6").src = myarr.articles[5].urlToImage;
                    document.getElementById("ArticleTitleID6").innerHTML = myarr.articles[5].title;
                    document.getElementById("ArticleSourceID6").innerHTML = myarr.articles[5].source.name;
                    document.getElementById("ArticleDescID6").innerHTML = myarr.articles[5].description;

                    document.getElementById("ArticleImgID7").src = myarr.articles[6].urlToImage;
                    document.getElementById("ArticleTitleID7").innerHTML = myarr.articles[6].title;
                    document.getElementById("ArticleSourceID7").innerHTML = myarr.articles[6].source.name;
                    document.getElementById("ArticleDescID7").innerHTML = myarr.articles[6].description;

                    document.getElementById("ArticleImgID8").src = myarr.articles[7].urlToImage;
                    document.getElementById("ArticleTitleID8").innerHTML = myarr.articles[7].title;
                    document.getElementById("ArticleSourceID8").innerHTML = myarr.articles[7].source.name;
                    document.getElementById("ArticleDescID8").innerHTML = myarr.articles[7].description;

                    document.getElementById("ArticleImgID9").src = myarr.articles[8].urlToImage;
                    document.getElementById("ArticleTitleID9").innerHTML = myarr.articles[8].title;
                    document.getElementById("ArticleSourceID9").innerHTML = myarr.articles[8].source.name;
                    document.getElementById("ArticleDescID9").innerHTML = myarr.articles[8].description;

                    document.getElementById("ArticleImgID10").src = myarr.articles[9].urlToImage;
                    document.getElementById("ArticleTitleID10").innerHTML = myarr.articles[9].title;
                    document.getElementById("ArticleSourceID10").innerHTML = myarr.articles[9].source.name;
                    document.getElementById("ArticleDescID10").innerHTML = myarr.articles[9].description;
                }
            }
            xhttp.open("GET", "https://newsapi.org/v2/top-headlines?category=technology&sortBy=publishedAt&apiKey=05730bf65e39405fa50a3345ea89ffac", true);
            xhttp.send();


        }

    </script>


</body>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="JS/materialize.min.js"></script>


<script>
    //Sidenav menu function
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav, {});

    //Dropdown button function
    const Dropdown = document.querySelectorAll('.dropdown-trigger');
    M.Dropdown.init(Dropdown, {});

    //Material box function - for viewing images
    const MaterialBox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(MaterialBox, {});

    //Modal box function - for sign in and messages
    const Modal = document.querySelectorAll('.modal');
    M.Modal.init(Modal, {});

</script>

<script>
    document.getElementById('Facebook_Share').onclick = function() {
        FB.ui({
            method: 'share',
            display: 'popup',
            href: '',
        }, function(response) {});
    }

</script>



<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId: '654928284923330',
            autoLogAppEvents: true,
            xfbml: true,
            version: 'v3.2'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>


<script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>


</html>
