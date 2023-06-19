<!DOCTYPE html>
<html>
<head>
    <title>Add Post</title>
    <link rel="stylesheet"  href="submitpost.css">
    <style>
       
    </style>
</head>
<body>
    <div id="cont">
        <h1>Add Post</h1>
        <form action="submitpost.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="content" placeholder="Content" required></textarea>
            <input type="file" name="image" accept="image/*" required>
            <button type="submit">Add Post</button>
        </form>
    </div>
</body>
</html>
