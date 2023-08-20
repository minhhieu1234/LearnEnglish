<?php
include("../../login_php/connect_db.php");

$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../static/b2-speaking.css">
  <link rel="icon" href="../../home_page/images/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>B2 Speaking</title>
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
              <h2 id="tittle_speaking">B2 Speaking</h2>
              <br>&nbsp;<br>
            <img loading="lazy"
              src="../img/3.3.jpg"
              alt="LearnEnglish" width="1280" height="500" class="img-responsive">
          </div>
      </section>
      <section class="wrapper-content-summary block block-content" id="block-homepage-intro">
        <div class="field field--name-body">
          <p>Are you someone who is studying at the B2 English level (upper intermediate)? This segment provides speaking exercises to aid you in mastering and using beneficial phrases that can enhance your ability to communicate clearly and proficiently in English.</p>
          <p>Every lesson includes a preparatory task and a video that presents the language in real-life situations, allowing you to listen to and mimic the valuable phrases. Additionally, there are activities to assess your comprehension of the video content and to engage in practice using the advantageous language. Embark on this journey today to initiate your progress.</p>
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
                                    <h2><a href="/grammar_page/templates/templates_c1/a1-a2-grammar.html">B2 Speaking</a></h2>
                                  </div>
                                  <h3>Example exercise:</h3>
                                  <blockquote>
                                    <p>Good morning/afternoon/evening. My name is… and this is…</p>
                                    <p><em>And your names are?</em>
                                    </p>
                                    <p>
                                      <em>Can I have your mark sheets, please?</em>
                                    </p>
                                    <p>Thank you.</p>
                                  </blockquote>
                                  <p>&nbsp;</p>
                                  <span id="ezoic-pub-ad-placeholder-112" data-inserter-version="2"></span>
                                  <blockquote>
                                    <p>First we'd like to know something about you.</p>
                                    <p><strong>Hobbies</strong></p>
                                    <ul>
                                      <li><em>What do you usually do at weekends?</em></li>
                                      <li><em>Do you prefer exercising or relaxing?</em></li>
                                      <li><em>Would you like to take up a new hobby?</em></li>
                                      <li><em>Tell us about your favourite hobby.</em></li>
                                    </ul>
                                  </blockquote>
                                  <span class="ezoic-autoinsert-video ezoic-under_second_paragraph"></span>
                                  <p>&nbsp;</p>
                                  <blockquote>
                                    <p><strong>Education</strong></p>
                                    <ul>
                                      <li><em>Why are you currently learning English?</em><span class="ezoic-autoinsert-ad ezoic-under_first_paragraph"></span></li>
                                      <li><em>What was your favourite subject at school?</em></li>
                                      <li><em>Is it essential to go to university nowadays?</em></li>
                                      <li><em>Are you going to study anything interesting in the near future?</em></li>
                                    </ul>
                                  </blockquote>
                                  <p>&nbsp;</p>
                                  <blockquote>
                                    <p><strong>Likes and dislikes</strong></p>
                                    <ul>
                                      <li><em>What do you enjoy doing with friends?</em></li>
                                      <li><em>Tell us about something you really like doing.</em></li>
                                      <li><em>Are you fond of spending time outdoors?</em></li>
                                      <li><em>Do you prefer to spend time alone or with others?</em></li>
                                    </ul>
                                  </blockquote>
                                  <p>&nbsp;</p>
                                  <h2 class="" data-css="tve-u-1853dcbe9a9"><strong>An analysis of a past B2 First speaking test</strong></h2>
                                  <p data-css="tve-u-1853dccb9ca">The following analysis pertains to this B2 First speaking text:</p>
                                  <div class="thrv_responsive_video thrv_wrapper" data-type="youtube" data-rel="0" data-modestbranding="0" data-aspect-ratio="16:9" data-aspect-ratio-default="0" data-float-visibility="mobile" data-url="https://www.youtube.com/watch?v=EdeZp0n0JHw" data-float-width-m="300px" data-float-padding1-m="25px" data-float-padding2-m="25px" data-float-position="top-left" data-float-width-d="300px" data-float-padding1-d="25px" data-float-padding2-d="25px" data-fs="0" data-controls="1">
                                    <div class="tve_responsive_video_container" style="padding-bottom: 56.25%;">
                                        <div class="tcb-video-float-container">
                                            <iframe title="Responsive Video" class="tcb-responsive-video" data-code="EdeZp0n0JHw" data-provider="youtube" frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/EdeZp0n0JHw?rel=0&amp;modestbranding=0&amp;controls=1&amp;showinfo=1&amp;fs=0&amp;wmode=transparent"></iframe>
                                            <div class="video_overlay"></div>
                                        </div>
                                    </div>
                                  </div>
                                <div class="thrv_wrapper thrv_text_element">
                                  <p data-css="tve-u-1853dcf0836">You can download the paper for this speaking test from <a href="https://www.cambridgeenglish.org/exams-and-tests/first/exam-format/" target="_blank" class="tve-froala fr-basic" data-css="tve-u-1853dcf68ed">this page</a>.</p>
                                  <p data-css="tve-u-1853dcf0836"><br></p>
                                  <h3 dir="ltr" class=""><strong>Part 1 - Getting to know you</strong></h3>
                                  <h4 class="" data-css="tve-u-1853fd99095"><strong>Question 1: “Where are you from? | Victoria (0:47 - 00:57)</strong></h4>
                                  <p dir="ltr">Victoria's response to the question “Where are you from?” seemed to be a bit lengthy.&nbsp;&nbsp;</p>
                                  <p dir="ltr">It's good to provide some details, but not too much. For instance, Victoria mentioned that “it's very nice there because I live close to the sea”. However, such additional information might not be necessary in part 1.</p>
                                  <p dir="ltr">A more appropriate response for Victoria could have been:</p>
                                  <p dir="ltr"><em>I'm from Germany - a town called _____ which is on the north coast</em>.</p>
                                  <p data-css="tve-u-1853fddceb4">Overall, finding the right balance between saying too little and going into 'monologue mode' is important. You don't want the interlocutor to interrupt you mid-sentence.</p>
                                  <h4 class="" data-css="tve-u-1853fdde457"><strong>Question 2: “Where are you from?” | Edward (0:59 - 01:05) </strong></h4>
                                  <p dir="ltr">Unlike Victoria's answer, Edward's response is a good length with just the right amount of detail about where he's from.&nbsp;</p>
                                  <p data-css="tve-u-1853fde5464">Edward's answer sounds very natural. It's not recommended to memorize answers for part 1 of Cambridge speaking exams.&nbsp;</p>
                                  <h4 class="" data-css="tve-u-1853fde6b3b"><strong>Question 3: “How do you like to spend your evenings?” | Victoria (1:12 - 1:22) </strong></h4>
                                  <p dir="ltr">The length of this answer is appropriate. After seven or eight seconds, it's clear that Victoria is about to wrap up her response instead of going on and on.&nbsp;</p>
                                  <p data-css="tve-u-1853fe10219">Avoid vague statements like 'or do something else'.</p>
                                  <h4 class="" data-css="tve-u-1853fe10ea0"><strong>Question 4: “Tell us about a festival or celebration in Peru” | Edward (1:24 - 1:50) </strong></h4>
                                  <p dir="ltr">Edward starts his response with “Well…”, which is wise as it gives him time to think about his answer.</p>
                                  <p data-css="tve-u-1853fe1b435">Edward mispronounces quite a few words, making his speech unclear.&nbsp;&nbsp;</p>
                                  <h4 dir="ltr" class=""><strong>Question 5: “Do you use the Internet much?” | Victoria (1:51 - 2:08)</strong></h4>
                                  <p dir="ltr">Once again, Victoria's answer is clear and of an appropriate length.</p>
                                  <p dir="ltr">Instead of “look films”, she should have said <em>watch films</em>.</p>
                                  <p data-css="tve-u-1853fe2ab72">Victoria frequently uses the interjection “yeah”. Frankly, it's a bit annoying and might give the impression of being disfluent.</p>
                                  <h4 class="" data-css="tve-u-1853fe2ba8f"><strong>Question 6: “Tell us about a film you really like” | Edward (2:09 - 2:34)</strong></h4>
                                  <p dir="ltr">Edward's answer is not up to the mark.</p>
                                  <p data-css="tve-u-1853fecf916">His supporting arguments like “quite interesting for me”, “expensive cars and things I like”, and “I find it really good” sound too vague and unconvincing. These statements are more typical of an elementary-level learner.</p>
                                  <h3 class="" data-css="tve-u-1853fece941"><strong>Recap - Handy tips for part 1</strong></h3>
                                  <p data-css="tve-u-1853fed19ef">Here are some useful tips for successfully approaching part 1 of the speaking test:</p>
                                  <ul class=""><li dir="ltr">Learn when to give short answers. A question like “<em>Where are you from</em>”? does not require an extended answer of more than 8-10 seconds;</li>
                                    <li dir="ltr">It is ok to extend answers when a question begins with, for example, “<em>Tell us about </em>…” This is a far more open-ended question than “<em>Where are you from?</em>” because the words '<em>Tell us'&nbsp;</em>invite you to describe in some detail and give reasons;</li>
                                    <li data-css="tve-u-1854d422f20">Don't learn answers to possible questions in part 1 off by heart before the test because they don't sound very natural.</li>
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
        </section>
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
                <img src="../img/3.4.jpg" alt="" class="img-responsive">
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