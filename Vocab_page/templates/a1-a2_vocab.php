<?php
include("../../login_php/connect_db.php");
$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../static/vocab1.css">
  <link rel="icon" href="../../home_page/images/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>A1-A2 Vocabulary</title>
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
            </ol>
          </section>
          <h1 class="page-header">
            <div class="field field--name-name field--type-string field--label-hidden field--item">A1-A2
              Vocabulary</div>
          </h1>
        </div>
      </div>
      <section id="block-fixed-block-content-homepage-banner"
        class="block block-fixed-block-content block-fixed-block-contenthomepage-banner clearfix">
        <div class="block-content block-content--type-blurb-block block-content--view-mode-banner ds-1col clearfix">
          <div class="field field--name-field-image field--type-image field--label-hidden field--item">
            <img loading="lazy" src="https://cuspservices.com/wp-content/uploads/2014/02/canstockphoto15166818.jpg"
              alt="LearnEnglish" sizes="(min-width: 1290px) 1290px, 100vw" class="img-responsive">
          </div>
        </div>
      </section>
      <section class="wrapper-content-summary block block-content" id="block-homepage-intro">
        <div class="field field--name-body">
          <p>
            Do you need to learn new words to understand and express yourself clearly in English? The learning materials are organised into two sections, organised by English level.

You will find activities to help you learn the meaning, pronunciation and spelling of new words. Learning vocabulary will help you improve your language level and communicate in English confidently and effectively. The pages are organised by topic and include interactive exercises to help you learn and remember the new words.

There are also two fun word games to help you improve your vocabulary.
          </p>
          <h2>Choose a vocabulary lesson</h2>
        </div>
      </section>
      <div class="content-wrapper-container">
        <div class="left-side">
          <section
          class="views-element-container view-taxonomy-term block block-views block-views-blocktaxonomy-term-blocks-block-1 clearfix"
          id="block-views-block-taxonomy-term-blocks-block-1">
          <div class="form-group">
            <div class="view-taxonomy-term-blocks view-id-taxonomy_term_blocks view-display-id-block_1">
              <div class="view-footer">
                <div class="view view-section view-id-section view-display-id-default">
                  <div class="view-content">
                    <div class="views-row">
                      <div class="layout layout--onecol">
                        <div class="layout__region layout__region--content">
                          <div class="field field--name-field-image field--type-image field--label-hidden field--items">
                            <div class="field--item">
                              <a href="">
                                <img src="https://godfatherstyle.com/wp-content/uploads/2020/12/Fashion-Accessories2.jpg"
                                  alt="A1-A2 Vocabulary" sizes="100vw" class="img-responsive">
                              </a>
                            </div>
                          </div>
                          <div class="content-wrapper">
                            <div class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                              <h2>
                                <a href="../templates/accesories.php">Accessories</a>
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
                          <div class="field field--name-field-image field--type-image field--label-hidden field--items">
                            <div class="field--item">
                              <a href="">
                                <img
                                  src="https://2.bp.blogspot.com/_-w1iR9o7sZY/S9efCGSAZrI/AAAAAAAAAfM/Gpp0UBG443Y/s1600/IMGP1271.JPG"
                                  alt="B1-B2 Grammar" sizes="100vw" class="img-responsive">
                              </a>
                            </div>
                          </div>
                          <div class="content-wrapper">
                            <div class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
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
                            <div class="field field--name-field-image field--type-image field--label-hidden field--items">
                              <div class="field--item">
                                <a href="">
                                  <img src="https://www.peta.org/wp-content/uploads/2014/04/Fresh-Fruit-and-Vegetables-.jpg"
                                    alt="Family" sizes="100vw" class="img-responsive">
                                </a>
                              </div>
                            </div>
                            <div class="content-wrapper">
                              <div class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
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
                            <div class="field field--name-field-image field--type-image field--label-hidden field--items">
                              <div class="field--item">
                                <a href="">
                                  <img
                                    src="https://nextluxury.com/wp-content/uploads/small-bedroom-ideas-for-women-phoenixinteriordesignuk.jpg"
                                    alt="Bedrooms" class="img-responsive" sizes="100vw">
                                </a>
                              </div>
                            </div>
                            <div class="content-wrapper">
                              <div class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                <h2>
                                  <a href="/Vocab_page/templates/templates_c2/bedrooms.html">Bedrooms</a>
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
                            <div class="field field--name-field-image field--type-image field--label-hidden field--items">
                              <div class="field--item">
                                <a href="">
                                  <img
                                    src="https://th.bing.com/th/id/R.25026812b7af25fa63ea08c08289727a?rik=vY9owRQ%2bfQfYkA&pid=ImgRaw&r=0"
                                    alt="Bedrooms" class="img-responsive" sizes="100vw">
                                </a>
                              </div>
                            </div>
                            <div class="content-wrapper">
                              <div class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
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
        <div class="block-block-navbar-skill-container">
          <div class="title-skill">
            <h2>Improve your English skills</h2>
            <p>For more support in improving your English skills for social situations, explore our selection of online courses featuring lots of helpful learning resources.</p>
            <p> Practise speaking socially with your classmates in live group classes, get support from a personal tutor in one-to-one lessons or practise by yourself at your own pace with a self-study course.</p>
          </div>
          <div class="block-skill-join">
            Join
          </div>
        </div>
        </div>
        <div class="right-side">
          <div class="box-right">
            <nav role="navigation" aria-labelledby="block-system-menu-block-website-links-menu" id="block-system-menu-block-website-links" class="aside-content">
              <h2 id="block-system-menu-block-website-links-menu">Skill</h2>
                <ul class="menu menu--website-links nav2">
                   <li class="first">
                      <a href="https://learnenglishkids.britishcouncil.org"><i class="fa-solid fa-check"></i> Listening</a>
                  </li>
  
                  <li>
                    <a href="https://learnenglishteens.britishcouncil.org"><i class="fa-solid fa-check"></i> Speaking</a>
                  </li>
                  
                  <li>
                      <a href="https://www.teachingenglish.org.uk"><i class="fa-solid fa-check"></i> Reading</a>
                  </li>
                  <li>
                    <a href=""><i class="fa-solid fa-check"></i> Writing</a>
                  </li>
                </ul>
  
              </nav>
  
              <nav role="navigation" aria-labelledby="block-system-menu-block-website-links-menu" id="block-system-menu-block-website-links-2" class="aside-content">
        
                <h2 id="block-system-menu-block-website-links-menu-2">Grammar</h2>
                  <ul class="menu menu--website-links nav2">
                     <li class="first">
                        <a href="https://learnenglishkids.britishcouncil.org"><i class="fa-solid fa-check"></i> A1-A2 Grammar</a>
                    </li>
    
                    <li>
                      <a href="https://learnenglishteens.britishcouncil.org"><i class="fa-solid fa-check"></i> B1-B2 Grammar</a>
                    </li>
                    
                    
                  </ul>
                  
                </nav>
  
                <nav role="navigation" aria-labelledby="block-system-menu-block-website-links-menu" id="block-system-menu-block-website-links-3" class="aside-content">
        
                  <h2 id="block-system-menu-block-website-links-menu-3">Vocabulary</h2>
                    <ul class="menu menu--website-links nav3">
                       <li class="first">
                          <a href="https://learnenglishkids.britishcouncil.org"><i class="fa-solid fa-check"></i> A1-A2 Vocabulary</a>
                      </li>
      
                      <li>
                        <a href="https://learnenglishteens.britishcouncil.org"><i class="fa-solid fa-check"></i> B1-B2 Vocabulary</a>
                      </li>
                    </ul>
                  </nav>
          </div>
        </div>
      </div>
      <div class="block-block-link-term">
        <div class="block-link-container">
          <ul class="menu-navbar">
            <li>
              <a href="" class="menu-navbar-btn--seperate navbar-btn-1">Listening</a>
            </li>
            <li>
              <a href="" class="menu-navbar-btn--seperate">Speaking</a>
            </li>
            <li>
              <a href="" class="menu-navbar-btn--seperate">Reading</a>
            </li>
            <li>
              <a href="" class="menu-navbar-btn--seperate">Writing</a>
            </li>
            <li>
              <a href="/grammar_page/templates/templates_c0/grammar.html" class="menu-navbar-btn--seperate">Grammar</a>
            </li>
            <li>
              <a href="/Vocab_page/templates/templates_c0/vocab.html" class="menu-navbar-btn--seperate">Vocabulary</a>
            </li>
          </ul>
        </div>
      </div>

    </div>
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
        <section id="block-block-group-bottom-block"
          class="block block-blockgroup block-block-groupbottom-block clearfix">
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
