<footer class="page-footer">
    <div class="container">
        <?php if($page != "auth"): ?>
            <?php if($_SESSION['auth'] != true): ?>
                <div class="lock"><a href="/auth" class="lock-inner">Войти</a></div>
            <?php else: ?>
                <div class="unlock"><a href="/logout" class="lock-inner">Выйти</a></div>
            <?php endif; ?>
        <?php endif; ?>
        <div class="copyright">© 2015, Это мой сайт, пожалуйста, не копируйте и не воруйте его</div>
    </div>
</footer>
<script src="./js/vendor.js"></script>

<?php if($page == "portfolio"): ?>
    <script src="./js/bower/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="./js/bower/jquery-file-upload/js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="./js/bower/jquery-file-upload/js/jquery.fileupload.js"></script>
    <script src="./js/add_project.js"></script>
<?php endif; ?>

<?php if($page == "auth"): ?>
    <script src="./js/login.js"></script>
<?php endif; ?>


<script src="./js/validation.js"></script>

<?php if($page == "contacts"): ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="./js/contact_me.js"></script>
<?php endif; ?>


<script src="./js/plugins.js"></script>
<script src="./js/main.js"></script>
</body>

</html>