@extends('layout.products')
@section('title', 'ساخت محصول')
@section('content')

    <div class="container">
        <div class="header">
            <h1>➕ ایجاد آیتم جدید</h1>
            <p>اطلاعات مورد نظر را با دقت وارد کنید</p>
        </div>

        <div class="content">
            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                <!-- عنوان -->
                @csrf
                @method('POST')
                <div class="form-group">

                    <x-form.input label="نام " name="name" placeholder='لطفا نام را وارد کنید' value="{{old('name')}}"/>
                    @error('name')
                    <span class="text-amber-500">{{$message}}</span>
                    @enderror
                    <x-form.input type="email" label="ایمیل" name="email" placeholder='لطفا ایمیل را وارد کنید' value="{{old('email')}} "/>
                    @error('email')
                    <span class="text-red-600 font-bold">{{$message}}</span>
                    @enderror
                    <x-form.input type="password" label="پسورد" name="password" placeholder='لطفا پسورد را وارد کنید' value="{{old('password')}} "/>
                    @error('password')
                    <span class="text-red-600 font-bold">{{$message}}</span>
                    @enderror
                    <x-form.input type="password" label="پسورد" name="password_confirmation" placeholder='لطفا پسورد را وارد کنید' value="{{old('password_confirmation')}} "/>
                    @error('password_confirmation')
                    <span class="text-red-600 font-bold">{{$message}}</span>
                    @enderror

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
