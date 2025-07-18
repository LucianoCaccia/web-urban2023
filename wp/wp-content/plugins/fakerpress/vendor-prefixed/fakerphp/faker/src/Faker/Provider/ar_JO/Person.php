<?php

namespace FakerPress\ThirdParty\Faker\Provider\ar_JO;

class Person extends \FakerPress\ThirdParty\Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    ];

    /**
     * @see http://muslim-names.us/
     */
    protected static $firstNameMale = [
        'آدم', 'أبراهيم', 'أبو بكر', 'أحمد', 'أدهم', 'أسامة', 'أسعد', 'أسيد', 'أشرف', 'أكثم', 'أكرم', 'أمجد', 'أمين', 'أنتوني', 'أنزور', 'أنس', 'أنمار', 'أنور', 'أواس', 'أوس', 'أيمن', 'أيهم', 'أيوب', 'إبراهيم', 'إسلام', 'إسماعيل', 'إلياس', 'إياد', 'إيهاب', 'ابان', 'ابراهام', 'ابراهيم', 'ابراهيم محمد', 'اثير', 'احسان', 'احمد', 'ادريس', 'ادم', 'ادهم', 'اديب', 'ارام', 'ازاد', 'ازد', 'اسامة', 'اسحاق', 'اسحق', 'اسعد', 'اسلام', 'اسماعيل', 'اسيد', 'اشراف', 'اشرف', 'اصلان', 'اكثم', 'اكرم', 'البراء', 'البشر', 'البطوش', 'الحارث', 'الحسين', 'الحمزه', 'الطفيل', 'العزم', 'الليث', 'المؤمن بالله', 'المثنى', 'المستبد', 'المعتز', 'المعتز بالله', 'المعتصم بالله', 'المنتصر بالله', 'المنصور', 'الياس', 'اليمان', 'امجد', 'امل', 'امير', 'امين', 'اندرو', 'انس', 'انور', 'انيس', 'اوس', 'اوسم', 'اوهان', 'اويس', 'اياد', 'اياد الدين', 'اياس', 'ايسر', 'ايليا', 'ايمن', 'ايهاب', 'ايهم', 'ايوب',
        'باجس', 'باسل', 'باسم', 'باندي', 'باهر', 'بدر', 'بدوان', 'براء', 'برنابا', 'برهان', 'بسام', 'بشار', 'بشارة', 'بشر', 'بشير', 'بطرس', 'بكر', 'بلال', 'بليغ', 'بندر', 'بهاء', 'بهاء الدين', 'بيتر',
        'تامر', 'تحسين', 'تركي', 'تشارلي', 'تقي الدين', 'توفيق', 'تيسير', 'تيمور',
        'ثائر', 'ثامر',
        'جابر', 'جاد', 'جاسر', 'جاسم', 'جاك', 'جباغ', 'جبر', 'جبرائي', 'جبير', 'جراح', 'جريس', 'جعفر', 'جلال', 'جلال الدين', 'جمال', 'جمزه', 'جميل', 'جهاد', 'جواد', 'جودت', 'جورج', 'جوزيف',
        'حابس', 'حاتم', 'حارث', 'حارثه', 'حازم', 'حازم محمد', 'حافظ', 'حاكم', 'حالد', 'حامد', 'حبيب', 'حذيفة', 'حذيفه', 'حسام', 'حسام الدين', 'حسان', 'حسن', 'حسني', 'حسين', 'حكم', 'حكمت', 'حلمي', 'حماده', 'حمد', 'حمدالله', 'حمدان', 'حمدي', 'حمزة', 'حمزه', 'حمود', 'حمودة', 'حموده', 'حميد', 'حنا', 'خالد',
        'خضر', 'خلدون', 'خلف', 'خليفة', 'خليفه', 'خليل', 'خميس', 'خير الدين', 'خيرالله', 'خيري',
        'دانتي', 'داني', 'دانيال', 'داود', 'داوود',
        'ذياب', 'ذيب',
        'رأفت', 'رؤوف', 'رئاد', 'رائد', 'رائف', 'راجح', 'راجي', 'راشد', 'راضي', 'راغب', 'رافت', 'رافع', 'رافي', 'راكان', 'رامان', 'رامز', 'رامي', 'رامين', 'ربيع', 'رجا', 'رجائي', 'رجب', 'رداد', 'رزق', 'رسلان', 'رسلان الدين', 'رشاد', 'رشبد', 'رشيد', 'رضا', 'رضوان', 'رعد', 'رغد', 'رغيد', 'ركان', 'رماح', 'رمزي', 'رمضان', 'رهاب', 'رواد', 'روحي', 'روزا', 'روني', 'رياض', 'ريان', 'ريتشارد', 'ريمون',
        'زاهر', 'زاهي', 'زايد', 'زبد', 'زخريا', 'زكريا', 'زكي', 'زمام', 'زهدي', 'زهير', 'زياد', 'زيد', 'زيدان', 'زيدون', 'زين', 'زين العابدين', 'سائد', 'سابا', 'ساري', 'سالم', 'سامح', 'سامر', 'سامي', 'ساهر', 'سدير', 'سركيس', 'سرمد', 'سري', 'سعد', 'سعدي', 'سعود', 'سعيد', 'سفيان', 'سكوت', 'سلام', 'سلطان', 'سلمان', 'سليم', 'سليمان', 'سمؤل', 'سمعان', 'سميح', 'سمير', 'سنان', 'سند', 'سهام الدين', 'سهل', 'سهم', 'سيف', 'سيف الاسلام', 'سيف الدين', 'سيمون',
        'شادي', 'شارلي', 'شافع', 'شاكر', 'شامان', 'شامل', 'شاهر', 'شحادة', 'شحاده', 'شربف', 'شرحبيل', 'شريف', 'شكري', 'شهاب', 'شهم', 'شوان', 'شوقي', 'شوكت',
        'صادق', 'صافي', 'صالح', 'صبحي', 'صبره', 'صبري', 'صخر', 'صدام', 'صدقي', 'صفاء', 'صفوان', 'صقر', 'صلاح', 'صلاح الدين', 'صليبا', 'صهيب',
        'ضرار', 'ضرغام', 'ضياء', 'ضياء الدين',
        'طارق', 'طالب', 'طاهر', 'طلال', 'طه',
        'عادل', 'عاصم', 'عاطف', 'عامر', 'عايد', 'عبادة', 'عباده', 'عباس', 'عبد', 'عبد الباري', 'عبد الحافظ', 'عبد الحكيم', 'عبد الحليم', 'عبد الحميد', 'عبد الحي', 'عبد الرحمان', 'عبد الرحمن', 'عبد الرحيم', 'عبد الرزاق', 'عبد السلام', 'عبد السميع', 'عبد العزيز', 'عبد العفو', 'عبد الغني', 'عبد الفتاح', 'عبد القادر', 'عبد الكريم', 'عبد اللطيف', 'عبد الله', 'عبد المجيد', 'عبد المولى', 'عبد الناصر', 'عبد الهادي', 'عبد ربه', 'عبداالله', 'عبدالاله', 'عبدالباسط', 'عبدالجليل', 'عبدالجواد', 'عبدالحليم', 'عبدالحميد', 'عبدالرؤوف', 'عبدالرحمن', 'عبدالرحيم', 'عبدالرزاق', 'عبدالسلام', 'عبدالعزيز', 'عبدالفتاح', 'عبدالقادر', 'عبدالكريم', 'عبداللطيف', 'عبدالله', 'عبدالمجيد', 'عبدالمطلب', 'عبدالمعطي', 'عبدالمهيمن', 'عبدالناصر', 'عبدالهادي', 'عبدالوهاب', 'عبدربه', 'عبده', 'عبود', 'عبيدالله', 'عبيدة', 'عتيبه', 'عثمان', 'عدب', 'عدلي', 'عدنان', 'عدوان', 'عدى', 'عدي', 'عرار', 'عربي', 'عرفات', 'عرفة', 'عرمان', 'عروة', 'عريق', 'عرين', 'عز الدين', 'عزالدين', 'عزام', 'عزت', 'عزمي', 'عزيز', 'عصام', 'عصمت', 'عطا', 'عطاالله', 'عطيه', 'عقل', 'علاء', 'علاء الدين', 'علي', 'عليان', 'عماد', 'عماد الدين', 'عمادالدين', 'عمار', 'عمر', 'عمراسامة', 'عمران', 'عمرو', 'عملا', 'عميد', 'عناد', 'عنان', 'عواد', 'عودة', 'عوده', 'عوض', 'عوف', 'عون', 'عوني', 'عيد', 'عيدالله', 'عيسى',
        'غازي', 'غالب', 'غانم', 'غدير', 'غسان', 'غيث',
        'فؤاد', 'فؤاس', 'فائق', 'فاخر', 'فادي', 'فارس', 'فاروق', 'فاضل', 'فايز', 'فتحي', 'فجر', 'فخرى', 'فخري', 'فرأس', 'فراس', 'فرح', 'فريد', 'فكتور', 'فلاح', 'فندي', 'فهد', 'فهمي', 'فواز', 'فوزي', 'فيصل', 'فيليب',
        'قارس', 'قاسم', 'قبلان', 'قتاده', 'قتيبة', 'قتيبه', 'قصي', 'قيس',
        'كاسترو', 'كاظم', 'كامل', 'كايد', 'كرم', 'كريم', 'كفاح', 'كمال', 'كنان',
        'لؤي', 'لؤي الدين', 'لبيب', 'لطف', 'لطفي', 'لورنس', 'لويس', 'ليث', 'ليث الدين', 'ليليان',
        'مأمون', 'مؤتمن', 'مؤثر', 'مؤمن', 'مؤنس', 'مؤيد', 'ماجد', 'مارتن', 'مارسيل', 'مازن', 'مالك', 'مامون', 'ماهر', 'مبارك', 'مثنى', 'مجاهد', 'مجد', 'مجدي', 'مجمد', 'محسن', 'محمد‏ ‏', 'محمود', 'محي', 'محي الدين', 'مختار', 'مخلص', 'مدحت', 'مدين', 'مراد', 'مرشد', 'مرهف', 'مروان', 'مسعد', 'مسعود', 'مسلم', 'مشاري', 'مشعل', 'مشهور', 'مشيل', 'مصباح', 'مصطغى', 'مصطفى', 'مصطفي', 'مصطلفى', 'مصعب', 'مضر', 'مطيع', 'مظفر', 'مظهر', 'معاد', 'معاذ', 'معاوية', 'معاويه', 'معتز', 'معتصم', 'معمر', 'معن', 'معنصم', 'معويه', 'معين', 'مفدي', 'مفلح', 'مقداد', 'مكين', 'ملهم', 'ممدوح', 'مناف', 'منتصر', 'منح', 'منذر', 'منصف', 'منصور', 'منقذ', 'منير', 'مهاب', 'مهدي', 'مهران', 'مهند', 'موسى', 'موفق', 'مياس', 'ميسم', 'ميشيل', 'ميلاد', 'مينا',
        'نائل', 'ناجي', 'نادر', 'نارت', 'ناصر', 'ناهض', 'نايف', 'نبراس', 'نبيل', 'نتانت', 'نجاتي', 'نجيب', 'نديم', 'نزار', 'نزال', 'نزيه', 'نسيم', 'نشات', 'نصار', 'نصر', 'نصري', 'نصوح', 'نضال', 'نظام', 'نعمان', 'نعمة', 'نعيم', 'نقولا', 'نمر', 'نهاد', 'نهار', 'نواف', 'نور', 'نور الدين', 'نورالدين', 'نورس', 'نوفان',
        'هادي', 'هارون', 'هاشم', 'هاكان', 'هانى', 'هاني', 'هذال', 'هشام', 'هلال', 'همام', 'هملر', 'هناء', 'هيثم',
        'وائل', 'واثق', 'واصف', 'وجدي', 'وجيه', 'وحيد', 'وديع', 'ورد', 'وسام', 'وسام الدين', 'وسن', 'وسيم', 'وصفي', 'وضاح', 'وعد', 'وفاء', 'وليد', 'وهيب',
        'ياسر', 'ياسين', 'يامن', 'يحيى', 'يزن', 'يزيد', 'يسار', 'يشار', 'يعرب', 'يعقوب', 'يمان', 'ينال', 'يوسف', 'يونس',
    ];

    /**
     * @see http://muslim-names.us/
     */
    protected static $firstNameFemale = [
        'آثار', 'آلاء', 'آناء', 'آية', 'أبرار', 'أحلام', 'أروى', 'أريج', 'أسماء', 'أسيل', 'أصاله', 'أفنان', 'ألاء', 'أماني', 'أمل', 'أميرة', 'أنسام', 'أنطوانيت', 'أنوار', 'أيات', 'أية', 'أيناس', 'أيه', 'ؤقهسفغ', 'إباء', 'إخلاص', 'إسراء', 'إسلام', 'إكرام', 'إنعام', 'إيمان', 'إيناس', 'ابتهاج', 'ابتهال', 'ابرار', 'ابراهيم', 'اتيان', 'احسان', 'احلام', 'احمد', 'اخلاص', 'ارجوان', 'اروى', 'اريج', 'ازهار', 'اسامة', 'اسحار', 'اسرا', 'اسراء', 'اسرار', 'اسلام', 'اسما', 'اسماء', 'اسمهان', 'اسمى', 'اسيل', 'اشراق', 'اصالة', 'اعتدال', 'افراح', 'افنان', 'افيا', 'اكرام', 'الاء', 'العنود', 'الهام', 'اليان', 'اليزابيث', 'امال', 'اماندا', 'اماني', 'امل', 'امنه', 'اميرة', 'اميليا', 'امينة', 'اناهيد', 'انتظار', 'انجليكا', 'انعام', 'انوار', 'اويس', 'ايات', 'ايام', 'اية', 'ايفا', 'ايفان', 'ايفون', 'ايمان', 'ايناس', 'ايه',
        'باسمة', 'باميلا', 'بان', 'بانا', 'بتول', 'بثينه', 'بدور', 'براء', 'براءة', 'برديس', 'بروين', 'بسمة', 'بشائر', 'بشرى', 'بلسم', 'بلقيس', 'بنان', 'بهجه', 'بيا', 'بيان', 'بيداء', 'بيسان',
        'تالا', 'تالة', 'تالين', 'تامر', 'تانيا ماريا', 'تحرير', 'تسنيم', 'تغريد', 'تقوى', 'تقى', 'تمارا', 'تماضر', 'تمام', 'تهاني', 'تولين',
        'ثريا',
        'جاسمن', 'جالا', 'جلنار', 'جمانا', 'جمانة', 'جميلة', 'جنى', 'جهاد', 'جوانا', 'جود', 'جورجيت', 'جوسيت', 'جولييت', 'جيانا', 'جيسيكا',
        'حبيبة', 'حسناء', 'حصه', 'حلا', 'حليمة', 'حنان', 'حنين', 'حياة',
        'ختام', 'خديجه', 'خلود', 'خولة',
        'دارين', 'داليا', 'دالية', 'دانا', 'دانا كريستيل جميلة', 'دانة', 'دانية', 'دانييل', 'دبنا', 'دعاء', 'دعد', 'دلال', 'دنى', 'دنيا', 'دولا', 'ديالا', 'ديان', 'ديانا', 'ديما', 'دينا',
        'رؤى', 'رؤيه', 'رابعة', 'راغدة', 'راما', 'رانا', 'راندي', 'رانيا', 'راوية', 'راية', 'ربا', 'رباب', 'ربى', 'رجاء', 'رحمة', 'رحمه', 'ردينة', 'رزان', 'رشا', 'رغد', 'رغدة', 'رفاعية', 'رفاه', 'رقية', 'رقيه', 'رلى', 'رمال', 'رنا', 'رناد', 'رند', 'رنده', 'رنيم', 'رنين', 'رهام', 'رهف', 'رواء', 'روان', 'روبينا', 'روتانا', 'روحية', 'رودا', 'روزان', 'روزانا', 'روزين', 'رولى', 'روند', 'رويدة', 'ريان', 'ريتا', 'ريم', 'ريما', 'ريمان', 'ريناتا', 'ريناد', 'ريهام',
        'زكية', 'زمان', 'زها', 'زهرة', 'زين', 'زينا', 'زينات', 'زينب', 'زينة', 'ساجدة', 'ساجده', 'سارة', 'سارين', 'سالي', 'ساندرا', 'ساندي', 'سباتا', 'سجى', 'سحر', 'سدين', 'سرى', 'سرين', 'سعاد', 'سكينة', 'سلام', 'سلسبيل', 'سلمى', 'سلوى', 'سما', 'سماح', 'سماره', 'سمر', 'سمية', 'سميره', 'سميه', 'سناء', 'سنابل', 'سندس', 'سنريت', 'سنن', 'سها', 'سهاد', 'سهام', 'سهر', 'سهى', 'سهير', 'سهيله', 'سوار', 'سوزان', 'سوزانا', 'سوسن', 'سيرين', 'سيرينا', 'سيلفا', 'سيلين', 'سيما',
        'شدى', 'شذا', 'شذى', 'شروق', 'شريفة', 'شرين', 'شريهان', 'شفاء', 'شهد', 'شهناز', 'شيرين', 'شيماء',
        'صابرين', 'صالح', 'صبا', 'صباح', 'صباحت', 'صبرين', 'صحر', 'صفا', 'صفاء', 'صفية', 'صمود',
        'ضحى', 'ضياء',
        'عائشة', 'عاليا', 'عالية', 'عايشة', 'عبلة', 'عبير', 'عدله', 'عرين', 'عزة', 'عزيزة', 'عفاف', 'علا', 'علياء', 'عنود', 'عهد',
        'غادة', 'غدير', 'غرام', 'غزل', 'غصون', 'غفران', 'غنى', 'غيد', 'غيداء', 'غيده', 'غيفار',
        'فاتن', 'فادية', 'فاديه', 'فاطمة', 'فايزة', 'فتحية', 'فتحيه', 'فتنه', 'فداء', 'فدوى', 'فدى', 'فرح', 'فريال', 'فريدة', 'فوزية', 'فيروز', 'فيفيان',
        'قمر',
        'كاترين', 'كاتيا', 'كارلا', 'كرستينا', 'كريستين', 'كريستينا', 'كلوديت', 'كلودين', 'كوثر', 'كيان',
        'لارا', 'لاري', 'لانا', 'لبنا', 'لجين', 'لطيفة', 'لمى', 'لميس', 'لنا', 'لورا', 'لورينا', 'لوسانا', 'لوسينا', 'لونا', 'ليان', 'ليدا', 'ليلى', 'ليليان', 'لين', 'لينا', 'لينة', 'ليندا', 'لينه',
        'مادلين', 'ماري', 'ماريا', 'ماريان', 'مارينا', 'مايا', 'مجد', 'مجدولين', 'محبوبة', 'مديحة', 'مرام', 'مرح', 'مروة', 'مريام', 'مريانا', 'مريم', 'مسعدة', 'مشيرة', 'معالي', 'ملاك', 'ملك', 'منار', 'منال', 'منى', 'مها', 'مهتاب', 'مي', 'ميادة', 'مياده', 'ميار', 'ميان', 'ميرا', 'ميرال', 'ميران', 'ميرفت', 'ميرنا', 'ميريت', 'ميس', 'ميسا', 'ميساء', 'ميسر', 'ميسره', 'ميسم', 'ميسون', 'ميلاء', 'ميناس',
        'نائله', 'ناتاشا', 'ناتالي', 'ناديا', 'نادية', 'نادين', 'ناديه', 'ناردين', 'ناريمان', 'نانسي', 'نبال', 'نبراس', 'نبيله', 'نجاة', 'نجاح', 'نجلاء', 'نجوان', 'نجود', 'نجوى', 'نداء', 'ندى', 'ندين', 'نرمين', 'نزميه', 'نسرين', 'نسيمة', 'نعمت', 'نعمه', 'نهاد', 'نهى', 'نهيدة', 'نوال', 'نور', 'نور الهدى', 'نورا', 'نوران', 'نيروز', 'نيفين',
        'هادلين', 'هازار', 'هالة', 'هانيا', 'هايدي', 'هبة', 'هدايه', 'هدى', 'هديل', 'هزار', 'هلا', 'هلين', 'هنا', 'هناء', 'هنادا', 'هنادي', 'هند', 'هيا', 'هيفا', 'هيفاء', 'هيلين',
        'وئام', 'وجدان', 'وداد', 'ورود', 'وسام', 'وسن', 'وسيم', 'وعد', 'وفاء', 'ولاء',
        'ىمنة', 'يارا', 'ياسمين', 'يافا', 'يسرى', 'ينان', 'ﻟﻮﺗﺸﻴﺎ',
    ];

    protected static $lastName = [
        'آلهامي', 'أبو الرب', 'ابو رحمة', 'ابو سعده', 'ابو يوسف', 'ابوالحاج', 'الامام', 'البتراء', 'البلبيسي', 'الترابين', 'التلهوني', 'الجبارات', 'الجرَّاح', 'الجوابره', 'الجوالدة', 'الحجايا', 'الحوراني', 'الدعجة', 'الردايدة', 'الرشدان', 'الرفاعي', 'الروابدة', 'الروسان', 'الريماوي', 'الزعبية', 'الزوربا', 'السحاقات', 'السحيمات', 'السراج', 'السعد', 'السلطية', 'السيوف', 'الشامي', 'الشريدة', 'الشريف', 'الشطناوي', 'الشمالي', 'الصرايرة', 'الصمادي', 'الصنات', 'الضمور', 'الطباع', 'الطراونة', 'الطويسات', 'الطويل', 'العدوان', 'العضيبات', 'العلامي', 'العمري', 'العمرية', 'العناسوة', 'العنانبه', 'الغريب', 'الفاخوري', 'الفاعوري', 'الفناطسة', 'القطيشات', 'الكردي', 'الكركي', 'المبيضين', 'المجالي', 'المحاميد', 'المساعيد', 'المشاهره', 'المصري', 'المعشر', 'المواجدة', 'المومنى', 'المومنية', 'النسور', 'النشاشيبي', 'النعيمات', 'الهلسة', 'الوشاح',
        'بني حسن', 'بني صقر',
        'سحاب',
        'شمر',
        'ضميدات',
        'طلفاح',
        'عابدين', 'عباد', 'عجلون', 'عقلة', 'عناسوة',
        'مطير', 'معاني',
        'وادي',
    ];

    protected static $titleMale = ['السيد', 'الأستاذ', 'الدكتور', 'المهندس'];
    protected static $titleFemale = ['السيدة', 'الآنسة', 'الدكتورة', 'المهندسة'];
    private static $prefix = ['أ.', 'د.', 'أ.د', 'م.'];

    /**
     * @example 'أ.'
     */
    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }
}
