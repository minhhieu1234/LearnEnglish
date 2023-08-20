<?php
include("../../login_php/connect_db.php");
$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/b1-b2-grammar.css">
    <link rel="icon" href="/home_page/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>B1-B2 Grammar</title>
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
              <li><a href="">Speaking</a></li>
              <li><a href="">Reading</a></li>
              <li><a href="">Writing</a></li>
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
                <section id="block-block-group-breadcrumbs" class="block block-blockgroup block-block-groupbreadcrumbs clearfix">
                  <ol class="breadcrumb">
                    <li>
                      <a href="">Grammar</a>
                    </li>
                    <li class="active">
                      B1-B2 Grammar
                    </li>
                  </ol>
                </section>
                <h1 class="page-header">
                  <div class="field field--name-name field--type-string field--label-hidden field--item">B1-B2 Grammar</div>
                </h1>
              </div>
            </div>
            <section id="block-fixed-block-content-homepage-banner"
                class="block block-fixed-block-content block-fixed-block-contenthomepage-banner clearfix">
                <div
                    class="block-content block-content--type-blurb-block block-content--view-mode-banner ds-1col clearfix">
                    <div class="field field--name-field-image field--type-image field--label-hidden field--item">
                        <img loading="lazy"
                            src="https://i.pinimg.com/originals/dc/9c/f7/dc9cf78dff898dc0b11f039fda1f91c0.jpg"
                            alt="LearnEnglish" sizes="(min-width: 1290px) 1290px, 100vw" class="img-responsive">
                    </div>
                </div>
            </section>
            <section class="wrapper-content-summary block block-content" id="block-homepage-intro">
                <div class="field field--name-body">
                    <p>
                        In this section you can improve your grammar with our clear and simple grammar lessons. Start with an exercise to test your understanding. Then, read the explanation to improve your grammar knowledge. Finally, test your understanding again to see if you have improved.
                    </p>
                    <p>
                        Choose a grammar point and start improving your grammar today. Good luck!
                    </p>
                    <h2>Choose a vocabulary lesson</h2>
                </div>
            </section>
            <section class="views-element-container view-taxonomy-term block block-views block-views-blocktaxonomy-term-blocks-block-1 clearfix" id="block-views-block-taxonomy-term-blocks-block-1">
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
                                                            <img src="https://www.gettingsmart.com/wp-content/uploads/2017/08/MTHSD207-Teacher-Coaching.jpg" 
                                                            alt="Adjectives: gradable and non-gradable" sizes="100vw" class="img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <div class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                        <h2>
                                                            <a href="">Adjectives: gradable and non-gradable</a>
                                                        </h2>
                                                    </div>
                                                    <div class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                        Do you know how to use adjectives in phrases like a bit cold, really cold and absolutely freezing? Test what you know with interactive exercises and read the explanation to help you.
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
                                                            <img src="https://i.ytimg.com/vi/jufQX6ApfIc/maxresdefault.jpg" 
                                                            alt="Adjectives ending in '-ed' and '-ing'" sizes="100vw" class="img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <div class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                        <h2>
                                                            <a href="">British English and American English</a>
                                                        </h2>
                                                    </div>
                                                    <div class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                        Do you know any differences between British and American English? Test what you know with interactive exercises and read the explanation to help you.. 
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
                                                                <img src="https://psu.pb.unizin.org/app/uploads/sites/83/2018/05/1.4.2.jpg" 
                                                                alt="Captain Letters and Apostrophes'" sizes="100vw" class="img-responsive">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <div class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                            <h2>
                                                                <a href="">Captain Letters and Apostrophes</a>
                                                            </h2>
                                                        </div>
                                                        <div class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                            Do you know how to use capital letters and apostrophes correctly? Test what you know with interactive exercises and read the explanation to help you.
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
                                                                <img src="https://www.meetingyourmission.com/wp-content/uploads/2016/05/myjewishcoach.jpg" 
                                                                alt="Conditionals: Third and Mixed" sizes="100vw" class="img-responsive">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <div class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                            <h2>
                                                                <a href="">Conditionals: Third and Mixed</a>
                                                            </h2>
                                                        </div>
                                                        <div class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                            Do you know how to use third conditionals and mixed conditionals? Test what you know with interactive exercises and read the explanation to help you.
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
                                                                <img src="https://www.al.com/resizer/6T9_isgq80ht5iGdUFJCjwcOZkA=/1280x0/smart/advancelocal-adapter-image-uploads.s3.amazonaws.com/image.al.com/home/bama-media/width2048/img/spotnews/photo/accessdistancelearning-0221jpg-c2164354a9d5f10a.jpg" 
                                                                alt="Comparative adjectives" sizes="100vw" class="img-responsive">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <div class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                            <h2>
                                                                <a href="">Conditionals: Zero, first and second</a>
                                                            </h2>
                                                        </div>
                                                        <div class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                            Do you know how to use the zero, first and second conditionals? Test what you know with interactive exercises and read the explanation to help you.Do you know how to use the zero, first and second conditionals? Test what you know with interactive exercises and read the explanation to help you.
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