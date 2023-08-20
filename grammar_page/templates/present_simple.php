<?php
include("../../login_php/connect_db.php");

$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../static/present_simple.css">
  <link rel="icon" href="/home_page/images/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Present simple</title>
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
                              <a href="../../user_info/user_info.php" class="header-navbar-btn header-navbar-btn--separate"><?php echo $user['username'] ?></a>
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
              <li>Present simple</li>
            </ol>
          </section>
          <h1 class="page-header">
            <div class="field field--name-name field--type-string field--label-hidden field--item">Present simple</div>
          </h1>
        </div>
      </div>
      <div class="block-content-container">
        <div class="left-side">
          <div class="block-video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/uFpEp83Vh3k"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe>
          </div>
          <div class="block-text-container">
            <h3>Watch video</h3>
            <h3>How to use present simple in this video</h3>
            <h1>1. Present simple definition</h1>
            <p>Simple present or Present simple tense is a tense in modern English. Period
              this expresses a general, repeated general action or an obvious truth or
                            An action that takes place in the present time.</p>
            <h1>2. How to use the present simple</h1>
            <table class="table table-hover table-dark">
              <thead>
                <th>Present simple tense usage</th>
                <th class="col">Example</th>
              </thead>
              <tbody>
                <tr>
                  <td>Diễn đạt một thói quen hoặc hành động lặp đi lặp lại trong hiện tại</td>
                  <td>I usually go to bed at 11 p.m. (Tôi thường đi ngủ vào lúc 11 giờ)
                    <br>We go to work every day. (Tôi đi làm mỗi ngày)

                    <br>My mother always gets up early. (Mẹ tôi luôn luôn thức dậy sớm.)
                  </td>
                </tr>
                <tr>
                  <td>Chân lý, sự thật hiển nhiên</td>
                  <td>
                    The sun rises in the East and sets in the West. (Mặt trời mọc ở phía đông và lặn ở phía Tây)
                    <br>The earth moves around the Sun. (Trái đất quay quanh mặt trời)
                  </td>
                </tr>
                <tr>
                  <td>Sự việc xảy ra trong tương lai. Cách này thường áp dụng để nói về thời gian biểu, chương trình
                    hoặc kế hoạch đã được cố định theo thời gian biểu.</td>
                  <td>The plane takes off at 3 p.m. this afternoon. (Chiếc máy bay hạ cánh lúc 3 giờ chiều nay)
                    <br>The train leaves at 8 am tomorrow. (Tàu khởi hành lúc 8 giờ sáng mai.)
                  </td>
                </tr>
                <tr>
                  <td>Sử dụng trong câu điều kiện loại 1:</td>
                  <td>What will you do if you fail your exam? (Bạn sẽ làm gì nếu bạn trượt kỳ thi này?)</td>
                </tr>
                <tr>
                  <td>Sử dụng trong một số cấu trúc khác</td>
                  <td>We will wait, until she comes. (Chúng tôi sẽ đợi cho đến khi cô ấy tới)</td>
                </tr>
              </tbody>
            </table>
            <br>
            <br>
            <h1>3. Formal of present simple</h1>
            <table class="table table-hover table-dark">
              <thead>
                <th>Thể</th>
                <th>Động từ "tobe"</th>
                <th>Động từ "thường"</th>
              </thead>
              <tbody>
                <tr>
                  <td>Khẳng định</td>
                  <td>
                    <li>S + am/are/is + ……</li><br>I + am;<br>

                    We, You, They + are <br>He, She, It + is

                    <br>Ex: I am a student. (Tôi là một sinh viên.)
                  </td>
                  <td>
                    <li>S + V(e/es) + ……I ,</li><br>We, You, They + V (nguyên thể)

                    <br>He, She, It + V (s/es)

                    <br>Ex: He often plays soccer. (Anh ấy thường xuyên chơi bóng đá)
                  </td>
                </tr>
                <tr>
                  <td>Phủ định</td>
                  <td>
                    <li>S + am/are/is + not +</li><br>is not = isn’t ;

                    <br>are not = aren’t <br>Ex: I am not a student. (Tôi không phải là một sinh viên.)
                  <td>
                    <li>S + do/ does + not + V(ng.thể)</li><br>do not = don’t

                    <br>does not = doesn’t <br>Ex: He doesn’t often play soccer. (Anh ấy không thường xuyên chơi bóng
                    đá)
                  </td>
                </tr>
                <tr>
                  <td>Nghi vấn</td>
                  <td>
                    <li>Yes – No question (Câu hỏi ngắn)</li>
                    <br>Q: Am/ Are/ Is (not) + S + ….?

                    <br>A:Yes, S + am/ are/ is.

                    <br>No, S + am not/ aren’t/ isn’t.

                    <br>Ex: Are you a student?

                    <br>Yes, I am. / No, I am not.

                    <li>Wh- questions (Câu hỏi có từ để hỏi)</li>
                    <br>Wh + am/ are/ is (not) + S + ….?

                    <br>Ex: Where are you from? (Bạn đến từ đâu?)
                  </td>
                  <td>
                    <li>Yes – No question (Câu hỏi ngắn)</li>
                    <br>Q: Do/ Does (not) + S + V(ng.thể)..?

                    <br>A:Yes, S + do/ does.

                    <br>No, S + don’t/ doesn’t.

                    <br>Ex: Does he play soccer?

                    <br>Yes, he does. / No, he doesn’t.

                    <li>Wh- questions (Câu hỏi có từ để hỏi)</li>
                    <br>Wh + do/ does(not) + S + V(nguyên thể)….?

                    <br>Ex: Where do you come from? (Bạn đến từ đâu?)
                  </td>
                </tr>
                <table id="table-2">
                  <tbody>
                    <tr>
                      <td class="warning">Lưu ý</td>
                      <td><Strong>Cách thêm s/es:</Strong>
                        <br>– Thêm s vào đằng sau hầu hết các động từ: want-wants; work-works;…
                        <br>– Thêm es vào các động từ kết thúc bằng ch, sh, x, s: watch-watches;
                        <br>miss-misses; wash-washes; fix-fixes;…
                        <br>– Bỏ y và thêm ies vào sau các động từ kết thúc bởi một phụ âm + y:
                        study-studies;…
                        <br>– Động từ bất quy tắc: Go-goes; do-does; have-has.
                        <br><strong>Cách phát âm phụ âm cuối s/es: Chú ý các phát âm phụ âm cuối này phải dựa vào phiên
                          âm quốc tế chứ không dựa vào cách viết.</strong>
                        <br>– /s/:Khi từ có tận cùng là các phụ âm /f/, /t/, /k/, /p/ , /ð/
                        <br>– /iz/:Khi từ có tận cùng là các âm /s/, /z/, /∫/, /t∫/, /ʒ/, /dʒ/ (thường có tận cùng là
                        các chữ cái ce, x, z, sh, ch, s, ge)
                        <br>– /z/:Khi từ có tận cùng là nguyên âm và các phụ âm còn lại
                      </td>
                    </tr>

                  </tbody>
                </table>
              </tbody>
            </table>
            <br>
            <br>
            <h1>5. Present simple Identification Signs</h1>
            <div class="sign">
              <ul>
                <li>Always (luôn luôn) , usually (thường xuyên), often (thường xuyên), frequently (thường xuyên) ,
                  sometimes (thỉnh thoảng), seldom (hiếm khi), rarely (hiếm khi), hardly (hiếm khi) , never (không bao
                  giờ), generally (nhìn chung), regularly (thường xuyên).</li>
                <br>
                <li>Every day, every week, every month, every year,……. (Mỗi ngày, mỗi tuần, mỗi tháng, mỗi năm)</li>
                <br>
                <li>Once/ twice/ three times/ four times….. a day/ week/ month/ year,……. (một lần / hai lần/ ba lần/ bốn
                  lần ……..một ngày/ tuần/ tháng/ năm)</li>
              </ul>
            </div>
            <h1>6. Try this exercise to test your grammar.</h1>
            <div class="block-block-form-exercise">
              <a href="">
              <div class="block-block-dropdown-select">
                <span class="block-dropdown-selected">Grammar test 1</span>
                <i class="fa fa-caret-down dropdown-caret"></i>
              </div>
              </a>
            </div>
            
          </div>
        </div>

      </div>
      <section
        class="views-element-container view-taxonomy-term block block-views block-views-blocktaxonomy-term-blocks-block-1 clearfix"
        id="block-views-block-taxonomy-term-blocks-block-1">
        <h2>7. Choose a grammar lesson</h2>
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
                              <img
                                src="https://sfcreligiouseducation.weebly.com/uploads/3/7/9/3/37934697/5906367_orig.jpg"
                                alt="Adjectives ending in '-ed' and '-ing'" sizes="100vw" class="img-responsive">
                            </a>
                          </div>
                        </div>
                        <div class="content-wrapper">
                          <div
                            class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                            <h2>
                              <a href="/grammar_page/templates/templates_c2/at_in_on.html">Prepositions of time: 'at', 'in', 'on'</a>
                            </h2>
                          </div>
                          <div
                            class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                            Simple present tense, Simple present tense, Present perfect tense, Present perfect
                            continuous tense, Past simple tense, Past continuous tense, Past perfe ct tense, Past perfe
                            ct tense, Simple future tense, Future continuous tense
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../static/present-simple.js"></script>
</body>

</html>