<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Receipt</title>
</head>
<body>
    <h1>Upload Receipt</h1>
    <form action="process.php" method="post" enctype="multipart/form-data">
        <input type="file" name="receipt[]" multiple>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
