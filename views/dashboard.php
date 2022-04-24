<?php
require_once dirname(__DIR__) . "/config/config.php";
require_once __DIR__ . "/head.php";
require_once __DIR__ . "/navigation.php";
require_once dirname(__DIR__) . "/helpers/sessionHelper.php";

session_start();
if(!$_SESSION['pwd'])
{
    header('Location:connexion.php');
}
?>
<!DOCTYPE HTML>

<div id="comment-list-box">
    <?php if(!empty($comments)) { foreach($comments as $k=>$v) { ?>
        <p>// display comments list
        <div class="message-box" id="message_<?php echo $v["id"];?>
        ">
            <div>
                <button class="btnEditAction" name="edit"
                        onClick="showEditBox(<?php echo $v["id"]; ?>)">Edit</button>
                <button class="btnDeleteAction" name="delete"
                        onClick="callCrudAction('delete',<?php echo $comments[$k]["id"]; ?>)">Delete</button>
            </div>
            <div class="message-content">
                <?php echo $v["message"]; ?>
            </div>
        </div>
    <?php }} ?>
</div>
<div id="frmAdd">
    <label for="txtmessage"></label><textarea name="txtmessage" id="txtmessage" cols="80" rows="10"></textarea>
    <p>
        <button id="btnAddAction" name="submit"
                onClick="callCrudAction('add','')">Add Comment</button>
    </p>
</div>




<head>
<meta charset="utf-8">
    <title></title>
</head>
<body>
<a href="/views/create.php">Create a new article</a>

<div class="comments"></div>

<script>
    const comments_page_id = 1; // This number should be unique on every page
    fetch("comments.php?page_id=" + comments_page_id).then(response => response.text()).then(data => {
        document.querySelector(".comments").innerHTML = data;
        document.querySelectorAll(".comments .write_comment_btn, .comments .reply_comment_btn").forEach(element => {
            element.onclick = event => {
                event.preventDefault();
                document.querySelectorAll(".comments .write_comment").forEach(element => element.style.display = 'none');
                document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "']").style.display = 'block';
                document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "'] input[name='name']").focus();
            };
        });
        document.querySelectorAll(".comments .write_comment form").forEach(element => {
            element.onsubmit = event => {
                event.preventDefault();
                fetch("comments.php?page_id=" + comments_page_id, {
                    method: 'POST',
                    body: new FormData(element)
                }).then(response => response.text()).then(data => {
                    element.parentElement.innerHTML = data;
                });
            };
        });
    });
</script>


</body>
