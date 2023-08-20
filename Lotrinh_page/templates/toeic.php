<?php
include("../../login_php/connect_db.php");

$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/toeic.css">
    <link rel="icon" href="../../home_page/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Toeic</title>
</head>

<body>
    <div class="wrapper">
        <header class="navbar-header">
            <div class="grid">
                <nav class="header-navbar">
                    <ul class="header-list-brand">
                        <li class="header-navbar-icon">
                            <a href="" class="header-navbar-logo">
                                <img class="header-navbar-logo_1" src="../../home_page/images/logo2.svg" alt="Home"
                                    title="LearnEnglish">
                            </a>
                        </li>
                        <li class="header-logo-brand">
                            <a href="../..home_page/home.php"
                                class="header-navbar-name header-navbar-name--saparate">LearnEnglish</a>
                        </li>
                    </ul>
                    <ul class="header-list-brand">
                        <?php if (isset($user['username'])) { ?>
                            <li class="header-logo-brand">
                                <a href="../../user_info/user_info.php"
                                    class="header-navbar-btn header-navbar-btn--separate">
                                    <?php echo $user['username'] ?>
                                </a>
                            </li>
                            <li class="header-logo-brand">
                                <a href="../../login_page/logout.php" class="header-navbar-btn">Logout</a>
                            </li>
                        <?php } else { ?>
                            <li class="header-logo-brand">
                                <a href="../../login_page/login.php"
                                    class="header-navbar-btn header-navbar-btn--separate">Login</a>
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
                            <li><a href="../templates/listening.php">Listening</a></li>
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
            <section id="block-fixed-block-content-homepage-banner"
                class="block block-fixed-block-content block-fixed-block-contenthomepage-banner clearfix">
                <div
                    class="block-content block-content--type-blurb-block block-content--view-mode-banner ds-1col clearfix">
                    <div class="field field--name-field-image field--type-image field--label-hidden field--item">
                        <img loading="lazy" src="../img/Big-Image-1.jpg" alt="LearnEnglish" width="1280" height="500"
                            class="img-responsive">
                    </div>
                    <div class="block-banner-header">
                        <h2>Learning Roadmap For Toeic</h2>
                        <p>
                            Learning Toeic is very important and necessary for everyone in general and students in
                            particular.
                        </p>
                    </div>
                </div>
            </section>
            <section class="wrapper-content-summary block block-content" id="block-homepage-intro">
                <div class="field field--name-body">
                    <p>It can be seen that learning Toeic is very important and necessary. Especially for students who
                        are about to graduate, the fact that you need a "golden" degree and open job opportunities is
                        both a necessary and a sufficient condition. Sooner or later you should learn Toeic. We have a
                        roadmap so that you can rely on this route to learn Toeic in the most effective way</p>
                </div>
            </section>
            <section class="wrapper-ol-course block block-blockgroup block-block-grouphomepage-courses clearfix"
                id="block-block-group-homepage-courses">
                <h2 class="block-title-first">Whatever your age, ability or ambition, we have a course to suit you.</h2>
                <div class="homepage-courses-wrapper">
                    <section id="block-onlinecourselearnwithprofessionalteachers"
                        class="block block-fixed-block-content block-fixed-block-contentonline-course-learn-with-profess clearfix">
                        <div class="wrapper-image">
                            <div
                                class="field field--name-field-image field--type-image field--label-hidden field--item">
                                <img loading="lazy" src="../img/Image-small-1.jpg" width="300" height="200"
                                    alt="Learn with professional teachers" typeof="foaf:Image" class="img-responsive" />
                            </div>
                        </div>
                        <div class="wrapper-content">
                            <a href="../Toeic/ToeicRoadmap/200-450.html">
                                <div
                                    class="field field--name-field-title field--type-string field--label-hidden field--item">
                                    Learning route from TOEIC 450 to TOEIC 600</div>
                            </a>
                            <div
                                class="field field--name-field-summary field--type-string-long field--label-hidden field--item">
                                At this level, you already have a basic grammar foundation, a vocabulary "store" of
                                about 150 words already! Next, we will continue to work together to conquer other
                                necessary skills to go further.</div>
                        </div>
                    </section>

                    <section id="block-onlinecourseeasytouseplatform"
                        class="block block-fixed-block-content block-fixed-block-contentonline-course-easy-to-use-platfo clearfix">
                        <div class="wrapper-image">
                            <div
                                class="field field--name-field-image field--type-image field--label-hidden field--item">
                                <img loading="lazy" src="../img/Image-small-2.jpg" width="300" height="200"
                                    alt="Easy to use platform" typeof="foaf:Image" class="img-responsive" />
                            </div>
                        </div>
                        <div class="wrapper-content">
                            <a href="../Toeic/ToeicRoadmap/450-600.html">
                                <div
                                    class="field field--name-field-title field--type-string field--label-hidden field--item">
                                    Learning route from TOEIC 600 to TOEIC 750</div>
                            </a>
                            <div
                                class="field field--name-field-summary field--type-string-long field--label-hidden field--item">
                                For those of you who are at the TOEIC 450-600 mark like this, the route to help you
                                achieve intermediate TOEIC with a TOEIC score of 600-750 is not too difficult.</div>
                        </div>
                    </section>

                    <section id="block-onlinecourselearnwithprofessionalteachers"
                        class="block block-fixed-block-content block-fixed-block-contentonline-course-learn-with-profess clearfix">
                        <div class="wrapper-image">
                            <div
                                class="field field--name-field-image field--type-image field--label-hidden field--item">
                                <img loading="lazy" src="../img/Image-small-3.jpg" width="300" height="200"
                                    alt="Learn with professional teachers" typeof="foaf:Image" class="img-responsive" />
                            </div>
                        </div>
                        <div class="wrapper-content">
                            <a href="../Toeic/ToeicRoadmap/600-750.html">
                                <div
                                    class="field field--name-field-title field--type-string field--label-hidden field--item">
                                    Learning route from TOEIC 750 to TOEIC 990</div>
                            </a>
                            <div
                                class="field field--name-field-summary field--type-string-long field--label-hidden field--item">
                                In order to improve your TOEIC score from 750-990 points, you need to learn more about
                                vocabulary and test-taking techniques, because grammar now no longer makes a big
                                difference. before anymore.</div>
                        </div>
                    </section>
                </div>
            </section>
            <section id="block-block-group-contain-online-courses"
                class="block block-blockgroup block-block-groupcontain-online-courses clearfix">
                <section id="block-blocksmallitems1"
                    class="block block-blockgroup block-block-groupblock-small-items-1 clearfix">
                    <h2 class="block-title-second">All English skills</h2>
                    <div class="small-item-wrapper">
                        <a class="content-link-sm" href="Link Listening">
                            <section id="block-homepageliveclasses"
                                class="block block-fixed-block-content block-small-item block-fixed-block-contenthomepage-live-classes clearfix">
                                <div
                                    class="field C field--type-string field--label-hidden field--item">
                                    Listening</div>
                                <i class="fa-solid fa-headphones"></i>
                            </section>
                        </a>

                        <a class="content-link-sm" href="Link Speaking">
                            <section id="block-homepageieltspreparation"
                                class="block block-fixed-block-content block-small-item block-fixed-block-contenthomepage-ielts-preparation clearfix">
                                <div
                                    class="field field--name-field-title field--type-string field--label-hidden field--item">
                                    Speaking</div>
                                <i class="fa-solid fa-check"></i>
                            </section>
                        </a>

                        <a class="content-link-sm" href="Link Reading">
                            <section id="block-homepagepersonalisedtutor"
                                class="block block-fixed-block-content block-small-item block-fixed-block-contenthomepage-personalised-tutor clearfix">
                                <div
                                    class="field field--name-field-title field--type-string field--label-hidden field--item">
                                    Reading</div>
                                <i class="fa-solid fa-book-open-reader"></i>
                            </section>
                        </a>

                        <a class="content-link-sm" href="Link Writing">
                            <section id="block-homepageselfstudy"
                                class="block block-fixed-block-content block-small-item block-fixed-block-contenthomepage-self-study clearfix">
                                <div
                                    class="field field--name-field-title field--type-string field--label-hidden field--item">
                                    Writing</div>
                                <i class="fa-solid fa-pen"></i>
                            </section>
                        </a>
                    </div>
                </section>
            </section>
            <section class="block block-blockgroup block-block-grouphomepage-courses clearfix" id="block-block-grouphomepage-course">
        <h2 class="block-title">
          We provide you with the right tools to help you interact confidently in the real world.
        </h2>
        <div class="homepage-course-wrapper">
          <section id="block-homepageskills" class="block block-fixed-block-content block-fixed-block-contenthomepage-skills clearfix">
            <div class="wrapper-image">
              <div class="field field--name-field-image field--type-image field--label-hidden field--item">
                <img src="../img/OIP.jpg" alt="Skill" loading="lazy" width="630" height="420" class="img-responsive">
              </div>
            </div>
            <div class="wrapper-content">
              <div class="field field--name-field-title field--type-string field--label-hidden field--item">
                Grammar
              </div>
              <div class="field field--name-field-content field--type-text-long field--label-hidden field--item">
              <p>Revise and practise your grammar to improve your language level and increase your confidence.</p>
                <ul>
                  <li>Clear and simple grammar explanations to help you revise and practise different grammar points.</li>
                  <li>Online exercises to help you check your understanding of the grammar points.</li>
                  <li>Use the grammar reference for further practice and more detailed explanations.</li>
                </ul>
              </div>
              <div class="field field--name-field-content-link field--type-link field--label-hidden field--item">
                <a href="../skill_page/templates/skill.php">Join</a>
              </div>
            </div>
          </section>
          <section id="block-homepageskills" class="block block-fixed-block-content block-fixed-block-contenthomepage-skills clearfix">
            <div class="wrapper-image wrapper-container">
              <div class="field field--name-field-image field--type-image field--label-hidden field--item">
                <img src="../img/R.jpg" alt="Skill" loading="lazy" width="630" height="420" class="img-responsive">
              </div>
            </div>
            <div class="wrapper-content">
              <div class="field field--name-field-title field--type-string field--label-hidden field--item">
                Vocabulary
              </div>
              <div class="field field--name-field-content field--type-text-long field--label-hidden field--item">
              <p>Learn new words and improve your language level to be able to communicate in English effectively.</p>
                <ul>
                  <li>Online exercises to help you learn the meaning, pronunciation and spelling of new words.</li>
                  <li>Learn new words connected to a wide range of different topics.</li>
                  <li>Play our word games and have fun as you improve your vocabulary.</li>
                </ul>
              </div>
              <div class="field field--name-field-content-link field--type-link field--label-hidden field--item">
                <a href="../grammar_page/grammar.php">Join</a>
              </div>
            </div>
          </section>
        </div>
      </section>
        </div>
        <footer class="footer container" role="containerinfo">
            <div class="region region-footer">
                <section id="block-system-menu-block-footer"
                    class="block block-system block-system-menu-blockmain clearfix">
                    <ul class="menu menu--main nav navbar-nav">
                        <li class="first">
                            <a href="../../home_page/home_page.php" class="is-active">Home</a>
                        </li>
                        <li class="expanded dropdown">
                            <a href="../templates/skill.php" class="dropdown-toggle">Skill</a>
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
                            <a href="../../grammar_page/grammar.php" class="dropdown-toggle">Grammar</a>
                            <ul class="dropdown-footer-menu">
                                <li class="first">
                                    <a href="../../grammar_page/templates/a1-a2-grammar.php">A1-A2 Grammar</a>
                                </li>
                                <li>
                                    <a href="../../grammar_page/templates/b1-b2-grammar.php">B1-B2 Grammar</a>
                                </li>

                            </ul>
                        </li>
                        <li class="expanded dropdown">
                            <a href="../../Vocab_page/templates/vocab.php" class="dropdown-toggle">Vocabulary</a>
                            <ul class="dropdown-footer-menu">
                                <li class="first">
                                    <a href="../../Vocab_page/templates/a1-a2_vocab.php">A1-A2 Vocabulary</a>
                                </li>
                                <li>
                                    <a href="../../Vocab_page/templates/b1-b2-vocab.php">B1-B2 Vocabulary</a>
                                </li>
                            </ul>
                        </li>
                        <li class="expanded dropdown">
                            <a href="../../Lotrinh_page/templates/roadmap.php" class="dropdown-toggle">Learning
                                Roadmap</a>
                            <ul class="dropdown-footer-menu" id="learning-roadmap">
                                <li class="first">
                                    <a href="../../Lotrinh_page/templates/ielts.php">Ielts</a>
                                </li>
                                <li>
                                    <a href="../../Lotrinh_page/templates/toeic.php">Toeic</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../static/roadmap.js"></script>
</body>

</html>