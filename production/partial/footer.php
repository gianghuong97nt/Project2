<script>
    var toggle = true;
    $(".sidebar-icon").click(function() {
        if (toggle)
        {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position":"absolute"});
        }
        else
        {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function() {
                $("#menu span").css({"position":"relative"});
            }, 400);
        }
        toggle = !toggle;
    });
</script>
<!--scrolling js-->
<script src="<?php echo SITE_URL; ?>js/jquery.nicescroll.js"></script>
<script src="<?php echo SITE_URL; ?>js/scripts.js"></script>
<!--//scrolling js-->
<script src="<?php echo SITE_URL; ?>js/bootstrap.js"> </script>

</body>
</html>