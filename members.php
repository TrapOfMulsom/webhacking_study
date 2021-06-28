<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '111111',
  'opentutorials');
?>

<!DOCTYPE html>
<html>
<head>
    <title>HTML5 Basic Page</title>
    <meta charset="utf-8">
    <style>
        *{
            margin: 0;padding:0;
            font-family: '맑은 고딕','Malgun Gothic',Gothic,sans-serif;
        }
        a{text-decoration: none;}

        li{list-style: none;}

        .pull-left{float: left;}
        .pull-right{float: right;}

        body{
            width: 960px; margin: 0 auto;
            background: white;
        }

        #page-wrapper{
            background: white;
            margin: 40px 0; padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(100,100,100,0.3);
        }

        #main-header{
            padding: 40px 50px;
            background-image: url('logo.png');
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: 1px;
        }
        .master-title{
            font-size: 30px;
            color:#181818;
        }
        .master-description{
            font-size: 15px; font-weight: 500;
            color:#383838;
        }
        #main-navigation{
            border-top: 3px solid #000000;
            border-bottom: 3px solid hsl(0, 0%, 0%);
            margin-bottom: 20px;
            height: 40px;
        }

        .outer-menu-item{
            float: left;
            position: relative;
            background: black;
            color: white;
        }
       
        .menu-title{
            display: block;
            height: 30px; line-height: 30px;
            text-align: center;
            padding: 5px 20px;
        }

        .inner-menu{
            display: none;
            position: absolute;
            top: 40px; left: 0;
            width: 100%;
            background: white;
            box-shadow: 0 2px 6px rgba(5,5,5,0.9);
            z-index: 1000;
            text-align: center;
        }
        .inner-menu-item>a{
            display: block;
            padding: 5px 10px;
            color: black;
        }
        .inner-menu-item>a:hover{
            background: black;
            color: white;
        }
        #content{overflow: hidden;}

        #main-section{
            float: left;
            width: 710px;
        }
        #main-aside{
            float: right;
            width: 200px;
        }
        article{
            padding: 0 10px 20px 10px;
            border-bottom: 1px solid #C8C8C8;
        }

        .article-header{padding: 20px 0;}
        .article-title{
            font-size: 25px;
            font-weight: 500;
            padding-bottom: 10px;
        }
        .article-date{font-size: 13px;}
        .article-body{
            font-size: 14px;
        }
        .aside-list{padding: 10px 0 30px 0;}
        .aside-list>h3{
            font-size: 15px;
            font-weight: 600;
        }
        .aside-list li a{
            margin-left: 8px;
        }
        .aside-list li a{
            margin-left: 8px;
            font-size: 13px;
            color: #6C6C6C;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function(){
            $('.outer-menu-item').hover(function(){
                $(this).find('.inner-menu').show();
            }, function(){
                $(this).find('.inner-menu').hide();
            });
        });
    </script>
</head>
<body>
    <div id="page wrapper">
        <a href="동아리 홈피.html">
        <header id="main-header">
            <br><br>
        </header></a>
        <nav id="main-navigation">
            <div class="pull-left">
                <ul class="outer-menu">
                    <li class="outer-menu-item">
                        <span class="menu-title">INTRODUCE &lt; Members</span>
                    </li>
                </ul>
            </div>
            
        </nav>
        <div id="content">
            <section id="main-section">
                <article>
                    <div class="article-header">
                    <h1 class="article-title">동아리 회원</h1>
                    <p class="article-date">5기_명단</p><br>
                    <table border="1">
                        <tr>
                            <td>번호</td><td>이름</td><td>학번</td>
                            <?php
                            $sql = "SELECT * FROM data";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result)){
                                $filtered = array(
                                    'id'=>htmlspecialchars($row['id']),
                                    'title'=>htmlspecialchars($row['title']),
                                    'description'=>htmlspecialchars($row['description'])
                                );
                                ?>
                                <tr>
                                    <td><?=$filtered['id']?></td>
                                    <td><?=$filtered['title']?></td>
                                    <td><?=$filtered['description']?></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tr>
                    </table><br><br>
                    <form action="process_create_members.php" method="post">
                        <p><input type="text" name="title" placeholder="이름"></p><br>
                        <p><textarea name="description" placeholder="학번"></textarea></p>
                        <p><input type="submit" value="회원 추가"></p>
                    </form>
                    </div>
                </article>
            </section>
            <aside id="main-aside">
                <div class="aside-list">
                    <h3>INTRODUCE</h3>
                    <ul>
                        <li><a href="news.html">News</a></li>
                        <li><a href="members.php">Members</a></li>
                    </ul>
                </div>
                <div class="aside-list">
                    <h3>STUDY</h3>
                    <ul>
                        <li><a href="study1.php">암호</a></li>
                    </ul>
                </div>
                <div class="aside-list">
                    <h3>최근 글</h3>
                    <ul>
                        <li><a href="#">데이터</a></li>
                        <li><a href="#">데이터</a></li>
                        <li><a href="#">데이터</a></li>
                        <li><a href="#">데이터</a></li>
                    </ul>
                </div>
            </aside>
        </div>
        <footer id="main-footer">
            <a href="#">Contact | 20200921@sungshin.ac.kr</a>
        </footer>
    </div>
</body>
                        
                            
                            


    