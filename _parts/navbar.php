<aside class="sidebar">
    <nav class="navigation">
        <ul class="navigation-list">
            <li class="navigation-item
                <?php if($page == "index") echo "current"; ?>
            "><a href="/" class="navigation-link">Обо мне</a></li>
            <li class="navigation-item <?php if($page == "portfolio") echo "current"; ?>"><a href="/portfolio" class="navigation-link">Мои работы</a></li>
            <li class="navigation-item <?php if($page == "contacts") echo "current"; ?>"><a href="/contacts" class="navigation-link">Связаться со мной</a></li>
        </ul>
    </nav>
    <address class="contacts">
        <div class="contacts-header"><span class="header-inner-text">Контакты</span></div>
        <ul class="contacts-list">
            <li class="contacts-item contacts-item-mail"><a href="darkinmail@rambler.ru" class="contacts-link"><span
                        class="contact-text">darkinmail@rambler.ru</span></a></li>
            <li class="contacts-item contacts-item-phone"><a href="tel:+79161503993" class="contacts-link"><span
                        class="contact-text">+79161503993</span></a></li>
            <li class="contacts-item contacts-item-skype"><a href="skype:dark_tf8" class="contacts-link"><span
                        class="contact-text">dark_tf8</span></a></li>
        </ul>
    </address>
</aside>