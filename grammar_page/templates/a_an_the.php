<?php
include("../../login_php/connect_db.php");

$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../static/a-an-the.css">
  <link rel="icon" href="/home_page/images/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Prepositons of time: at, in, on</title>
</head>

<body>
  <div class="wrapper">
  <header class="navbar-header">
      <div class="grid">  
        <nav class="header-navbar">
          <ul class="header-list-brand">
            <li class="header-navbar-icon">
              <a href="" class="header-navbar-logo">
                <img class="header-navbar-logo_1" src="../img/logo2.svg" alt="Home" title="LearnEnglish">
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
          <section id="block-block-group-breadcrumbs"
            class="block block-blockgroup block-block-groupbreadcrumbs clearfix">
            <ol class="breadcrumb">
              <li>
                <a href="">Grammar</a>
              </li>
              <li class="active">
                A1-A2 Grammar
              </li>
              <li>Prepositions of time: at, in, on</li>
            </ol>
          </section>
          <h1 class="page-header">
            <div class="field field--name-name field--type-string field--label-hidden field--item">Prepositions of time: at, in, on</div>
          </h1>
        </div>
      </div>
      <div class="block-content-container">
        <div class="left-side">
          <div class="block-video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Z4AhZLylP5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="block-text-container">
            <div class="block-block-content-container">
              <h3>Watch video</h3>
              <h3>Usage Prepositons of time: a, an, the in this video</h3>
              <h1>What is an article?</h1>
              <h2>Definition</h2>
              <div class="definition">
                <p>In English, an article is a word that precedes a noun phrase (adjective + noun) and indicates whether the noun refers to a definite or indefinite object. In English, we will often encounter 3 articles: A –An –The. </p>
              </div>
              <span class="span-content-container">2 Common positions of Articles</span>
              <div class="article-precedes">
                <p>The article precedes the noun. For example, a day, a person</p>
                <p>The article precedes the noun phrase: a sunny day, a nice person</p>
              </div>
              <h2>Article classification</h2>
              <div class="article-classification">
                <p>In English, articles are divided into 2 types:</p>
              <p>- Indefinite articles</p>
              <p>- Defining articles</p>
              </div>
              <h2>How to use articles</h2>
              <h3>General usage of the article "A/An"</h3>
              <div class="general-usage">
                <p>When referring to a general or undefined object or being talked about for the first time, we often use the indefinite article "a/an". "A/an" (meaning: one) usually precedes singular countable nouns, they are used in generalized sentences or refer to a topic that is first mentioned. Example:</p>
              <p>I live in a house. (Tôi sống ở một ngôi nhà.) </p>
              <p>I have an egg. (Tôi có một quả trứng.)</p>
              <p>In the above 2 examples, we do not determine which house the house in question is, nor which egg is in question, so the nouns "house" and "egg" must go with the 2 articles "a" and "an".</p>
              </div>
              <h3>Distinguish between the use of articles "A" and "An"</h3>
              <div class="distinguish">
                <p>1 – The article "a": preceded by a singular noun beginning with a consonant (in pronunciation, not in spelling). For example, a game, a cat, a king, a uniform </p>
              <p>2 – The article "an": preceded by a singular noun beginning with 1 vowel (in pronunciation rather than in spelling).  For example: an actor, an hour, an SOS, an MV (Music Video) </p>
              </div>
              <h3>Usage of the article "The"</h3>
              <span class="span-content-container">Common uses of articles defining "the"</span>
              <div class="common-usage-of-article">
                <p>Unlike the article "a/an", the article "the" goes with both singular nouns and plural nouns. We can use "the apple" or "the apples". However, the article "the" has the characteristic of having to be used with the definite noun, which is spoken from the 2nd time onwards.</p>
              <p>Example: I live in a house. The house is large. (Tôi sống ở một ngôi nhà. Ngôi nhà ấy rộng lắm.)</p>
              <p>In the example above, the first word house must go with the article "a" because we don't know which house the house in question is. However, when we are repeated in verse 2, we identify the house in question, so the word "house" then goes with the article "the".</p>
              </div>
              <h3>Cases where it is mandatory to use the article "the"</h3>
              <div class="madatory">
                <p>1 – Khi danh từ được cho là duy nhất. Ví dụ: the Sun, the Moon, the Earth…

                <br><br>2 – Khi nói đến số thứ tự. Ví dụ: the first, the second… 
                
                <br><br>3 – Với cấu trúc “The + ADJ (tính từ)” để chỉ một nhóm đối tượng cụ thể mang đặc điểm của tính từ đó. Ví dụ: the old and the young (người già và người trẻ), the rich (người giàu), the poor (người nghèo)… 
                
                <br><br>4 – Với cấu trúc “The + last name (ở dạng số nhiều)” để chỉ dòng họ, gia đình. Ví dụ: The Jacksons (gia đình Jackson), The Smiths (gia đình Smith)…
                
                <br><br>5 – Với tên dãy núi hoặc quần đảo, sông, biển, đại dương, sa mạc. Ví dụ: the Red River (sông Hồng), the Pacific Ocean (Biển Thái Bình Dương)…    
                
                <br><br>6 – Với tên của các loại nhạc cụ nói chung. Ví dụ: the piano, the trumpet… 
                
                <br><br>7 – Với tên của các đất nước có chứa các từ: “kingdom, states, republic, union” Hoặc với tên đất nước có hình thức số nhiều trong tên. Ví dụ: The United States, The United Kingdom, the Republic of Ireland, the Philippines… </p>
              </div>
                <h3>Cases where the article "A – An – The" is not used</h3>
                <div class="cases-article">
                    <p>1 – Không dùng mạo từ cho những danh từ số nhiều, hoặc danh từ đếm được mang nghĩa nói chung
                        <br><br>2 – Không dùng mạo từ trước:</p>
                    <ul class="block-block-list-container">
                        <li>Name of meals (dinner, launch...)</li>
                        <li>Names of languages (English, Vietnamese...)</li>
                        <li>Names of sports (soccer, volleyball ...) </li>
                        <li>The names of most roads, cities, countries... (Doan Ke Thien Street, Ly Thai To Street...) </li>
                        <li>Names of individual mountains, lakes (Hoan Kiem lake, Swan lake ...) </li>
                        <li>Names of some means of transportation (car, bus ...) </li>
                    </ul>
                    <p>3 – Don't use the article when you want to emphasize actions that take place at a place rather than the place itself. Common nouns in this case include: school, hospial, university ...</p>
                        
                </div>
                
            </div>
            
            
          </div>
          <div class="block-block-form-exercise">
            <div class="block-block-dropdown-select">
              <span class="block-dropdown-selected">Grammar test</span>
              <i class="fa fa-caret-down dropdown-caret"></i>
            </div>
            <div class="block-dropdown-list">
              <form action="" class="block-form-exercise--container">
                <label for="answer">Question 1: We are looking for _______ place to spend ________ night.</label>
                <br><input type="radio" name = "answer-radio">a.the/the
                <input type="radio" name = "answer-radio">b.a/the
                <input type="radio" name = "answer-radio">c.a/a
                <input type="radio" name = "answer-radio">c.the/a
                <br><label for="answer">Question 2: Please turn off ________ lights when you leave ________ room.</label>
                <br><input type="radio" name = "answer-radio">a.the/the
                <input type="radio" name = "answer-radio">b.a/a
                <input type="radio" name = "answer-radio">c.the/a
                <input type="radio" name = "answer-radio">c.a/the
                <br><label for="answer">Question 3: We are looking for people with ________experience.</label>
                <br><input type="radio" name = "answer-radio">a.a
                <input type="radio" name = "answer-radio">b.the
                <input type="radio" name = "answer-radio">c.an
                <input type="radio" name = "answer-radio">c.x
                <br><label for="answer">Question 4: Would you pass me ________ salt, please?</label>
                <br><input type="radio" name = "answer-radio">a.a
                <input type="radio" name = "answer-radio">b.the
                <input type="radio" name = "answer-radio">c.an
                <input type="radio" name = "answer-radio">c.x
                <br><label for="answer">Question 5: Can you show me ________way to ________station?</label>
                <br><input type="radio" name = "answer-radio">a.the/the
                <input type="radio" name = "answer-radio">b.a/a
                <input type="radio" name = "answer-radio">c.the/a
                <input type="radio" name = "answer-radio">c.a/the
              </form>
              
            </div>
          </div>
        </div>

      </div>
      <section
        class="views-element-container view-taxonomy-term block block-views block-views-blocktaxonomy-term-blocks-block-1 clearfix"
        id="block-views-block-taxonomy-term-blocks-block-1">
        <h2>Choose a grammar lesson</h2>
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
                                        <img src="https://c2.staticflickr.com/4/3058/3047992023_c73040b50a_b.jpg" 
                                        alt="Adjectives and prepositions" sizes="100vw" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="content-wrapper">
                                <div class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                    <h2>
                                        <a href="/grammar_page/templates/templates_c2/present_simple.html">Present simple</a>
                                    </h2>
                                </div>
                                <div class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                    Include noun, pronoun, adjective, verb, adverb, determiner, preposition, conjunction, interjection
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
                              <img src="https://e4harchitecture.com/wp-content/uploads/2020/02/Candids-6-1024x680.jpg"
                                alt="Articles: 'a', 'an', 'the'" sizes="100vw" class="img-responsive">
                            </a>
                          </div>
                        </div>
                        <div class="content-wrapper">
                          <div
                            class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                            <h2>
                              <a href="/grammar_page/templates/templates_c2/a_an_the.html">Articles: 'a', 'an', 'the'</a>
                            </h2>
                          </div>
                          <div
                            class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                            Do you know how to use a, an and the? Test what you know with interactive exercises and read
                            the explanation to help you.
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
                                src="https://bibleresearchtoday.files.wordpress.com/2016/07/img_1432-edit.jpg?w=1312&h=740"
                                alt="Articles: 'the' or no article" sizes="100vw" class="img-responsive">
                            </a>
                          </div>
                        </div>
                        <div class="content-wrapper">
                          <div
                            class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                            <h2>
                              <a href="">Comparative adjectives</a>
                            </h2>
                          </div>
                          <div
                            class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                            Do you know how to use comparative adjectives like older, better and more interesting? Test
                            what you know with interactive exercises and read the explanation to help you.
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
                              <img src="https://aiemel.edu.au/wp-content/uploads/2019/03/aie-slider-2.jpg" alt=""
                                class="img-respomsive" sizes="100vw">
                            </a>
                          </div>

                        </div>
                        <div class="content-wrapper">
                          <div
                            class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                            <h2>
                              <a href="">Nouns: countable and uncountable
                              </a>
                            </h2>
                          </div>
                          <div
                            class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                            Do you know how to use a, some, any, much and many? Test what you know with interactive
                            exercises and read the explanation to help you.
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