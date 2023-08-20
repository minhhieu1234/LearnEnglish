<?php
include("../../login_php/connect_db.php");

$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/accessories.css">
    <link rel="icon" href="../../home_page/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Accessories</title>
</head>

<body>
    <div class="wrapper">
    <header class="navbar-header">
      <div class="grid">  
        <nav class="header-navbar">
          <ul class="header-list-brand">
            <li class="header-navbar-icon">
              <a href="" class="header-navbar-logo">
                <img class="header-navbar-logo_1" src="../../home_page/images/logo2.svg" alt="Home" title="LearnEnglish">
              </a>
            </li>
            <li class="header-logo-brand">
              <a href="../..home_page/home.php" class="header-navbar-name header-navbar-name--saparate">LearnEnglish</a>
            </li>
          </ul>
          <ul class="header-list-brand">
            <?php if(isset($user['username'])) {?>
              <li class="header-logo-brand">
                <a href="../user_info/user_info.php" class="header-navbar-btn header-navbar-btn--separate"><?php echo $user['username'] ?></a>
              </li>
              <li class="header-logo-brand">
                <a href="../../login_page/logout.php" class="header-navbar-btn">Logout</a>
              </li>
            <?php } else {?>
              <li class="header-logo-brand">
                <a href="../../login_page/login.php" class="header-navbar-btn header-navbar-btn--separate">Login</a>
              </li>
              <li class="header-logo-brand">
                <a href="../../register_page/register.php" class="header-navbar-btn">Register</a>
              </li>
            <?php } ?>
          </ul>
        </nav>
      </div>
      <div class="header-navbar-menu">
        <ul class="main-menu">
          <li class="first">
            <a href="../../home_page/home.php" class="is-active">Home</a>
          </li>
          <li class="expanded-dropdown">
            <a href="../../skill_page/templates/skill.php" class="dropdown-toggle">Skill</a>
            <ul class="dropdown-menu">
              <li><a href="">Listening</a></li>
              <li><a href="../templates/speaking.php">Speaking</a></li>
              <li><a href="../templates/reading.php">Reading</a></li>
              <li><a href="../templates/writing.php">Writing</a></li>
            </ul>
          </li>
          <li class="expanded-dropdown">
            <a href="../../grammar_page/grammar.php" class="dropdown-toggle">Grammar</a>
            <ul class="dropdown-menu">
              <li><a href="../../grammar_page/templates/a1-a2-grammar.php">A1-A2 Grammar</a></li>
              <li><a href="../../grammar_page/templates/b1-b2-grammar.php">B1-B2 Grammar</a></li>
              
          </ul>
          </li>
          <li class="expanded-dropdown">
            <a href="../../Vocab_page/templates/vocab.php" class="dropdown-toggle">Vocabulary</a>
            <ul class="dropdown-menu">
              <li><a href="../../Vocab_page/templates/a1-a2_vocab.php">A1-A2 Vocabulary</a></li>
              <li><a href="../../Vocab_page/templates/b1-b2-vocab.php">B1-B2 Vocabulary</a></li>
          </ul>
          </li>
          <li class="expanded-dropdown">
            <a href="../../Lotrinh_page/templates/roadmap.php" class="dropdown-toggle">Learning Roadmap</a>
            <ul class="dropdown-menu">
              <li>
                <a href="../../Lotrinh_page/templates/ielts.php">Ielts</a>
              </li>
              <li>
                <a href="../../Lotrinh_page/templates/toeic.php">Toeic</a>
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
                            <li>Accessories</li>
                        </ol>
                    </section>
                    <h1 class="page-header">
                        <div class="field field--name-name field--type-string field--label-hidden field--item">Accessories</div>
                    </h1>
                </div>
            </div>
            <div class="block-content-container">
                <div class="left-side">
                    <div class="block-video-container">
                        <iframe src="https://www.youtube.com/embed/1o3q5HdzoEk"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="block-text-container">
                        <h3>Watch the video</h3>
                        <p>Listen to the words and repeat</p>
                        <h3>Accessories words in this video</h3>
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
                                    <td>Necklace</td>
                                    <td>/nek.ləs/</td>
                                    <td>Chuỗi hạt</td>
                                </tr>
                                <tr>
                                    <td>Earrings</td>
                                    <td>/ˈɪə.rɪŋ/</td>
                                    <td>Bông tai</td>
                                </tr>
                                <tr>
                                    <td>Glasses</td>
                                    <td>/ˈglæs.əz/</td>
                                    <td>Kính</td>
                                </tr>
                                <tr>
                                    <td>Sunglasses</td>
                                    <td>/ˈsʌnɡlæsɪz/</td>
                                    <td>Kính râm</td>
                                </tr>
                                <tr>
                                    <td>Hat</td>
                                    <td>/hat/</td>
                                    <td>Mũ/Nón</td>
                                </tr>
                                <tr>
                                    <td>Cap</td>
                                    <td>/kap/</td>
                                    <td>Mũ</td>
                                </tr>
                                <tr>
                                    <td>Broach</td>
                                    <td>/brəʊtʃ/</td>
                                    <td>Trâm cài</td>
                                </tr>
                                <tr>
                                    <td>Gloves</td>
                                    <td>/ɡlʌv/</td>
                                    <td>Găng tay</td>
                                </tr>
                                <tr>
                                    <td>Handbag</td>
                                    <td>/ˈhan(d)baɡ/</td>
                                    <td>Túi xách tay</td>
                                </tr>
                                <tr>
                                    <td>Purse</td>
                                    <td>/pəːs/</td>
                                    <td>Ví</td>
                                </tr>
                                <tr>
                                    <td>Wallet</td>
                                    <td>/ˈwɒlɪt/</td>
                                    <td>Ví</td>
                                </tr>
                                <tr>
                                    <td>Ring</td>
                                    <td>/rɪŋ/</td>
                                    <td>Nhẫn</td>
                                </tr>
                                <tr>
                                    <td>Bracelet</td>
                                    <td>/ˈbreɪslɪt/</td>
                                    <td>Vòng tay</td>
                                </tr>
                                <tr>
                                    <td>Bangles</td>
                                    <td>/ˈbaŋɡ(ə)l/</td>
                                    <td>Vòng đeo tay</td>
                                </tr>
                                <tr>
                                    <td>Headband</td>
                                    <td>/ˈhɛdband/</td>
                                    <td>Băng buộc đầu</td>
                                </tr>
                                <tr>
                                    <td>Scarf</td>
                                    <td>/skɑːf/</td>
                                    <td>Khăn quàng cổ</td>
                                </tr>
                                <tr>
                                    <td>Rucksack or Back bag</td>
                                    <td>/ˈrʌksak, ˈrʊksak/ or /ˈbakpak/</td>
                                    <td>Ba lô</td>
                                </tr>
                                <tr>
                                    <td>Belt</td>
                                    <td>/bɛlt/</td>
                                    <td>Dây lưng</td>
                                </tr>
                                <tr>
                                    <td>Watch</td>
                                    <td>/wɒtʃ/</td>
                                    <td>Đồng hồ</td>
                                </tr>
                                <tr>
                                    <td>Fitness Tracker</td>
                                    <td>/ˈfitnesː ˈtrakə/</td>
                                    <td>Công cụ theo dõi thể dục</td>
                                </tr>
                                <tr>
                                    <td>Phone case</td>
                                    <td>/fəʊn keɪs/ </td>
                                    <td>Ốp lưng điện thoại</td>
                                </tr>
                                <tr>
                                    <td>Flats</td>
                                    <td>/flat/</td>
                                    <td>Giày đế bằng</td>
                                </tr>
                                <tr>
                                    <td>Boots</td>
                                    <td>/buːts/</td>
                                    <td>Giày cổ cao, ủng, bốt</td>
                                </tr>
                                <tr>
                                    <td>Flip</td>
                                    <td>/flɪp/</td>
                                    <td>Dép xỏ ngón</td>
                                </tr>
                                <tr>
                                    <td>Flops</td>
                                    <td>/flɒps/</td>
                                    <td>Dép</td>
                                </tr>
                                <tr>
                                    <td>Heels</td>
                                    <td>/hiːl/</td>
                                    <td>Giày cao gót</td>
                                </tr>
                                <tr>
                                    <td>Umbrella</td>
                                    <td>/ʌmˈbrel.ə/</td>
                                    <td>Dù</td>
                                </tr>
                                <tr>
                                    <td>Hand mirror</td>
                                    <td>/Hænd ˈmɪr.ər/</td>
                                    <td>Gương cầm tay</td>
                                </tr>
                                <tr>
                                    <td>Hair clips</td>
                                    <td>/heər klɪp/</td>
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
                                        <a href="/grammar_page/templates/templates_c1/a1-a2-grammar.html"><i class="fa-solid fa-check"></i> Listening</a>
                                    </li>
                                    <li>
                                        <a href="/grammar_page/templates/templates_c1/b1-b2-grammar.html"><i class="fa-solid fa-check"></i> Speaking</a>
                                    </li>
                                    <li>
                                        <a href="/grammar_page/templates/templates_c1/c1-grammar.html"><i class="fa-solid fa-check"></i> Reading</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/writting.html"><i class="fa-solid fa-check"></i> Writting</a>
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
                                        <a href="/skill_page/templates/templates_c2/listening.html"><i class="fa-solid fa-check"></i> A1-A2 grammar</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/speaking.html"><i class="fa-solid fa-check"></i> B1-B2 grammar</a>
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
                                        <a href="/skill_page/templates/templates_c2/listening.html"><i class="fa-solid fa-check"></i> A1-A2 vocabulary</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/speaking.html"><i class="fa-solid fa-check"></i> B1-B2 vocabulary</a>
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
                                        <a href="/skill_page/templates/templates_c2/listening.html"><i class="fa-solid fa-check"></i> IELTS</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/speaking.html"><i class="fa-solid fa-check"></i> TOEIC</a>
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
                                                            <a href="/Vocab_page/templates/templates_c2/clothes.html">Clothes</a>
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
                                                                <a href="/Vocab_page/templates/templates_c2/bedrooms.html">Bedrooms</a>
                                                            </h2>
                                                        </div>
                                                        <div
                                                            class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                            Do these exercises to learn words to talk about your
                                                            bedroom.
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
                                                                <a href="/Vocab_page/templates/templates_c2/food_and_drink.html">Food and drink</a>
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
                    <a href="/Lotrinh_page/templates_c0/roadmap.html" class="dropdown-toggle">Learning Roadmap</a>
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