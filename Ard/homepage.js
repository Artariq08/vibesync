function likePost(postId) {
  var likeButton = document.getElementById("l-button-" + postId);
  var likeCount = likeButton.textContent.match(/\d+/);
  var currentCount = parseInt(likeCount[0]);

  if (likeButton.classList.contains("liked")) {
    likeButton.classList.remove("liked");
    likeButton.textContent = "Like (" + (currentCount + 1) + ")";
  } else {
    likeButton.classList.add("liked");
    likeButton.textContent = "Like (" + (currentCount + 1) + ")";
  }
}

function deletePost(postId) {
  var post = document.getElementById("post-" + postId);
  post.remove();
}
function addComment(postId) {
  var commentInput = document.getElementById("comment-input-" + postId);
  var commentContent = commentInput.value.trim();
  if (commentContent !== "") {
    // Update the UI with the comment
    var commentList = document.getElementById("comment-list-" + postId);
    var commentItem = document.createElement("li");
    commentItem.textContent = commentContent;
    commentList.appendChild(commentItem);

    commentInput.value = "";
  }
}
