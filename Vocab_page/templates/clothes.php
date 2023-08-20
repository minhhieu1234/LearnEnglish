<?php
include("../../login_php/connect_db.php");

$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Vocab_page/static/static_c2/clothes.css">
    <link rel="icon" href="/home_page/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Clothes</title>
</head>

<body>
    <div class="wrapper">
        <header class="navbar-header">
            <div class="grid">  
              <nav class="header-navbar">
                <ul class="header-list-brand">
                  <li class="header-navbar-icon">
                    <a href="" class="header-navbar-logo">
                      <img class="header-navbar-logo_1" src="/home_page/images/logo2.svg" alt="Home" title="LearnEnglish">
                    </a>
                  </li>
                  <li class="header-logo-brand">
                    <a href="/home_page/home.html" class="header-navbar-name header-navbar-name--saparate">LearnEnglish</a>
                  </li>
                </ul>
                <ul class="header-list-brand">
                  <li class="header-logo-brand">
                    <a href="/login_page/login.html" class="header-navbar-btn header-navbar-btn--separate">Login</a>
                  </li>
                  <li class="header-logo-brand">
                    <a href="/register_page/register.html" class="header-navbar-btn">Register</a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="header-navbar-menu">
              <ul class="main-menu">
                <li class="first">
                  <a href="/home_page/home.html" class="is-active">Home</a>
                </li>
                <li class="expanded-dropdown">
                  <a href="/skill_page/templates/templates_1/skill.html" class="dropdown-toggle">Skill</a>
                  <ul class="dropdown-menu">
                    <li><a href="">Listening</a></li>
                    <li><a href="">Speaking</a></li>
                    <li><a href="">Reading</a></li>
                    <li><a href="">Writing</a></li>
                  </ul>
                </li>
                <li class="expanded-dropdown">
                  <a href="/grammar_page/templates/templates_c0/grammar.html" class="dropdown-toggle">Grammar</a>
                  <ul class="dropdown-menu">
                    <li><a href="/grammar_page/templates/templates_c1/a1-a2-grammar.html">A1-A2 Grammar</a></li>
                    <li><a href="/grammar_page/templates/templates_c1/b1-b2-grammar.html">B1-B2 Grammar</a></li>
                    
                </ul>
                </li>
                <li class="expanded-dropdown">
                  <a href="/Vocab_page/templates/templates_c0/vocab.html" class="dropdown-toggle">Vocabulary</a>
                  <ul class="dropdown-menu">
                    <li><a href="/Vocab_page/templates/templates_c1/a1-a2_vocab.html">A1-A2 Vocabulary</a></li>
                    <li><a href="/Vocab_page/templates/templates_c1/b1-b2-vocab.html">B1-B2 Vocabulary</a></li>
                </ul>
                </li>
                <li class="expanded-dropdown">
                  <a href="" class="dropdown-toggle">Learning Roadmap</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="">Ielts</a>
                    </li>
                    <li>
                      <a href="">Toeic</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </header>
        <div class="region-content-container">
            <div class="col-sm-12" role="heading">
                <div class="region region-header">
                    <section id="block-block-group-breadcrumbs"
                        class="block block-blockgroup block-block-groupbreadcrumbs clearfix">
                        <ol class="breadcrumb">
                            <li>
                                <a href="">Vocabulary</a>
                            </li>
                            <li class="active">
                                A1-A2 Vocabulary
                            </li>
                            <li>Clothes</li>
                        </ol>
                    </section>
                    <h1 class="page-header">
                        <div class="field field--name-name field--type-string field--label-hidden field--item">Clothes
                        </div>
                    </h1>
                </div>
            </div>
            <div class="block-content-container">
                <div class="left-side">
                    <div class="block-video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/OBhoJ7za_6U"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="block-text-container">
                        <h3>Watch the video</h3>
                        <p>Listen to the words and repeat</p>
                        <h3>Clothes words in this video</h3>
                        <table class="table table-hover table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Vocabulary</th>
                                    <th scope="col">Pronounce</th>
                                    <th scope="col">Meaning</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jacket</td>
                                    <td>/ˈdʒæk.ɪt/</td>
                                    <td>Áo khoắc</td>
                                </tr>
                                <tr>
                                    <td>Leather jacket.</td>
                                    <td>/ˈlɛðədʒakɪt/</td>
                                    <td>Áo khoác da</td>
                                </tr>
                                <tr>
                                    <td>Coat</td>
                                    <td>/Kəʊt/</td>
                                    <td>Áo choàng</td>
                                </tr>
                                <tr>
                                    <td>Raincoat</td>
                                    <td>/ˈreɪnkəʊt/</td>
                                    <td>Áo mưa</td>
                                </tr>
                                <tr>
                                    <td>Scarf</td>
                                    <td>/skɑːf/</td>
                                    <td>Khăn quàng cổ</td>
                                </tr>
                                <tr>
                                    <td>Cap/Hat</td>
                                    <td>/kap/</td>
                                    <td>Mũ</td>
                                </tr>

                                <tr>
                                    <td>T-shirt</td>
                                    <td>/ˈtiː.ʃɜːt/</td>
                                    <td>Áo thun tay ngắn</td>
                                </tr>
                                <tr>
                                    <td>Shirt</td>
                                    <td>/ʃɜːt/</td>
                                    <td>Áo sơ mi</td>
                                </tr>
                                <tr>
                                    <td>Blouse</td>
                                    <td>/blaʊz/</td>
                                    <td>Áo sơ mi dành cho con gái</td>
                                </tr>
                                <tr>
                                    <td>Dress</td>
                                    <td>/blaʊz/</td>
                                    <td>Đầm</td>
                                </tr>
                                <tr>
                                    <td>Suit</td>
                                    <td>/suːt/</td>
                                    <td>Trang phục</td>
                                </tr>
                                <tr>
                                    <td>Jean</td>
                                    <td>/ˈdʒiːn /</td>
                                    <td>Quần jean</td>
                                </tr>
                                <tr>
                                    <td>Pullover/Sweater.</td>
                                    <td>/ˈpʊlˌəʊ.vər,ˈswet.ər/</td>
                                    <td>Áo Sweater</td>
                                </tr>
                                <tr>
                                    <td>Trousers/pants</td>
                                    <td>/ˈtraʊ.zəz,pænts/</td>
                                    <td>Quần dài</td>
                                </tr>
                                <tr>
                                    <td>Belt</td>
                                    <td>/belt/</td>
                                    <td>Thắt lưng</td>
                                </tr>
                                <tr>
                                    <td>Short</td>
                                    <td>/ʃɔːt/</td>
                                    <td>Quần ngắn</td>
                                </tr>
                                <tr>
                                    <td>Skirt</td>
                                    <td>/skɜːt/</td>
                                    <td>Váy</td>
                                </tr>
                                <tr>
                                    <td>Socks</td>
                                    <td>/sɒk/</td>
                                    <td>Vớ/Tất</td>
                                </tr>
                                <tr>
                                    <td>Shoes</td>
                                    <td>/ʃuː/</td>
                                    <td>Giày</td>
                                </tr>
                                <tr>
                                    <td>Trainers/sneakers</td>
                                    <td>/fəʊn keɪs/ </td>
                                    <td>Giày thời trang</td>
                                </tr>
                                <tr>
                                    <td>Flats</td>
                                    <td>/flat/</td>
                                    <td>Giày đế bằng</td>
                                </tr>
                                <tr>
                                    <td>High heel</td>
                                    <td>/haɪ ˈhiːlz/</td>
                                    <td>Giày cao gót</td>
                                </tr>
                                <tr>
                                    <td>Boots</td>
                                    <td>/flɪp/</td>
                                    <td>Dép cổ cao</td>
                                </tr>
                                <tr>
                                    <td>Sandals</td>
                                    <td>/flɒps/</td>
                                    <td>Dép quai hậu</td>
                                </tr>
                                <tr>
                                    <td>Flip flops</td>
                                    <td>/hiːl/</td>
                                    <td>Giày xỏ ngons</td>
                                </tr>
                                <tr>
                                    <td>Gloves</td>
                                    <td>/ʌmˈbrel.ə/</td>
                                    <td>Găng tay</td>
                                </tr>
                                <tr>
                                    <td>Tie</td>
                                    <td>/Hænd ˈmɪr.ər/</td>
                                    <td>Áo thun</td>
                                </tr>
                                <tr>
                                    <td>Bow tie</td>
                                    <td>/heər klɪp/</td>
                                    <td>Nơ</td>
                                </tr>
                                <tr>
                                    <td>Bathrobe</td>
                                    <td>/heər klɪp/</td>
                                    <td>Đồ ngủ</td>
                                </tr>
                                <tr>
                                    <td>Towel</td>
                                    <td>/heər klɪp/</td>
                                    <td>Khăn</td>
                                </tr>
                                <tr>
                                    <td>Tank top</td>
                                    <td>/heər klɪp/</td>
                                    <td>Áo 3 lổ</td>
                                </tr>
                                <tr>
                                    <td>Swimsuit</td>
                                    <td>/heər klɪp/</td>
                                    <td>Đồ bơi</td>
                                </tr>
                                <tr>
                                    <td>Bikini</td>
                                    <td>/heər klɪp/</td>
                                    <td>Bikini</td>
                                </tr>
                                <tr>
                                    <td>Knickers/panties</td>
                                    <td>/heər klɪp/</td>
                                    <td>Giày trượt/Giày patin</td>
                                </tr>
                                <tr>
                                    <td>underpants</td>
                                    <td>/heər klɪp/</td>
                                    <td>Quần dưới</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="right-side">
                    <aside class="aside-menu-container">
                        <div class="aside-sidebar-container">
                            <nav role="navigation" id="block-menu-sidebar-container">
                                <h2>
                                    <a href="/grammar_page/templates/templates_c0/grammar.html">Skill</a>
                                </h2>
                                <ul class="menu--sidebar-menu">
                                    <li>
                                        <a href="/grammar_page/templates/templates_c1/a1-a2-grammar.html"><i
                                                class="fa-solid fa-check"></i> Listening</a>
                                    </li>
                                    <li>
                                        <a href="/grammar_page/templates/templates_c1/b1-b2-grammar.html"><i
                                                class="fa-solid fa-check"></i> Speaking</a>
                                    </li>
                                    <li>
                                        <a href="/grammar_page/templates/templates_c1/c1-grammar.html"><i
                                                class="fa-solid fa-check"></i> Reading</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/writting.html"><i
                                                class="fa-solid fa-check"></i> Writting</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </aside>
                    <aside class="aside-menu-container">
                        <div class="aside-sidebar-container">
                            <nav role="navigation" id="block-menu-sidebar-container">
                                <h2>
                                    <a href="/grammar_page/templates/templates_c0/grammar.html">Grammar</a>
                                </h2>
                                <ul class="menu--sidebar-menu">
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/listening.html"><i
                                                class="fa-solid fa-check"></i> A1-A2 grammar</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/speaking.html"><i
                                                class="fa-solid fa-check"></i> B1-B2 grammar</a>
                                    </li>
                                    

                                </ul>
                            </nav>
                        </div>
                    </aside>
                    <aside class="aside-menu-container">
                        <div class="aside-sidebar-container">
                            <nav role="navigation" id="block-menu-sidebar-container">
                                <h2>
                                    <a href="/grammar_page/templates/templates_c0/grammar.html">Vocabulary</a>
                                </h2>
                                <ul class="menu--sidebar-menu">
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/listening.html"><i
                                                class="fa-solid fa-check"></i> A1-A2 vocabulary</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/speaking.html"><i
                                                class="fa-solid fa-check"></i> B1-B2 vocabulary</a>
                                    </li>


                                </ul>
                            </nav>
                        </div>
                    </aside>
                    <aside class="aside-menu-container">
                        <div class="aside-sidebar-container">
                            <nav role="navigation" id="block-menu-sidebar-container">
                                <h2>
                                    <a href="/grammar_page/templates/templates_c0/grammar.html">Learning Roadmap</a>
                                </h2>
                                <ul class="menu--sidebar-menu">
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/listening.html"><i
                                                class="fa-solid fa-check"></i> IELTS</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/speaking.html"><i
                                                class="fa-solid fa-check"></i> TOEIC</a>
                                    </li>


                                </ul>
                            </nav>
                        </div>
                    </aside>
                </div>
            </div>
            <section
                class="views-element-container view-taxonomy-term block block-views block-views-blocktaxonomy-term-blocks-block-1 clearfix"
                id="block-views-block-taxonomy-term-blocks-block-1">
                <h2>Choose a vocabulary lesson</h2>
                <div class="form-group">
                    <div class="view-taxonomy-term-blocks view-id-taxonomy_term_blocks view-display-id-block_1">
                        <div class="view-footer">
                            <div class="view view-section view-id-section view-display-id-default">
                                <div class="view-content">
                                    <div class="views-row">
                                        <div class="layout layout--onecol">
                                            <div class="layout__region layout__region--content">
                                                <div
                                                    class="field field--name-field-image field--type-image field--label-hidden field--items">
                                                    <div class="field--item">
                                                        <a href="">
                                                            <img src="https://godfatherstyle.com/wp-content/uploads/2020/12/Fashion-Accessories2.jpg"
                                                                alt="A1-A2 Vocabulary" sizes="100vw"
                                                                class="img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <div
                                                        class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                        <h2>
                                                            <a
                                                                href="/Vocab_page/templates/templates_c2/accesories.html">Accessories</a>
                                                        </h2>
                                                    </div>
                                                    <div
                                                        class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                        Do the exercises and learn the words for some accessories.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="views-row">
                                        <div class="layout layout--onecol">
                                            <div class="layout__region layout__region--content">
                                                <div
                                                    class="field field--name-field-image field--type-image field--label-hidden field--items">
                                                    <div class="field--item">
                                                        <a href="">
                                                            <img src="https://www.peta.org/wp-content/uploads/2014/04/Fresh-Fruit-and-Vegetables-.jpg"
                                                                alt="Family" sizes="100vw"
                                                                class="img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <div
                                                        class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                        <h2>
                                                            <a href="/Vocab_page/templates/templates_c2/vegetables.html">Vegetables</a>
                                                        </h2>
                                                    </div>
                                                    <div
                                                        class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                        Learn the words about vegetables.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="views-row">
                                        <div class="layout layout--onecol">
                                            <div class="layout__region layout__region--content">
                                                <div
                                                    class="field field--name-field-image field--type-image field--label-hidden field--items">
                                                    <div class="field--item">
                                                        <a href="">
                                                            <img src="https://nextluxury.com/wp-content/uploads/small-bedroom-ideas-for-women-phoenixinteriordesignuk.jpg"
                                                                alt="Bedrooms" class="img-responsive" sizes="100vw">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <div
                                                        class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                        <h2>
                                                            <a
                                                                href="/Vocab_page/templates/templates_c2/bedrooms.html">Bedrooms</a>
                                                        </h2>
                                                    </div>
                                                    <div
                                                        class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                        Do these exercises to learn words to talk about your bedroom.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="views-row">
                                        <div class="layout layout--onecol">
                                            <div class="layout__region layout__region--content">
                                                <div
                                                    class="field field--name-field-image field--type-image field--label-hidden field--items">
                                                    <div class="field--item">
                                                        <a href="">
                                                            <img src="https://th.bing.com/th/id/R.25026812b7af25fa63ea08c08289727a?rik=vY9owRQ%2bfQfYkA&pid=ImgRaw&r=0"
                                                                alt="Bedrooms" class="img-responsive" sizes="100vw">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <div
                                                        class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                        <h2>
                                                            <a href="/Vocab_page/templates/templates_c2/food_and_drink.html">Food
                                                                and drink</a>
                                                        </h2>
                                                    </div>
                                                    <div
                                                        class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                        Learn words to talk about food and drink.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
        </div>
        <footer class="footer container" role="containerinfo">
            <div class="region region-footer">
              <section id="block-system-menu-block-footer" class="block block-system block-system-menu-blockmain clearfix">
                <ul class="menu menu--main nav navbar-nav">
                  <li class="first">
                    <a href="/home_page/home.html" class="is-active">Home</a>
                  </li>
                  <li class="expanded dropdown">
                    <a href="/skill_page/skill.html" class="dropdown-toggle">Skill</a>
                    <ul class="dropdown-footer-menu">
                      <li class="first">
                        <a href="">Listening</a>
                      </li>
                      <li>
                        <a href="">Speaking</a>
                      </li>
                      <li>
                        <a href="">Reading</a>
                      </li>
                      <li>
                        <a href="">Writing</a>
                      </li>
                    </ul>
                  </li>
                  <li class="expanded dropdown">
                    <a href="/grammar_page/templates/templates_c0/grammar.html" class="dropdown-toggle">Grammar</a>
                    <ul class="dropdown-footer-menu">
                      <li class="first">
                          <a href="/grammar_page/templates/templates_c1/a1-a2-grammar.html">A1-A2 Grammar</a>
                      </li>
                      <li>
                          <a href="/grammar_page/templates/templates_c1/b1-b2-grammar.html">B1-B2 Grammar</a>
                      </li>
                      
                  </ul>
                  </li>
                  <li class="expanded dropdown">
                    <a href="/Vocab_page/templates/templates_c0/vocab.html" class="dropdown-toggle">Vocabulary</a>
                    <ul class="dropdown-footer-menu">
                      <li class="first">
                        <a href="./Vocab_page/templates/templates_c1/a1-a2_vocab.html">A1-A2 Vocabulary</a>
                    </li>
                    <li>
                        <a href="/Vocab_page/templates/templates_c1/b1-b2-vocab.html">B1-B2 Vocabulary</a>
                    </li>
                    </ul>
                  </li>
                  <li class="expanded dropdown">
                    <a href="" class="dropdown-toggle">Learning Roadmap</a>
                    <ul class="dropdown-footer-menu" id="learning-roadmap">
                      <li class="first">
                        <a href="">Ielts</a>
                      </li>
                      <li>
                        <a href="">Toeic</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </section>
              <section id="block-block-group-bottom-block" class="block block-blockgroup block-block-groupbottom-block clearfix">
                <nav role="navigation" id="block-followus">
                  <h2 id="block-followus-menu">Follow us</h2>
                  <ul class="menu menu--menu-follow-us nav">
                    <li class="first">
                      <a href="" class="icon-youtube"><i class="fa-brands fa-youtube"></i>Youtube</a>
                    </li>
                    <li>
                      <a href="" class="icon-facebook"><i class="fa-brands fa-facebook"></i>FaceBook</a>
                    </li>
                    <li>
                      <a href="" class="icon-instagram"><i class="fa-brands fa-instagram"></i>Instagram</a>
                    </li>
                    <li>
                      <a href="" class="icon-tiktok"><i class="fa-brands fa-tiktok"></i>Tiktok</a>
                    </li>
                  </ul>
                </nav>
              </section>
            </div>
      
          </footer>
    </div>
</body>

</html>