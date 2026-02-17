@extends('layout.products')
@section('title', 'لیست محصولات')
@section('content')
<div class="container">
    <div class="header">
        <h1>📦 لیست آیتم‌ها</h1>
        <p>مدیریت آیتم‌های خود را اینجا انجام دهید</p>
    </div>

    <div class="content">
        <!-- بخش آمار -->
        <div class="stats-section">
            <div class="stat-card">
                <div class="stat-icon">📦</div>
                <div class="stat-info">
                    <h4>تعداد کل آیتم‌ها</h4>
                    <p>۲۵۶</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">💰</div>
                <div class="stat-info">
                    <h4>ارزش کل</h4>
                    <p>۲۵,۸۶۰,۰۰۰</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">⭐</div>
                <div class="stat-info">
                    <h4>آیتم‌های ویژه</h4>
                    <p>۳۲</p>
                </div>
            </div>
        </div>

        <a href="create-item.html" class="add-button">➕ افزودن آیتم جدید</a>

        <div class="items-grid">
            <!-- آیتم ۱ -->
            <div class="item-card">
                <div class="item-title">📱 گوشی موبایل</div>
                <div class="item-description">گوشی هوشمند با صفحه نمایش ۶.۷ اینچ و دوربین ۱۰۸ مگاپیکسل</div>
                <div class="item-price">۱۲,۵۰۰,۰۰۰ تومان</div>
                <div class="item-actions">
                    <button class="btn btn-view">نمایش</button>
                    <button class="btn btn-edit">ویرایش</button>
                    <button class="btn btn-delete">حذف</button>
                </div>
            </div>

            <!-- آیتم ۲ -->
            <div class="item-card">
                <div class="item-title">💻 لپ تاپ</div>
                <div class="item-description">لپ تاپ ایسوس با پردازنده Core i7 و ۱۶ گیگ رم</div>
                <div class="item-price">۲۸,۷۵۰,۰۰۰ تومان</div>
                <div class="item-actions">
                    <button class="btn btn-view">نمایش</button>
                    <button class="btn btn-edit">ویرایش</button>
                    <button class="btn btn-delete">حذف</button>
                </div>
            </div>

            <!-- آیتم ۳ -->
            <div class="item-card">
                <div class="item-title">🎧 هدفون</div>
                <div class="item-description">هدفون بی‌سیم با قابلیت حذف نویز</div>
                <div class="item-price">۲,۸۵۰,۰۰۰ تومان</div>
                <div class="item-actions">
                    <button class="btn btn-view">نمایش</button>
                    <button class="btn btn-edit">ویرایش</button>
                    <button class="btn btn-delete">حذف</button>
                </div>
            </div>

            <!-- آیتم ۴ -->
            <div class="item-card">
                <div class="item-title">⌚ ساعت هوشمند</div>
                <div class="item-description">ساعت هوشمند با قابلیت اندازه‌گیری ضربان قلب</div>
                <div class="item-price">۴,۲۵۰,۰۰۰ تومان</div>
                <div class="item-actions">
                    <button class="btn btn-view">نمایش</button>
                    <button class="btn btn-edit">ویرایش</button>
                    <button class="btn btn-delete">حذف</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
