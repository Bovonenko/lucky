<?php
$translation_footer = [
    'en' => [
        'home' => 'Home',
        'blog' => 'Blog',
        'about' => 'About Us',
    ],
    'cs' => [
        'home' => 'Domů',
        'blog' => 'Blog',
        'about' => 'O nás',
    ],
    'ru' => [
        'home' => 'Главная',
        'blog' => 'Блог',
        'about' => 'О нас',
    ],
    'uk' => [
        'home' => 'Головна',
        'blog' => 'Блог',
        'about' => 'Про нас',
    ],
]
?>


<footer id="footer" class="footer">
    <div class="footer__container">
        <div class="footer__top">
            <a href="/" class="footer__logo">
                <img src="./img/header/logo.svg" alt="logo" />
            </a>
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item">
                        <a href="/" class="footer__list-link"><?= $translation_footer[$_SESSION['lang']]['home'] ?></a>
                    </li>
                    <li class="footer__list-item">
                        <a href="/#about" class="footer__list-link">
                            <?= $translation_footer[$_SESSION['lang']]['blog'] ?>
                        </a>
                    </li>
                    <li class="footer__list-item">
                        <a href="/#about" class="footer__list-link">
                            <?= $translation_footer[$_SESSION['lang']]['about'] ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="footer__map">

            <iframe
                title="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2562.2032133594125!2d14.319140876072805!3d50.04502441647322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b95ff41f7fdbd%3A0x4ced79418cb2b91a!2sMuka%C5%99ovsk%C3%A9ho%201985%2C%20155%2000%20Praha%2013!5e0!3m2!1sen!2scz!4v1725795567058!5m2!1sen!2scz"
                width="100%"
                height="100%"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="footer__bottom">
            <div class="footer__contacts">
                <p>
                    <a
                        href="geo:50.04477765526442,14.32192476112418"
                        target="_blank">
                        Mukařovského 1985, Praha 13, 155 00
                    </a>
                </p>
                <p>
                    <a href="mailto:info@luckyball-billiard.com">info@luckyball-billiard.com</a>
                </p>
                <p>
                    <a href="tel:+420774233299"> +420 774 233 299</a>
                </p>
            </div>
            <div class="footer__socials">
                <a href="tel:+420774233299">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        id="Layer_1"
                        data-name="Layer 1"
                        viewBox="0 0 24 24"
                        width="25"
                        height="25"
                        fill="currentColor">
                        <path
                            d="M24,6.24c0,7.64-10.13,17.76-17.76,17.76-1.67,0-3.23-.63-4.38-1.78l-1-1.15c-1.16-1.16-1.16-3.12,.05-4.33,.03-.03,2.44-1.88,2.44-1.88,1.2-1.14,3.09-1.14,4.28,0l1.46,1.17c3.2-1.36,5.47-3.64,6.93-6.95l-1.16-1.46c-1.15-1.19-1.15-3.09,0-4.28,0,0,1.85-2.41,1.88-2.44,1.21-1.21,3.17-1.21,4.38,0l1.05,.91c1.2,1.19,1.83,2.75,1.83,4.42Z" />
                    </svg>
                </a>
                <a href="mailto:info@luckyball-billiard.com">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        id="Bold"
                        viewBox="0 0 24 24"
                        width="25"
                        height="25"
                        fill="currentColor">
                        <path
                            d="M18.5,1H5.5A5.506,5.506,0,0,0,0,6.5v11A5.506,5.506,0,0,0,5.5,23h13A5.506,5.506,0,0,0,24,17.5V6.5A5.506,5.506,0,0,0,18.5,1Zm0,3a2.476,2.476,0,0,1,1.643.631l-6.5,6.5a2.373,2.373,0,0,1-3.278,0l-6.5-6.5A2.476,2.476,0,0,1,5.5,4Zm0,16H5.5A2.5,2.5,0,0,1,3,17.5V8.017l5.239,5.239a5.317,5.317,0,0,0,7.521,0L21,8.017V17.5A2.5,2.5,0,0,1,18.5,20Z" />
                    </svg>
                </a>

                <a
                    href="https://www.facebook.com/profile.php?id=100089614073082"
                    target="_blank">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1"
                        id="Capa_1"
                        x="0px"
                        y="0px"
                        viewBox="0 0 24 24"
                        style="enable-background: new 0 0 24 24"
                        xml:space="preserve"
                        width="25"
                        height="25"
                        fill="currentColor">
                        <g>
                            <path
                                d="M12,2.162c3.204,0,3.584,0.012,4.849,0.07c1.308,0.06,2.655,0.358,3.608,1.311c0.962,0.962,1.251,2.296,1.311,3.608   c0.058,1.265,0.07,1.645,0.07,4.849c0,3.204-0.012,3.584-0.07,4.849c-0.059,1.301-0.364,2.661-1.311,3.608   c-0.962,0.962-2.295,1.251-3.608,1.311c-1.265,0.058-1.645,0.07-4.849,0.07s-3.584-0.012-4.849-0.07   c-1.291-0.059-2.669-0.371-3.608-1.311c-0.957-0.957-1.251-2.304-1.311-3.608c-0.058-1.265-0.07-1.645-0.07-4.849   c0-3.204,0.012-3.584,0.07-4.849c0.059-1.296,0.367-2.664,1.311-3.608c0.96-0.96,2.299-1.251,3.608-1.311   C8.416,2.174,8.796,2.162,12,2.162 M12,0C8.741,0,8.332,0.014,7.052,0.072C5.197,0.157,3.355,0.673,2.014,2.014   C0.668,3.36,0.157,5.198,0.072,7.052C0.014,8.332,0,8.741,0,12c0,3.259,0.014,3.668,0.072,4.948c0.085,1.853,0.603,3.7,1.942,5.038   c1.345,1.345,3.186,1.857,5.038,1.942C8.332,23.986,8.741,24,12,24c3.259,0,3.668-0.014,4.948-0.072   c1.854-0.085,3.698-0.602,5.038-1.942c1.347-1.347,1.857-3.184,1.942-5.038C23.986,15.668,24,15.259,24,12   c0-3.259-0.014-3.668-0.072-4.948c-0.085-1.855-0.602-3.698-1.942-5.038c-1.343-1.343-3.189-1.858-5.038-1.942   C15.668,0.014,15.259,0,12,0z" />
                            <path
                                d="M12,5.838c-3.403,0-6.162,2.759-6.162,6.162c0,3.403,2.759,6.162,6.162,6.162s6.162-2.759,6.162-6.162   C18.162,8.597,15.403,5.838,12,5.838z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S14.209,16,12,16z" />
                            <circle cx="18.406" cy="5.594" r="1.44" />
                        </g>
                    </svg>
                </a>
                <a
                    href="https://www.facebook.com/profile.php?id=100089614073082"
                    target="_blank">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1"
                        id="Capa_1"
                        x="0px"
                        y="0px"
                        viewBox="0 0 24 24"
                        style="enable-background: new 0 0 24 24"
                        xml:space="preserve"
                        width="25"
                        height="25"
                        fill="currentColor">
                        <g>
                            <path
                                d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z" />
                        </g>
                    </svg>
                </a>
            </div>
        </div>
        <div class="contacts-and-copyright">
            <div class="contacts-and-copyright__contacts">
                <p>
                    <a
                        href="geo:50.04477765526442,14.32192476112418"
                        target="_blank">
                        Mukařovského 1985, Praha 13, 155 00
                    </a>
                </p>
                <p>
                    <a href="mailto:info@luckyball-billiard.com">info@luckyball-billiard.com</a>
                </p>
                <p>
                    <a href="tel:+420774233299"> +420 774 233 299</a>
                </p>
            </div>
            <div class="contacts-and-copyright__copyright">
                <div class="contacts-and-copyright__copyright-left">
                    &#169; <?= date('Y') ?> <a href="/">Lucky Ball Billiard</a>
                </div>
                <div class="contacts-and-copyright__copyright-right">
                    &lt;&#47;&gt; by &#64;<span>bovonenko</span>
                </div>
            </div>
        </div>
    </div>
</footer>