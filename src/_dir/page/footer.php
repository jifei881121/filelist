<?php
if (!defined('IN_CRONLITE')) {
    exit();
}

?>

<footer class="footer card-footer mt-3" id="footer">
    <span>Copyright &copy; <?php echo date('Y') ?> </span>
    <span><?php echo $conf['brand'] ?></span>
    <span><?php echo $conf['footer'] ?></span>
    <br/>
    <span>Powered by <a href="https://crogram.org/" target="_blank">CROGRAM</a></span>
</footer>

<script>
function fix_footer(){
    var body_height = document.getElementById("navbar").offsetHeight + document.getElementById("main").offsetHeight;
    var foot_height = document.getElementById("footer").offsetHeight;
    var win_height = window.innerHeight;
    if(body_height + foot_height > win_height){
        document.getElementById("footer").className += ' position-relative';
    }
}
fix_footer()
</script>
<script src="//cdn.bootcdn.net/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"></script>
<script src="//cdn.bootcdn.net/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script src="//cdn.bootcdn.net/ajax/libs/layer/3.1.1/layer.js"></script>
<script src="./_dir/static/js/clipBoard.min.js"></script>
