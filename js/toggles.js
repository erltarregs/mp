/*function iconfirm() {
      var r = confirm("Do you really want to delete this user? Press ok to confirm.");
      if (r==true)
        {
        window.location="postDeleteUser.php";
        return true;
        }
           else
        {
        alert("You pressed Cancel!");
        window.location="users.php"
        return false;
        }
 }*/

function rotategearf(){
document.getElementById("gearset").style.WebkitTransform = "rotate(360deg)";
document.getElementById("gearset").style.msTransform = "rotate(360deg)";
document.getElementById("gearset").style.transform = "rotate(360deg)";
}

function rotategearb(){
document.getElementById("gearset").style.WebkitTransform = "rotate(-360deg)";
document.getElementById("gearset").style.msTransform = "rotate(-360deg)";
document.getElementById("gearset").style.transform = "rotate(-360deg)";
}

/*var logoHeight = $('.post-handler .prof-image-handler img').height();
    if (logoHeight < 100) {
        var margintop = (100 - logoHeight) / 2;
        $('.post-handler .prof-image-handler img').css('margin-top', margintop);
    }*/