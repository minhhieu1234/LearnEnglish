<?php
include("../../login_php/connect_db.php");

$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../static/a2-speaking.css">
  <link rel="icon" href="../../home_page/images/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>A2 Speaking</title>
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
              <h2>A2 Speaking</h2>
              <br>&nbsp;<br>
            <img loading="lazy"
              src="../img/2.3.jpg"
              alt="LearnEnglish" width="1280" height="500" class="img-responsive">
          </div>
      </section>
      <section class="wrapper-content-summary block block-content" id="block-homepage-intro">
        <div class="field field--name-body">
          <p>
            Are you currently studying English at the A2 level, which is considered pre-intermediate? This section provides exercises in speaking to assist you in acquiring and practicing valuable expressions that will enable you to communicate in English with clarity and effectiveness.
          </p>
          <p>
            Every lesson consists of a preliminary assignment and a video presentation that introduces the language within its context, allowing you to listen to and replicate the helpful phrases. Additionally, there are exercises to verify your comprehension of the video content and to engage in further practice using the provided language. Don't hesitate to begin your journey today.
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
                                    <h2><a href="/grammar_page/templates/templates_c1/a1-a2-grammar.html">A2 Speaking</a></h2>
                                  </div>
                                  <h3><span class="ez-toc-section" id="IELTS-Speaking-part-1">Cambridge A2 Key Speaking</span></h3>
                                  <h4>1. Introductory Phase</h4>
                                  <ol>
                                    <p>During this part, the examiner will ask you a series of personal questions about yourself and your life.</p>
                                    <p>The questions will be related to topics such as your daily routine, hobbies, interests, family, friends, etc.</p>
                                    <p>You will need to provide short answers and engage in simple conversation with the examiner.</p>
                                    <p>This part assesses your ability to speak about yourself and your experiences in English.</p>
                                  </ol>
                                  <h4>2. Collaborative Task</h4>
                                  <ol>
                                    <p>During this part, you will be asked to give a longer, more detailed answer on a specific topic.</p>
                                    <p>The examiner will show you some pictures on the same topic and then ask you a question related to them.</p>
                                    <p>You will discuss the question with your partner.</p>
                                    <p>The topic can be about your personal experiences, interests, or opinions.</p>
                                    <p>You'll have a few seconds to prepare your answer and then speak for around 1-2 minutes.</p>
                                    <p>You can see how the exam works in this video:
                                      <br>&nbsp;<br>
                                    </p>
                                  </ol>
                                  <div class="video-container">
                                    <div class="embed-container"><iframe frameborder="0" allowfullscreen="allowfullscreen" src="https://test-english.com/staging11/wp-content/plugins/wp-fastest-cache-premium/pro/templates/youtube.html#AdcrRrU2lXc"></iframe></div>
                                    </div>
                                  <div>
                                      Here is a list of <strong>common topics</strong> you might find in A2 Key Speaking:</p>
                                    </div>
                                  <ul>
                                    <li>Daily life</li>
                                    <li>Personal details</li>
                                    <li>Home</li>
                                    <li>Food and drink</li>
                                    <li>Hobbies and leisure</li>
                                    <li>Sport</li>
                                    <li>Personal feelings, opinions and experiences</li>
                                    <li>Health and exercise</li>
                                    <li>Language</li>
                                    <li>Entertainment and media</li>
                                    <li>People</li>
                                    <li>Shopping</li>
                                    <li>Places and buildings</li>
                                    <li>Clothes</li>
                                    <li>Weather</li>
                                    <li>Travel and holidays</li>
                                    <li>Transport</li>
                                  </ul>
                                  <h4>Use connectors, and vocabulary used for giving opinion</h4>
                                  <p>Try to connect your sentences using words to express <a href="https://test-english.com/grammar-points/a2/however-although-time-connectors/" target="_blank" rel="noopener">contrast, reason or result</a>. Also, use expressions to give your opinion, agree and disagree. Here’s some useful vocabulary:</p>
                                  <ul>
                                    <li><strong>Giving your opinion</strong>
                                      <ul>
                                        <li>I think/believe/feel (that)…</li>
                                        <li>In my opinion,…</li>
                                        <li>I guess (that)…</li>
                                        <li>I have no doubt that…</li>
                                        <li>I strongly believe that…</li>
                                      </ul>
                                    </li>
                                    <li><strong>Agreeing</strong>
                                      <ul>
                                        <li>I agree that…</li>
                                        <li>I agree with…</li>
                                      </ul>
                                    </li>
                                    <li><strong>Disagreeing</strong>
                                      <ul>
                                        <li>I don't think (that)…</li>
                                        <li>I don't agree (with you).</li>
                                      </ul>
                                    </li>
                                    <li><strong>Giving reasons and offering explanations</strong>
                                      <ul>
                                        <li>The reason why…</li>
                                        <li>That's why…</li>
                                        <li>For this reason…</li>
                                        <li>That's the reason why…</li>
                                      </ul>
                                    </li>
                                  </ul>
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
          <a href="/grammar_page/templates/templates_c0/grammar.html">Join</a>
        </div>
      </div>
      <div class="block-block-navbar-container">
        <div class="left-side">
            <div class="block-left-image">
                <img src="../img/2.4.jpg" alt="" class="img-responsive">
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