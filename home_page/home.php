<?php
include("../login_php/connect_db.php"); 
$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  <link rel="icon" href="images/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Learn English</title>
</head>
<body> 
  <div class="wrapper">
    <header class="navbar-header">
      <div class="grid">  
        <nav class="header-navbar">
          <ul class="header-list-brand">
            <li class="header-navbar-icon">
              <a href="" class="header-navbar-logo">
                <img class="header-navbar-logo_1" src="images/logo2.svg" alt="Home" title="LearnEnglish">
              </a>
            </li>
            <li class="header-logo-brand">
              <a href="home.php" class="header-navbar-name header-navbar-name--saparate">LearnEnglish</a>
            </li>
          </ul>
          <ul class="header-list-brand">
            <?php if(isset($user['username'])){?>
              <li class="header-logo-brand">
                <a href="../user_info/user_info.php" class="header-navbar-btn header-navbar-btn--separate"><?php echo $user['username'] ?></a>
              </li>
              <li class="header-logo-brand">
                <a href="../login_page/logout.php" class="header-navbar-btn">Logout</a>
              </li>
            <?php } else {?>
              <li class="header-logo-brand">
                <a href="../login_page/login.php" class="header-navbar-btn header-navbar-btn--separate">Login</a>
              </li>
              <li class="header-logo-brand">
                <a href="../register_page/register.php" class="header-navbar-btn">Register</a>
              </li>
            <?php } ?>
          </ul>
        </nav>
      </div>
      <div class="header-navbar-menu">
        <ul class="main-menu">
          <li class="first">
            <a href="home.php" class="is-active">Home</a>
          </li>
          <li class="expanded-dropdown">
            <a href="../skill_page/templates/skill.php" class="dropdown-toggle">Skill</a>
            <ul class="dropdown-menu">
              <li><a href="../skill_page/templates/listening.php">Listening</a></li>
              <li><a href="../skill_page/templates/speaking.php">Speaking</a></li>
              <li><a href="../skill_page/templates/reading.php">Reading</a></li>
              <li><a href="../skill_page/templates/writing.php">Writing</a></li>
            </ul>
          </li>
          <li class="expanded-dropdown">
            <a href="../grammar_page/grammar.php" class="dropdown-toggle">Grammar</a>
            <ul class="dropdown-menu">
              <li><a href="../grammar_page/templates/a1-a2-grammar.php">A1-A2 Grammar</a></li>
              <li><a href="../grammar_page/templates/b1-b2-grammar.php">B1-B2 Grammar</a></li>
              
          </ul>
          </li>
          <li class="expanded-dropdown">
            <a href="../Vocab_page/templates/vocab.php" class="dropdown-toggle">Vocabulary</a>
            <ul class="dropdown-menu">
              <li><a href="../Vocab_page/templates/a1-a2_vocab.php">A1-A2 Vocabulary</a></li>
              <li><a href="../Vocab_page/templates/b1-b2-vocab.php">B1-B2 Vocabulary</a></li>
          </ul>
          </li>
          <li class="expanded-dropdown">
            <a href="../Lotrinh_page/templates/roadmap.php" class="dropdown-toggle">Learning Roadmap</a>
            <ul class="dropdown-menu">
              <li>
                <a href="../Lotrinh_page/templates/ielts.php">Ielts</a>
              </li>
              <li>
                <a href="../Lotrinh_page/templates/toeic.php">Toeic</a>
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
            <img loading="lazy" src="images/photo_3.jpg" alt="LearnEnglish" width="1280" height="500"
              class="img-responsive">
          </div>
          <div class="block-banner-header">
            <p>
      
              Learn English online and improve your skills through our high-quality courses and resources.
            </p>
          </div>
        </div>
      </section>
      <section class="wrapper-content-summary block block-content" id="block-homepage-intro">
        <div class="field field--name-body">
          <p>
            Everything here is filtered on Google, there is something wrong with you to ignore
          </p>
        </div>
      </section>
      <section class="block block-blockgroup block-block-grouphomepage-courses clearfix" id="block-block-grouphomepage-course">
        <h2 class="block-title">
          We provide you with the right tools to help you interact confidently in the real world.
        </h2>
        <div class="homepage-course-wrapper">
          <section id="block-homepageskills" class="block block-fixed-block-content block-fixed-block-contenthomepage-skills clearfix">
            <div class="wrapper-image">
              <div class="field field--name-field-image field--type-image field--label-hidden field--item">
                <img src="images/block_1_home.jpg" alt="Skill" loading="lazy" width="630" height="420" class="img-responsive">
              </div>
            </div>
            <div class="wrapper-content">
              <div class="field field--name-field-title field--type-string field--label-hidden field--item">
                Skills
              </div>
              <div class="field field--name-field-content field--type-text-long field--label-hidden field--item">
                <p>Practise your listening, reading, writing and speaking and learn useful language to use at work or to communicate effectively with friends.</p>
                <ul>
                  <li>Audio and video to practise your listening and speaking skills.</li>
                  <li>Model texts for all types of writing tasks.</li>
                  <li>Work on your reading skills to read more quickly and understand more.</li>
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
                <img src="images/block_2_home.jpg" alt="Skill" loading="lazy" width="630" height="420" class="img-responsive">
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
                <a href="../grammar_page/grammar.php">Join</a>
              </div>
            </div>
          </section>
          <section id="block-homepageskills" class="block block-fixed-block-content block-fixed-block-contenthomepage-skills clearfix">
            <div class="wrapper-image">
              <div class="field field--name-field-image field--type-image field--label-hidden field--item">
                <img src="images/block_3_home.jpg" alt="Skill" loading="lazy" width="630" height="420" class="img-responsive">
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
                <a href="../Vocab_page/templates/vocab.php">Join</a>
              </div>
            </div>
          </section>
        </div>
      </section>
      <section class="wrapper-item-bg block block-blockgroup block-block-groupblock-small-items-1 clearfix" id="block-block-group-block-small-items-1">
        <h2 class="block-title">Learning Roadmap</h2>
        <div class="small-item-wrapper">
          <a href="../Lotrinh_page/templates/ielts.php" class="content-link-sm">
            <section id="block-homepageliveclasses" class="block block-fixed-block-content block-small-item block-fixed-block-contenthomepage-live-classes clearfix">
              <div class="field field--name-field-image field--type-image field--label-hidden field--item">
                <img src="images/ielts.jpg" alt="Ielts" loading="lazy" width="92" height="95" class="img-responsive">
              </div>
              <div class="field field--name-field-title field--type-string field--label-hidden field--item roadmap-container">IELTS</div>
            </section>
          </a>
          <a href="../Lotrinh_page/templates/toeic.php" class="content-link-sm">
            <section id="block-homepageliveclasses" class="block block-fixed-block-content block-small-item block-fixed-block-contenthomepage-live-classes clearfix">
              <div class="field field--name-field-image field--type-image field--label-hidden field--item">
                <img src="images/toeic.png" alt="Toeic" loading="lazy" width="92" height="95" class="img-responsive">
              </div>
              <div class="field field--name-field-title field--type-string field--label-hidden field--item roadmap-container" >TOEIC</div>
            </section>
          </a>
        </div>
      </section>
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
              <a href="../grammar_page/grammar.php" class="menu-navbar-btn--seperate">Grammar</a>
            </li>
            <li>
              <a href="../Vocab_page/templates/vocab.php" class="menu-navbar-btn--seperate">Vocabulary</a>
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
              <a href="home_page.php" class="is-active">Home</a>
            </li>
            <li class="expanded dropdown">
              <a href="../skill_page/templates/skill.php" class="dropdown-toggle">Skill</a>
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
              <a href="../grammar_page/grammar.php" class="dropdown-toggle">Grammar</a>
              <ul class="dropdown-footer-menu">
                <li class="first">
                    <a href="../grammar_page/templates/a1-a2-grammar.php">A1-A2 Grammar</a>
                </li>
                <li>
                    <a href="../grammar_page/templates/b1-b2-grammar.php">B1-B2 Grammar</a>
                </li>
                
            </ul>
            </li>
            <li class="expanded dropdown">
              <a href="../Vocab_page/templates/vocab.php" class="dropdown-toggle">Vocabulary</a>
              <ul class="dropdown-footer-menu">
                <li class="first">
                  <a href="../Vocab_page/templates/a1-a2_vocab.php">A1-A2 Vocabulary</a>
              </li>
              <li>
                  <a href="../Vocab_page/templates/b1-b2-vocab.php">B1-B2 Vocabulary</a>
              </li>
              </ul>
            </li>
            <li class="expanded dropdown">
              <a href="../Lotrinh_page/templates/roadmap.php" class="dropdown-toggle">Learning Roadmap</a>
              <ul class="dropdown-footer-menu" id="learning-roadmap">
                <li class="first">
                  <a href="../Lotrinh_page/templates/ielts.php">Ielts</a>
                </li>
                <li>
                  <a href="../Lotrinh_page/templates/toeic.php">Toeic</a>
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
  <script src="home.js"></script>
</body>

</html> 

