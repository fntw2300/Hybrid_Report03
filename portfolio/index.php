<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>jQuery Mobile</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<style>
   li { list-style:none; }
  .picture { list-style:none; padding:0; margin:0; }
  .picture li { float:left; width:50%;}
  .picture li a {display:block; margin:5px; border: 1px }
  .picture li img { display:block; width:50%;  height:auto;}
  .picture li img:hover { display:block; width:100%;  height:auto;} 
    table, th, td {  border: 1px solid white; border-collapse: collawpse;}
    .btn{  
      text-decoration: none;
      font-size:2rem;
      color:white;
      padding:10px 20px 10px 20px;
      margin:20px;
      display:inline-block;
      border-radius: 10px;
      transition:all 0.1s;
      text-shadow: 0px -2px rgba(0, 0, 0, 0.44);
    }
    .btn:active{
      transform: translateY(3px);
    }
    .btn.blue{
      background-color: #1f75d9;
      border-bottom:5px solid #165195;
    }
    .btn.blue:active{
      border-bottom:2px solid #165195;
    }
    .btn.red{
      background-color: #ff521e;
      border-bottom:5px solid #c1370e;
    }
    .btn.red:active{
      border-bottom:2px solid #c1370e;
    }

</style>
</head>

<body>
<div data-theme="b">
	<div data-role="page" id="home">
		<div data-role="header" data-theme="b">
			<h1>박현호 포트폴리오</h1>
		</div>
		<div data-role="content" style="text-align:center">
				<img src="wordcloud_20201128212714.png" width="100%" height="100%">
			<ul data-role="listview" data-inset="true">
				<li><a href="#intro">인적사항 및 자기소개</a></li>
				<li><a href="#movie" >대회 영상</a></li>
				<li><a href="#wizard3-1" >포트폴리오</a></li>
				<li><a href="#gallery">활동사진</a></li>
				<li><a href="#db">구현기술</a></li>
			</ul>
		</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
			<h1>
			    Email : fntw2300@naver.com<br>
				Git : https://github.com/fntw2300
			</h1>
		</div>
	</div>
	
	<div data-role="page" id="intro" data-theme="b">
		<div data-role="header" data-theme="b">
			<a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>			
			<h1>인적사항 및 자기소개</h1>
		</div>
		<div data-role="content">
				<div  style="text-align:center">
					<img src="asd.jpg">
				</div>			
			<div data-role="collapsible-set" data-theme="b" data-content-theme="e">
<!--				<div data-role="collapsible" data-collapsed="false">-->
					<h3>■ 인적사항</h3>
					<li>성    명 : 박현호</li>
                    <li>생년월일 : 1997. 02. 28</li>
                    <li>연 락 처 : 010-7397-9899</li>
                    <li>학    력
                    <table id="year-table" border="1">
                        <thead>
                            <tr><th>졸업년도</th> <th>출신학교</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>2021. 2</td><td>동의과학대학교 졸업예정</td>	</tr>
                            <tr><td>2015. 2.</td><td>웅상고등학교 졸업</td>	</tr>
                        </tbody>
                    </table>
			        </li>
<!--				</div>-->
				<h3>■ 자기소개서</h3>
				<div data-role="collapsible">
					<h3>성장과정</h3>
					<p>스마트폰을 통한 창작활동은 가장 큰 관심사이자 집중하고 싶은 대상이었습니다. 앱, 스마트폰 기능을 통
                        해 우리의 일상이 바뀌는 것을 보고 호기심과 매력을 느꼈습니다. 진로의 의미를 두지 말고 대학에 진학해
                        프로그래밍 언어를 배우고 제가 직접만든 어플을 출시해보고 싶었습니다. ..생략
                    </p>
				</div>
				<div data-role="collapsible" >
					<h3>학교생활</h3>
					<p>교수님의 추천으로 동아리에 가입하게 되어서 교내 캡스톤 디자인 대회 및 K-해커톤 앱 개발 도전 대회에
                        출전하게 되었습니다. 대회의 주제로는 ‘코로나 19 확산 방지를 위한 마스크 미착용자 자동식별 AI 시스템’
                        을 구축하는 것이었습니다.  ..생략
                    </p>
				</div>
				<div data-role="collapsible" >
					<h3>성격의 장점/ 단점</h3>
					<p>저의 장점은 무슨일이든 계획적으로 행동한다 입니다. 어떤 일을 시작할 때는 주단위, 월단위로 계획을 세
                        워 목표를 설정하고 단계적인 발전을 추구합니다. 저의 이러한 성격은 혼자일 때보다 여러명일 때 더 좋은
                        빛을   ..생략
                    </p>
				</div>
			</div>
		</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
			<h1>박현호 포트폴리오</h1>
		</div>		
	</div>
	
	<div data-role="page" id="movie" data-theme="b">
		<div data-role="header" data-position="fixed" data-theme="b">
		    <a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>		
			<h1>대회 영상</h1>
		</div>
		<div data-role="content" >
			<div class="ui-bar ui-bar-e">K-해커톤 영상</div><br/>
			<li><iframe width="100%" height="240" src="https://www.youtube.com/embed/fU7mQ2nX0GM"></iframe></li><br/>
			<div class="ui-bar ui-bar-e">K-해커톤 결선 최종 보고서 영상</div><br/>
			<li><video controls width="100%" preload="metadata">
				<source src="결선영상 2트.mp4" type="video/mp4">
			</video></li>
		</div>
			<div data-role="footer" data-position="fixed" data-theme="b">
			<h1>박현호 포트폴리오</h1>
		</div>		
	</div>
	
	<div data-role="page" id="wizard3-1"  data-theme="b">
		<div data-role="header">
		    <a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>		
			<h1>포트폴리오</h1>
		</div>
		<div data-role="content">
			<div class="ui-bar ui-bar-e"><h1>사물인터넷 프로젝트</h1><br>
                <h4>아두이노를 활용한 지문인식 센서로 도어락 열기</h4>
                <p>아두이노 및 지문인식 센서(GT-511C3)를 사용하여 서보모터를 이용해 도어락 버튼을 눌러서 문이 열리는 시스템 제작</p></div>
			<li><video controls width="100%" preload="metadata">
				<source src="201516579_박현호_190611(사물인터넷).mp4" type="video/mp4">
			</video></li>
		</div>
		<div data-role="footer">
			<a href="#home"  data-direction="reverse">이전</a>
			<a href="#wizard3-2" data-transition="slide">다음</a>
		</div>
	</div>

	<div data-role="page" id="wizard3-2"  data-theme="b">
		<div data-role="header">
		    <a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>		
			<h1>포트폴리오</h1>
		</div>
		<div data-role="content">
			<div class="ui-bar ui-bar-e"><h1>Client Side Programming프로젝트</h1>
                        <h2>카드분류게임 구현</h2>
                        <p>JavaScript로 구현한 카드분류게임 구현, 기능으로 1~5단계 별 난이도와 제한시간 및 3단계 이상 시 박스 랜덤위치 기능 구현.</p></div><br/>
			<img src="javascript.JPG" alt="" width="100%">
		</div>
		<div data-role="footer">
			<a href="#wizard3-1"  data-direction="reverse">이전</a>
			<a href="#wizard3-3" data-transition="slide">다음</a>
		</div>
	</div>
	
	<div data-role="page" id="wizard3-3"  data-theme="b">
		<div data-role="header">
		    <a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>		
			<h1>포트폴리오</h1>
		</div>
		<div data-role="content">
            <div class="ui-bar ui-bar-e"><h1>K-해커톤 실감콘텐츠 앱 개발 챌린지</h1>
                        <h2>COVID-19 확산 방지를 위한 마스크 미착용자 자동식별 AI 시스템</h2>
                        <p>코로나바이러스는 호흡기 감염질환으로 감염자의 비말로 인해 감염된다. 그로 인해 비감염자, 감염자 모두 마스크 착용이 필수적인 상황이다. 본 과제는 AI를 이용하여 마스크 착용 여부를 판단, 체온측정을 통해 출입을 통제하는 방법으로 불특정 다수와의 접촉을 최소화하고 건물이나 특정 장소에 감염이 의심되는 사람의 출입을 통제하여 전염병의 확산을 줄일 수 있도록 한다.</p></div><br/>
			<img src="khack.JPG" alt="" width="100%">
		</div>
		<div data-role="footer">
			<a href="#wizard3-2"  data-direction="reverse">이전</a>
			<a href="#home">처음</a>
		</div>
	</div>
	

	<div data-role="page" id="gallery"  data-theme="b">
		<div data-role="header" data-position="fixed"  data-theme="b">
			<a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>
			<h1>활동사진</h1>
		</div>
		<div data-role="content">
            <ul class="picture">
				<li><a href="1.jpg" rel="external"><img src="1.jpg" /></a></li>	
				<li><a href="2.jpg" rel="external"><img src="2.jpg" /></a></li>	
				<li><a href="3.jpg" rel="external"><img src="3.jpg" /></a></li>	
				<li><a href="4.jpg" rel="external"><img src="4.jpg" /></a></li>	
				<li><a href="5.jpg" rel="external"><img src="5.jpg" /></a></li>	
				<li><a href="6.jpg" rel="external"><img src="6.jpg" /></a></li>	
				<li><a href="7.jpg" rel="external"><img src="7.jpg" /></a></li>	
				<li><a href="8.jpg" rel="external"><img src="8.jpg" /></a></li>	
				<li><a href="9.jpg" rel="external"><img src="9.jpg" /></a></li>	 
				<li><a href="10.jpg" rel="external"><img src="10.jpg" /></a></li>    
				<li><a href="11.jpg" rel="external"><img src="11.jpg" /></a></li>   
            </ul>
		</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
			<h1>박현호 포트폴리오</h1>
		</div>		
	</div>
	
	<div data-role="page" id="db"  data-theme="b">
		<div data-role="header" data-position="fixed"  data-theme="b">
			<a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>
			<h1>구현기술 목록</h1>
		</div>
		<div data-role="content">
              <table style="width:100%; ">
      <thead>
        <tr>
          <th>언어</th>
          <th>스킬</th>
          <th>경력</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $jb_conn = mysqli_connect("127.0.0.1", "root", "", "db" );
          $jb_sql = "SELECT * FROM language";
          $jb_result = mysqli_query( $jb_conn, $jb_sql );
          while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            echo '<tr><td>' . $jb_row[ 'name' ] . '</td><td>'. $jb_row[ 'skill' ] . '</td><td>' . $jb_row[ 'career' ] . '</td></tr>';
          }
        ?>
      </tbody>
    </table>
		</div>
        <div data-role="footer"data-position="fixed" data-theme="b">
            <a class="btn blue" href="#insert"  data-direction="slide">등록하기</a>
            <a class="btn blue" href="#update"  data-direction="slide">수정하기</a>
            <a class="btn blue" href="#delete"  data-direction="slide">삭제하기</a>
		</div>
	</div>
	
	<div data-role="page" id="insert"  data-theme="b">
		<div data-role="header" data-position="fixed"  data-theme="b">
			<a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>
			<h1>구현기술 등록하기</h1>
		</div>
		<div data-role="content">
      <form action = "insert.php" method = "POST">
         Name: <input type = "text" name = "name" />
         Skill: <input type = "text" name = "skill" />
         Career: <input type = "text" name = "career" />
         <input type = "submit" value="등록하기" onClick="location.href='#db'; window.location.reload();"/>
         <input type = "button" value="이전" onClick="location.href='#db'"/>
      </form>
      
		</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
			<h1>박현호 포트폴리오</h1>
		</div>		
	</div>
	
	<div data-role="page" id="update"  data-theme="b">
		<div data-role="header" data-position="fixed"  data-theme="b">
			<a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>
			<h1>구현기술 수정하기</h1>
		</div>
		<div data-role="content">
      <form action = "update.php" method = "POST">
         Name: <input type = "text" name = "name" />
         Skill: <input type = "text" name = "skill" />
         Career: <input type = "text" name = "career" />
         <input type = "submit" value="수정하기" onClick="location.href='#db'; window.location.reload();"/>
         <input type = "button" value="이전" onClick="location.href='#db'"/>
      </form>
      
		</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
			<h1>박현호 포트폴리오</h1>
		</div>		
	</div>
	
	<div data-role="page" id="delete"  data-theme="b">
		<div data-role="header" data-position="fixed"  data-theme="b">
			<a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>
			<h1>구현기술 삭제하기</h1>
		</div>
		<div data-role="content">
      <form action = "delete.php" method = "POST">
         Name: <input type = "text" name = "name" />
         <input type = "submit" value="삭제하기" onClick="location.href='#db';
         window.location.reload();"/>
         <input type = "button" value="이전" onClick="location.href='#db'"/>
      </form>
      
		</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
			<h1>박현호 포트폴리오</h1>
		</div>		
	</div>
</div>	
</body>
</html>