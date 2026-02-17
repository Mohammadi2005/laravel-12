@extends('layout.products')
@section('title', 'ساخت محصول')
@section('content')

<div class="container">
    <div class="header">
        <h1>➕ ایجاد آیتم جدید</h1>
        <p>اطلاعات مورد نظر را با دقت وارد کنید</p>
    </div>

    <div class="content">
        <form action="{{ route('products.create') }}" method="POST" enctype="multipart/form-data">
            <!-- عنوان -->
            @csrf
            <div class="form-group">

                <x-form.input label="نام محصول" name="fname" placeholder='لطفا نام محصول را وارد کنید'/>
                @error('fname')
                <span class="text-amber-500">{{$message}}</span>
                @enderror
                <x-form.input label="نام خانوادگی محصول" name="lname" placeholder='لطفا نام خانوادگی محصول را وارد کنید'/>
                @error('lname')
                <span class="text-red-600 font-bold">{{$message}}</span>
                @enderror
                <div class="help-text">حداکثر ۱۰۰ کاراکتر</div>
            </div>

            <!-- توضیحات -->
            <div class="form-group">
                <label class="required">توضیحات</label>
                <textarea class="form-control" name="desc" placeholder="توضیحات کامل آیتم را وارد کنید..." ></textarea>
                @error('desc')
                <span class="text-amber-500">{{$message}}</span>
                @enderror
            </div>

            <!-- قیمت و موجودی (دو ستونه) -->
            <div class="form-row">
                <div class="form-group">
                    <label class="required">قیمت</label>
                    <div class="price-input">
                        <input type="number" name="price" class="form-control" placeholder="۰" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="required">موجودی</label>
                    <input type="number" class="form-control" placeholder="تعداد موجودی" >
                </div>
            </div>

            <!-- دسته‌بندی -->
            <div class="form-group">
                <label class="required">دسته‌بندی</label>
                <select class="form-control" >
                    <option value="">انتخاب کنید...</option>
                    <option value="electronics">الکترونیک</option>
                    <option value="clothing">پوشاک</option>
                    <option value="books">کتاب</option>
                    <option value="sports">ورزشی</option>
                    <option value="home">خانه و آشپزخانه</option>
                    <option value="other">سایر</option>
                </select>
            </div>

            <!-- وضعیت (رادیو) -->
            <div class="form-group">
                <label>وضعیت</label>
                <div class="radio-group">
                    <label class="radio-option">
                        <input type="radio" name="status" value="available" checked>
                        <span>✅ موجود</span>
                    </label>
                    <label class="radio-option">
                        <input type="radio" name="status" value="unavailable">
                        <span>❌ ناموجود</span>
                    </label>
                    <label class="radio-option">
                        <input type="radio" name="status" value="preorder">
                        <span>⏳ پیش‌سفارش</span>
                    </label>
                </div>
            </div>

            <!-- ویژگی‌ها (چک باکس) -->
            <div class="form-group">
                <label>ویژگی‌ها</label>
                <div class="checkbox-group">
                    <label class="checkbox-option">
                        <input type="checkbox" value="featured">
                        <span>⭐ ویژه</span>
                    </label>
                    <label class="checkbox-option">
                        <input type="checkbox" value="new">
                        <span>🆕 جدید</span>
                    </label>
                    <label class="checkbox-option">
                        <input type="checkbox" value="discount">
                        <span>🔥 تخفیف‌دار</span>
                    </label>
                    <label class="checkbox-option">
                        <input type="checkbox" value="bestseller">
                        <span>🏆 پرفروش</span>
                    </label>
                </div>
            </div>

            <!-- آپلود تصویر -->
            <div class="form-group">
                <label>تصویر آیتم</label>
                <div class="image-upload" onclick="document.getElementById('image-input').click()">
                    <i>📸</i>
                    <span>برای آپلود تصویر کلیک کنید یا فایل را اینجا بکشید</span>
                    <input type="file" id="image-input" accept="image/*">
                </div>
                <div id="image-preview" class="hidden"></div>
                <div class="help-text">فرمت‌های مجاز: JPG, PNG, GIF (حداکثر حجم ۲ مگابایت)</div>
            </div>

            <!-- دکمه‌ها -->
            <div class="button-group">
                <a href="items-list.html" class="btn btn-secondary">❌ انصراف</a>
                <button type="submit" class="btn btn-primary">💾 ذخیره آیتم</button>
            </div>
        </form>
    </div>
</div>
@endsection

<script>
    // پیش‌نمایش تصویر قبل از آپلود
    document.getElementById('image-input').addEventListener('change', function(e) {
        if (e.target.files && e.target.files[0]) {
            const reader = new FileReader();
            reader.onload = function(readerEvent) {
                const preview = document.getElementById('image-preview');
                preview.innerHTML = `<img src="${readerEvent.target.result}" alt="پیش‌نمایش تصویر">`;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(e.target.files[0]);
        }
    });

    // درگ و دراپ برای آپلود تصویر
    const uploadArea = document.querySelector('.image-upload');

    uploadArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        uploadArea.style.borderColor = '#667eea';
        uploadArea.style.background = '#f0f3ff';
    });

    uploadArea.addEventListener('dragleave', (e) => {
        e.preventDefault();
        uploadArea.style.borderColor = '#e1e5e9';
        uploadArea.style.background = '';
    });

    uploadArea.addEventListener('drop', (e) => {
        e.preventDefault();
        uploadArea.style.borderColor = '#e1e5e9';
        uploadArea.style.background = '';

        const files = e.dataTransfer.files;
        if (files.length > 0) {
            document.getElementById('image-input').files = files;
            // ایجاد رویداد change برای نمایش پیش‌نمایش
            const event = new Event('change', { bubbles: true });
            document.getElementById('image-input').dispatchEvent(event);
        }
    });
</script>
</body>
</html>
