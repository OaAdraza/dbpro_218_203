<section id="footer-bar">
    <div class="row">
        <div class="span3">
            <h4>Navigation</h4>
            <ul class="nav">
                <li><a href="index.php">Homepage</a></li>

                <li><a href="contact.php">Contac Us</a></li>
                <li><a href="cart.php">Your Cart</a></li>

                <li><a href="register.php">Login</a></li>
            </ul>
        </div>
        <div class="span4">
            <h4>My Account</h4>
            <ul class="nav">
                <li><a href="login.php">My Account</a></li>
                <li><a href="cart.php">Order History</a></li>
                <li><a href="contact.php">pharmacy List</a></li>
            </ul>
        </div>
        <div class="span5">
            <p class="logo"><a href="index.php"><img src="themes/images/cart.png" style="width: 20%;height: 40px;" class="site_logo" alt=""><SPAN style="color: Dodgerblue; font-size: 20px;">Medical</SPAN></a></p>

            <span class="social_icons">
                <a class="facebook" href="www.facebook.com">Facebook</a>
                <a class="twitter" href="www.twitter.com">Twitter</a>
                <a class="skype" href="www.skype.com">Skype</a>
            </span>
        </div>
    </div>
</section>
<section id="copyright">
    <span>Copyright  All right reserved.</span>
</section>
</div>
<script src="themes/js/common.js"></script>
<script src="themes/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
    $(function () {
        $(document).ready(function () {
            $('.flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 4000,
                animationSpeed: 600,
                controlNav: false,
                directionNav: true,
                controlsContainer: ".flex-container" // the container that holds the flexslider
            });
        });
    });
</script>
<script src="themes/js/common.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#checkout').click(function (e) {
            document.location.href = "checkout.php";
        })
    });

    $(function () {
        // $("#btnclick").on("mouseover",function(){
        //  $("#circle").toggle();
        // });
        // $("#btnclick").html('my button');
        //$("#circle").css({opacity:'0.5'});
        //$("#circle").toggle(1000).toggle(1000);
        //$("#circle").fadeToggle(1000).fadeToggle(1000);
        //$("#circle").fadeOut(1000).delay(1000).slideDown(1000);
        //$("#circle").slideUp(1000).delay(1000).slideDown(1000);
        // $("#circle").hide(300).show(1000).hide(300).show(1000).hide(200).show(100);
    });
    // $("#btnclick").click(function(){
    //  if($("#text").css("display") == "none"){
    //    $("#text").fadeIn();
    //}
    //  else{
    //    $("#text").fadeOut();
    //}
    //});
    //   $("div").click(function(){
    // $(this).fadeOut("slow", function(){
    //   alert("fadeout has finished");
    //}); //Fadeout()
    // });
    /* $.get("info.txt", function(data){
     $("p").html(data);
     }).fail(function(){
     alert("no data is found ")
     });*/
    /* $.ajax("load.php").done(function(data){
     $("p").html(data);
     });*/

    $("#hov").hover(function () {
        if ($("#sh").css("display") == "none") {
            $("#sh").slideDown(1000);
        } else {

            $("#sh").slideUp();

        }
    });
    $("#ho").hover(function () {
        if ($("#shh").css("display") == "none") {
            $("#shh").slideDown(1000);
        } else {

            $("#shh").slideUp();

        }
    });
    $("#hoo").hover(function () {
        if ($("#shhs").css("display") == "none") {
            $("#shhs").slideDown(1000);
        } else {

            $("#shhs").slideUp();

        }
    });
    $("#hang").hover(function () {
        if ($("#bang").css("display") == "none") {
            $("#bang").slideDown(1000);
        } else {

            $("#bang").slideUp();

        }
    });
    $("#hoooo").hover(function () {
        if ($("#shhsss").css("display") == "none") {
            $("#shhsss").slideDown(1000);
        } else {

            $("#shhsss").slideUp();

        }
    });
    $("#hooooo").hover(function () {
        if ($("#shhssss").css("display") == "none") {
            $("#shhssss").slideDown(1000);
        } else {

            $("#shhssss").slideUp();

        }
    });
    $("#hover").hover(function () {
        if ($("#show").css("display") == "none") {
            $("#show").slideDown(1000);
        } else {

            $("#show").slideUp();

        }
    });
    /*  if (typeof jQuery =="undefined"){
     alert("jquery is not installed");
     }
     else{
     alert("jquery is installed successfully");
     }*/


    /* $("div").click(function(){
     alert("you clicked on" + $(this).attr("id"));
     }); */

    /*$("div").click(function(){
     $(this).css("display","none");
     }); */
    //$("#btnclick").click(function(){
    //  $("#change").css("display","none");
    // });



    // $("#btnclick").hover(function(){
    //    $("#btnclick").css("display","none");
    // });
    //$("#btnclick").hover(function(){
    //  alert($("#btnclick").css("background-color"));
    /*$.get("info.txt", function(data){
     alert(data);
     });
     / });

     //$('#btnclick').hover(function(){
     // $("#change").html("THis is my first jquery code ");
     //$("#btnclick").hover(function(){
     //   $("iframe").attr("src","https://www.w3schools.com/");
     // });
     //           });
     /*  $("#btnclick").click(function(){
     $(this).fadeOut();
     });*/

    $("#hove").hover(function () {
        if ($("#sho").css("display") == "none") {
            $("#sho").slideDown(1000);
        } else {

            $("#sho").slideUp();

        }
    });

    $("#hoves").hover(function () {
        if ($("#shos").css("display") == "none") {
            $("#shos").slideDown(1000);
        } else {

            $("#shos").slideUp();

        }
    });
    $("#hoverss").hover(function () {
        if ($("#showss").css("display") == "none") {
            $("#showss").slideDown(1000);
        } else {

            $("#showss").slideUp();

        }
    });
    $("#hovers").hover(function () {
        if ($("#shows").css("display") == "none") {
            $("#shows").slideDown(1000);
        } else {

            $("#shows").slideUp();

        }
    });
    $("#hos").hover(function () {
        if ($("#shs").css("display") == "none") {
            $("#shs").slideDown(1000);
        } else {

            $("#shs").slideUp();

        }
    });
    $("#hs").hover(function () {
        if ($("#sh").css("display") == "none") {
            $("#sh").slideDown(1000);
        } else {

            $("#sh").slideUp();

        }
    });
</script>


