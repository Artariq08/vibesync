<!DOCTYPE html>
<html>
<head>
    <title>Vibesync</title>
    <link rel="stylesheet"  href="index.css">
    <script src="index.js"></script>
</head>
<body>
    <header>
        <div id="cont">
            <div id="h-t">
                <h1>Vibesync</h1>
            </div>
            <div id="h-l">
                <a href="signin.php">Sign In</a>
                <a href="signup.php">Sign Up</a>
            </div>
        </div>
            
        </div>
    </header>
    <div id="cont">
        <div id="p-cont">
            <div id="post" id="post-1">
                <div id="p-img">
                    <img src="image1.jpg" alt="Image 1">
                </div>
                <div id="p-option">
                    <a href="#" onclick="likePost(1)">Like</a>
                    <a href="#">Comment</a>
                    <a href="#" onclick="deletePost(1)">Delete</a>
                </div>
                <div id="c-input">
                    <input type="text" id="c-input-1" placeholder="Add a comment">
                    <button onclick="addComment(1)">Add</button>
                </div>
                <ul id="c-list" id="c-list-1">
                </ul>
            </div>
            <div id="post" id="post-2">
                <div id="p-img">
                    <img src="image2.jpg" alt="Image 2">
                </div>
                <div id="p-option">
                    <a href="#" onclick="likePost(2)">Like</a>
                    <a href="#">Comment</a>
                    <a href="#" onclick="deletePost(2)">Delete</a>
                </div>
                <div id="c-input">
                    <input type="text" id="c-input-2" placeholder="Add a comment">
                    <button onclick="addComment(2)">Add</button>
                </div>
                <ul id="c-list" id="c-list-2">
                </ul>
            </div>
            <div id="post" id="post-3">
                <div id="p-img">
                    <img src="image3.jpg" alt="Image 3">
                </div>
                <div id="p-option">
                    <a href="#" onclick="likePost(3)">Like</a>
                    <a href="#">Comment</a>
                    <a href="#" onclick="deletePost(3)">Delete</a>
                </div>
                <div id="c-input">
                    <input type="text" id="c-input-3" placeholder="Add a comment">
                    <button onclick="addComment(3)">Add</button>
                </div>
                <ul id="c-list" id="c-list-3">
                </ul>
            </div>
            <div id="post" id="post-4">
                <div id="p-img">
                    <img src="image4.jpg" alt="Image 4">
                </div>
                <div id="p-option">
                    <a href="#" onclick="likePost(4)">Like</a>
                    <a href="#">Comment</a>
                    <a href="#" onclick="deletePost(4)">Delete</a>
                </div>
                <div id="c-input">
                    <input type="text" id="c-input-4" placeholder="Add a comment">
                    <button onclick="addComment(4)">Add</button>
                </div>
                <ul id="c-list" id="c-list-4">
                </ul>
            </div>
            <div id="post" id="post-5">
                <div id="p-img">
                    <img src="image5.jpg" alt="Image 5">
                </div>
                <div id="p-option">
                    <a href="#" onclick="likePost(5)">Like</a>
                    <a href="#">Comment</a>
                    <a href="#" onclick="deletePost(5)">Delete</a>
                </div>
                <div id="c-input">
                    <input type="text" id="c-input-5" placeholder="Add a comment">
                    <button onclick="addComment(5)">Add</button>
                </div>
                <ul id="c-list" id="c-list-5">
                </ul>
            </div>
        </div>
    </div>

    <footer>
        <div id="cont">
            &copy; 2023 Vibesync. All rights reserved.
        </div>
    </footer>
</body>
</html>
