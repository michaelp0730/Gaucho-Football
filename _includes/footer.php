<footer class="main-footer">
    Copyright &copy; <?php echo (date('Y') == 2014) ? '2014' : '2014 - ' . date('Y'); ?> | Gaucho&ndash;Football.com | All Rights Reserved
</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0-alpha.4/handlebars.min.js" type="text/javascript"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/plugins/xdate.js"></script>
<script src="js/app.js"></script>
<?php include './_includes/schedule-template.php'; ?>
</body>
</html>