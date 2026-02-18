<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Инновационные практики ИИ</title>
    
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='8' fill='%23630d16'/%3E%3Cpath d='M16 7L23 16L16 25L9 16L16 7Z' fill='white'/%3E%3Ccircle cx='16' cy='16' r='3' fill='%23630d16'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>

            <nav class="nav" id="main-nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#features" class="nav__link">Возможности</a></li>
                    <li><a href="./#practices" class="nav__link">Практики</a></li>
                    <li><a href="./#benefits" class="nav__link">Выгоды</a></li>
                    <li><a href="./#faq" class="nav__link">Вопросы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">Связаться</a>

            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag">Безопасность данных</span>
            <h1>Политика конфиденциальности</h1>

            <div class="legal-content">
                <div class="policy-hero-card">
                    <p>
                        Политика конфиденциальности распространяется на персональные данные,
                        предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для получения доступа к практикам применения ИИ, так и для других взаимодействий в электронном формате.
                    </p>
                </div>

                <div class="policy-notice">
                    <p>
                        <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в положения Политики. Обратите внимание, что наши ресурсы могут содержать ссылки на инструменты третьих лиц (нейросети, API). Предоставляя свои данные, вы даете полное согласие на их обработку способами, предусмотренными настоящей Политикой.
                    </p>
                </div>

                <h2>Порядок сбора, хранения и уничтожения</h2>
                <div class="storage-info">
                    <div class="storage-item">
                        <i data-lucide="history"></i>
                        <span>Срок хранения до <strong>75 лет</strong></span>
                    </div>
                    <div class="storage-item">
                        <i data-lucide="user-check"></i>
                        <span>Только с вашего согласия</span>
                    </div>
                </div>
                <p>
                    Для предотвращения утечки данных мы используем полный комплекс мер информационной безопасности, принятых в странах ЕС. Уничтожение или блокирование данных осуществляется по запросу пользователя или при достижении целей сбора.
                </p>

                <div class="data-collection-grid">
                    <div class="data-box">
                        <h3><i data-lucide="cpu"></i> Техническая информация</h3>
                        <ul>
                            <li>IP-адрес и время доступа</li>
                            <li>Источники перехода на <strong><?= $fullDomain ?></strong></li>
                            <li>Данные браузера и история просмотров блоков</li>
                        </ul>
                    </div>
                    <div class="data-box">
                        <h3><i data-lucide="contact-2"></i> Персонализация</h3>
                        <ul>
                            <li>Имя пользователя</li>
                            <li>E-mail и номер телефона для связи</li>
                            <li>Данные об используемых ИИ-инструментах</li>
                        </ul>
                    </div>
                </div>

                <h2>Цели обработки персональных данных</h2>
                <ul class="legal-list">
                    <li>Предоставление доступа к инновационной платформе и практикам ИИ.</li>
                    <li>Учет пожеланий при разработке новых алгоритмов и решений.</li>
                    <li>Информирование о выходе новых материалов и инструментов.</li>
                    <li>Обеспечение оперативной экспертной поддержки.</li>
                </ul>

                <h2>Использование Cookies</h2>
                <p>
                    Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Италия), чтобы сделать использование <strong><?= $fullDomain ?></strong> удобнее. Вы можете в любой момент отключить их в настройках своего браузера.
                </p>

                <div class="rights-block">
                    <h2>Ваши права</h2>
                    <p>
                        Если вы хотите отредактировать свои данные или полностью прекратить их обработку, свяжитесь с командой <strong><?= $domainTitle ?></strong>:
                    </p>
                    <a href="mailto:support@<?= $fullDomain ?>" class="contact-btn">support@<?= $fullDomain ?></a>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer"><?= $domainTitle ?></a>
                <p class="footer__description">
                    Технологии нового поколения, которые меняют правила игры и делают вашу жизнь проще уже сегодня.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#features">Возможности</a></li>
                    <li><a href="./#practices">Практики</a></li>
                    <li><a href="./#benefits">Выгоды</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+390697644829">+39 06 9764 4829</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>Via del Corso, 18, 00186 Roma RM, Italy</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; <?= date('Y') ?> <?= $domainTitle ?>. Платформа года. Все права защищены.</p>
        </div>
    </footer>
    <div class="mobile-menu" id="mobile-menu">
        <div class="mobile-menu__overlay"></div>
        <div class="mobile-menu__content">
            <button class="mobile-menu__close"><i data-lucide="x"></i></button>
            <nav class="mobile-menu__nav">
                <a href="./#hero" class="mobile-menu__link">Главная</a>
                <a href="./#features" class="mobile-menu__link">Возможности</a>
                <a href="./#practices" class="mobile-menu__link">Практики</a>
                <a href="./#benefits" class="mobile-menu__link">Выгоды</a>
                <a href="./#faq" class="mobile-menu__link">Вопросы</a>
                <a href="./#contact" class="mobile-menu__link btn btn--primary">Начать сейчас</a>
            </nav>
        </div>
    </div>
    
    <div id="cookie-popup" class="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button id="cookie-accept" class="btn btn--primary btn--small">Принять</button>
        </div>
    </div>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script>
    <script src="script.js"></script>
</body>
</html>