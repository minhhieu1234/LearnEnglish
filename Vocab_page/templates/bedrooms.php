<?php
include("../../login_php/connect_db.php");

$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Vocab_page/static/static_c2/bedroom.css">
    <link rel="icon" href="/home_page/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Bedrooms</title>
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
                            <li>Bedrooms</li>
                        </ol>
                    </section>
                    <h1 class="page-header">
                        <div class="field field--name-name field--type-string field--label-hidden field--item">Bedrooms
                        </div>
                    </h1>
                </div>
            </div>
            <div class="block-content-container">
                <div class="left-side">
                    <div class="block-video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/GA18dSdu4fU"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="block-text-container">
                        <h3>Watch the video</h3>
                        <p>Listen to the words and repeat</p>
                        <h3>Bedrooms words in this video</h3>
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
                                    <td>Single bed</td>
                                    <td>/ˌsɪŋ.gəl ˈbed/</td>
                                    <td>Giường đơn</td>
                                </tr>
                                <tr>
                                    <td>Double bed</td>
                                    <td>/ˌdʌb.əl ˈbed/</td>
                                    <td>Giường đôi</td>
                                </tr>
                                <tr>
                                    <td>Bedsite table</td>
                                    <td>/ˌbed.saɪd ˈteɪ.bəl/</td>
                                    <td>Bàn cạnh giường ngủ</td>
                                </tr>
                                <tr>
                                    <td>Wardrobe</td>
                                    <td>/ˈwɔː.drəʊb/</td>
                                    <td>Tủ</td>
                                </tr>
                                <tr>
                                    <td>Carpet</td>
                                    <td>/ˈkɑː.pɪt/</td>
                                    <td>Thảm</td>
                                </tr>
                                <tr>
                                    <td>Rug</td>
                                    <td>/rʌg/</td>
                                    <td>Thảm</td>
                                </tr>
                                <tr>
                                    <td>Duvet</td>
                                    <td>/ˈduː.veɪ/</td>
                                    <td>Chăn lông vịt</td>
                                </tr>
                                <tr>
                                    <td>Blanket </td>
                                    <td>/ˈblæŋ.kɪt/</td>
                                    <td>Chăn</td>
                                </tr>
                                <tr>
                                    <td>Pillow</td>
                                    <td>/ˈpɪl.əʊ/</td>
                                    <td>Gối</td>
                                </tr>
                                <tr>
                                    <td>Cushion</td>
                                    <td>/ˈkʊʃ.ən/</td>
                                    <td>Đệm</td>
                                </tr>
                                <tr>
                                    <td>Chest of drawers (dresser)</td>
                                    <td>/tʃest əv ˈdrɔːz/</td>
                                    <td>Tủ ngăn kéo</td>
                                </tr>
                                <tr>
                                    <td>Bookcase</td>
                                    <td>/ˈbʊk.keɪs/</td>
                                    <td>Tủ sách</td>
                                </tr>
                                <tr>
                                    <td>Mirror</td>
                                    <td>/ˈmɪr.ər/</td>
                                    <td>Gương</td>
                                </tr>
                                <tr>
                                    <td>Dressing table</td>
                                    <td>/ˈdres.ɪŋ ˌteɪ.bəl/</td>
                                    <td>Bàn trang điểm</td>
                                </tr>
                                <tr>
                                    <td>Stool</td>
                                    <td>/stuːl/</td>
                                    <td>Ghế đẩu</td>
                                </tr>
                                <tr>
                                    <td>Armchair</td>
                                    <td>/ˈɑːm.tʃeər/</td>
                                    <td>Ghế bành</td>
                                </tr>
                                <tr>
                                    <td>Curtains</td>
                                    <td>/ˈkɜː.tən/</td>
                                    <td>Rèm</td>
                                </tr>
                                <tr>
                                    <td>Table lamp</td>
                                    <td>/ˈteɪ.bəl ˌlæmp/</td>
                                    <td>Đèn bàn</td>
                                </tr>
                                <tr>
                                    <td>Alarm clock</td>
                                    <td>/əˈlɑːm ˌklɒk/</td>
                                    <td>Đồng hồ báo thức</td>
                                </tr>
                                <tr>
                                    <td>Fan</td>
                                    <td>/fæn/</td>
                                    <td>Quạt</td>
                                </tr>
                                <tr>
                                    <td>Ironing board</td>
                                    <td>/ˈaɪə.nɪŋ ˌbɔːd/</td>
                                    <td>Bàn ủi</td>
                                </tr>
                                <tr>
                                    <td>Hope chest</td>
                                    <td>/ˈhəʊp ˌtʃest/</td>
                                    <td>Tủ nhỏ</td>
                                </tr>
                                <tr>
                                    <td>Air conditioner</td>
                                    <td>/ˈeə kənˌdɪʃ.ən.ər/</td>
                                    <td>Máy lạnh</td>
                                </tr>
                                <tr>
                                    <td>Desk</td>
                                    <td>/desk/</td>
                                    <td>Kệ</td>
                                </tr>

                                <tr>
                                    <td>Hanger</td>
                                    <td>/ˈhæŋ.ər/</td>
                                    <td>Móc</td>
                                </tr>
                                <tr>
                                    <td>Pajamas</td>
                                    <td>/pəˈdʒɑː.məz/</td>
                                    <td>Đồ ngủ</td>
                                </tr>
                                <tr>
                                    <td>Robe</td>
                                    <td>/rəʊb/</td>
                                    <td>Áo tắm</td>
                                </tr>
                                <tr>
                                    <td>Cosmetics</td>
                                    <td>/kɑzˈmet̬.ɪks/</td>
                                    <td>Mỹ phẩm</td>
                                </tr>
                                <tr>
                                    <td>Slippers</td>
                                    <td>/ˈslɪp.ər/</td>
                                    <td>Dép mang trong nhà</td>
                                </tr>
                                <tr>
                                    <td>Hairbrush</td>
                                    <td>/ˈheə.brʌʃ/</td>
                                    <td>Lược</td>
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
                                                            <img src="https://2.bp.blogspot.com/_-w1iR9o7sZY/S9efCGSAZrI/AAAAAAAAAfM/Gpp0UBG443Y/s1600/IMGP1271.JPG"
                                                                alt="B1-B2 Grammar" sizes="100vw"
                                                                class="img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <div
                                                        class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                        <h2>
                                                            <a
                                                                href="/Vocab_page/templates/templates_c2/clothes.html">Clothes</a>
                                                        </h2>
                                                    </div>
                                                    <div
                                                        class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                        Vocabulary exercises to help learn words for clothes.
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
                                                                <a href="/Vocab_page/templates/templates_c2/food_and_drink.html">Food and drink</a>
                                                            </h2>
                                                        </div>
                                                        <div
                                                            class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                            Learn words to talk about the food and drink
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
                    <a href="/skill_page/templates/templates_1/skill.html" class="dropdown-toggle">Skill</a>
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