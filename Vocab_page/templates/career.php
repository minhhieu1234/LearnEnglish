<?php
include("../../login_php/connect_db.php");

$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Vocab_page/static/static_c2/career.css">
    <link rel="icon" href="/home_page/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Career</title>
</head>

<body>
    <div class="wrapper">
        <header class="navbar-header">
            <div class="grid">  
              <nav class="header-navbar">
                <ul class="header-list-brand">
                  <li class="header-navbar-icon">
                    <a href="" class="header-navbar-logo">
                      <img class="header-navbar-logo_1" src="/home_page/images/logo2.svg" alt="Home" title="LearnEnglish">
                    </a>
                  </li>
                  <li class="header-logo-brand">
                    <a href="/home_page/home.html" class="header-navbar-name header-navbar-name--saparate">LearnEnglish</a>
                  </li>
                </ul>
                <ul class="header-list-brand">
                  <li class="header-logo-brand">
                    <a href="/login_page/login.html" class="header-navbar-btn header-navbar-btn--separate">Login</a>
                  </li>
                  <li class="header-logo-brand">
                    <a href="/register_page/register.html" class="header-navbar-btn">Register</a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="header-navbar-menu">
              <ul class="main-menu">
                <li class="first">
                  <a href="/home_page/home.html" class="is-active">Home</a>
                </li>
                <li class="expanded-dropdown">
                  <a href="/skill_page/templates/templates_1/skill.html" class="dropdown-toggle">Skill</a>
                  <ul class="dropdown-menu">
                    <li><a href="">Listening</a></li>
                    <li><a href="">Speaking</a></li>
                    <li><a href="">Reading</a></li>
                    <li><a href="">Writing</a></li>
                  </ul>
                </li>
                <li class="expanded-dropdown">
                  <a href="/grammar_page/templates/templates_c0/grammar.html" class="dropdown-toggle">Grammar</a>
                  <ul class="dropdown-menu">
                    <li><a href="/grammar_page/templates/templates_c1/a1-a2-grammar.html">A1-A2 Grammar</a></li>
                    <li><a href="/grammar_page/templates/templates_c1/b1-b2-grammar.html">B1-B2 Grammar</a></li>
                    
                </ul>
                </li>
                <li class="expanded-dropdown">
                  <a href="/Vocab_page/templates/templates_c0/vocab.html" class="dropdown-toggle">Vocabulary</a>
                  <ul class="dropdown-menu">
                    <li><a href="/Vocab_page/templates/templates_c1/a1-a2_vocab.html">A1-A2 Vocabulary</a></li>
                    <li><a href="/Vocab_page/templates/templates_c1/b1-b2-vocab.html">B1-B2 Vocabulary</a></li>
                </ul>
                </li>
                <li class="expanded-dropdown">
                  <a href="" class="dropdown-toggle">Learning Roadmap</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="">Ielts</a>
                    </li>
                    <li>
                      <a href="">Toeic</a>
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
                                <a href="">Vocabulary</a>
                            </li>
                            <li class="active">
                                B1-B2 Vocabulary
                            </li>
                            <li>Career</li>
                        </ol>
                    </section>
                    <h1 class="page-header">
                        <div class="field field--name-name field--type-string field--label-hidden field--item">Career</div>
                    </h1>
                </div>
            </div>
            <div class="block-content-container">
                <div class="left-side">
                    <div class="block-video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/x8tF2aQoukY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="block-text-container">
                        <h3>Watch the video</h3>
                        <p>Listen to the words and repeat</p>
                        <h3>Career words in this video</h3>
                        <table class="table table-hover table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Vocabulary</th>
                                    <th scope="col">Pronounce</th>
                                    <th scope="col">Meaning</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Astronaut</td>
                                    <td>/ˈastrənɔːt/</td>
                                    <td>Phi hành gia</td>
                                </tr>
                                <tr>
                                    <td>Bus driver</td>
                                    <td>/bus driver/</td>
                                    <td>Tài xế xe bus</td>
                                </tr>
                                <tr>
                                    <td>Taxi driver</td>
                                    <td>/ˈtæk.si ˌdraɪ.vər/</td>
                                    <td>Tài xế taxi</td>
                                </tr>
                                <tr>
                                    <td>Business man</td>
                                    <td>/ˈbɪz.nɪs.mən/</td>
                                    <td>Doanh nhân</td>
                                </tr>
                                <tr>
                                    <td>Carpenter</td>
                                    <td>/ˈkɑː.pɪn.tər/</td>
                                    <td>Thợ mộc</td>
                                </tr>
                                <tr>
                                    <td>Cashier</td>
                                    <td>/kæʃˈɪər/</td>
                                    <td>Thu ngân</td>
                                </tr>
                                <tr>
                                    <td>Computer programmer</td>
                                    <td>/kəmˈpjuː.tər ˈprəʊ.græm.ər/</td>
                                    <td>Lập trình viên máy tính</td>
                                </tr>
                                <tr>
                                    <td>Baker</td>
                                    <td>/ˈbeɪ.kər/</td>
                                    <td>Thợ làm bánh</td>
                                </tr>
                                <tr>
                                    <td>Waiter</td>
                                    <td>/ˈweɪ.tər/</td>
                                    <td>Phục vụ</td>
                                </tr>
                                <tr>
                                    <td>Doctor</td>
                                    <td>/ˈdɒk.tər/</td>
                                    <td>Bác sĩ</td>
                                </tr>
                                <tr>
                                    <td>Nurse</td>
                                    <td>/nɜːs/</td>
                                    <td>Y tá</td>
                                </tr>
                                <tr>
                                    <td>Electrician</td>
                                    <td>/ˌɪl.ekˈtrɪʃ.ən/</td>
                                    <td>Thợ điện</td>
                                </tr>
                                <tr>
                                    <td>Plumber</td>
                                    <td>/ˈplʌm.ər/</td>
                                    <td>Thợ sửa ống nước</td>
                                </tr>
                                <tr>
                                    <td>Engineer</td>
                                    <td>/ˌen.dʒɪˈnɪər/</td>
                                    <td>Kĩ sư</td>
                                </tr>
                                <tr>
                                    <td>Headband</td>
                                    <td>/ˈhed.bænd/</td>
                                    <td>Băng buộc đầu</td>
                                </tr>
                                <tr>
                                    <td>Road worker</td>
                                    <td>/rəʊd ˈwɜː.kər/</td>
                                    <td>Công nhân đường bộ</td>
                                </tr>
                                <tr>
                                    <td>Gardener</td>
                                    <td>/ˈgɑː.dən.ər/</td>
                                    <td>Thợ làm vườn</td>
                                </tr>
                                <tr>
                                    <td>Farmer</td>
                                    <td>/ˈfɑː.mər/</td>
                                    <td>Nông dân</td>
                                </tr>
                                <tr>
                                    <td>Firefighter</td>
                                    <td>/ˈfaɪəˌfaɪ.tər/</td>
                                    <td>Lính cứu hỏa</td>
                                </tr>
                                <tr>
                                    <td>Hairdresser</td>
                                    <td>/ˈheəˌdres.ər/</td>
                                    <td>Thợ làm tóc</td>
                                </tr>
                                <tr>
                                    <td>Judge</td>
                                    <td>/dʒʌdʒ/ </td>
                                    <td>Thẩm phán</td>
                                </tr>
                                <tr>
                                    <td>Lawyer</td>
                                    <td>/ˈlɔɪ.ər/</td>
                                    <td>Luật sư</td>
                                </tr>
                                <tr>
                                    <td>Mechanic</td>
                                    <td>/məˈkæn.ɪk/</td>
                                    <td>Thợ máy</td>
                                </tr>
                                <tr>
                                    <td>Musician</td>
                                    <td>/mjuːˈzɪʃ.ən/</td>
                                    <td>Nhạc sĩ</td>
                                </tr>
                                <tr>
                                    <td>Painter</td>
                                    <td>/ˈpeɪn.tər/</td>
                                    <td>Họa sĩ</td>
                                </tr>
                                <tr>
                                    <td>Photographer</td>
                                    <td>/fəˈtɒg.rə.fər/</td>
                                    <td>Nhíp ảnh gia</td>
                                </tr>
                                <tr>
                                    <td>Pilot</td>
                                    <td>/ˈpaɪ.lət/</td>
                                    <td>Phi công</td>
                                </tr>
                                <tr>
                                    <td>Police officer</td>
                                    <td>/pəˈliːs ˌɒf.ɪ.sər/</td>
                                    <td>Cảnh sát</td>
                                </tr>
                                <tr>
                                    <td>Football player</td>
                                    <td>/ˈfʊt.bɔːl ˌpleɪ.ər/</td>
                                    <td>Cầu thủ</td>
                                </tr>
                                <tr>
                                    <td>Tailer</td>
                                    <td>/ˈiː.teɪ.lər/</td>
                                    <td>Thợ may</td>
                                </tr>
                                <tr>
                                    <td>Teacher</td>
                                    <td>/ˈtiː.tʃər/</td>
                                    <td>Giáo viên</td>
                                </tr>
                                <tr>
                                    <td>Flight attendant</td>
                                    <td>/ˈflaɪt əˌten.dənt/</td>
                                    <td>Tiếp viên hàng không</td>
                                </tr>
                                <tr>
                                    <td>Train conductor</td>
                                    <td>/treɪn kənˈdʌk.tər/</td>
                                    <td>Người điều khiển tàu hỏa</td>
                                </tr>
                                <tr>
                                    <td>Scientist</td>
                                    <td>/ˈsaɪən.tɪst/</td>
                                    <td>Nhà khoa học</td>
                                </tr>
                                <tr>
                                    <td>Pharmacist</td>
                                    <td>/ˈfɑː.mə.sɪst/</td>
                                    <td>Dược sĩ</td>
                                </tr>
                                <tr>
                                    <td>Ballet dancer</td>
                                    <td>/ˈbæl.eɪ ˈdɑːn.sər/</td>
                                    <td>Vũ công ba lê</td>
                                </tr>
                                <tr>
                                    <td>Deliveryman</td>
                                    <td>/dɪˈlɪv.ər.i.mæn/</td>
                                    <td>Người giao hàng</td>
                                </tr>
                                <tr>
                                    <td>Postman</td>
                                    <td>/ˈpəʊst.mən/</td>
                                    <td>Người đưa thư</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="right-side">
                    <aside class="aside-menu-container">
                        <div class="aside-sidebar-container">
                            <nav role="navigation" id="block-menu-sidebar-container">
                                <h2>
                                    <a href="/grammar_page/templates/templates_c0/grammar.html">Skill</a>
                                </h2>
                                <ul class="menu--sidebar-menu">
                                    <li>
                                        <a href="/grammar_page/templates/templates_c1/a1-a2-grammar.html"><i class="fa-solid fa-check"></i> Listening</a>
                                    </li>
                                    <li>
                                        <a href="/grammar_page/templates/templates_c1/b1-b2-grammar.html"><i class="fa-solid fa-check"></i> Speaking</a>
                                    </li>
                                    <li>
                                        <a href="/grammar_page/templates/templates_c1/c1-grammar.html"><i class="fa-solid fa-check"></i> Reading</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/writting.html"><i class="fa-solid fa-check"></i> Writting</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </aside>
                    <aside class="aside-menu-container">
                        <div class="aside-sidebar-container">
                            <nav role="navigation" id="block-menu-sidebar-container">
                                <h2>
                                    <a href="/grammar_page/templates/templates_c0/grammar.html">Grammar</a>
                                </h2>
                                <ul class="menu--sidebar-menu">
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/listening.html"><i class="fa-solid fa-check"></i> A1-A2 grammar</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/speaking.html"><i class="fa-solid fa-check"></i> B1-B2 grammar</a>
                                    </li>
                                    
                                    
                                </ul>
                            </nav>
                        </div>
                    </aside>
                    <aside class="aside-menu-container">
                        <div class="aside-sidebar-container">
                            <nav role="navigation" id="block-menu-sidebar-container">
                                <h2>
                                    <a href="/grammar_page/templates/templates_c0/grammar.html">Vocabulary</a>
                                </h2>
                                <ul class="menu--sidebar-menu">
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/listening.html"><i class="fa-solid fa-check"></i> A1-A2 vocabulary</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/speaking.html"><i class="fa-solid fa-check"></i> B1-B2 vocabulary</a>
                                    </li>
                            
                                    
                                </ul>
                            </nav>
                        </div>
                    </aside>
                    <aside class="aside-menu-container">
                        <div class="aside-sidebar-container">
                            <nav role="navigation" id="block-menu-sidebar-container">
                                <h2>
                                    <a href="/grammar_page/templates/templates_c0/grammar.html">Learning Roadmap</a>
                                </h2>
                                <ul class="menu--sidebar-menu">
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/listening.html"><i class="fa-solid fa-check"></i> IELTS</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/speaking.html"><i class="fa-solid fa-check"></i> TOEIC</a>
                                    </li>
                                    
                                    
                                </ul>
                            </nav>
                        </div>
                    </aside>
                </div>  
            </div>
            <section
                class="views-element-container view-taxonomy-term block block-views block-views-blocktaxonomy-term-blocks-block-1 clearfix"
                id="block-views-block-taxonomy-term-blocks-block-1">
                <h2>Choose a vocabulary lesson</h2>
                <div class="form-group">
                    <div class="view-taxonomy-term-blocks view-id-taxonomy_term_blocks view-display-id-block_1">
                        <div class="view-footer">
                            <div class="view view-section view-id-section view-display-id-default">
                                <div class="view-content">
                                    <div class="views-row">
                                        <div class="layout layout--onecol">
                                            <div class="layout__region layout__region--content">
                                                <div
                                                    class="field field--name-field-image field--type-image field--label-hidden field--items">
                                                    <div class="field--item">
                                                        <a href="">
                                                            <img src="https://g.foolcdn.com/editorial/images/529931/sports-equipment-sporting-goods-balls-getty.jpg"
                                                                alt="B1-B2 Vocabulary" sizes="100vw"
                                                                class="img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <div
                                                        class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                        <h2>
                                                            <a href="/Vocab_page/templates/templates_c2/sports.html">Sports</a>
                                                        </h2>
                                                    </div>
                                                    <div
                                                        class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                        Learn vocabulary about sports
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="views-row">
                                            <div class="layout layout--onecol">
                                                <div class="layout__region layout__region--content">
                                                    <div
                                                        class="field field--name-field-image field--type-image field--label-hidden field--items">
                                                        <div class="field--item">
                                                            <a href="">
                                                                <img src="https://d2gg9evh47fn9z.cloudfront.net/1600px_COLOURBOX14862248.jpg"
                                                                    alt="B1-B2 Vocabulary" sizes="100vw"
                                                                    class="img-responsive">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <div
                                                            class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                            <h2>
                                                                <a href="">Education</a>
                                                            </h2>
                                                        </div>
                                                        <div
                                                            class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                            Lern vocabulary the topic about Education
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="views-row">
                                            <div class="layout layout--onecol">
                                                <div class="layout__region layout__region--content">
                                                    <div
                                                        class="field field--name-field-image field--type-image field--label-hidden field--items">
                                                        <div class="field--item">
                                                            <a href="">
                                                                <img src="https://wallpapercave.com/wp/8Cje0K1.jpg"
                                                                    alt="Beaches" sizes="100vw" class="img-responsive">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <div
                                                            class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                            <h2>
                                                                <a href="">Beaches</a>
                                                            </h2>
                                                        </div>
                                                        <div
                                                            class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                            Are you ready to go to the beach? Do these exercises and
                                                            learn vocabulary to talk about the beach.
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
                    <a href="/skill_page/skill.html" class="dropdown-toggle">Skill</a>
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
