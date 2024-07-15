<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>IntelliTestProctor/feedback</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>

<body>

<!--header start-->
<div class="row header">
<div class="col-lg-6">
<span class="logo">IntelliTestProctor</span></div>
<div class="col-md-2">
</div>
<div class="col-md-4">
<?php
 include_once 'dbConnection.php';
session_start();
  if((!isset($_SESSION['email']))){
echo '<a href="#" class="pull-right sub1 btn title3" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Signin</a>&nbsp;';}
else
{
echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a>&nbsp;';}
?>

<a href="index.php" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a>&nbsp;
</div></div>

<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

<!--header end-->

<div class="bg1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background-image:url(image/bg1.jpg); min-height:430px;">
<h2 align="center" style="font-family:'typo'; color:#000066">FEEDBACK/REPORT A PROBLEM</h2>
<div style="font-size:14px">
<?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo' 
You can send us your feedback through e-mail on the following e-mail id:<br />
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<a href="mailto:esha1484@gmail.com" style="color:#000000">esha1484@gmail.com</a><br /><br />
</div><div class="col-md-1"></div></div>
<p>Or you can directly submit your feedback by filling the enteries below:-</p>
<form role="form"  method="post" action="feed.php?q=feedback.php">
<div class="row">
<div class="col-md-3"><b>Name:</b><br /><br /><br /><b>Subject:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text"><br />    
   <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text">    

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3"><b>E-Mail address:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">    
 </div>
</div>
</div><!--End of row-->

<div class="form-group"> 
<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here..."></textarea>
</div>
<div class="form-group" align="center">
<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
</div>
</form>';}?>
</div><!--col-md-6 end-->
<div class="col-md-3"></div></div>
</div></div>
</div><!--container end-->


<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="https://github.com/EshaalakshmiDS/IntelliTestProctor-Advanced-Online-Assessment-Platform" target="_blank">About Application</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>

</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMVFRUVGBcXGBgVFxUXFRcXGBcYGBcXFRgYHSggGBolGxgVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGi0lHyUtKy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKy0tLS0tLS03N//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAEBQMGAAIHAQj/xABFEAABAwIEAwUECAQCCQUAAAABAgMRAAQFEiExQVFhBhMicYEykaGxBxQjQlLB0fAzNGJyc7IVFiRDgqLC4fFTY4OSs//EABkBAAMBAQEAAAAAAAAAAAAAAAIDBAEABf/EACYRAAICAgICAgICAwAAAAAAAAABAhEDIRIxBEEyUSJhI3ETJEL/2gAMAwEAAhEDEQA/AEt9hQzeGim8ASW+ZimItsx3imlrYkJ39Kiuddncin2WHBKoPOp8YSkCONZjN73TsUDiFznAIpkOTkmwUKXTCqhBkivXXtajU5FVmIkegV6PEBULk6TRCTEUIyLqwhpAFOrx6bY9IFJUmm1ukLaKZ3UkfA/pWJ6ZrW0Jlmfj8qtv0aohx6R/uPzpJb4YVKgmEgnzPQVZbUIZCsioUQEnKSdhsQNqyP2bJ+hvgKgg4ZmgBDDiSeRKUgUSw6E2WIAESp25UPJW1c8xbFCJidNZn9KVf6ec1SFmFaEaQffTOQridR7SqQoWSDGbLm9Mo/WuadrrjI68EgeAoPQ6/wDaiMQ7QuuhpZSMzSSlO+o09rloKqzpcUl9aySpRTr79KS4Xk5foapVChha4uHEOeEjKmT/ANqFav8AvH0hKpTPlwoXCG4Q/MaoGxnjQmCH7Zvz/I0XBGc2W3He0QcXbMp1yJIUZnxHYe4fGtln7XXggfOqa4qHSQYIUfOrDfXBzhAkqWhA68SfnS/8aiqQxZG3saMPA7GokHwrJ61tYYYWkkmdeHKl2JOw0ddzQKnHQyVp2/oQMKl5McVj51vjRm4X5j5CswpALyI2Bn3CsvzLzh/q/KqV0SgbiNKd35izbH4sv60qeb8GafSmeNaMMJ6f9NccJ20TXuWKxGmtSJ1rjjTLWUT9VNZXHHSTi5TsaPtMaWkSaqTlsvOCAYpk57NSypIFOtht8tDwnSaU3LZQmDWrCihXmaKxRYKa7HOnRjduytqVrUh4VEfarZ5UCqJM1InuTKk8q3UoCOhFBvq0EGsbVM0SRt0GrxJIWSBpFNrBsLbBJiFJV7gaqoZlcc6szqsiENp0Mc+HE1ySRt2F3N2AD4oSkSpXHyEcTWzd8FoBdPctDZCP4i+WdXDyGtJFXEnQSAfCOavxH8qc4LhbizmiVfiOqU+QO56msclHsKMXLoRXy51QyQnaVzJH760Jb2rizIAHWDH7866gz2XTOZcrVzUZ+HCprrB0AaCB0pEs30OWApRY/wBmOceIciB8vX4VUlrB01HPhP61fsWbCE9NqoeKNlKoTrOvlR458kLnHiz2ztktoe8QMpGnv1pfgB+3R0k/A0weWFhKkyDBBAjXwGY9aEwpspfEiICvlTRYvuFeJR6n51YLlJNyghQGVKN+IgT+dV9KZWOqh8TTHHv4xg8B8q5q0cnTReHbhKkEzwqsX7edEAjrQmArUSoEmANq8t25Clg+yTpwOtJjj4IfLLzIcHb+3APCflUNws517aqPzphhbmZ4qiPCaWiSVGNyfnTl0TkTyzAHpTXtH/uk8kT8qXbwI4j50wx8y8ByQmuOsXZK8T7SRzIHxqVxEb15ZJl1A/qH61x1ll+pivKZ5DWUdAFjulIAig3kACaXPqUszmrxT5IiopRdWCwS+BUQU8DWtw5KIrHnsukUEqTQpP2GiA206itlsmOdboXFGMCRTXJhOhXcJ0HOtm2FRtR98keHoRRNxKQnLGsb0Sy9BKKZDhlsE+I+1EeXP1oS+uiSo8/CP7R+zRzyikek0meVBkiTIQkc1bn0E0xnUWTsvhJdXKvZG/6V0mxYCBAAFJey1qENADfj1POrAkVI5cmXQioolzxQF07vRiqAuyBWVZrdCDGWpSoHXSucX8mR95PyPGuo3qkwdR76p+N4SFgrb0WPj0osb4vYnJHktFJzKQcmbiCYplboAOf+lWvpSe7WcxnRQ0NObJslk7nwEj1G1VWSsWWrfjRO5IqXFzLyvT5VJZpAdRpI5+hqLEzLqvP8hWrowIwbQLNeWD0JUImdqmsGFJbUSNFbe6ss8NIgqMCsdGJ0ZhU5lk/hpYkECedWBORKVwZI3pbiTyFBOT1/fOtMsFYHjSOah86mxlX26ugA+FeWKB3qP7hWt8qXnD/V8q40gojB0y8npJrRwEiSNKKwNH2hJGwrkcWiaylv1nrWUZ1DNsnnUraxQlw5ppQ7T0DWpLtUdKKozEVCa2YtiUzQhGZQpsGylGldRyFwRuONe2ciamthJM1i1BJoG/RjBbzaaNSsKyEGdDQd5Ck1vhqQYjYCmwjezYP0bXi5XHARPXifgKTW9xmukTGVB9JnX4/KnFyIPUz7og0rsWG0ltSfEXFESekE6bDemtaDTpnR7THlJT9kwtyOIECj8P7QFZhbZbPI0gK3FoWGgSUJmJXr5AESd/dQbLDq2y4MyD4o1VOgkEpUT5Uhw1ooWR2Xe+vCEkiqa5kWoqcdcUJmEKhPvJAoN5F+7bouHV5raQVJGVJKJ1UQBqKbNWCSDKSUrT4TvExBHXasikjW3L0DAskwhXvcV8SE1Dd3bjRCEtBSlAlPjASQNzJHCaNt+zcwEpVvJUrQzH/ajl4KkPtgkkBtwx6t/CubRnFpHLsabV34LiYCyPY4iYMTxq3P2hQwShJQlKZT4iVHbfqRFF4hZpXeNJUPDrPpqK37YLCGMg+9oT0EGK5ybpIxJJSbKg05LiSpIB226b+dSN26VAqKdZ3nhTXsvhBvLlLaQUpSCVKiY00pL2gw5drcONSqATB2kdB5zTY5E3x9kzg6snuSQ0qDpw91Ki8oiCoxRI/gnqa0Q2njTaFm1uYbWf3tQ9u2VaDeiHRDSvP8xWjQykE6VprJcOtyHUyIjWh8oKlk8VK+dMsPdBJPQ0rZHhnmSfjQmowpO06UfhZ9s8hQKhRVkqG3T+9q00XfXOtZS6srrNOhso51MG0k8KAcdI0qLvo41Po6SphDqBm0orMcu9ANnSaxLyvSus2ia1RvNDPAhfSsD2u9G2C0q0O/ChW2cQlobkV7atxrwJAFG3N2IylA058etDvr25xToKjKF90rxgT90/lSnCySruh7QWFoHMjRSR1I19KJceCnEzsAflp86X3ByOpXyUCfQ0bNOyWGFnKCNCRWuKW3dNq4uKSUoTxkiJ/tG5NG4YErbSrOsyAdFr/WinrZtIOVIkjU7qPmTvUjZalaJrbDwmwbbgEJQE+YiDVbwZwsSyUFaBJQRGZI/CQdwOBpmvtGgIU2QU5RABG/KKX2i3FlKlICANd9TI2/fKhTYTSHCLxceBkg/wDuKSkf8uYmhnEKBUtwgqIjTYDeBNafX8qsu44Gor5wk13I6SVFcdX/ALSCACQFRPlvSftBiPfqIb2TCBpxB8UHjr8qF7cXBSpKUqKTJPhMGI6edDdn0lTSkhMkGZjYefCmxjrkSTl6LT9Hdw60t1LZSPZCiYJKiSBv60o7fNvfXVoeIUUbKAiQdacYYSzZKcyZ87qcxnYBQywd5AmpPpCsO8uG1oIhxsE6yNNNKnxv/Yv+0FJViKIsEJA61KyySY2r29aU2tKeVG6ECN69G9EbAcQZypCRrJHzrA0Zk/Gpnmj3jY6k/CpL9OsAbb1je6OsZdkuzrj4ecAhCEkCZGZXJKojT86RXtqpCyhYyqHDb1FdM7J4o83bMoTbpKFgpTMyojdRI3kzuKpHbW+LtycyAlSBlMbHUn3a1HjzyllcPRVPEljTEKgJqdejC+tQpRNSXQhkDmofOrBCYo7jpWUy+r1lYbZd8Zw6DKarDqPF610PHmsiZ5VSHHQo+tJaoa1ZCtcVKsjLUTyNaFdJOgNZVnNBNhaKdVCaeNYE6hBJEmgOxZ+3g8RXT0NymmxgmLejnjiM6RmEKTUF0mEkniP/ABTjGGAlZ5GkGLPaEAfHf96UaRolaRJURtsKEuRI1/fWnTbAQnXeSdNuXuod+3SUaanQitoyy1dgsXUWQmZyHKeYHA/KrJimJKbKISpU7wJ04muTWWIKtXs6dUq9pPNJ/MV1Hs5jDVwkEEEgRB3HpUmSDTv0V452qC7a4L3iRbqX18AOnQmtnw5lJJQ3AmJzq3jWNE16q0Ug+GCOAUkKjyPCvEWyle0NJ2iEzzrE40UNRq7BcMtVEBxxWYzO0D3VviN0BJ5UXduhtBJ0AFU595T6sqduJ6Uvtimyn9obkuPKUdhoPLnR3ZicqgkTIPCeI4UL2pbyPRsCAR6aEUd2TbnMQdd9NxBBkddR7qq7gqJH2X/s7ZhbDzAIKZQojjv4gJ2qtdpsTK3iE/c0HKOVP+yjzCPrC3u8UokCYhQEctNZqoXaB3iiCSCZk70rx8afkS/R2Wf8KA3V53Bm5Uf3IAoBpP2p6CmgRIirJxrZG2I7lcup6Cj7S3LriUcVEJk7Dmo9ANaGFvLx0JgVYeyJAu0bDRWqx4RprPpNKyyqDaGwSckiw3jvdPW2VwISkhtQbObMlIiY4FQqudt7U/XFKUIzBJTPFMaGjO1lkbe7Bbgg5FtmdDtp7xU3bxeYslSsyglQKhpJ0keh0rzsK4Sg77styyuMl9FM7o6jnQt8kjInrNNA3ABNLMQe+1HlXpp2RIl15VlR/WzWVhx1/GLfM2a5ldN5FkcjXVbxXhM1QcStgpZOlBMqgrEz58NC26Zmm71uNq8VbADSl2HwPezKMtyk+ddRTAHnvXMMFBD6D1rod5cQ3lB1I/8AFPg9CJqmVXtK/K4HCqy8rhvypnibsuE9aTrX4h0J+VEgTd/RHu+FQpSTp6VJc3AygHTMT8jH6UNbXAGh4AQfKiMBr5sEdR7xO4oPDHnGnQptRSocuPQ8xU144O8Mbfs04wzAu8SFgkH4RQTaQcey+9nu1iFoAe8Cx/8AU+Rpq/2jZSPaB8taojdkU6KTHypha4YpWyT5xpULZaujfELty7XlQCE9fmaa2uHpaRA9Tzo3DsPDSdN+J51N3c1nYDZSO1GA9/GXRadidjPA1XLO3cs4dWDmCsqRllEHdal7COUV1hVlxitf9HpIIIBHUU6M2lQqUUyr4hYFxp9bbpK4QTsMwkAZSOYPvpYm2MTBgb9POrxhvZ8NuJfzhNuQ4haFKypGmVJjZQkkRSbF7NKVLKErSjvFtjNABUj2tt+Y9avwSvv2RZ4tLRUrVol1fSmCQQa8wpmVun+o/CmCrVUExTdUIfYmsXftVmKOtLxSX2jAHjSPQmCD01obDx4lkjjR9paoccT3hIROpTvHTkajyOrGxb5IuWMYfD7b5CcgbKsyfGlD+sJ6CTPpVDxu4cfcKlczHLrHuFXbGnbdVuEsPBBAAyklOZMTKgdz161SkuJSNdT0rzvF27+tIu8mVKl7FaVK2I050sJHfKkSAKbBZJPI0ssRmdc2OsdK9EkRrmTyrKZfVRyTWV1nHTsduglJqhuLUVE10nF7FK0mue37ORZApeQuw7YKttRqF5RSN6MzUJfNmNqUmUSgqJsLVKknqKteKPw2DxiqdgIKTB505xW5n5flT46JJ7Eby5V+9qBWfEDPGfTQfrRjmm+x38uNAv6z6QPKjQpkOJK+C1ChHNVaUXcCT19r0FeWiNJ48a0wHCNZOnx3FdF7IshTKSIIHhMTGYe0NevzqjW72ReaJIGx2JOkTzq09nMRujb95bNNlpLyg61rnSVZTIUSNDJ14eVDKNhJ0XVFqBpFGt2+lap0OVQKVQDCt45jmOooxtNTOKQ9MGWzXjLWtFrFeMorEjmeFE6RWv1aVJSSBmMDnsSY5mAaNaSSYAknh++FIcSdUw5cXFwlJ7lP2CUqlQTqlS4+6VkgSdYpsY2C3QOVrum21vJbbtG3s0KXs00FjM4riVLgx0pg5ijCLp9laUJbbSH1yFOLeWpKSFoSJICQNYE68KX3mHLcaskXAZQrvVLLWeGwwlM6/ihIE9TVa7QYsjv3PqqyUlxS+92ICm+7Uhs75YJ16JjnVF0BGHPSNsVx5px9TrLZDagJkAKURPjgcxG+tE2t2lyEp3OkHeTVXQeHCpEOlCgpJgjUVnJjp+FBrXYdaIBU50JHqN6wugSKjsrjKkxrJrQr1k0ElZ5k04yaYNib6/rHcqIypAMJAB8QB8RG+9QFiDprUVy4VXC3D94AT5aVqlZ1IPvrVjSWg5SbZMwk96kaAa7iRoCdfdSDD5OdQO5p5bXfdla1QYbcieakFI9daTYUkAEqo69BLol151lT50c6yuMOz3JMVR8cR4proNza6VTccsdaRPosxOmICeVQqKz900wbay1huxMRSUVN2BtJI3EVly5qB0minnZ3FKXFyD1p8SWb2CvOeI9PmdqhaBUAnnE++SfdNeuTrz4DqdPlUxQUg7+FJ1/P5U1CWQLjxEcfAny209xr1khKeXGhry4ByoGwI2/fI1IvVs9SPdFaCQOaqI6x6zrVk7HYiq3eUhXiafBQsExPhITE6ZuAkiZidqQ2TWsnn+zTItiKyymGLlEtuCWeJKZUPsyyZDSn3MrjZEhJbiVJP9B5xpSG97QYkw8GXFrSpJmCEKSoDfUDVOh6+VF4VgLly2GJS240QGSoltaZMmU6Z07gEa+dQ2XZN0KWHCgoQ4tLiwvVISJzyfuSRO512rWkxUW4yps6Va4khVum4UQlBRmUTw5jzmRVZwbEb+/uMrQDVuk+JUeynkVEHMsjgIqPD8PTdYaEMOqCkOOKLZMlQSdsu+xCh1PuYdme1CLcC0cQlpASVJV4kkkakrzbzrrS4wSexjl+LcSzi1XbrAtm0lBStTq1El5xYH2aASdBPoKrj91aWlur61kuLh5YD6Uq7xRXOfKo8EIHAwNhxpb2m7cd4hbNtPiCR3olMakry8SSIA9d6pjNvHXz3pjddGYsMpq5DPtHjS710LUkIQgFKEj8JI9o8ToNNhS5XIVMU1qG6AuhBRVI9aTFROqlVTuKgUE0ZM1xrfomaeKT0NbrcmoXxtXqDpXEXlY0/wAiJyh1Kot9MR11qANTTI9EAK+shChxOgnrUduiDqBvMD2fSpH2CShJESRvpoNa9SlMxwrG9heiXvP6U1le508hWUJh3u4giqbjidat6Iqt43akqkUufRZDsq7o1qJxSBTG5ajeldyydwNKnXZUnoEunRGgoBa9DPP5fs1PegjQ6GlzyiQkczPpVUURz7MYBza/d8Xv/fxrW8ufbHTX3jT41iXYBPMkeiaEbR4ST94gefHT4UYANatSZ6kn10FHPJk5E6fpEV7agA8PTlU9gwVLKuA48zXWFCHJ0F29vlA8qfdnbBClBxagMqhlSYMgarWuT4UJHHiYAoXCcNXcOpZRlClTBVokACST6VHjL1xYNlheQlUZVCDnQoqKoUOGYHQ6jL1rl9lGaaguKLSvGri+e7q3fDK0tgLdCGyVkCABAlJ3O+lU7Hb24KnWColAWUkJMCG/DtOpJ1J46cq37OWTNwxcrKw2tKJR4wlQWmVFQgzGgGm8mk9hcLUAMubmZM9Somda3aEQjGUqkzqfZHCrWytWbl9xCHHULOZR/wDVy5UDlCU6+Zr3FLlkutW7aEKQ4HEqOXMkr9rX8StyN+Mb1thHZZvEbFloXJhrvVEhAlCjl+yIJ2EkzxBFVW2wS7tzcMIvEp+rlC0tAhJdBGbMgK4j8OuoorFcak0Ln7EIdfbSYLJ0CgQVDcwDqISRoSZAqMVazi/15tq2dYSA4pKjcZ8sFGbvJBHt+Ejf7w8qruIWfcvONZswQdDpqkgEExxg0DRd482/xfZEBWhNbKNRTQlRDeL086jary6OorEGuF3s3udh51qv2CeQNY+dPWpmxpFcdKPJNDLtBYlK0J18LTe4jhrS7DmpWJ4U8xbEULcB0AKE6aaaaj3zSe4Vr4KXjcnDizxHakzfFmpebyJKiAo6ROid9aSpbAAM68qcYQhSnXVr1DbDh6AqgClCTArcaptfQe/YRB6VlQd4eVZTNmHc+8FQ3ASRQzyqhg86W5FiQpxZsGQKr7DqiSk8KtF3aHeq1cMlGZUc9aQ1bHRdFexa5JWelLUmT0SP2PnUlwqST6VEwAASTpP/AI/KqUqRPJ2z1aSohA3jXkJrZ9QkJTrl0B+Zr0fZo/rV+dS2dqdOZ98UYKTbolZsyqEjY/LpTxiwCQEiprO3yjrRqG+JoWerhwqKC+yYaTcIDqdSfArhnIIAUeA5RxOtB/TFbJbVbO/cnKpv7pCPFpy0Kh/xVDftygwYI1EbyDMjlVX7W3txcKCn1lYAyogABPPQcTvPGiiyLy8FS5IZ9o8Gtu8Q62DkS0h58EgBOcDuWWwBopUbcBrSlCydvCCScqdEieAFS9or9K1lKBlQSkxrJKUBCZ5nKP8AmNas2qyBpAjc6fDemWiWOObdRL2ht1jA23GHFtrW84slslKikHLqRB+4DHSoobew5y7fOS4WU909IS4osaIhIPFQVMefCrT2YuGLmxZtU6LZBDiTvqfbHMEn0mPOq/6toXehl1+LeFKtwCYUgLIU2gn2CCDQ/tGxjTcZ6IsHZcxFo/WVBo5sylpCR3qYIzqToFEqRqeJb50gLCULWELDiZkKAImdYg8tvSrV2iuLLv3GVJUgMMZGwAUy4FSkIBH3ZGp01JqqMpgAdKGXRT4sbbkbL5VqrQeVemtHlaUJYAPHxVumo3RrWA1oq9kzm1Es0KNqLRXDInvchSo415cNFFDtLJcJFGqXmGtBuzyfJX8jo3wFUi7UeDSEeq1HT4CgVtIEg6GirEKNvcZNCpbQmeUmI40vtkkuQrU8aGPcmAbd2jnWUy+rD8NZRcw+J0cImtgipkGsWKWVAd6YQarnaZWW36q0qzXbelUbtndeIN/h+Z1/StStnFadTvyHp0oVwgQOMz8/lRLih79PzNAXC/l+kU0QetqKlzOiYqxYSyZJPSk+FW3PoT5jhVlsxA864t8bF7YaipM9DldQuXEVxfYS4ulL4ieQ1qRy5qHEEKNup77ocQ3PNSkqV8k/EVyJ800otjv6L8Ebul3ZeTmBSlA5pKiSSk8CIGtedqOzztk4EKOZCv4a40UOR5KHEVZPoYaAt3FSMyndR94AJATI4Tqa6PimGNXLSmXRKVD1SeCk8lCmtJo8zD5EsU99M4Jhl2tm4acbMKSoeUHcEcQRNNu11s+j6qpaSgd2pSFJVpmWrvDl1kQFJFQdoOzz1k9C/Eg5i24BooAH3K20ojtNjq32rZpaQCy2fENCZgRl4QEil9aL58ZyU47K9cKK1FapUs+0okkq5STXkaVrmqRG1YMSSNCdKhXUyzUC645gzxqIGpLnhUdaJfYS3Wz7wSNwKiKoqJ1udTXBXSJsMfBcATBkRRqgpJMg7/CgcASA+2o/iKTVtu1pBJKdKVOUovSJp44ydtiKzUhaVspKg6lZXpsYQco+Bmo8HWFErVodteNMOyDTSnX1EkKzICYjSeMTJ100qJbCXXnCBCe8UQPMn86VCf5uIt40o2gv6wisr3/RqeVZTNAHQEmtxWoFSCsHkF2RlM7ASfKuRYpcFx1S+ZP7/fKumdqbru2Fc1+H03P761ye8diepPzo4I2S/EjzeLhA/fzoRajqes/Gp2vnx6D9/ConSADGpJ36TpRiBpga5QY5kU6QvSqfhV53bni9k7ngORq0tqBIExXM9Dx53EIU7Q7qia3egaCoJrhsmaK0qyY7hzNvaBpZdTdENvKSqA0QowAgcVBKtfJVQdlMJQ+6pTq8jLKc7ijA6IGumqo91W9jBxdNBFy63cKaIQ2tucyEKUYzrCjnOVIPIa7nWiSskzZowkkzneCYq7bOh1pUEbg+yoclDiK7p2Zx9u7Z7xswoaLQd0K/Tka+crpxxtam1QCklJIG8cR57+tX/wCh66UHnR3TjneZE94CnI2ATOeSDutOgmiimifycmOe12dQ7RNo+qul1IWhCCqDzTqCDwMiuRdv70OXaVIIKVMtqBHqCP3yrrWIYg0Chok5njCAUkhUSSCYgaJUYJrmX0n4T3Vyl1KUpbWkISEgCVJGZRgeYrX0L8eVTRUk1IVVGDWTSmeqYo1oRWpVWqlxXHMiukCN9agCxE1FjNjlVmCjnhKiDGYSD7G0p22515gmD3F17OiAfaUSPMab1raXZI8tvSPVvCdVhPmQKnRMSmFdRr/1U0c7PqbELKQkcmkOIHVSSQqeok0tdwx1jKoj7NWiXEatn8JB4eRg1iafRqk72TYZchDqStO20bE9etPb67UUE5DEelILS5zg6eJKtuvCnLmKfZkKQQYrmIz/ACTFvZl8tvFWScwUDyFPbJuMyuZJPmTrSbsvdkqjLI1M1akJGUmlyirsFSdUQd7XlRfWE1lZTO0X4CtxWwTWqwcq8pTmShS9f6RvHGuH/wBlL7a3kvBvcIA06nU/lXP8XQAsj4eev51Y7Yu3JceSlawkytQG00mx9nxJUN9j+X50xKhuSnj16F7O5J93lzqDOMxnY6dOnpWzi4ED1qFzatRIyC8T5elO+ybiiF5tUpiJ5nh+dJGm1LUEgE8+g61b7S3CGwkCBv761jvGg3LkeqVNYBXtelMVhaXzsxgbKsPU64wHlrUVBJUUZgklIAM6EZSR51Pg/Zhko7xpt60LgIWgOkqUnuyrXUhJ14aifSh7nCimyYLt7cMtpCVfZJBCSoZvEUpzZRmgHhNT22GXbbBDV8ChYWrvrlCkrbzFKTudAddVDTlTkeNllym2V5/sIw+lz6mbhDjZgpuE5UEgxlCiNTJGokUZ2NwO6ZADd4228h0qXaL1zFByyYMwpI9oCIg02wR7EWSouKYvEKyhJZWkFKgcwKvCAARud9Olb22LXzLpXd2ORJCwp9rx5RCsgVlJ8IKjrpvNaLG+Ht3xfbW8llLGUAISc6wpKdCSQIJKla8opH9MKvs7b+5z5Jps5iyXHFvsWjq1tBLUqBbK0EAzB1IEGPDOvurP0mYj31varLamznd8CvaEQNfOgkx+CL5JlGQa9WdK0aNevK0pZ6nogSuo3Fk6JBUo6BKQSonkANTTPs9gbt25kRolMZ1n2Uzw6q6fKuu9m+zFva6NplceJxUFZnr90dBQSyKOgLbRSey3Yq7ft+7vcqWo8AWAXkf2kezpwJPlV5suzttbthtCNAIkkk05cXlMUvvLikSm5di4wUeio9o7LLJHs8uVVS1fAUq3X/BuZSRwS4fZUOUn4xV2x45kxO9cr7U3gbUUA+IKERuIMz0o8XYvK7QFgLKhcBJ4LKT/AMJ1+Rq4dpYDRKY2qPA+z7jzzLreQB1lSzroXMwzkkTqSsadDUnbKzWwytLogwI5GeR40+XZK30LcAtClkOA6nhTdtx1YCcuWeNAYAk9w2Bx1+NWVxvQRoaVIKxN/q2v8dZTXO9zFZQ7NLg3VT7bfxmf8Fz/ADGsrKZDsZP4kX0d/wA45/w/5jVY7a/xXf71f5zWVlNYcPiyoO/nWcK9rKxCQ3BvbX5D51YXdvdWVlcyzxviRtV6/wCyaysrChnX3f5Yf4af8rdE4h/Bc/tP/wCprKynLo8KXbK99Fn8k3/i/wDQurTYfwEfv7qqysrQUEX3ttf2D5GuUfSl/NeiP8prKygkU4PmVNvatbnasrKBHpPo6Z9Fn8mP8Vz51eMP9pzzHyFZWVHP5Mz/AJB7nc0sfr2srARFiv51yHEP593+5XyrKynYibIXX6Otm/8A5PnTn6ZP5Vv+4flWVlPfZMIOzf8ABa/tqxObivaylS7CRJWVlZQhH//Z" width=100 height=100 alt="B.E in Information Science & Engineering" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.linkedin.com/in/eshaalakshmi-d-s-802b65221/" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Linkedin">Eshaalakshmi D S</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 7829902466</h4>
		<h4 style="font-family:'typo' ">B.E in Information Science & Engineering</h4>
		<h4 style="font-family:'typo' ">@JSS Academy of Technical Education </h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
