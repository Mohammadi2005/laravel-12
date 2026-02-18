<?php

return [

    /*
    |--------------------------------------------------------------------------
    | خطوط زبان اعتبارسنجی
    |--------------------------------------------------------------------------
    |
    | خطوط زبان زیر شامل پیام‌های خطای پیش‌فرض هستند که توسط کلاس اعتبارسنجی
    | استفاده می‌شوند. برخی از این قوانین نسخه‌های متعددی مانند
    | قوانین size دارند. لطفاً هر یک از این پیام‌ها را در اینجا تنظیم کنید.
    |
    */

    'accepted' => ':attribute باید پذیرفته شود.',
    'accepted_if' => 'هنگامی که :other برابر :value است، :attribute باید پذیرفته شود.',
    'active_url' => ':attribute یک آدرس معتبر نیست.',
    'after' => ':attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal' => ':attribute باید تاریخی بعد یا برابر :date باشد.',
    'alpha' => ':attribute باید فقط شامل حروف باشد.',
    'alpha_dash' => ':attribute باید فقط شامل حروف، اعداد، خط تیره و زیرخط باشد.',
    'alpha_num' => ':attribute باید فقط شامل حروف و اعداد باشد.',
    'any_of' => ':attribute معتبر نیست.',
    'array' => ':attribute باید یک آرایه باشد.',
    'ascii' => ':attribute باید فقط شامل کاراکترهای الفبایی و نمادهای تک‌بایتی باشد.',
    'before' => ':attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => ':attribute باید تاریخی قبل یا برابر :date باشد.',
    'between' => [
        'array' => ':attribute باید بین :min و :max آیتم داشته باشد.',
        'file' => ':attribute باید بین :min و :max کیلوبایت باشد.',
        'numeric' => ':attribute باید بین :min و :max باشد.',
        'string' => ':attribute باید بین :min و :max کاراکتر باشد.',
    ],
    'boolean' => ':attribute باید true یا false باشد.',
    'can' => ':attribute包含一个未经授权的值。',
    'confirmed' => 'تأیید :attribute مطابقت ندارد.',
    'contains' => ':attribute فاقد یک مقدار ضروری است.',
    'current_password' => 'رمز عبور اشتباه است.',
    'date' => ':attribute یک تاریخ معتبر نیست.',
    'date_equals' => ':attribute باید تاریخی برابر با :date باشد.',
    'date_format' => ':attribute باید با قالب :format مطابقت داشته باشد.',
    'decimal' => ':attribute باید :decimal رقم اعشار داشته باشد.',
    'declined' => ':attribute باید رد شود.',
    'declined_if' => 'هنگامی که :other برابر :value است، :attribute باید رد شود.',
    'different' => ':attribute و :other باید متفاوت باشند.',
    'digits' => ':attribute باید :digits رقم باشد.',
    'digits_between' => ':attribute باید بین :min و :max رقم باشد.',
    'dimensions' => 'ابعاد تصویر :attribute نامعتبر است.',
    'distinct' => ':attribute دارای مقدار تکراری است.',
    'doesnt_contain' => ':attribute نباید شامل هیچ‌کدام از موارد زیر باشد: :values.',
    'doesnt_end_with' => ':attribute نباید با یکی از موارد زیر پایان یابد: :values.',
    'doesnt_start_with' => ':attribute نباید با یکی از موارد زیر شروع شود: :values.',
    'email' => ':attribute باید یک آدرس ایمیل معتبر باشد.',
    'ends_with' => ':attribute باید با یکی از موارد زیر پایان یابد: :values.',
    'enum' => ':attribute انتخاب شده نامعتبر است.',
    'exists' => ':attribute انتخاب شده نامعتبر است.',
    'extensions' => ':attribute باید یکی از پسوندهای زیر را داشته باشد: :values.',
    'file' => ':attribute باید یک فایل باشد.',
    'filled' => ':attribute باید مقدار داشته باشد.',
    'gt' => [
        'array' => ':attribute باید بیشتر از :value آیتم داشته باشد.',
        'file' => ':attribute باید بزرگتر از :value کیلوبایت باشد.',
        'numeric' => ':attribute باید بزرگتر از :value باشد.',
        'string' => ':attribute باید بیشتر از :value کاراکتر باشد.',
    ],
    'gte' => [
        'array' => ':attribute باید :value آیتم یا بیشتر داشته باشد.',
        'file' => ':attribute باید بزرگتر یا مساوی :value کیلوبایت باشد.',
        'numeric' => ':attribute باید بزرگتر یا مساوی :value باشد.',
        'string' => ':attribute باید بیشتر یا مساوی :value کاراکتر باشد.',
    ],
    'hex_color' => ':attribute باید یک رنگ هگزادسیمال معتبر باشد.',
    'image' => ':attribute باید یک تصویر باشد.',
    'in' => ':attribute انتخاب شده نامعتبر است.',
    'in_array' => ':attribute باید در :other وجود داشته باشد.',
    'in_array_keys' => ':attribute باید حداقل یکی از کلیدهای زیر را شامل شود: :values.',
    'integer' => ':attribute باید یک عدد صحیح باشد.',
    'ip' => ':attribute باید یک آدرس IP معتبر باشد.',
    'ipv4' => ':attribute باید یک آدرس IPv4 معتبر باشد.',
    'ipv6' => ':attribute باید یک آدرس IPv6 معتبر باشد.',
    'json' => ':attribute باید یک رشته JSON معتبر باشد.',
    'list' => ':attribute باید یک لیست باشد.',
    'lowercase' => ':attribute باید با حروف کوچک باشد.',
    'lt' => [
        'array' => ':attribute باید کمتر از :value آیتم داشته باشد.',
        'file' => ':attribute باید کوچکتر از :value کیلوبایت باشد.',
        'numeric' => ':attribute باید کوچکتر از :value باشد.',
        'string' => ':attribute باید کمتر از :value کاراکتر باشد.',
    ],
    'lte' => [
        'array' => ':attribute نباید بیشتر از :value آیتم داشته باشد.',
        'file' => ':attribute باید کوچکتر یا مساوی :value کیلوبایت باشد.',
        'numeric' => ':attribute باید کوچکتر یا مساوی :value باشد.',
        'string' => ':attribute باید کمتر یا مساوی :value کاراکتر باشد.',
    ],
    'mac_address' => ':attribute باید یک آدرس MAC معتبر باشد.',
    'max' => [
        'array' => ':attribute نباید بیشتر از :max آیتم داشته باشد.',
        'file' => ':attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'numeric' => ':attribute نباید بزرگتر از :max باشد.',
        'string' => ':attribute نباید بیشتر از :max کاراکتر باشد.',
    ],
    'max_digits' => ':attribute نباید بیشتر از :max رقم داشته باشد.',
    'mimes' => ':attribute باید فایلی از نوع: :values باشد.',
    'mimetypes' => ':attribute باید فایلی از نوع: :values باشد.',
    'min' => [
        'array' => ':attribute باید حداقل :min آیتم داشته باشد.',
        'file' => ':attribute باید حداقل :min کیلوبایت باشد.',
        'numeric' => ':attribute باید حداقل :min باشد.',
        'string' => ':attribute باید حداقل :min کاراکتر باشد.',
    ],
    'min_digits' => ':attribute باید حداقل :min رقم داشته باشد.',
    'missing' => ':attribute باید وجود نداشته باشد.',
    'missing_if' => 'هنگامی که :other برابر :value است، :attribute باید وجود نداشته باشد.',
    'missing_unless' => ':attribute باید وجود نداشته باشد مگر اینکه :other برابر :value باشد.',
    'missing_with' => 'هنگامی که :values وجود دارد، :attribute باید وجود نداشته باشد.',
    'missing_with_all' => 'هنگامی که :values وجود دارند، :attribute باید وجود نداشته باشد.',
    'multiple_of' => ':attribute باید مضربی از :value باشد.',
    'not_in' => ':attribute انتخاب شده نامعتبر است.',
    'not_regex' => 'فرمت :attribute نامعتبر است.',
    'numeric' => ':attribute باید یک عدد باشد.',
    'password' => [
        'letters' => ':attribute باید حداقل شامل یک حرف باشد.',
        'mixed' => ':attribute باید حداقل شامل یک حرف بزرگ و یک حرف کوچک باشد.',
        'numbers' => ':attribute باید حداقل شامل یک عدد باشد.',
        'symbols' => ':attribute باید حداقل شامل یک نماد باشد.',
        'uncompromised' => ':attribute داده شده در یک نشت داده ظاهر شده است. لطفاً :attribute دیگری انتخاب کنید.',
    ],
    'present' => ':attribute باید وجود داشته باشد.',
    'present_if' => 'هنگامی که :other برابر :value است، :attribute باید وجود داشته باشد.',
    'present_unless' => ':attribute باید وجود داشته باشد مگر اینکه :other برابر :value باشد.',
    'present_with' => 'هنگامی که :values وجود دارد، :attribute باید وجود داشته باشد.',
    'present_with_all' => 'هنگامی که :values وجود دارند، :attribute باید وجود داشته باشد.',
    'prohibited' => ':attribute ممنوع است.',
    'prohibited_if' => 'هنگامی که :other برابر :value است، :attribute ممنوع است.',
    'prohibited_if_accepted' => 'هنگامی که :other پذیرفته شده است، :attribute ممنوع است.',
    'prohibited_if_declined' => 'هنگامی که :other رد شده است، :attribute ممنوع است.',
    'prohibited_unless' => ':attribute ممنوع است مگر اینکه :other در :values باشد.',
    'prohibits' => ':attribute وجود :other را ممنوع می‌کند.',
    'regex' => 'فرمت :attribute نامعتبر است.',
    'required' => 'فیلد :attribute الزامی است.',
    'required_array_keys' => ':attribute باید شامل موارد زیر باشد: :values.',
    'required_if' => 'هنگامی که :other برابر :value است، فیلد :attribute الزامی است.',
    'required_if_accepted' => 'هنگامی که :other پذیرفته شده است، فیلد :attribute الزامی است.',
    'required_if_declined' => 'هنگامی که :other رد شده است، فیلد :attribute الزامی است.',
    'required_unless' => 'فیلد :attribute الزامی است مگر اینکه :other در :values باشد.',
    'required_with' => 'هنگامی که :values وجود دارد، فیلد :attribute الزامی است.',
    'required_with_all' => 'هنگامی که :values وجود دارند، فیلد :attribute الزامی است.',
    'required_without' => 'هنگامی که :values وجود ندارد، فیلد :attribute الزامی است.',
    'required_without_all' => 'هنگامی که هیچ‌کدام از :values وجود ندارند، فیلد :attribute الزامی است.',
    'same' => ':attribute و :other باید مطابقت داشته باشند.',
    'size' => [
        'array' => ':attribute باید شامل :size آیتم باشد.',
        'file' => ':attribute باید :size کیلوبایت باشد.',
        'numeric' => ':attribute باید :size باشد.',
        'string' => ':attribute باید :size کاراکتر باشد.',
    ],
    'starts_with' => ':attribute باید با یکی از موارد زیر شروع شود: :values.',
    'string' => ':attribute باید یک رشته باشد.',
    'timezone' => ':attribute باید یک منطقه زمانی معتبر باشد.',
    'unique' => ':attribute قبلاً انتخاب شده است.',
    'uploaded' => 'بارگذاری :attribute ناموفق بود.',
    'uppercase' => ':attribute باید با حروف بزرگ باشد.',
    'url' => ':attribute باید یک آدرس معتبر باشد.',
    'ulid' => ':attribute باید یک ULID معتبر باشد.',
    'uuid' => ':attribute باید یک UUID معتبر باشد.',

    /*
    |--------------------------------------------------------------------------
    | خطوط زبان سفارشی اعتبارسنجی
    |--------------------------------------------------------------------------
    |
    | در اینجا می‌توانید پیام‌های اعتبارسنجی سفارشی را برای ویژگی‌ها با استفاده
    | از قرارداد "attribute.rule" برای نام‌گذاری خطوط مشخص کنید. این کار مشخص
    | کردن یک پیام زبان سفارشی خاص برای یک قانون ویژگی معین را سریع می‌کند.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'پیام-سفارشی',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | ویژگی‌های سفارشی اعتبارسنجی
    |--------------------------------------------------------------------------
    |
    | خطوط زبان زیر برای جایگزینی placeholder ویژگی‌های ما
    | با چیزی خواننده‌پسندتر مانند "آدرس ایمیل" به جای
    | "email" استفاده می‌شوند. این کار به سادگی به ما کمک می‌کند پیام خود را
    | رساتر کنیم.
    |
    */

    'attributes' => [
        'name' => 'نام',
        'username' => 'نام کاربری',
        'email' => 'ایمیل',
        'first_name' => 'نام',
        'last_name' => 'نام خانوادگی',
        'password' => 'رمز عبور',
        'password_confirmation' => 'تکرار رمز عبور',
        'city' => 'شهر',
        'country' => 'کشور',
        'address' => 'آدرس',
        'phone' => 'تلفن',
        'mobile' => 'موبایل',
        'age' => 'سن',
        'sex' => 'جنسیت',
        'gender' => 'جنسیت',
        'day' => 'روز',
        'month' => 'ماه',
        'year' => 'سال',
        'hour' => 'ساعت',
        'minute' => 'دقیقه',
        'second' => 'ثانیه',
        'title' => 'عنوان',
        'content' => 'محتوا',
        'description' => 'توضیحات',
        'excerpt' => 'گزیده مطلب',
        'date' => 'تاریخ',
        'time' => 'زمان',
        'available' => 'موجود',
        'size' => 'اندازه',
        'price' => 'قیمت',
        'quantity' => 'تعداد',
        'image' => 'تصویر',
        'file' => 'فایل',
        'category' => 'دسته‌بندی',
        'status' => 'وضعیت',
        'type' => 'نوع',
        'role' => 'نقش',
        'slug' => 'نامک',
        'url' => 'آدرس',
        'link' => 'لینک',
        'code' => 'کد',
        'id' => 'شناسه',
        'user_id' => 'شناسه کاربر',
        'product_id' => 'شناسه محصول',
        'order_id' => 'شناسه سفارش',
        'payment_method' => 'روش پرداخت',
        'shipping_address' => 'آدرس حمل و نقل',
        'billing_address' => 'آدرس صورت حساب',
        'start_date' => 'تاریخ شروع',
        'end_date' => 'تاریخ پایان',
        'due_date' => 'تاریخ سررسید',
    ],

];
