<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS</title>
</head>
<body>
<form method="post" action="process_upload.php" enctype="multipart/form-data">
<div class="upload-btn-wrapper">
 
  <input type="file" name="myfile" />
</div>
  <label><p>Title:</p><input type="text" name="title" /></label><br><br>
  <label><p>Description:</p><input type="text" name="description" /></label><br><br>
  <input class="button" type="submit"  name="submit_image" value="Foto Uploaden!" />
</form> 
</div>
</body>
</html>