<?php
include("../../login_php/connect_db.php");

$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/a1-listening.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>A1-A2 Grammar</title>
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
                      A1-A2 Grammar
                    </li>
                  </ol>
                </section>
                <h1 class="page-header">
                  <div class="field field--name-name field--type-string field--label-hidden field--item">A1-A2 Grammar</div>
                </h1>
              </div>
            </div>
            <section id="block-fixed-block-content-homepage-banner"
                class="block block-fixed-block-content block-fixed-block-contenthomepage-banner clearfix">
                <div
                    class="block-content block-content--type-blurb-block block-content--view-mode-banner ds-1col clearfix">
                    <div class="field field--name-field-image field--type-image field--label-hidden field--item">
                        <img loading="lazy"
                            src="https://accent.gg/wp-content/uploads/2021/02/HGJP1565.jpg"
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
                        In this section you can improve your grammar with our clear and simple grammar lessons. Start with an exercise to test your understanding. Then, read the explanation to improve your grammar knowledge. Finally, test your understanding again to see if you have improved.
                    </p>
                    <h2>Choose a vocabulary lesson</h2>
                </div>
            </section>
            <section id="">
            <div class="audioB">
            <h3>Question 1</h3>
            <audio controls>
              <source src="audio/ets_toeic_2022_test_1_1.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
          </div>
          <div class="img">
            <img class="Describe" src="images/l6.webp" alt="images"


          </div>
        
          
          <div class="answerB">
            <h4>Choose an answer</h4>
            <form>
              <label><input type="radio" name="answer"  value="a"   >  A</label><br>
              <label><input type="radio" name="answer"  value="b" data-correct-answer="b">  B</label><br>
              <label><input type="radio" name="answer"  value="c">  C</label><br>
              
            </form>
          </div>
          
        <div class="audioB">
            <h3>Question 2</h3>
            <audio controls>
              <source src="audio/ets_toeic_2022_test_1_2.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
          </div>
          <div class="img">
            <img class="Describe" src="images/l1.webp" alt="images"


          </div>
        
          
          <div class="answerB">
            <h4>Choose an answer</h4>
            <form>
              <label><input type="radio" name="answer" value="a">  A</label><br>
              <label><input type="radio" name="answer" value="b" >  B</label><br>
              <label><input type="radio" name="answer" value="c"data-correct-answer="c">  C</label><br>
              
            </form>
          </div>
          
        <div class="audioB">
            <h3>Question 3</h3>
            <audio controls>
              <source src="audio/ets_toeic_2022_test_1_3.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
          </div>
          
          <div class="img">
            <img class="Describe" src="images/l2.webp" alt="images"


          </div>
          
          <div class="answerB">
            <h4>Choose an answer</h4>
            <form>
              <label><input type="radio" name="answer" value="a">  A</label><br>
              <label><input type="radio" name="answer" value="b"data-correct-answer="b">  B</label><br>
              <label><input type="radio" name="answer" value="c">  C</label><br>
              
            </form>
          </div>
         
        <div class="audioB">
            <h3>Question 4</h3>
            <audio controls>
              <source src="audio/ets_toeic_2022_test_1_4.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
          </div>
          
          <div class="img">
            <img class="Describe" src="images/l3.webp" alt="images"


          </div>
          
          <div class="answerB">
            <h4>Choose an answer</h4>
            <form>
              <label><input type="radio" name="answer" value="a"data-correct-answer="a">  A</label><br>
              <label><input type="radio" name="answer" value="b">  B</label><br>
              <label><input type="radio" name="answer" value="c">  C</label><br>
              
            </form>
          </div>
          
        <div class="audioB">
            <h3>Question 5</h3>
            <audio controls>
              <source src="audio/ets_toeic_2022_test_1_5.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
          </div>
          
          <div class="img">
            <img class="Describe" src="images/l4.webp" alt="images"


          </div>
          
          <div class="answerB">
            <h4>Choose an answer</h4>
            <form>
              <label><input type="radio" name="answer" value="a">  A</label><br>
              <label><input type="radio" name="answer" value="b">  B</label><br>
              <label><input type="radio" name="answer" value="c"data-correct-answer="c">  C</label><br>
              
            </form>
          </div>
        
        <div class="audioB">
            <h3>Question 6</h3>
            <audio controls>
              <source src="audio/ets_toeic_2022_test_1_6.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
          </div>
          
          <div class="img">
            <img class="Describe" src="images/l5.webp" alt="images"


          </div>
          
          <div class="answerB">
            <h4>Choose an answer</h4>
            <form>
              <label><input type="radio" name="answer" value="a">  A</label><br>
              <label><input type="radio" name="answer" value="b"> B</label><br>
              <label><input type="radio" name="answer" value="c"data-correct-answer="c">  C</label><br>
              
            </form>
          </div>
          <div class="submit-button">
            <button id="submitBtn">Submit</button>
            <button id="resetBtn" disabled>Replay</button>
        </div>
        <div class="result-box" id="resultBox" style="display: none;">
            <h3>Result:</h3>
            <p>Right sentence: <span id="correctCount">0</span></p>
            <p>Wrong sentence: <span id="incorrectCount">0</span></p>
        </div>
        <div class="question-result">
            <p>Question 1: <span class="question-result-text" id="q1Result"></span></p>
            <p>Question 2: <span class="question-result-text" id="q2Result"></span></p>
            <p>Question 3: <span class="question-result-text" id="q3Result"></span></p>
            <p>Question 4: <span class="question-result-text" id="q4Result"></span></p>
            <p>Question 5: <span class="question-result-text" id="q5Result"></span></p>
            <p>Question 6: <span class="question-result-text" id="q6Result"></span></p>
            
        </div>
            </section>
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
    <script src="../static/a1-listening.js"></script>
</body>

</html>