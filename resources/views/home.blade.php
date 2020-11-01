<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

<meta charset="UTF-8">
<title>Youtube Downloader</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="{{URL::to("css/style.css") }}">
<body>
<body class="align">

      <h2>YOUTUBE VIDEO DOWNLOADER (YAT PROJECT)</h2>
	  <div class="grid">


		<form action="/api/getLinks" method="POST" class="form login" name="form" onsubmit="return validateForm()">
          
			<div class="form__field">
             <input  type="text"  name = "url" class="form__input" placeholder="Enter youtube link here">
			</div>
			<div class="form__field">
				<input type="submit" value="DOWNLOAD" >
			</div>
            <div class="alert alert-danger" id="error"  hidden>
                  -  Invaild Url! Please Enter a Valid One
          </div>
        </form>
        

    </div>
 


    <script type="text/javascript" src="{{URL::to("js/video.js") }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</body>


</html>