<?php
function wordFilter($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace('class="img-responsive"', 'width="80" height="80"', $ambilkata);
    $ambilkata = str_replace('Kota', '', $ambilkata);
	$ambilkata = str_replace('Prakiraan Cuaca', '', $ambilkata);
    $ambilkata = str_replace(" '", '', $ambilkata);
    $ambilkata = str_replace("',", '', $ambilkata);
    $ambilkata = str_replace("https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah-am.png", 'img/cerah-am.png', $ambilkata);
    $ambilkata = str_replace("https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah berawan-pm.png", 'img/cerahberawan-pm.png', $ambilkata);
    $ambilkata = str_replace("https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah berawan-am.png", 'img/cerahberawan-am.png', $ambilkata);
    $ambilkata = str_replace("https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan lokal-am.png", 'img/hujanlokal-am.png', $ambilkata);
    $ambilkata = str_replace("https://www.bmkg.go.id/asset/img/weather_icon/ID/berawan-pm.png", 'img/berawan-pm.png', $ambilkata);
    $ambilkata = str_replace("https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah-pm.png", 'img/cerah-pm.png', $ambilkata);
    $ambilkata = str_replace("https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan ringan-am.png", 'img/hujanringan-am.png', $ambilkata);
    $ambilkata = str_replace("https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan ringan-pm.png", 'img/hujanringan-pm.png', $ambilkata);
    $ambilkata = str_replace("https://www.bmkg.go.id/asset/img/weather_icon/ID/berawan-am.png", 'img/berawan-pm.png', $ambilkata);
    $ambilkata = str_replace("https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan lokal-pm.png", 'img/hujanlokal-pm.png', $ambilkata);
    $ambilkata = str_replace("https://www.bmkg.go.id/asset/img/weather_icon/ID/kabut-pm.png", 'img/kabut-pm.png', $ambilkata);
    $ambilkata = str_replace("https://www.bmkg.go.id/asset/img/weather_icon/ID/kabut-am.png", 'img/kabut-am.png', $ambilkata);
    $ambilkata = str_replace("https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan petir-pm.png", 'img/hujanpetir-pm.png', $ambilkata);
    $ambilkata = str_replace("https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan petir-am.png", 'img/hujanpetir-am.png', $ambilkata);
   
    return $ambilkata;
}