// 1. Инициализация после загрузки
window.addEventListener('load', () => {
    document.body.classList.add('is-loaded');
    initCookiePopup();
    initCaptcha();
});

// 2. Плавный скролл Lenis
const lenis = new Lenis();
function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// 3. Хедер при скролле
const header = document.querySelector('.header');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('header--scrolled');
    } else {
        header.classList.remove('header--scrolled');
    }
});

// 4. Плавная навигация
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            closeMobileMenu(); // Закрыть меню, если открыто
            lenis.scrollTo(target, { offset: -80, duration: 1.2 });
        }
    });
});

// 5. FAQ Аккордеон
document.querySelectorAll('.faq__item').forEach(item => {
    item.querySelector('.faq__question').addEventListener('click', () => {
        const isActive = item.classList.contains('is-active');
        document.querySelectorAll('.faq__item').forEach(i => i.classList.remove('is-active'));
        if (!isActive) item.classList.add('is-active');
    });
});

// 6. Мобильное меню
const burger = document.querySelector('.burger');
const mobileMenu = document.getElementById('mobile-menu');
const closeMenu = document.querySelector('.mobile-menu__close');
const overlay = document.querySelector('.mobile-menu__overlay');

const openMobileMenu = () => mobileMenu.classList.add('mobile-menu--active');
const closeMobileMenu = () => mobileMenu.classList.remove('mobile-menu--active');

burger.addEventListener('click', openMobileMenu);
closeMenu.addEventListener('click', closeMobileMenu);
overlay.addEventListener('click', closeMobileMenu);

// 7. Капча и Форма
let captchaResult;
function initCaptcha() {
    const num1 = Math.floor(Math.random() * 10) + 1;
    const num2 = Math.floor(Math.random() * 5) + 1;
    captchaResult = num1 + num2;
    const label = document.getElementById('captcha-label');
    if (label) label.innerText = `Сколько будет ${num1} + ${num2}?`;
}

const contactForm = document.getElementById('contact-form');
if (contactForm) {
    // Валидация телефона (только цифры)
    const phoneInput = document.getElementById('phone');
    phoneInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '');
    });

    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const userAnswer = parseInt(document.getElementById('captcha-input').value);

        if (userAnswer !== captchaResult) {
            alert('Неверный ответ капчи!');
            initCaptcha();
            return;
        }

        const btn = contactForm.querySelector('.form__submit');
        const success = document.getElementById('form-success');
        
        btn.disabled = true;
        btn.innerText = 'Отправка...';

        // Имитация AJAX
        setTimeout(() => {
            success.classList.add('form__success--active');
            contactForm.reset();
            initCaptcha();
            
            setTimeout(() => {
                success.classList.remove('form__success--active');
                btn.disabled = false;
                btn.innerHTML = '<span>Отправить запрос</span><i data-lucide="send"></i>';
                lucide.createIcons();
            }, 4000);
        }, 1500);
    });
}

// 8. Cookie Popup
function initCookiePopup() {
    const popup = document.getElementById('cookie-popup');
    const acceptBtn = document.getElementById('cookie-accept');
    
    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => popup.classList.add('cookie-popup--active'), 2000);
    }

    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        popup.classList.remove('cookie-popup--active');
    });
}

// 9. Иконки
lucide.createIcons();