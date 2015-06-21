<section class="aboutbox">
    <div class="header-big-wrap">
        <h2 class="aboutbox-header-big">У вас интересный проект? Напишите мне!</h2></div>
    <div class="aboutbox-body">
        <div class="contact-form-wrap">
            <form id="contact-me" class="form contact-form">
                <div class="server-mes error-mes"></div>
                <div class="server-mes success-mes"></div>
                <div class="form-line clearfix">
                    <div class="form-group pull-left">
                        <label for="name" class="label">Имя</label>
                        <input type="text" name="name" placeholder="Как к вам обращаться" qtip-content="Вы не ввели имя" class="input">
                    </div>
                    <div class="form-group pull-right">
                        <label for="email" class="label">Email</label>
                        <input type="text" name="email" placeholder="Куда мне писать" qtip-position="right" qtip-content="Вы не ввели email" class="input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="label">Сообщение</label>
                    <textarea id="message" name="message" rows="3" placeholder="Кратко в чем суть" qtip-content="Что вы от меня хотите?" class="textarea"></textarea>
                </div>
                <div class="form-group captcha-wrap clearfix">
                    <div class="g-recaptcha" data-sitekey="<?php echo PUBLIC_KEY; ?>"></div>
                </div>
                <div class="button-group">
                    <button type="submit" class="btn">Отправить</button>
                    <button type="reset" class="btn btn-res">Очистить</button>
                </div>
            </form>
        </div>
    </div>
</section>