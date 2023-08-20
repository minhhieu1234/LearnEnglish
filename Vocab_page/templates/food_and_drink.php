<?php
include("../../login_php/connect_db.php");

$user = (isset($_SESSION['user'])) ? $_SESSION['user']:[];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Vocab_page/static/static_c2/food_and_drink.css">
    <link rel="icon" href="/home_page/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Food and Drink</title>
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
                                A1-A2 Vocabulary
                            </li>
                            <li>Food and Drink</li>
                        </ol>
                    </section>
                    <h1 class="page-header">
                        <div class="field field--name-name field--type-string field--label-hidden field--item">Food and Drink
                        </div>
                    </h1>
                </div>
            </div>
            <div class="block-content-container">
                <div class="left-side">
                    <div class="block-video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/yezpvLy6eRM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="block-text-container">
                        <h3>Watch the video</h3>
                        <p>Listen to the words and repeat</p>
                        <h3>Food and drink words in this video</h3>
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
                                    <td>Bread</td>
                                    <td>/’sæləd/</td>
                                    <td>Bánh mì</td>
                                </tr>
                                <tr>
                                    <td>Butter</td>
                                    <td>/ˈbʌtə/</td>
                                    <td>Bơ</td>
                                </tr>
                                <tr>
                                    <td>Cake</td>
                                    <td>/keɪk/</td>
                                    <td>Bánh</td>
                                </tr>
                                <tr>
                                    <td>Cheese</td>
                                    <td>/tʃiːz/</td>
                                    <td>Phô mai</td>
                                </tr>
                                <tr>
                                    <td>Chicken</td>
                                    <td>/ˈtʃɪk.ɪn/</td>
                                    <td>Thịt gà</td>
                                </tr>
                                <tr>
                                    <td>Chocolate</td>
                                    <td>/ˈtʃɒk.lət/</td>
                                    <td>So co la</td>
                                </tr>
                                <tr>
                                    <td>Coffee</td>
                                    <td>/ˈkɒf.i/</td>
                                    <td>Cà phê</td>
                                </tr>
                                <tr>
                                    <td>Coke</td>
                                    <td>/kəʊk/</td>
                                    <td>than cốc</td>
                                </tr>
                                <tr>
                                    <td>Cookie</td>
                                    <td>/ˈkʊk.i/</td>
                                    <td>Bánh quy</td>
                                </tr>
                                <tr>
                                    <td>Eggs</td>
                                    <td>/eg/</td>
                                    <td>Trứng</td>
                                </tr>
                                <tr>
                                    <td>Fish</td>
                                    <td>/fɪʃ/</td>
                                    <td>Cá</td>
                                </tr>
                                <tr>
                                    <td>Flour</td>
                                    <td>/flaʊər/</td>
                                    <td>Bột</td>
                                </tr>
                                <tr>
                                    <td>French fries</td>
                                    <td>/ˈfrentʃ ˈfrɑɪz/</td>
                                    <td>Khoai tây chiên</td>
                                </tr>
                                <tr>
                                    <td>Fruit</td>
                                    <td>/fruːt/</td>
                                    <td>Trái cây</td>
                                </tr>
                                <tr>
                                    <td>Hamburger</td>
                                    <td>/ˈhæmˌbɜː.gər/</td>
                                    <td>Hamburger</td>
                                </tr>
                                <tr>
                                    <td>Herbs and spices</td>
                                    <td>/hɜːb ənd spaɪs/</td>
                                    <td>Các loại thảo mộc và gia vị</td>
                                </tr>
                                <tr>
                                    <td>Honey</td>
                                    <td>/spaɪs/</td>
                                    <td>Mật ong</td>
                                </tr>
                                <tr>
                                    <td>Ice dream</td>
                                    <td>/ˌaɪs ˈkriːm/</td>
                                    <td>Kem</td>
                                </tr>
                                <tr>
                                    <td>Jam</td>
                                    <td>/dʒæm/</td>
                                    <td>Mứt</td>
                                </tr>
                                <tr>
                                    <td>Lemonade</td>
                                    <td>/ˌlem.əˈneɪd/</td>
                                    <td>Lemonade</td>
                                </tr>
                                <tr>
                                    <td>Meat</td>
                                    <td>/miːt/</td>
                                    <td>Thịt</td>
                                </tr>
                                <tr>
                                    <td>Milk</td>
                                    <td>/miːt/</td>
                                    <td>Sữa</td>
                                </tr>
                                <tr>
                                    <td>Nuts</td>
                                    <td>/nʌts/</td>
                                    <td>Hạt</td>
                                </tr>
                                <tr>
                                    <td>Olive oil</td>
                                    <td>/ˌɒl.ɪv ˈɔɪl/</td>
                                    <td>Dầu ô liu   </td>
                                </tr>

                                <tr>
                                    <td>Olives</td>
                                    <td>/ˈɒl.ɪv/</td>
                                    <td>Ô liu</td>
                                </tr>
                                <tr>
                                    <td>Orange juice</td>
                                    <td>/ˈɒr.ɪndʒ ˌdʒuːs/</td>
                                    <td>Nước ép cam</td>
                                </tr>
                                <tr>
                                    <td>Pizza</td>
                                    <td>/ˈpiːt.sə/</td>
                                    <td>Pizza</td>
                                </tr>
                                <tr>
                                    <td>Rice</td>
                                    <td>/raɪs/</td>
                                    <td>Gạo</td>
                                </tr>
                                <tr>
                                    <td>Salad</td>
                                    <td>/ˈsæl.əd/</td>
                                    <td>Sà lách</td>
                                </tr>
                                <tr>
                                    <td>Sandwich</td>
                                    <td>/ˈsæn.wɪdʒ/</td>
                                    <td>Sandwich</td>
                                </tr>
                                <tr>
                                    <td>Sausage</td>
                                    <td>/ˈsɒs.ɪdʒ/</td>
                                    <td>Xúc xích</td>
                                </tr>
                                <tr>
                                    <td>Seafood</td>
                                    <td>/ˈsiː.fuːd/</td>
                                    <td>Hải sản</td>
                                </tr>
                                <tr>
                                    <td>Soup</td>
                                    <td>/suːp/</td>
                                    <td>Súp</td>
                                </tr>
                                <tr>
                                    <td>Steak</td>
                                    <td>/steɪk/</td>
                                    <td>Bít tết</td>
                                </tr>
                                <tr>
                                    <td>Sugar</td>
                                    <td>/ˈʃʊg.ər/</td>
                                    <td>Đường</td>
                                </tr>
                                <tr>
                                    <td>Tea</td>
                                    <td>/ti:/</td>
                                    <td>Trà</td>
                                </tr>
                                <tr>
                                    <td>Vegetables</td>
                                    <td>/ˈvedʒ.tə.bəl/</td>
                                    <td>Rau củ</td>
                                </tr>
                                <tr>
                                    <td>Water</td>
                                    <td>/ˈwɔː.tər   /</td>
                                    <td>Nước</td>
                                </tr>
                                <tr>
                                    <td>Yogurt</td>
                                    <td>/ˈjɒg.ət/</td>
                                    <td>Ya ua</td>
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
                                        <a href="/grammar_page/templates/templates_c1/a1-a2-grammar.html"><i
                                                class="fa-solid fa-check"></i> Listening</a>
                                    </li>
                                    <li>
                                        <a href="/grammar_page/templates/templates_c1/b1-b2-grammar.html"><i
                                                class="fa-solid fa-check"></i> Speaking</a>
                                    </li>
                                    <li>
                                        <a href="/grammar_page/templates/templates_c1/c1-grammar.html"><i
                                                class="fa-solid fa-check"></i> Reading</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/writting.html"><i
                                                class="fa-solid fa-check"></i> Writting</a>
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
                                        <a href="/skill_page/templates/templates_c2/listening.html"><i
                                                class="fa-solid fa-check"></i> A1-A2 grammar</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/speaking.html"><i
                                                class="fa-solid fa-check"></i> B1-B2 grammar</a>
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
                                        <a href="/skill_page/templates/templates_c2/listening.html"><i
                                                class="fa-solid fa-check"></i> A1-A2 vocabulary</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/speaking.html"><i
                                                class="fa-solid fa-check"></i> B1-B2 vocabulary</a>
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
                                        <a href="/skill_page/templates/templates_c2/listening.html"><i
                                                class="fa-solid fa-check"></i> IELTS</a>
                                    </li>
                                    <li>
                                        <a href="/skill_page/templates/templates_c2/speaking.html"><i
                                                class="fa-solid fa-check"></i> TOEIC</a>
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
                                                            <img src="https://godfatherstyle.com/wp-content/uploads/2020/12/Fashion-Accessories2.jpg"
                                                                alt="A1-A2 Vocabulary" sizes="100vw"
                                                                class="img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <div
                                                        class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                        <h2>
                                                            <a
                                                                href="/Vocab_page/templates/templates_c2/accesories.html">Accessories</a>
                                                        </h2>
                                                    </div>
                                                    <div
                                                        class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                        Do the exercises and learn the words for some accessories.
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
                                                            <img src="https://2.bp.blogspot.com/_-w1iR9o7sZY/S9efCGSAZrI/AAAAAAAAAfM/Gpp0UBG443Y/s1600/IMGP1271.JPG"
                                                                alt="B1-B2 Grammar" sizes="100vw"
                                                                class="img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-wrapper">
                                                    <div
                                                        class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                        <h2>
                                                            <a
                                                                href="/Vocab_page/templates/templates_c2/clothes.html">Clothes</a>
                                                        </h2>
                                                    </div>
                                                    <div
                                                        class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                        Vocabulary exercises to help learn words for clothes.
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
                                                                <img src="https://www.peta.org/wp-content/uploads/2014/04/Fresh-Fruit-and-Vegetables-.jpg"
                                                                    alt="Family" sizes="100vw"
                                                                    class="img-responsive">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <div
                                                            class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                            <h2>
                                                                <a href="/Vocab_page/templates/templates_c2/vegetables.html">Vegetables</a>
                                                            </h2>
                                                        </div>
                                                        <div
                                                            class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                            Learn the words about vegetables.
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
                                                                <img src="https://nextluxury.com/wp-content/uploads/small-bedroom-ideas-for-women-phoenixinteriordesignuk.jpg"
                                                                    alt="Bedrooms" class="img-responsive" sizes="100vw">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <div
                                                            class="field field--name-taxonomy-term-title field--type-ds field--label-hidden field--item">
                                                            <h2>
                                                                <a
                                                                    href="/Vocab_page/templates/templates_c2/bedrooms.html">Bedrooms</a>
                                                            </h2>
                                                        </div>
                                                        <div
                                                            class="field field--name-field-text-teaser field--type-string-long field--label-hidden field--item">
                                                            Do these exercises to learn words to talk about your bedroom.
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