<?php
include("../../login_php/connect_db.php");

$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Vocab_page/static/static_c2/beaches.css">
    <link rel="icon" href="/home_page/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Beaches</title>
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
                            <li>Beaches</li>
                        </ol>
                    </section>
                    <h1 class="page-header">
                        <div class="field field--name-name field--type-string field--label-hidden field--item">Beaches</div>
                    </h1>
                </div>
            </div>
            <div class="block-content-container">
                <div class="left-side">
                    <div class="block-video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/RD5rPked9ko" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="block-text-container">
                        <h3>Watch the video</h3>
                        <p>Listen to the words and repeat</p>
                        <h3>Beach words in this video</h3>
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
                                    <td>Sunglasses</td>
                                    <td>/ˈsʌŋˌglɑː.sɪz/</td>
                                    <td>Kính râm</td>
                                </tr>
                                <tr>
                                    <td>Beach</td>
                                    <td>/biːtʃ/</td>
                                    <td>Bãi biển</td>
                                </tr>
                                <tr>
                                    <td>Swimming</td>
                                    <td>/ˈswɪm.ɪŋ/</td>
                                    <td>Bơi lội</td>
                                </tr>
                                <tr>
                                    <td>Sun</td>
                                    <td>/sʌn/</td>
                                    <td>Mặt trời</td>
                                </tr>
                                <tr>
                                    <td>Palm tree</td>
                                    <td>/ˈpɑm (ˌtri)/</td>
                                    <td>Mũ/Nón</td>
                                </tr>
                                <tr>
                                    <td>Seashell</td>
                                    <td>/ˈsiː.ʃel/</td>
                                    <td>Vỏ sò</td>
                                </tr>
                                <tr>
                                    <td>Ocean</td>
                                    <td>/ˈəʊ.ʃən/</td>
                                    <td>Đại dương</td>
                                </tr>
                                <tr>
                                    <td>Beach towel</td>
                                    <td>/biːtʃ taʊəl/</td>
                                    <td>Khăn tắm biển</td>
                                </tr>
                                <tr>
                                    <td>Beach chair</td>
                                    <td>/biːtʃ tʃeər/</td>
                                    <td>Lược tắm biển</td>
                                </tr>
                                <tr>
                                    <td>Sand castle</td>
                                    <td>/ˈsændˌkɑː.səl/</td>
                                    <td>Lâu đài cát</td>
                                </tr>
                                <tr>
                                    <td>Tide</td>
                                    <td>/taɪd/</td>
                                    <td>Thủy triều</td>
                                </tr>
                                <tr>
                                    <td>Snorkeling</td>
                                    <td>/ˈsnɔː.kəl.ɪŋ/</td>
                                    <td>Lặn</td>
                                </tr>
                                <tr>
                                    <td>FLip-flop</td>
                                    <td>/ˈflɪp.flɒp/</td>
                                    <td>Dép xỏ ngón</td>
                                </tr>
                                <tr>
                                    <td>Sunscreen</td>
                                    <td>/ˈsʌn.skriːn/</td>
                                    <td>Kem chóng nắng</td>
                                </tr>
                                <tr>
                                    <td>Bikini</td>
                                    <td>/bɪˈkiː.ni/</td>
                                    <td>Băng buộc đầu</td>
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
                                                            <img src="https://1.bp.blogspot.com/-u9azCnRlHtc/WHZR49GY79I/AAAAAAAADKI/iXAUc2ZygmIm-mLkG6Re_gIedixi-NXuQCLcB/s1600/career%2Bday.jpg"
                                                                alt="B1-B2 Vocabulary" sizes="100vw"
                                                                class="img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <div
                                                        class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                        <h2>
                                                            <a href="/Vocab_page/templates/templates_c2/career.html">Career</a>
                                                        </h2>
                                                    </div>
                                                    <div
                                                        class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                        Do the exercises to improve your vocabulary for job.
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