<?php
include("../../login_php/connect_db.php");

$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../static/listening.css">
  <link rel="icon" href="../../home_page/images/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Listening English</title>
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
      <section id="block-fixed-block-content-homepage-banner"
        class="block block-fixed-block-content block-fixed-block-contenthomepage-banner clearfix">
        <div class="block-content block-content--type-blurb-block block-content--view-mode-banner ds-1col clearfix">
          <div class="field field--name-field-image field--type-image field--label-hidden field--item">
            <img loading="lazy"
              src="../img/pexels-andrea-piacquadio-771175.jpg"
              alt="LearnEnglish" width="1280" height="500" class="img-responsive">
          </div>
          <div class="block-banner-header">
            <h2>Listening</h2>
            <p>
            Here you can find activities to practise your listening skills. Listening will help you to improve your
        understanding of the language and your pronunciation.
          </div>
        </div>
      </section>
      <section class="wrapper-content-summary block block-content" id="block-homepage-intro">
        <div class="field field--name-body">
        The self-study lessons in this section are written and organised by English level based on the Common European
        Framework of Reference for languages (CEFR). There are recordings of different situations and interactive
        exercises that practise the listening skills you need to do well in your studies, to get ahead at work and to
        communicate in English in your free time. The speakers you will hear are of different nationalities and the
        recordings are designed to show how English is being used in the world today.<br>

        Take our free online English test to find out which level to choose. Select your level, from A1 English level
        (elementary) to C1 English level (advanced), and improve your listening skills at your own speed, whenever it's
        convenient for you.
          <h2>Choose a section</h2>     
        </div>
      </section>
      <div class="content-wrapper-container">
        <div class="left-side">
        <section
        class="views-element-container view-taxonomy-term block block-views block-views-blocktaxonomy-term-blocks-block-1 clearfix"
        id="block-views-block-taxonomy-term-blocks-block-1">
        <div class="form-group">
          <div class="view-taxonomy-term-blocks view-id -taxonomy_term_blocks view-display-id-block_1">
            <div class="view-footer">
              <div class="view view-section view-id-section view-display-id-default">
                <div class="view-content">
                  <div class="views-row">
                    <div class="layout layout--onecol">
                      <div class="layout__region layout__region--content">
                        <div class="field field--name-field-image field--type-image field--label-hidden field--items">
                          <div class="field--item">
                            <a href="">
                              <img
                                src="../img/pexels-andrea-piacquadio-3966776.jpg"
                                alt="IELTS" sizes="100vw" class="img-responsive">
                            </a>
                          </div>
                        </div>
                        <div class="content-wrapper">
                          <div
                            class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                            <h2>
                              <a href="../templates/a1-listening.php">A1-A2 Listening</a>
                            </h2>
                          </div>
                          <div
                            class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                            We will practice talking with others to learn words and phrases that will help us talk to people in our everyday life. We will practice things like meeting new people, making sure we understand each other, and giving ideas.
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
                                src="../img/3.1.png"
                                alt="TOEIC" sizes="100vw" class="img-responsive">
                            </a>
                          </div>
                        </div>
                        <div class="content-wrapper">
                          <div
                            class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                            <h2>
                              <a href="../templates/b1-listening.php">B1-B2 Listening</a>
                            </h2>
                          </div>
                          <div class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                            Listening practice is when you practice talking to learn words and phrases that you can use in everyday conversations. You practice how to give advice, handle problems, and politely disagree with someone's thoughts.
                          </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
        </section>
        </div>
        <div class="right-side">
          <div class="box-right">
            <nav role="navigation" aria-labelledby="block-system-menu-block-website-links-menu" id="block-system-menu-block-website-links" class="aside-content">
              <h2 id="block-system-menu-block-website-links-menu">Skill</h2>
                <ul class="menu menu--website-links nav2">
                   <li class="first">
                      <a href="../../skill_page/templates/listening.php"><i class="fa-solid fa-check"></i> Listening</a>
                  </li>
  
                  <li>
                    <a href="../../skill_page/templates/speaking.php"><i class="fa-solid fa-check"></i> Speaking</a>
                  </li>
                  
                  <li>
                      <a href="../../skill_page/templates/reading.php"><i class="fa-solid fa-check"></i> Reading</a>
                  </li>
                  <li>
                    <a href="../../skill_page/templates/writing.php"><i class="fa-solid fa-check"></i> Writing</a>
                  </li>
                </ul>
  
              </nav>
  
              <nav role="navigation" aria-labelledby="block-system-menu-block-website-links-menu" id="block-system-menu-block-website-links-2" class="aside-content">
        
                <h2 id="block-system-menu-block-website-links-menu-2">Grammar</h2>
                  <ul class="menu menu--website-links nav2">
                     <li class="first">
                        <a href="../../grammar_page/templates/a1-a2-grammar.php"><i class="fa-solid fa-check"></i> A1-A2 Grammar</a>
                    </li>
    
                    <li>
                      <a href="../../grammar_page/templates/b1-b2-grammar.php"><i class="fa-solid fa-check"></i> B1-B2 Grammar</a>
                    </li>
                    
                    
                  </ul>
                  
                </nav>
  
                <nav role="navigation" aria-labelledby="block-system-menu-block-website-links-menu" id="block-system-menu-block-website-links-3" class="aside-content">
        
                  <h2 id="block-system-menu-block-website-links-menu-3">Vocabulary</h2>
                    <ul class="menu menu--website-links nav3">
                       <li class="first">
                          <a href="../../Vocab_page/templates/a1-a2_vocab.php"><i class="fa-solid fa-check"></i> A1-A2 Vocabulary</a>
                      </li>
      
                      <li>
                        <a href="../../Vocab_page/templates/b1-b2_vocab.php"><i class="fa-solid fa-check"></i> B1-B2 Vocabulary</a>
                      </li>
                    </ul>
                  </nav>
          </div>
        </div>
      </div>
      <div class="block-block-navbar-skill-container">
        <div class="title-skill">
          <h2>Acquire proficiency in spoken English with assurance</h2>
          <p> Our digital English courses encompass a variety of valuable study resources and exercises, aiding you in honing your verbal aptitude with conviction within a secure and all-encompassing learning ambiance.</p>
          <p> Engage in oral exercises alongside your peers during live collective sessions, access speaking assistance from a dedicated mentor in personalized tutorials, or independently refine your spoken English at your preferred pace through a self-paced study program.</p>
        </div>
        <div class="block-skill-join">
          <a href="/grammar_page/templates/templates_c0/grammar.html">Join</a>
        </div>
      </div>
      <div class="block-block-navbar-container">
        <div class="left-side">
            <div class="block-left-image">
                <img src="../img/1.5.jpg" alt="" class="img-responsive">
            </div>
        </div>
        <div class="right-side">
            <div class="block-block-navbar-grammmar-container">
                <div class="title-grammar">
                    <h2>Master spoken English with self-assurance</h2>
                    <p>Our virtual English lessons provide an array of valuable study resources and exercises, enabling you to cultivate your oral communication abilities with certainty within an inclusive and secure learning setting.</p>
                    <p>Engage in spoken practice alongside fellow students during interactive group sessions, receive speaking guidance from a dedicated tutor in individualized tutorials, or independently refine your spoken English at your preferred pace through a self-paced study program.</p>
                </div>
                <div class="block-skill-join">
                    <a href="/Vocab_page/templates/templates_c0/vocab.html">Join</a>
                </div>
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
    <footer class="footer container" role="containerinfo">
      <div class="region region-footer">
        <section id="block-system-menu-block-footer" class="block block-system block-system-menu-blockmain clearfix">
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
              <a href="../../Lotrinh_page/templates/roadmap.php" class="dropdown-toggle">Learning Roadmap</a>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../static/skill.js"></script>
</body>

</html>