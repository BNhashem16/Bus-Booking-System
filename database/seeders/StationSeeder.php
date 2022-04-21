<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationSeeder extends Seeder
{
    public function run()
    {
        $tableName = Station::getTableName();
        DB::table($tableName)->delete();

        DB::table($tableName)->insert([
            [
                'id' => 1,
                'name_ar' => '15 مايو',
                'name_en' => '15 May',
            ],
            [
                'id' => 2,
                'name_ar' => 'الازبكية',
                'name_en' => 'Al Azbakeyah',
            ],
            [
                'id' => 3,
                'name_ar' => 'البساتين',
                'name_en' => 'Al Basatin',
            ],
            [
                'id' => 4,
                'name_ar' => 'التبين',
                'name_en' => 'Tebin',
            ],
            [
                'id' => 5,
                'name_ar' => 'الخليفة',
                'name_en' => 'El-Khalifa',
            ],
            [
                'id' => 6,
                'name_ar' => 'الدراسة',
                'name_en' => 'El darrasa',
            ],
            [
                'id' => 7,
                'name_ar' => 'الدرب الاحمر',
                'name_en' => 'Aldarb Alahmar',
            ],
            [
                'id' => 8,
                'name_ar' => 'الزاوية الحمراء',
                'name_en' => 'Zawya al-Hamra',
            ],
            [
                'id' => 9,
                'name_ar' => 'الزيتون',
                'name_en' => 'El-Zaytoun',
            ],
            [
                'id' => 10,
                'name_ar' => 'الساحل',
                'name_en' => 'Sahel',
            ],
            [
                'id' => 11,
                'name_ar' => 'السلام',
                'name_en' => 'El Salam',
            ],
            [
                'id' => 12,
                'name_ar' => 'السيدة زينب',
                'name_en' => 'Sayeda Zeinab',
            ],
            [
                'id' => 13,
                'name_ar' => 'الشرابية',
                'name_en' => 'El Sharabeya',
            ],
            [
                'id' => 14,
                'name_ar' => 'مدينة الشروق',
                'name_en' => 'Shorouk',
            ],
            [
                'id' => 15,
                'name_ar' => 'الظاهر',
                'name_en' => 'El Daher',
            ],
            [
                'id' => 16,
                'name_ar' => 'العتبة',
                'name_en' => 'Ataba',
            ],
            [
                'id' => 17,
                'name_ar' => 'القاهرة الجديدة',
                'name_en' => 'New Cairo',
            ],
            [
                'id' => 18,
                'name_ar' => 'المرج',
                'name_en' => 'El Marg',
            ],
            [
                'id' => 19,
                'name_ar' => 'عزبة النخل',
                'name_en' => 'Ezbet el Nakhl',
            ],
            [
                'id' => 20,
                'name_ar' => 'المطرية',
                'name_en' => 'Matareya',
            ],
            [
                'id' => 21,
                'name_ar' => 'المعادى',
                'name_en' => 'Maadi',
            ],
            [
                'id' => 22,
                'name_ar' => 'المعصرة',
                'name_en' => 'Maasara',
            ],
            [
                'id' => 23,
                'name_ar' => 'المقطم',
                'name_en' => 'Mokattam',
            ],
            [
                'id' => 24,
                'name_ar' => 'المنيل',
                'name_en' => 'Manyal',
            ],
            [
                'id' => 25,
                'name_ar' => 'الموسكى',
                'name_en' => 'Mosky',
            ],
            [
                'id' => 26,
                'name_ar' => 'النزهة',
                'name_en' => 'Nozha',
            ],
            [
                'id' => 27,
                'name_ar' => 'الوايلى',
                'name_en' => 'Waily',
            ],
            [
                'id' => 28,
                'name_ar' => 'باب الشعرية',
                'name_en' => 'Bab al-Shereia',
            ],
            [
                'id' => 29,
                'name_ar' => 'بولاق',
                'name_en' => 'Bolaq',
            ],
            [
                'id' => 30,
                'name_ar' => 'جاردن سيتى',
                'name_en' => 'Garden City',
            ],
            [
                'id' => 31,
                'name_ar' => 'حدائق القبة',
                'name_en' => 'Hadayek El-Kobba',
            ],
            [
                'id' => 32,
                'name_ar' => 'حلوان',
                'name_en' => 'Helwan',
            ],
            [
                'id' => 33,
                'name_ar' => 'دار السلام',
                'name_en' => 'Dar Al Salam',
            ],
            [
                'id' => 34,
                'name_ar' => 'شبرا',
                'name_en' => 'Shubra',
            ],
            [
                'id' => 35,
                'name_ar' => 'طره',
                'name_en' => 'Tura',
            ],
            [
                'id' => 36,
                'name_ar' => 'عابدين',
                'name_en' => 'Abdeen',
            ],
            [
                'id' => 37,
                'name_ar' => 'عباسية',
                'name_en' => 'Abaseya',
            ],
            [
                'id' => 38,
                'name_ar' => 'عين شمس',
                'name_en' => 'Ain Shams',
            ],
            [
                'id' => 39,
                'name_ar' => 'مدينة نصر',
                'name_en' => 'Nasr City',
            ],
            [
                'id' => 40,
                'name_ar' => 'مصر الجديدة',
                'name_en' => 'New Heliopolis',
            ],
            [
                'id' => 41,
                'name_ar' => 'مصر القديمة',
                'name_en' => 'Masr Al Qadima',
            ],
            [
                'id' => 42,
                'name_ar' => 'منشية ناصر',
                'name_en' => 'Mansheya Nasir',
            ],
            [
                'id' => 43,
                'name_ar' => 'مدينة بدر',
                'name_en' => 'Badr City',
            ],
            [
                'id' => 44,
                'name_ar' => 'مدينة العبور',
                'name_en' => 'Obour City',
            ],
            [
                'id' => 45,
                'name_ar' => 'وسط البلد',
                'name_en' => 'Cairo Downtown',
            ],
            [
                'id' => 46,
                'name_ar' => 'الزمالك',
                'name_en' => 'Zamalek',
            ],
            [
                'id' => 47,
                'name_ar' => 'قصر النيل',
                'name_en' => 'Kasr El Nile',
            ],
            [
                'id' => 48,
                'name_ar' => 'الرحاب',
                'name_en' => 'Rehab',
            ],
            [
                'id' => 49,
                'name_ar' => 'القطامية',
                'name_en' => 'Katameya',
            ],
            [
                'id' => 50,
                'name_ar' => 'مدينتي',
                'name_en' => 'Madinty',
            ],
            [
                'id' => 51,
                'name_ar' => 'روض الفرج',
                'name_en' => 'Rod Alfarag',
            ],
            [
                'id' => 52,
                'name_ar' => 'شيراتون',
                'name_en' => 'Sheraton',
            ],
            [
                'id' => 53,
                'name_ar' => 'الجمالية',
                'name_en' => 'El-Gamaleya',
            ],
            [
                'id' => 54,
                'name_ar' => 'العاشر من رمضان',
                'name_en' => '10th of Ramadan City',
            ],
            [
                'id' => 55,
                'name_ar' => 'الحلمية',
                'name_en' => 'Helmeyat Alzaytoun',
            ],
            [
                'id' => 56,
                'name_ar' => 'النزهة الجديدة',
                'name_en' => 'New Nozha',
            ],
            [
                'id' => 57,
                'name_ar' => 'العاصمة الإدارية',
                'name_en' => 'Capital New',
            ],
            [
                'id' => 58,
                'name_ar' => 'الجيزة',
                'name_en' => 'Giza',
            ],
            [
                'id' => 59,
                'name_ar' => 'السادس من أكتوبر',
                'name_en' => 'Sixth of October',
            ],
            [
                'id' => 60,
                'name_ar' => 'الشيخ زايد',
                'name_en' => 'Cheikh Zayed',
            ],
            [
                'id' => 61,
                'name_ar' => 'الحوامدية',
                'name_en' => 'Hawamdiyah',
            ],
            [
                'id' => 62,
                'name_ar' => 'البدرشين',
                'name_en' => 'Al Badrasheen',
            ],
            [
                'id' => 63,
                'name_ar' => 'الصف',
                'name_en' => 'Saf',
            ],
            [
                'id' => 64,
                'name_ar' => 'أطفيح',
                'name_en' => 'Atfih',
            ],
            [
                'id' => 65,
                'name_ar' => 'العياط',
                'name_en' => 'Al Ayat',
            ],
            [
                'id' => 66,
                'name_ar' => 'الباويطي',
                'name_en' => 'Al-Bawaiti',
            ],
            [
                'id' => 67,
                'name_ar' => 'منشأة القناطر',
                'name_en' => 'ManshiyetAl Qanater',
            ],
            [
                'id' => 68,
                'name_ar' => 'أوسيم',
                'name_en' => 'Oaseem',
            ],
            [
                'id' => 69,
                'name_ar' => 'كرداسة',
                'name_en' => 'Kerdasa',
            ],
            [
                'id' => 70,
                'name_ar' => 'أبو النمرس',
                'name_en' => 'Abu Nomros',
            ],
            [
                'id' => 71,
                'name_ar' => 'كفر غطاطي',
                'name_en' => 'Kafr Ghati',
            ],
            [
                'id' => 72,
                'name_ar' => 'منشأة البكاري',
                'name_en' => 'Manshiyet Al Bakari',
            ],
            [
                'id' => 73,
                'name_ar' => 'الدقى',
                'name_en' => 'Dokki',
            ],
            [
                'id' => 74,
                'name_ar' => 'العجوزة',
                'name_en' => 'Agouza',
            ],
            [
                'id' => 75,
                'name_ar' => 'الهرم',
                'name_en' => 'Haram',
            ],
            [
                'id' => 76,
                'name_ar' => 'الوراق',
                'name_en' => 'Warraq',
            ],
            [
                'id' => 77,
                'name_ar' => 'امبابة',
                'name_en' => 'Imbaba',
            ],
            [
                'id' => 78,
                'name_ar' => 'بولاق الدكرور',
                'name_en' => 'Boulaq Dakrour',
            ],
            [
                'id' => 79,
                'name_ar' => 'الواحات البحرية',
                'name_en' => 'Al Wahat Al Baharia',
            ],
            [
                'id' => 80,
                'name_ar' => 'العمرانية',
                'name_en' => 'Omraneya',
            ],
            [
                'id' => 81,
                'name_ar' => 'المنيب',
                'name_en' => 'Moneeb',
            ],
            [
                'id' => 82,
                'name_ar' => 'بين السرايات',
                'name_en' => 'Bin Alsarayat',
            ],
            [
                'id' => 83,
                'name_ar' => 'الكيت كات',
                'name_en' => 'Kit Kat',
            ],
            [
                'id' => 84,
                'name_ar' => 'المهندسين',
                'name_en' => 'Mohandessin',
            ],
            [
                'id' => 85,
                'name_ar' => 'فيصل',
                'name_en' => 'Faisal',
            ],
            [
                'id' => 86,
                'name_ar' => 'أبو رواش',
                'name_en' => 'Abu Rawash',
            ],
            [
                'id' => 87,
                'name_ar' => 'حدائق الأهرام',
                'name_en' => 'Hadayek Alahram',
            ],
            [
                'id' => 88,
                'name_ar' => 'الحرانية',
                'name_en' => 'Haraneya',
            ],
            [
                'id' => 89,
                'name_ar' => 'حدائق اكتوبر',
                'name_en' => 'Hadayek October',
            ],
            [
                'id' => 90,
                'name_ar' => 'صفط اللبن',
                'name_en' => 'Saft Allaban',
            ],
            [
                'id' => 91,
                'name_ar' => 'القرية الذكية',
                'name_en' => 'Smart Village',
            ],
            [
                'id' => 92,
                'name_ar' => 'ارض اللواء',
                'name_en' => 'Ard Ellwaa',
            ],
            [
                'id' => 93,
                'name_ar' => 'ابو قير',
                'name_en' => 'Abu Qir',
            ],
            [
                'id' => 94,
                'name_ar' => 'الابراهيمية',
                'name_en' => 'Al Ibrahimeyah',
            ],
            [
                'id' => 95,
                'name_ar' => 'الأزاريطة',
                'name_en' => 'Azarita',
            ],
            [
                'id' => 96,
                'name_ar' => 'الانفوشى',
                'name_en' => 'Anfoushi',
            ],
            [
                'id' => 97,
                'name_ar' => 'الدخيلة',
                'name_en' => 'Dekheila',
            ],
            [
                'id' => 98,
                'name_ar' => 'السيوف',
                'name_en' => 'El Soyof',
            ],
            [
                'id' => 99,
                'name_ar' => 'العامرية',
                'name_en' => 'Ameria',
            ],
            [
                'id' => 100,
                'name_ar' => 'اللبان',
                'name_en' => 'El Labban',
            ],
            [
                'id' => 101,
                'name_ar' => 'المفروزة',
                'name_en' => 'Al Mafrouza',
            ],
            [
                'id' => 102,
                'name_ar' => 'المنتزه',
                'name_en' => 'El Montaza',
            ],
            [
                'id' => 103,
                'name_ar' => 'المنشية',
                'name_en' => 'Mansheya',
            ],
            [
                'id' => 104,
                'name_ar' => 'الناصرية',
                'name_en' => 'Naseria',
            ],
            [
                'id' => 105,
                'name_ar' => 'امبروزو',
                'name_en' => 'Ambrozo',
            ],
            [
                'id' => 106,
                'name_ar' => 'باب شرق',
                'name_en' => 'Bab Sharq',
            ],
            [
                'id' => 107,
                'name_ar' => 'برج العرب',
                'name_en' => 'Bourj Alarab',
            ],
            [
                'id' => 108,
                'name_ar' => 'ستانلى',
                'name_en' => 'Stanley',
            ],
            [
                'id' => 109,
                'name_ar' => 'سموحة',
                'name_en' => 'Smouha',
            ],
            [
                'id' => 110,
                'name_ar' => 'سيدى بشر',
                'name_en' => 'Sidi Bishr',
            ],
            [
                'id' => 111,
                'name_ar' => 'شدس',
                'name_en' => 'Shads',
            ],
            [
                'id' => 112,
                'name_ar' => 'غيط العنب',
                'name_en' => 'Gheet Alenab',
            ],
            [
                'id' => 113,
                'name_ar' => 'فلمينج',
                'name_en' => 'Fleming',
            ],
            [
                'id' => 114,
                'name_ar' => 'فيكتوريا',
                'name_en' => 'Victoria',
            ],
            [
                'id' => 115,
                'name_ar' => 'كامب شيزار',
                'name_en' => 'Camp Shizar',
            ],
            [
                'id' => 116,
                'name_ar' => 'كرموز',
                'name_en' => 'Karmooz',
            ],
            [
                'id' => 117,
                'name_ar' => 'محطة الرمل',
                'name_en' => 'Mahta Alraml',
            ],
            [
                'id' => 118,
                'name_ar' => 'مينا البصل',
                'name_en' => 'Mina El-Basal',
            ],
            [
                'id' => 119,
                'name_ar' => 'العصافرة',
                'name_en' => 'Asafra',
            ],
            [
                'id' => 120,
                'name_ar' => 'العجمي',
                'name_en' => 'Agamy',
            ],
            [
                'id' => 121,
                'name_ar' => 'بكوس',
                'name_en' => 'Bakos',
            ],
            [
                'id' => 122,
                'name_ar' => 'بولكلي',
                'name_en' => 'Boulkly',
            ],
            [
                'id' => 123,
                'name_ar' => 'كليوباترا',
                'name_en' => 'Cleopatra',
            ],
            [
                'id' => 124,
                'name_ar' => 'جليم',
                'name_en' => 'Glim',
            ],
            [
                'id' => 125,
                'name_ar' => 'المعمورة',
                'name_en' => 'Al Mamurah',
            ],
            [
                'id' => 126,
                'name_ar' => 'المندرة',
                'name_en' => 'Al Mandara',
            ],
            [
                'id' => 127,
                'name_ar' => 'محرم بك',
                'name_en' => 'Moharam Bek',
            ],
            [
                'id' => 128,
                'name_ar' => 'الشاطبي',
                'name_en' => 'Elshatby',
            ],
            [
                'id' => 129,
                'name_ar' => 'سيدي جابر',
                'name_en' => 'Sidi Gaber',
            ],
            [
                'id' => 130,
                'name_ar' => 'الساحل الشمالي',
                'name_en' => 'North Coast/sahel',
            ],
            [
                'id' => 131,
                'name_ar' => 'الحضرة',
                'name_en' => 'Alhadra',
            ],
            [
                'id' => 132,
                'name_ar' => 'العطارين',
                'name_en' => 'Alattarin',
            ],
            [
                'id' => 133,
                'name_ar' => 'سيدي كرير',
                'name_en' => 'Sidi Kerir',
            ],
            [
                'id' => 134,
                'name_ar' => 'الجمرك',
                'name_en' => 'Elgomrok',
            ],
            [
                'id' => 135,
                'name_ar' => 'المكس',
                'name_en' => 'Al Max',
            ],
            [
                'id' => 136,
                'name_ar' => 'مارينا',
                'name_en' => 'Marina',
            ],
            [
                'id' => 137,
                'name_ar' => 'المنصورة',
                'name_en' => 'Mansoura',
            ],
            [
                'id' => 138,
                'name_ar' => 'طلخا',
                'name_en' => 'Talkha',
            ],
            [
                'id' => 139,
                'name_ar' => 'ميت غمر',
                'name_en' => 'Mitt Ghamr',
            ],
            [
                'id' => 140,
                'name_ar' => 'دكرنس',
                'name_en' => 'Dekernes',
            ],
            [
                'id' => 141,
                'name_ar' => 'أجا',
                'name_en' => 'Aga',
            ],
            [
                'id' => 142,
                'name_ar' => 'منية النصر',
                'name_en' => 'Menia El Nasr',
            ],
            [
                'id' => 143,
                'name_ar' => 'السنبلاوين',
                'name_en' => 'Sinbillawin',
            ],
            [
                'id' => 144,
                'name_ar' => 'الكردي',
                'name_en' => 'El Kurdi',
            ],
            [
                'id' => 145,
                'name_ar' => 'بني عبيد',
                'name_en' => 'Bani Ubaid',
            ],
            [
                'id' => 146,
                'name_ar' => 'المنزلة',
                'name_en' => 'Al Manzala',
            ],
            [
                'id' => 147,
                'name_ar' => 'تمي الأمديد',
                'name_en' => 'tami al\'amdid',
            ],
            [
                'id' => 148,
                'name_ar' => 'الجمالية',
                'name_en' => 'aljamalia',
            ],
            [
                'id' => 149,
                'name_ar' => 'شربين',
                'name_en' => 'Sherbin',
            ],
            [
                'id' => 150,
                'name_ar' => 'المطرية',
                'name_en' => 'Mataria',
            ],
            [
                'id' => 151,
                'name_ar' => 'بلقاس',
                'name_en' => 'Belqas',
            ],
            [
                'id' => 152,
                'name_ar' => 'ميت سلسيل',
                'name_en' => 'Meet Salsil',
            ],
            [
                'id' => 153,
                'name_ar' => 'جمصة',
                'name_en' => 'Gamasa',
            ],
            [
                'id' => 154,
                'name_ar' => 'محلة دمنة',
                'name_en' => 'Mahalat Damana',
            ],
            [
                'id' => 155,
                'name_ar' => 'نبروه',
                'name_en' => 'Nabroh',
            ],
            [
                'id' => 156,
                'name_ar' => 'الغردقة',
                'name_en' => 'Hurghada',
            ],
            [
                'id' => 157,
                'name_ar' => 'رأس غارب',
                'name_en' => 'Ras Ghareb',
            ],
            [
                'id' => 158,
                'name_ar' => 'سفاجا',
                'name_en' => 'Safaga',
            ],
            [
                'id' => 159,
                'name_ar' => 'القصير',
                'name_en' => 'El Qusiar',
            ],
            [
                'id' => 160,
                'name_ar' => 'مرسى علم',
                'name_en' => 'Marsa Alam',
            ],
            [
                'id' => 161,
                'name_ar' => 'الشلاتين',
                'name_en' => 'Shalatin',
            ],
            [
                'id' => 162,
                'name_ar' => 'حلايب',
                'name_en' => 'Halaib',
            ],
            [
                'id' => 163,
                'name_ar' => 'الدهار',
                'name_en' => 'Aldahar',
            ],
            [
                'id' => 164,
                'name_ar' => 'دمنهور',
                'name_en' => 'Damanhour',
            ],
            [
                'id' => 165,
                'name_ar' => 'كفر الدوار',
                'name_en' => 'Kafr El Dawar',
            ],
            [
                'id' => 166,
                'name_ar' => 'رشيد',
                'name_en' => 'Rashid',
            ],
            [
                'id' => 167,
                'name_ar' => 'إدكو',
                'name_en' => 'Edco',
            ],
            [
                'id' => 168,
                'name_ar' => 'أبو المطامير',
                'name_en' => 'Abu al-Matamir',
            ],
            [
                'id' => 169,
                'name_ar' => 'أبو حمص',
                'name_en' => 'Abu Homs',
            ],
            [
                'id' => 170,
                'name_ar' => 'الدلنجات',
                'name_en' => 'Delengat',
            ],
            [
                'id' => 171,
                'name_ar' => 'المحمودية',
                'name_en' => 'Mahmoudiyah',
            ],
            [
                'id' => 172,
                'name_ar' => 'الرحمانية',
                'name_en' => 'Rahmaniyah',
            ],
            [
                'id' => 173,
                'name_ar' => 'إيتاي البارود',
                'name_en' => 'Itai Baroud',
            ],
            [
                'id' => 174,
                'name_ar' => 'حوش عيسى',
                'name_en' => 'Housh Eissa',
            ],
            [
                'id' => 175,
                'name_ar' => 'شبراخيت',
                'name_en' => 'Shubrakhit',
            ],
            [
                'id' => 176,
                'name_ar' => 'كوم حمادة',
                'name_en' => 'Kom Hamada',
            ],
            [
                'id' => 177,
                'name_ar' => 'بدر',
                'name_en' => 'Badr',
            ],
            [
                'id' => 178,
                'name_ar' => 'وادي النطرون',
                'name_en' => 'Wadi Natrun',
            ],
            [
                'id' => 179,
                'name_ar' => 'النوبارية الجديدة',
                'name_en' => 'New Nubaria',
            ],
            [
                'id' => 180,
                'name_ar' => 'النوبارية',
                'name_en' => 'Alnoubareya',
            ],
            [
                'id' => 181,
                'name_ar' => 'الفيوم',
                'name_en' => 'Fayoum',
            ],
            [
                'id' => 182,
                'name_ar' => 'الفيوم الجديدة',
                'name_en' => 'Fayoum El Gedida',
            ],
            [
                'id' => 183,
                'name_ar' => 'طامية',
                'name_en' => 'Tamiya',
            ],
            [
                'id' => 184,
                'name_ar' => 'سنورس',
                'name_en' => 'Snores',
            ],
            [
                'id' => 185,
                'name_ar' => 'إطسا',
                'name_en' => 'Etsa',
            ],
            [
                'id' => 186,
                'name_ar' => 'إبشواي',
                'name_en' => 'Epschway',
            ],
            [
                'id' => 187,
                'name_ar' => 'يوسف الصديق',
                'name_en' => 'Yusuf El Sediaq',
            ],
            [
                'id' => 188,
                'name_ar' => 'الحادقة',
                'name_en' => 'Hadqa',
            ],
            [
                'id' => 189,
                'name_ar' => 'اطسا',
                'name_en' => 'Atsa',
            ],
            [
                'id' => 190,
                'name_ar' => 'الجامعة',
                'name_en' => 'Algamaa',
            ],
            [
                'id' => 191,
                'name_ar' => 'السيالة',
                'name_en' => 'Sayala',
            ],
            [
                'id' => 192,
                'name_ar' => 'طنطا',
                'name_en' => 'Tanta',
            ],
            [
                'id' => 193,
                'name_ar' => 'المحلة الكبرى',
                'name_en' => 'Al Mahalla Al Kobra',
            ],
            [
                'id' => 194,
                'name_ar' => 'كفر الزيات',
                'name_en' => 'Kafr El Zayat',
            ],
            [
                'id' => 195,
                'name_ar' => 'زفتى',
                'name_en' => 'Zefta',
            ],
            [
                'id' => 196,
                'name_ar' => 'السنطة',
                'name_en' => 'El Santa',
            ],
            [
                'id' => 197,
                'name_ar' => 'قطور',
                'name_en' => 'Qutour',
            ],
            [
                'id' => 198,
                'name_ar' => 'بسيون',
                'name_en' => 'Basion',
            ],
            [
                'id' => 199,
                'name_ar' => 'سمنود',
                'name_en' => 'Samannoud',
            ],
            [
                'id' => 200,
                'name_ar' => 'الإسماعيلية',
                'name_en' => 'Ismailia',
            ],
            [
                'id' => 201,
                'name_ar' => 'فايد',
                'name_en' => 'Fayed',
            ],
            [
                'id' => 202,
                'name_ar' => 'القنطرة شرق',
                'name_en' => 'Qantara Sharq',
            ],
            [
                'id' => 203,
                'name_ar' => 'القنطرة غرب',
                'name_en' => 'Qantara Gharb',
            ],
            [
                'id' => 204,
                'name_ar' => 'التل الكبير',
                'name_en' => 'El Tal El Kabier',
            ],
            [
                'id' => 205,
                'name_ar' => 'أبو صوير',
                'name_en' => 'Abu Sawir',
            ],
            [
                'id' => 206,
                'name_ar' => 'القصاصين الجديدة',
                'name_en' => 'Kasasien El Gedida',
            ],
            [
                'id' => 207,
                'name_ar' => 'نفيشة',
                'name_en' => 'Nefesha',
            ],
            [
                'id' => 208,
                'name_ar' => 'الشيخ زايد',
                'name_en' => 'Sheikh Zayed',
            ],
            [
                'id' => 209,
                'name_ar' => 'شبين الكوم',
                'name_en' => 'Shbeen El Koom',
            ],
            [
                'id' => 210,
                'name_ar' => 'مدينة السادات',
                'name_en' => 'Sadat City',
            ],
            [
                'id' => 211,
                'name_ar' => 'منوف',
                'name_en' => 'Menouf',
            ],
            [
                'id' => 212,
                'name_ar' => 'سرس الليان',
                'name_en' => 'Sars El-Layan',
            ],
            [
                'id' => 213,
                'name_ar' => 'أشمون',
                'name_en' => 'Ashmon',
            ],
            [
                'id' => 214,
                'name_ar' => 'الباجور',
                'name_en' => 'Al Bagor',
            ],
            [
                'id' => 215,
                'name_ar' => 'قويسنا',
                'name_en' => 'Quesna',
            ],
            [
                'id' => 216,
                'name_ar' => 'بركة السبع',
                'name_en' => 'Berkat El Saba',
            ],
            [
                'id' => 217,
                'name_ar' => 'تلا',
                'name_en' => 'Tala',
            ],
            [
                'id' => 218,
                'name_ar' => 'الشهداء',
                'name_en' => 'Al Shohada',
            ],
            [
                'id' => 219,
                'name_ar' => 'المنيا',
                'name_en' => 'Minya',
            ],
            [
                'id' => 220,
                'name_ar' => 'المنيا الجديدة',
                'name_en' => 'Minya El Gedida',
            ],
            [
                'id' => 221,
                'name_ar' => 'العدوة',
                'name_en' => 'El Adwa',
            ],
            [
                'id' => 222,
                'name_ar' => 'مغاغة',
                'name_en' => 'Magagha',
            ],
            [
                'id' => 223,
                'name_ar' => 'بني مزار',
                'name_en' => 'Bani Mazar',
            ],
            [
                'id' => 224,
                'name_ar' => 'مطاي',
                'name_en' => 'Mattay',
            ],
            [
                'id' => 225,
                'name_ar' => 'سمالوط',
                'name_en' => 'Samalut',
            ],
            [
                'id' => 226,
                'name_ar' => 'المدينة الفكرية',
                'name_en' => 'Madinat El Fekria',
            ],
            [
                'id' => 227,
                'name_ar' => 'ملوي',
                'name_en' => 'Meloy',
            ],
            [
                'id' => 228,
                'name_ar' => 'دير مواس',
                'name_en' => 'Deir Mawas',
            ],
            [
                'id' => 229,
                'name_ar' => 'ابو قرقاص',
                'name_en' => 'Abu Qurqas',
            ],
            [
                'id' => 230,
                'name_ar' => 'ارض سلطان',
                'name_en' => 'Ard Sultan',
            ],
            [
                'id' => 231,
                'name_ar' => 'بنها',
                'name_en' => 'Banha',
            ],
            [
                'id' => 232,
                'name_ar' => 'قليوب',
                'name_en' => 'Qalyub',
            ],
            [
                'id' => 233,
                'name_ar' => 'شبرا الخيمة',
                'name_en' => 'Shubra Al Khaimah',
            ],
            [
                'id' => 234,
                'name_ar' => 'القناطر الخيرية',
                'name_en' => 'Al Qanater Charity',
            ],
            [
                'id' => 235,
                'name_ar' => 'الخانكة',
                'name_en' => 'Khanka',
            ],
            [
                'id' => 236,
                'name_ar' => 'كفر شكر',
                'name_en' => 'Kafr Shukr',
            ],
            [
                'id' => 237,
                'name_ar' => 'طوخ',
                'name_en' => 'Tukh',
            ],
            [
                'id' => 238,
                'name_ar' => 'قها',
                'name_en' => 'Qaha',
            ],
            [
                'id' => 239,
                'name_ar' => 'العبور',
                'name_en' => 'Obour',
            ],
            [
                'id' => 240,
                'name_ar' => 'الخصوص',
                'name_en' => 'Khosous',
            ],
            [
                'id' => 241,
                'name_ar' => 'شبين القناطر',
                'name_en' => 'Shibin Al Qanater',
            ],
            [
                'id' => 242,
                'name_ar' => 'مسطرد',
                'name_en' => 'Mostorod',
            ],
            [
                'id' => 243,
                'name_ar' => 'الخارجة',
                'name_en' => 'El Kharga',
            ],
            [
                'id' => 244,
                'name_ar' => 'باريس',
                'name_en' => 'Paris',
            ],
            [
                'id' => 245,
                'name_ar' => 'موط',
                'name_en' => 'Mout',
            ],
            [
                'id' => 246,
                'name_ar' => 'الفرافرة',
                'name_en' => 'Farafra',
            ],
            [
                'id' => 247,
                'name_ar' => 'بلاط',
                'name_en' => 'Balat',
            ],
            [
                'id' => 248,
                'name_ar' => 'الداخلة',
                'name_en' => 'Dakhla',
            ],
            [
                'id' => 249,
                'name_ar' => 'السويس',
                'name_en' => 'Suez',
            ],
            [
                'id' => 250,
                'name_ar' => 'الجناين',
                'name_en' => 'Alganayen',
            ],
            [
                'id' => 251,
                'name_ar' => 'عتاقة',
                'name_en' => 'Ataqah',
            ],
            [
                'id' => 252,
                'name_ar' => 'العين السخنة',
                'name_en' => 'Ain Sokhna',
            ],
            [
                'id' => 253,
                'name_ar' => 'فيصل',
                'name_en' => 'Faysal',
            ],
            [
                'id' => 254,
                'name_ar' => 'أسوان',
                'name_en' => 'Aswan',
            ],
            [
                'id' => 255,
                'name_ar' => 'أسوان الجديدة',
                'name_en' => 'Aswan El Gedida',
            ],
            [
                'id' => 256,
                'name_ar' => 'دراو',
                'name_en' => 'Drau',
            ],
            [
                'id' => 257,
                'name_ar' => 'كوم أمبو',
                'name_en' => 'Kom Ombo',
            ],
            [
                'id' => 258,
                'name_ar' => 'نصر النوبة',
                'name_en' => 'Nasr Al Nuba',
            ],
            [
                'id' => 259,
                'name_ar' => 'كلابشة',
                'name_en' => 'Kalabsha',
            ],
            [
                'id' => 260,
                'name_ar' => 'إدفو',
                'name_en' => 'Edfu',
            ],
            [
                'id' => 261,
                'name_ar' => 'الرديسية',
                'name_en' => 'Al-Radisiyah',
            ],
            [
                'id' => 262,
                'name_ar' => 'البصيلية',
                'name_en' => 'Al Basilia',
            ],
            [
                'id' => 263,
                'name_ar' => 'السباعية',
                'name_en' => 'Al Sibaeia',
            ],
            [
                'id' => 264,
                'name_ar' => 'ابوسمبل السياحية',
                'name_en' => 'Abo Simbl Al Siyahia',
            ],
            [
                'id' => 265,
                'name_ar' => 'مرسى علم',
                'name_en' => 'Marsa Alam',
            ],
            [
                'id' => 266,
                'name_ar' => 'أسيوط',
                'name_en' => 'Assiut',
            ],
            [
                'id' => 267,
                'name_ar' => 'أسيوط الجديدة',
                'name_en' => 'Assiut El Gedida',
            ],
            [
                'id' => 268,
                'name_ar' => 'ديروط',
                'name_en' => 'Dayrout',
            ],
            [
                'id' => 269,
                'name_ar' => 'منفلوط',
                'name_en' => 'Manfalut',
            ],
            [
                'id' => 270,
                'name_ar' => 'القوصية',
                'name_en' => 'Qusiya',
            ],
            [
                'id' => 271,
                'name_ar' => 'أبنوب',
                'name_en' => 'Abnoub',
            ],
            [
                'id' => 272,
                'name_ar' => 'أبو تيج',
                'name_en' => 'Abu Tig',
            ],
            [
                'id' => 273,
                'name_ar' => 'الغنايم',
                'name_en' => 'El Ghanaim',
            ],
            [
                'id' => 274,
                'name_ar' => 'ساحل سليم',
                'name_en' => 'Sahel Selim',
            ],
            [
                'id' => 275,
                'name_ar' => 'البداري',
                'name_en' => 'El Badari',
            ],
            [
                'id' => 276,
                'name_ar' => 'صدفا',
                'name_en' => 'Sidfa',
            ],
            [
                'id' => 277,
                'name_ar' => 'بني سويف',
                'name_en' => 'Bani Sweif',
            ],
            [
                'id' => 278,
                'name_ar' => 'بني سويف الجديدة',
                'name_en' => 'Beni Suef El Gedida',
            ],
            [
                'id' => 279,
                'name_ar' => 'الواسطى',
                'name_en' => 'Al Wasta',
            ],
            [
                'id' => 280,
                'name_ar' => 'ناصر',
                'name_en' => 'Naser',
            ],
            [
                'id' => 281,
                'name_ar' => 'إهناسيا',
                'name_en' => 'Ehnasia',
            ],
            [
                'id' => 282,
                'name_ar' => 'ببا',
                'name_en' => 'beba',
            ],
            [
                'id' => 283,
                'name_ar' => 'الفشن',
                'name_en' => 'Fashn',
            ],
            [
                'id' => 284,
                'name_ar' => 'سمسطا',
                'name_en' => 'Somasta',
            ],
            [
                'id' => 285,
                'name_ar' => 'الاباصيرى',
                'name_en' => 'Alabbaseri',
            ],
            [
                'id' => 286,
                'name_ar' => 'مقبل',
                'name_en' => 'Mokbel',
            ],
            [
                'id' => 287,
                'name_ar' => 'بورسعيد',
                'name_en' => 'PorSaid',
            ],
            [
                'id' => 288,
                'name_ar' => 'بورفؤاد',
                'name_en' => 'Port Fouad',
            ],
            [
                'id' => 289,
                'name_ar' => 'العرب',
                'name_en' => 'Alarab',
            ],
            [
                'id' => 290,
                'name_ar' => 'حى الزهور',
                'name_en' => 'Zohour',
            ],
            [
                'id' => 291,
                'name_ar' => 'حى الشرق',
                'name_en' => 'Alsharq',
            ],
            [
                'id' => 292,
                'name_ar' => 'حى الضواحى',
                'name_en' => 'Aldawahi',
            ],
            [
                'id' => 293,
                'name_ar' => 'حى المناخ',
                'name_en' => 'Almanakh',
            ],
            [
                'id' => 294,
                'name_ar' => 'حى مبارك',
                'name_en' => 'Mubarak',
            ],
            [
                'id' => 295,
                'name_ar' => 'دمياط',
                'name_en' => 'Damietta',
            ],
            [
                'id' => 296,
                'name_ar' => 'دمياط الجديدة',
                'name_en' => 'New Damietta',
            ],
            [
                'id' => 297,
                'name_ar' => 'رأس البر',
                'name_en' => 'Ras El Bar',
            ],
            [
                'id' => 298,
                'name_ar' => 'فارسكور',
                'name_en' => 'Faraskour',
            ],
            [
                'id' => 299,
                'name_ar' => 'الزرقا',
                'name_en' => 'Zarqa',
            ],
            [
                'id' => 300,
                'name_ar' => 'السرو',
                'name_en' => 'alsaru',
            ],
            [
                'id' => 301,
                'name_ar' => 'الروضة',
                'name_en' => 'alruwda',
            ],
            [
                'id' => 302,
                'name_ar' => 'كفر البطيخ',
                'name_en' => 'Kafr El-Batikh',
            ],
            [
                'id' => 303,
                'name_ar' => 'عزبة البرج',
                'name_en' => 'Azbet Al Burg',
            ],
            [
                'id' => 304,
                'name_ar' => 'ميت أبو غالب',
                'name_en' => 'Meet Abou Ghalib',
            ],
            [
                'id' => 305,
                'name_ar' => 'كفر سعد',
                'name_en' => 'Kafr Saad',
            ],
            [
                'id' => 306,
                'name_ar' => 'الزقازيق',
                'name_en' => 'Zagazig',
            ],
            [
                'id' => 307,
                'name_ar' => 'العاشر من رمضان',
                'name_en' => 'Al Ashr Men Ramadan',
            ],
            [
                'id' => 308,
                'name_ar' => 'منيا القمح',
                'name_en' => 'Minya Al Qamh',
            ],
            [
                'id' => 309,
                'name_ar' => 'بلبيس',
                'name_en' => 'Belbeis',
            ],
            [
                'id' => 310,
                'name_ar' => 'مشتول السوق',
                'name_en' => 'Mashtoul El Souq',
            ],
            [
                'id' => 311,
                'name_ar' => 'القنايات',
                'name_en' => 'Qenaiat',
            ],
            [
                'id' => 312,
                'name_ar' => 'أبو حماد',
                'name_en' => 'Abu Hammad',
            ],
            [
                'id' => 313,
                'name_ar' => 'القرين',
                'name_en' => 'El Qurain',
            ],
            [
                'id' => 314,
                'name_ar' => 'ههيا',
                'name_en' => 'Hehia',
            ],
            [
                'id' => 315,
                'name_ar' => 'أبو كبير',
                'name_en' => 'Abu Kabir',
            ],
            [
                'id' => 316,
                'name_ar' => 'فاقوس',
                'name_en' => 'Faccus',
            ],
            [
                'id' => 317,
                'name_ar' => 'الصالحية الجديدة',
                'name_en' => 'El Salihia El Gedida',
            ],
            [
                'id' => 318,
                'name_ar' => 'الإبراهيمية',
                'name_en' => 'Al Ibrahimiyah',
            ],
            [
                'id' => 319,
                'name_ar' => 'ديرب نجم',
                'name_en' => 'Deirb Negm',
            ],
            [
                'id' => 320,
                'name_ar' => 'كفر صقر',
                'name_en' => 'Kafr Saqr',
            ],
            [
                'id' => 321,
                'name_ar' => 'أولاد صقر',
                'name_en' => 'Awlad Saqr',
            ],
            [
                'id' => 322,
                'name_ar' => 'الحسينية',
                'name_en' => 'Husseiniya',
            ],
            [
                'id' => 323,
                'name_ar' => 'صان الحجر القبلية',
                'name_en' => 'san alhajar alqablia',
            ],
            [
                'id' => 324,
                'name_ar' => 'منشأة أبو عمر',
                'name_en' => 'Manshayat Abu Omar',
            ],
            [
                'id' => 325,
                'name_ar' => 'الطور',
                'name_en' => 'Al Toor',
            ],
            [
                'id' => 326,
                'name_ar' => 'شرم الشيخ',
                'name_en' => 'Sharm El-Shaikh',
            ],
            [
                'id' => 327,
                'name_ar' => 'دهب',
                'name_en' => 'Dahab',
            ],
            [
                'id' => 328,
                'name_ar' => 'نويبع',
                'name_en' => 'Nuweiba',
            ],
            [
                'id' => 329,
                'name_ar' => 'طابا',
                'name_en' => 'Taba',
            ],
            [
                'id' => 330,
                'name_ar' => 'سانت كاترين',
                'name_en' => 'Saint Catherine',
            ],
            [
                'id' => 331,
                'name_ar' => 'أبو رديس',
                'name_en' => 'Abu Redis',
            ],
            [
                'id' => 332,
                'name_ar' => 'أبو زنيمة',
                'name_en' => 'Abu Zenaima',
            ],
            [
                'id' => 333,
                'name_ar' => 'رأس سدر',
                'name_en' => 'Ras Sidr',
            ],
            [
                'id' => 334,
                'name_ar' => 'كفر الشيخ',
                'name_en' => 'Kafr El Sheikh',
            ],
            [
                'id' => 335,
                'name_ar' => 'وسط البلد كفر الشيخ',
                'name_en' => 'Kafr El Sheikh Downtown',
            ],
            [
                'id' => 336,
                'name_ar' => 'دسوق',
                'name_en' => 'Desouq',
            ],
            [
                'id' => 337,
                'name_ar' => 'فوه',
                'name_en' => 'Fooh',
            ],
            [
                'id' => 338,
                'name_ar' => 'مطوبس',
                'name_en' => 'Metobas',
            ],
            [
                'id' => 339,
                'name_ar' => 'برج البرلس',
                'name_en' => 'Burg Al Burullus',
            ],
            [
                'id' => 340,
                'name_ar' => 'بلطيم',
                'name_en' => 'Baltim',
            ],
            [
                'id' => 341,
                'name_ar' => 'مصيف بلطيم',
                'name_en' => 'Masief Baltim',
            ],
            [
                'id' => 342,
                'name_ar' => 'الحامول',
                'name_en' => 'Hamol',
            ],
            [
                'id' => 343,
                'name_ar' => 'بيلا',
                'name_en' => 'Bella',
            ],
            [
                'id' => 344,
                'name_ar' => 'الرياض',
                'name_en' => 'Riyadh',
            ],
            [
                'id' => 345,
                'name_ar' => 'سيدي سالم',
                'name_en' => 'Sidi Salm',
            ],
            [
                'id' => 346,
                'name_ar' => 'قلين',
                'name_en' => 'Qellen',
            ],
            [
                'id' => 347,
                'name_ar' => 'سيدي غازي',
                'name_en' => 'Sidi Ghazi',
            ],
            [
                'id' => 348,
                'name_ar' => 'مرسى مطروح',
                'name_en' => 'Marsa Matrouh',
            ],
            [
                'id' => 349,
                'name_ar' => 'الحمام',
                'name_en' => 'El Hamam',
            ],
            [
                'id' => 350,
                'name_ar' => 'العلمين',
                'name_en' => 'Alamein',
            ],
            [
                'id' => 351,
                'name_ar' => 'الضبعة',
                'name_en' => 'Dabaa',
            ],
            [
                'id' => 352,
                'name_ar' => 'النجيلة',
                'name_en' => 'Al-Nagila',
            ],
            [
                'id' => 353,
                'name_ar' => 'سيدي براني',
                'name_en' => 'Sidi Brani',
            ],
            [
                'id' => 354,
                'name_ar' => 'السلوم',
                'name_en' => 'Salloum',
            ],
            [
                'id' => 355,
                'name_ar' => 'سيوة',
                'name_en' => 'Siwa',
            ],
            [
                'id' => 356,
                'name_ar' => 'مارينا',
                'name_en' => 'Marina',
            ],
            [
                'id' => 357,
                'name_ar' => 'الساحل الشمالى',
                'name_en' => 'North Coast',
            ],
            [
                'id' => 358,
                'name_ar' => 'الأقصر',
                'name_en' => 'Luxor',
            ],
            [
                'id' => 359,
                'name_ar' => 'الأقصر الجديدة',
                'name_en' => 'New Luxor',
            ],
            [
                'id' => 360,
                'name_ar' => 'إسنا',
                'name_en' => 'Esna',
            ],
            [
                'id' => 361,
                'name_ar' => 'طيبة الجديدة',
                'name_en' => 'New Tiba',
            ],
            [
                'id' => 362,
                'name_ar' => 'الزينية',
                'name_en' => 'Al ziynia',
            ],
            [
                'id' => 363,
                'name_ar' => 'البياضية',
                'name_en' => 'Al Bayadieh',
            ],
            [
                'id' => 364,
                'name_ar' => 'القرنة',
                'name_en' => 'Al Qarna',
            ],
            [
                'id' => 365,
                'name_ar' => 'أرمنت',
                'name_en' => 'Armant',
            ],
            [
                'id' => 366,
                'name_ar' => 'الطود',
                'name_en' => 'Al Tud',
            ],
            [
                'id' => 367,
                'name_ar' => 'قنا',
                'name_en' => 'Qena',
            ],
            [
                'id' => 368,
                'name_ar' => 'قنا الجديدة',
                'name_en' => 'New Qena',
            ],
            [
                'id' => 369,
                'name_ar' => 'ابو طشت',
                'name_en' => 'Abu Tesht',
            ],
            [
                'id' => 370,
                'name_ar' => 'نجع حمادي',
                'name_en' => 'Nag Hammadi',
            ],
            [
                'id' => 371,
                'name_ar' => 'دشنا',
                'name_en' => 'Deshna',
            ],
            [
                'id' => 372,
                'name_ar' => 'الوقف',
                'name_en' => 'Alwaqf',
            ],
            [
                'id' => 373,
                'name_ar' => 'قفط',
                'name_en' => 'Qaft',
            ],
            [
                'id' => 374,
                'name_ar' => 'نقادة',
                'name_en' => 'Naqada',
            ],
            [
                'id' => 375,
                'name_ar' => 'فرشوط',
                'name_en' => 'Farshout',
            ],
            [
                'id' => 376,
                'name_ar' => 'قوص',
                'name_en' => 'Quos',
            ],
            [
                'id' => 377,
                'name_ar' => 'العريش',
                'name_en' => 'Arish',
            ],
            [
                'id' => 378,
                'name_ar' => 'الشيخ زويد',
                'name_en' => 'Sheikh Zowaid',
            ],
            [
                'id' => 379,
                'name_ar' => 'نخل',
                'name_en' => 'Nakhl',
            ],
            [
                'id' => 380,
                'name_ar' => 'رفح',
                'name_en' => 'Rafah',
            ],
            [
                'id' => 381,
                'name_ar' => 'بئر العبد',
                'name_en' => 'Bir al-Abed',
            ],
            [
                'id' => 382,
                'name_ar' => 'الحسنة',
                'name_en' => 'Al Hasana',
            ],
            [
                'id' => 383,
                'name_ar' => 'سوهاج',
                'name_en' => 'Sohag',
            ],
            [
                'id' => 384,
                'name_ar' => 'سوهاج الجديدة',
                'name_en' => 'Sohag El Gedida',
            ],
            [
                'id' => 385,
                'name_ar' => 'أخميم',
                'name_en' => 'Akhmeem',
            ],
            [
                'id' => 386,
                'name_ar' => 'أخميم الجديدة',
                'name_en' => 'Akhmim El Gedida',
            ],
            [
                'id' => 387,
                'name_ar' => 'البلينا',
                'name_en' => 'Albalina',
            ],
            [
                'id' => 388,
                'name_ar' => 'المراغة',
                'name_en' => 'El Maragha',
            ],
            [
                'id' => 389,
                'name_ar' => 'المنشأة',
                'name_en' => 'almunsha\'a',
            ],
            [
                'id' => 390,
                'name_ar' => 'دار السلام',
                'name_en' => 'Dar AISalaam',
            ],
            [
                'id' => 391,
                'name_ar' => 'جرجا',
                'name_en' => 'Gerga',
            ],
            [
                'id' => 392,
                'name_ar' => 'جهينة الغربية',
                'name_en' => 'Jahina Al Gharbia',
            ],
            [
                'id' => 393,
                'name_ar' => 'ساقلته',
                'name_en' => 'Saqilatuh',
            ],
            [
                'id' => 394,
                'name_ar' => 'طما',
                'name_en' => 'Tama',
            ],
            [
                'id' => 395,
                'name_ar' => 'طهطا',
                'name_en' => 'Tahta',
            ],
            [
                'id' => 396,
                'name_ar' => 'الكوثر',
                'name_en' => 'Alkawthar',
            ],
        ]);
    }
}
