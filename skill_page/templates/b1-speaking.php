<?php
include("../../login_php/connect_db.php");

$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../static/b1-speaking.css">
  <link rel="icon" href="../../home_page/images/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>B1 Speaking</title>
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
            <div class="block-banner-header">
              <h2 id="tittle_speaking">B1 Speaking</h2>
              <br>&nbsp;<br>
            <img loading="lazy"
              src="../img/3.1.jpg"
              alt="LearnEnglish" width="1280" height="500" class="img-responsive">
          </div>
      </section>
      <section class="wrapper-content-summary block block-content" id="block-homepage-intro">
        <div class="field field--name-body">
          <p>
            Are you currently at an intermediate B1 English level? This section provides speaking exercises aimed at assisting you in improving your English speaking abilities with useful phrases.          </p>
          <p>
            Each lesson includes a preliminary task and a video that presents language within real situations, allowing you to listen and echo the beneficial expressions. Furthermore, there are exercises to verify your comprehension of the video content and to practice using the valuable language. Begin your journey today.
          </p>
          <h2>Choose a section</h2>     
        </div>
        <section>
          <div class="content-wrapper-container">
            <div class="left-side">
              <section class="views-element-container view-taxonomy-term block block-views block-views-blocktaxonomy-term-blocks-block-1 clearfix" id="block-views-block-taxonomy-term-blocks-block-1">
                <div class="form-group">
                  <div class="view-taxonomy-term-blocks view-id -taxonomy_term_blocks view-display-id-block_1">
                    <div class="view-footer">
                      <div class="view view-section view-id-section view-display-id-default">
                        <div class="view-content">
                          <div class="views-row">
                            <div class="layout layout--onecol">
                              <div class="layout__region layout__region--content">
                                <div class="field field--name-field-image field--type-image field--label-hidden field--items">
                                  <div class="field--item"></div>
                                </div>
                                <div class="content-wrapper">
                                  <div class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                    <h2><a href="../templates/b1-speaking.php">B1 Speaking</a></h2>
                                  </div>
                                  <h3><span class="ez-toc-section" id="IELTS-Speaking-part-1">Speaking Part 1</span></h3>
                                  <p><strong>Question</strong>. How long have you been studying English?</p>
                                  <p><strong>Answer</strong>. I started studying English last year because I want to go to university.</p>
                                  <p> I am keen on learning English because it is fun and I like my teacher because he is very funny and intelligent.</p>
                                  <h2>Example Phase One Exercise</h2>
                                  <blockquote><div class="page" title="Page 4">
                                    <div class="section">
                                      <div class="layoutArea">
                                        <div class="column">
                                          <p>Good morning/afternoon/evening. Can I have your mark sheets, please?</p>
                                          <p>Hand over the mark sheets to the Assessor.</p>
                                          <p>I'm ………… and this is ………… .</p>
                                          <p>What's your name? Where do you live/come from? Thank you.</p>
                                          <p>And what's your name? Where do you live/come from? Thank you.</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  </blockquote>
                                  <p>&nbsp;</p>
                                  <blockquote>
                                  <p>Do you work or are you a student?</p>
                                  <span class="ezoic-autoinsert-video ezoic-under_second_paragraph"></span>
                                  <p>What do you do/study?</p>
                                  </blockquote>
                                  <p>&nbsp;</p>
                                  <h2>Familiar topics for B1 Preliminary</h2>
                                  <table>
                                    <tbody>
                                      <tr>
                                        <td width="217">
                                          <strong>TOPIC</strong>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td width="217">Time and daily routine</td>
                                      </tr>
                                      <tr>
                                        <td width="217">Leisure time and hobbies</td>
                                      </tr>
                                      <tr>
                                        <td width="217">Working and earning</td>
                                      </tr>
                                      <tr>
                                        <td width="217">Travel and tourism</td>
                                      </tr>
                                      <tr>
                                        <td width="217">Science, nature and our world</td>
                                      </tr>
                                      <tr>
                                        <td width="217">Education and learning</td>
                                      </tr>
                                      <tr>
                                        <td width="217">People and relationships</td>
                                      </tr>
                                      <tr>
                                        <td width="217">Health and lifestyle</td>
                                      </tr>
                                      <tr>
                                        <td width="217">Buying and selling</td>
                                      </tr>
                                      <tr>
                                        <td width="217">Eating and drinking</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <p>&nbsp;</p>
                                  <h3>Example Phase Two Question:</h3>
                                  <div class="ezoic-autoinsert-video ezoic-mid_content"></div>
                                  <p>In phase 2 of the speaking, candidates need to answer two questions from these topics. Your answers should be about 20 seconds each. For more speaking topics for B1 level exams, check out the <a href="https://www.youtube.com/watch?v=wv_nEUnhFFE">video here</a>.</p>
                                  <div id="ezoic-pub-ad-placeholder-112" data-inserter-version="2"></div>
                                  <p>&nbsp;</p>
                                  <p><strong>Daily routine</strong></p>
                                  <ol>
                                    <li>What time do you normally get up in the morning?</li>
                                    <li>What do you usually eat for breakfast?</li>
                                    <li>Are you interested in studying languages in your free time?</li>
                                    <li>How often do you hang out with friends?</li>
                                    <li>Do you enjoy going to the cinema with friends?</li>
                                  </ol>
                                  <p>&nbsp;</p>
                                  <p><strong>Free time</strong></p>
                                  <ol>
                                    <li>Do you like doing sports to stay healthy in your leisure time?</li>
                                    <li>Do you usually spend your free time with friends or alone?</li>
                                    <li>Where do you prefer to relax in your free time?</li>
                                    <li>Do you listen to music while relaxing?</li>
                                    <li>How frequently do you meet up with friends on weekends?</li>
                                  </ol>
                                  <p>&nbsp;</p>
                                  <p><strong>Work</strong></p>
                                  <ol>
                                    <li>Which job would you hate to have and why?</li>
                                    <li>Which job would you most like to do in the future?</li>
                                    <li>Do you commute to work or do you live in the same city?</li>
                                    <li>How old will you be when you retire in the future?</li>
                                    <li>Are you planning on changing job in the future?</li>
                                  </ol>
                                  <p>&nbsp;</p>
                                  <p><strong>Travel</strong></p>
                                  <ol>
                                    <li>Where did you go on holiday last year?</li>
                                    <li>Do you enjoy sightseeing when on holiday?</li>
                                    <li>Where are you planning on going on holiday next summer?</li>
                                    <li>Would you like to try surfing in the future?</li>
                                    <li>Which is your favorite city that you have visited?</li>
                                  </ol>
                                  <p>&nbsp;</p>
                                  <p><strong>Environmental</strong></p>
                                  <ul>
                                    <li>Do you recycle plastic at home? Why (not)?</li>
                                    <li>What are some types of pollution in your country?</li>
                                    <li>Name some ways that you can reduce pollution in this country?</li>
                                    <li>What can we do to help prevent pollution in our country?</li>
                                    <li>What could you do to make this world a better and cleaner place to live in?</li>
                                  </ul>
                                  <p>&nbsp;</p>
                                  <p><strong>Education</strong></p>
                                  <ol>
                                    <li>Did you use to like going to school as a child?</li>
                                    <li>How did you use to get to school?</li>
                                    <li>What is your current English teacher like?</li>
                                    <li>Are you good at learning languages or do you find it hard?</li>
                                    <li>Are you planning on doing another course soon?</li>
                                  </ol>
                                </div>
                              </div>
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
        </div>
      </section>
      </div>
        <div class="right-side">
          <div class="box-right">
            <nav role="navigation" aria-labelledby="block-system-menu-block-website-links-menu" id="block-system-menu-block-website-links" class="aside-content">
              <h2 id="block-system-menu-block-website-links-menu">Speaking</h2>
                <ul class="menu menu--website-links nav2">
                   <li class="first">
                      <a href="https://learnenglishkids.britishcouncil.org"><i class="fa-solid fa-check"></i>A1 Speaking</a>
                  </li>
  
                  <li>
                    <a href="https://learnenglishteens.britishcouncil.org"><i class="fa-solid fa-check"></i>A2 speaking</a>
                  </li>
                  
                  <li>
                      <a href="https://www.teachingenglish.org.uk"><i class="fa-solid fa-check"></i>B1 speaking</a>
                  </li>
                  <li>
                    <a href=""><i class="fa-solid fa-check"></i>B2 speaking</a>
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
                    
                    <li class="last">
                        <a href="https://www.teachingenglish.org.uk"><i class="fa-solid fa-check"></i> C1 Grammar</a>
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
      <div class="block-block-navbar-skill-container">
        <div class="title-skill">
          <h2>Engage In Regular Practice Sessions</h2>
          <p>To enhance your English speaking skills effectively, it's crucial to follow a few key strategies. First and foremost, engage in regular practice sessions. Set aside dedicated time each day to speak in English, whether it's with a language partner, through language exchange platforms, or by recording yourself.</p>
          <p>Another valuable approach is to listen closely to native speakers. Pay attention to their pronunciation, intonation, and overall speech patterns. This can help you grasp the natural flow of conversation and improve your own speaking rhythm.</p>
        </div>
        <div class="block-skill-join">
          <a href="">Join</a>
        </div>
      </div>
      <div class="block-block-navbar-container">
        <div class="left-side">
            <div class="block-left-image">
                <img src="../img/3.2.jpg" alt="" class="img-responsive">
            </div>
        </div>
        <div class="right-side">
            <div class="block-block-navbar-grammmar-container">
                <div class="title-grammar">
                    <h2>Listen Closely To Native Speakers And Mimic Their Speech Patterns.</h2>
                    <p>Lastly, work on building a robust vocabulary. This can be achieved through consistent effort, such as learning a few new words or phrases every day and incorporating them into your conversations. A rich vocabulary allows you to express yourself more precisely and fluently.</p>
                    <p>Incorporating these practices into your language learning routine will undoubtedly contribute to your progress in English speaking. Remember, consistency and dedication are key to achieving effective results.</p>
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
              <a href="/home_page/home.html" class="is-active">Home</a>
            </li>
            <li class="expanded dropdown">
              <a href="skill.html" class="dropdown-toggle">Skill</a>
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
                <li>
                  <a href="/grammar_page/templates/templates_c1/c1-grammar.html">C1 Grammar</a>
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
  <script src="../static/skill.js"></script>
</body>

</html>