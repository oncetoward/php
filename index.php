<!DOCTYPE html>
<html>
    <head><!-- 주석 : 전체적 페이지에 영향을 주는 요소 -->
        <meta charset="utf-8"/>
        <title>My php</title>
        <!-- CSS 문법 -> scss -->
        <style type="text/css">
            /* CSS 블럭 주석 */
            /* Cascading Style Sheet -> 스크래이핑 CSS selector */

            /* tag 셀렉터 : h1 태그를 찾아서 모두 적용시킴*/
            h1, h3{ color: red;}
            div{ border: 3px dotted red;}
            /* id 셀렉터 */
            #hello{ border: 3px solid blue;}
            /* class 셀렉터 */
            .txtGreen{ color:green;}
            
        </style>
        <!-- javascript 영역 -->
        <script>
            // 자바스크립트 한줄 주석
            /* 자바스크립트 블럭 주석 */
        </script>
    </head>
    <body><!-- 페이지 본문 -->
        <div>
            <h1>hello html</h1>
            <h2 class="txtGreen">h2</h2>
            <h3>h3</h3>
            <h4>...</h4>
            <h5>...</h5>
            <h6>h6</h6>
            <h7>h7</h7><!-- 사용자 정의 태그 -->
        </div>
        <p>안녕하세요</p>
        <p>여러분</p>
        <!-- 속성을 주어서 구분 -->
        <div id="hello">여러분 반갑습니다.</div>
    </body>
</html>