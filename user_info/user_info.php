<?php
include("../login_php/connect_db.php");
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="user1.css">
  <link rel="icon" href="../home_page/images/favicon.png">
  <title>
    Profile
  </title>
</head>

<body>
  <div class="wrapper">
    <header class="navbar-header">
      <div class="grid">
        <nav class="header-navbar">
          <ul class="header-list-brand">
            <li class="header-navbar-icon">
              <a href="" class="header-navbar-logo">
                <img class="header-navbar-logo_1" src="../home_page/images/logo2.svg" alt="Home" title="LearnEnglish">
              </a>
            </li>
            <li class="header-logo-brand">
              <a href="../home_page/home.php" class="header-navbar-name header-navbar-name--saparate">LearnEnglish</a>
            </li>
          </ul>
          <ul class="header-list-brand">
            <?php if (isset($user['username'])) { ?>
              <li class="header-logo-brand">
                <a href="../user_info/user_info.php" class="header-navbar-btn header-navbar-btn--separate">
                  <?php echo $user['username'] ?>
                </a>
              </li>
              <li class="header-logo-brand">
                <a href="../login_page/logout.php" class="header-navbar-btn">Logout</a>
              </li>
            <?php } else { ?>
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
            <a href="../home_page/home.php" class="is-active">Home</a>
          </li>
          <li class="expanded-dropdown">
            <a href="../skill_page/templates/skill.php" class="dropdown-toggle">Skill</a>
            <ul class="dropdown-menu">
              <li><a href="">Listening</a></li>
              <li><a href="../templates/speaking.php">Speaking</a></li>
              <li><a href="../templates/reading.php">Reading</a></li>
              <li><a href="../templates/writing.php">Writing</a></li>
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
    <div class="wrapper-content">
      <section id="wrapper-content-title">
        <div class="title-content">
          <h3>User Infomation</h3>
          <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
        </div>
        <div class="wrapper-user-info">
          <div class="user-info-content">
            <div class="user-content">
              <form action="" method="post">
                <table class="table-user">
                  <tr>
                    <td class="username">
                      <label for="">Username:</label>
                    </td>
                    <td class="username-input">
                      <div>
                        <div class="username-content">
                          <input type="text" placeholder class="col-sm-1" value="<?php echo $user['username'] ?>"
                            name="username">
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="username">
                      <label for="">Email:</label>
                    </td>
                    <td class="username-input">
                      <div>
                        <div class="_0ZgK9X">
                          <div class="uxYEXm">
                            <?php echo $user['email'] ?>
                          </div>
                          <button class="DJRxAF">Change</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="username">
                      <label for="">Firstname:</label>
                    </td>
                    <td class="username-input">
                      <div>
                        <div class="username-content">
                          <input type="text" placeholder class="col-sm-1" value="<?php echo $user['firstname'] ?>"
                            name="fname">
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="username">
                      <label for="">Lastname:</label>
                    </td>
                    <td class="username-input">
                      <div>
                        <div class="username-content">
                          <input type="text" placeholder class="col-sm-1" value="<?php echo $user['lastname'] ?>"
                            name="lname">
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="username">
                      <label for="">Date of birth:</label>
                    </td>
                    <td class="username-input">
                      <div>
                        <div class="username-content">
                          <input type="text" placeholder class="col-sm-1" value="<?php echo $user['dateOfBirth'] ?>"
                            name="bdate">
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="username">
                      <label for="">Phone number:</label>
                    </td>
                    <td class="username-input">
                      <div>
                        <div class="_0ZgK9X">
                          <div class="uxYEXm"></div>
                          <button class="DJRxAF">Add</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="username">
                      <label for="">Sex:</label>
                    </td>
                    <td class="username-input">
                      <div>
                        <div class="s4eg4A">
                          <div class="stardust-radio-group" role="radiogroup">
                            <div class="stardust-radio stardust-radio--checked" tab-index="0" role="radio"
                              aria-checked="true">
                              <div class="stardust-radio-button stardust-radio-button--checked">
                                <div class="stardust-radio-button__outer-circle">
                                  <div class="stardust-radio-button__inner-circle">
                                  </div>
                                </div>
                              </div>
                              <div class="stardust-radio__content">
                                <div class="stardust-radio__label">
                                  Male
                                </div>
                              </div>

                            </div>
                            <div class="stardust-radio" tab-index="0" role="radio" aria-checked="false">
                              <div class="stardust-radio-button">
                                <div class="stardust-radio-button__outer-circle">
                                  <div class="stardust-radio-button__inner-circle">
                                  </div>
                                </div>
                              </div>
                              <div class="stardust-radio__content">
                                <div class="stardust-radio__label">Female
                                </div>
                              </div>
                            </div>
                            <div class="stardust-radio" tab-index="0" role="radio" aria-checked="false">
                              <div class="stardust-radio-button">
                                <div class="stardust-radio-button__outer-circle">
                                  <div class="stardust-radio-button__inner-circle">
                                  </div>
                                </div>
                              </div>
                              <div class="stardust-radio__content">
                                <div class="stardust-radio__label">Bidi
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="username">
                      <label></label>
                    </td>
                    <td class="username-input">
                      <a href="../user_info/edit.php?id=<?php echo $user['id'] ?>">
                        <div class="edit">Edit</div>
                      </a>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
          <form class="form" id="form" action="" enctype="multipart/form-data" method="post">
            <div class="upload">
              <?php
                $id = $user["id"];
                $name = $user["name"];
                $image = $user["image"];
              ?>
              <img src="img/<?php echo $image; ?>" width=125 height=125 title="<?php echo $image; ?>">
              <div class="round">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
                <i class="fa fa-camera" style="color: #fff;"></i>
              </div>
            </div>
          </form>
          <script type="text/javascript">
            document.getElementById("image").onchange = function () {
              document.getElementById("form").submit();
            };
          </script>
          <?php
          if (isset($_FILES["image"]["name"])) {
            $id = $_POST["id"];
            $name = $_POST["username"];

            $imageName = $_FILES["image"]["name"];
            $imageSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            // Image validation
            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $imageName);
            $imageExtension = strtolower(end($imageExtension));
            if (!in_array($imageExtension, $validImageExtension)) {
              echo
                "
        <script>
          alert('Invalid Image Extension');
          document.location.href = '../updateimageprofile';
        </script>
        ";
            } else if ($imageSize > 1200000) {
              echo
                "
        <script>
          alert('Image Size Is Too Large');
          document.location.href = '../updateimageprofile';
        </script>
        ";
            } else {
              $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
              $newImageName .= '.' . $imageExtension;
              $query = "UPDATE tb_user SET image = '$newImageName' WHERE id = $id";
              mysqli_query($conn, $query);
              move_uploaded_file($tmpName, 'img/' . $newImageName);
              echo
                "
        <script>
        document.location.href = '../updateimageprofile';
        </script>
        ";
            }
          }
          ?>

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
  <script src="user1.js"></script>
  <script src="user.js"></script>

</body>

</html>