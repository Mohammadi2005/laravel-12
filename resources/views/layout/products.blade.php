<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="/css/products-index.css">
    <link rel="stylesheet" href="/css/products-create.css">
</head>
<body>
<!-- هدر اصلی -->
<header class="main-header">
    <div class="logo">
        <div class="logo-icon">📦</div>
        <div class="logo-text">فروشگاه من</div>
    </div>

    <nav class="nav-menu">
        <a href="#" class="nav-item active">
            <i>🏠</i> صفحه اصلی
        </a>
        <a href="#" class="nav-item">
            <i>📦</i> محصولات
        </a>
        <a href="#" class="nav-item">
            <i>🛒</i> سبد خرید
        </a>
        <a href="#" class="nav-item">
            <i>📞</i> تماس با ما
        </a>
        <a href="#" class="nav-item">
            <i>ℹ️</i> درباره ما
        </a>
    </nav>

    <div class="user-menu">
        <div class="notifications">
            <i>🔔</i>
        </div>
        <div class="user-profile">
            <div class="user-avatar">ع</div>
            <div class="user-name">
                علی محمدی
                <small>مدیر سیستم</small>
            </div>
        </div>
    </div>
</header>

@yield("content")


<!-- فوتر -->
<footer class="main-footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>درباره ما</h3>
            <p style="color: #666; line-height: 1.8; margin-bottom: 15px;">
                فروشگاه اینترنتی ما با هدف ارائه بهترین محصولات با کیفیت و قیمت مناسب فعالیت می‌کند.
            </p>
            <div class="social-links">
                <a href="#" class="social-link">📱</a>
                <a href="#" class="social-link">📘</a>
                <a href="#" class="social-link">📷</a>
                <a href="#" class="social-link">🐦</a>
            </div>
        </div>

        <div class="footer-section">
            <h3>دسترسی سریع</h3>
            <ul>
                <li><a href="#">صفحه اصلی</a></li>
                <li><a href="#">محصولات</a></li>
                <li><a href="#">تخفیف‌ها</a></li>
                <li><a href="#">پرفروش‌ترین‌ها</a></li>
                <li><a href="#">جدیدترین‌ها</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>خدمات مشتریان</h3>
            <ul>
                <li><a href="#">تماس با ما</a></li>
                <li><a href="#">سوالات متداول</a></li>
                <li><a href="#">رویه بازگردانی</a></li>
                <li><a href="#">شرایط استفاده</a></li>
                <li><a href="#">حریم خصوصی</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>اطلاعات تماس</h3>
            <ul>
                <li>📍 تهران، خیابان آزادی</li>
                <li>📞 ۰۲۱-۱۲۳۴۵۶۷۸</li>
                <li>📱 ۰۹۱۲-۳۴۵-۶۷۸۹</li>
                <li>✉ info@myshop.com</li>
                <li>🕘 ۹ صبح تا ۶ عصر</li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© ۲۰۲۵ تمامی حقوق برای <span>فروشگاه من</span> محفوظ است.</p>
    </div>
</footer>
</body>
</html>
