
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::to("css/style2.css") }}">

    <title>YouTube Video DownLoader</title>
</head>

<body>
  
  <div id="video" hidden>
    {{ $video }}
  </div>

  <div class="container">
		<div class="item">
			<h2 >YOUTUBE DOWNLOADER</h2>
		</div>
		<div class="item"></div>
		<div class="item">
			<button type="button" name="button">
						      <a href="/home"> Download another video</a>
					</button>
		</div>
		<div class="item"></div>
		<div class="download">
			<img id="img" src="" alt="notfound">
			<div class="t" >
        <h2 id="title"></h2>
        <h3 id="duration"></h3>
			</div>
			<div class="download-buttons">

				<h3>Extenstion</h3>
        <h3 id="dd">Download</h3>


			</div>



		</div>
		<div class="item"></div>








		<p>By Mohammed Shabban � 2020 for YAT</p>

	</div>

   


  <script type="text/javascript" src="{{URL::to("js/video.js") }}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>