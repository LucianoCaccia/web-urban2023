<?php

namespace FakerPress\ThirdParty\Faker\Provider\th_TH;

use FakerPress\ThirdParty\Faker\Provider\Miscellaneous;

class Person extends \FakerPress\ThirdParty\Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{suffix}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{suffix}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}} {{suffix}}',
    ];

    protected static $firstNameMale = [
        'กฤต', 'กฤติพงศ์', 'กฤติเดช', 'กฤษฎา', 'กฤษฎิ์', 'กฤษณะ', 'กฤษณ์', 'กันตพงศ์', 'กันตภณ', 'กำจร', 'กิตติ', 'กิตติภณ', 'กิตติศักดิ์', 'ก้องภพ', 'คมกฤช', 'คมสันต์', 'ครรชิต', 'ครองฤทธิ์', 'คำรณ', 'คึกฤทธิ์', 'จตุภัทร', 'จรัล', 'จรูญ', 'จอมเดช', 'จาตุรนต์', 'จารุกิตติ์', 'จารุวัฒน์',
        'จารุวิทย์', 'จารุเดช', 'จิตรายุธ', 'จิรพัฒน์', 'จิรายุ', 'จิรายุทธ', 'จิรเดช', 'จิรโชติ', 'จีรยุทธ', 'จุมพล', 'ฉันทพล', 'ฉันทพัฒน์', 'ชนกันต์', 'ชนะศึก', 'ชัชชัย', 'ชัชวาลย์', 'ชัยณรงค์', 'ชัยนันท์', 'ชัยมงคล', 'ชัยวุฒิ', 'ชัยโรจน์', 'ชาญชัย', 'ชาญรบ', 'ชาตพล', 'ชานนท์', 'ชิษณุพงศ์', 'ชุติเดช', 'ฐิติพงศ์', 'ฐิติภัทร', 'ณรงค์',
        'ณรงค์กร', 'ณรงค์ชัย', 'ณรงค์ฤทธิ์', 'ณัฏฐกิตติ์', 'ณัฏฐชัย', 'ณัฏฐพล', 'ณัฐกฤต', 'ณัฐชนน', 'ณัฐพงศ์', 'ณัฐภูมิ', 'ณัฐฤกษ์', 'ณัฐวิโรจน์', 'ดนัย', 'ดนุเดช', 'ดลฤทธิ์', 'ดุลยศักดิ์', 'ตรีภพ', 'ติณณภพ', 'ต้นกล้า', 'ทรงกฤต', 'ทรงภพ',
        'ทรงวุฒิ', 'ทวีเดช', 'ทัดภูมิ', 'ทิฐิพล', 'ทินภัทร', 'ทีปกร', 'ธงชัย', 'ธนกร', 'ธนกฤต', 'ธนชาติ', 'ธนชิต', 'ธนภัทร', 'ธนภูมิ', 'ธนศักดิ์', 'ธนัชชัย', 'ธนาธิป', 'ธนเดช', 'ธนโชติ', 'ธรรมศักดิ์', 'ธวัชชัย', 'ธัญวิทย์', 'ธานินทร์', 'ธารินทร์',
        'ธิติ', 'ธีธัช', 'ธีรนัย', 'ธีรพล', 'ธเนศ', 'นพณัฐ', 'นพเดช', 'นรวุฒิ', 'นรสิงห์', 'นราธิป', 'นฤชิต', 'นันทภพ', 'บรรพต', 'บรรยงค์', 'บวรชัย', 'บวรพจน์', 'บวรวิทย์', 'บัณฑิต', 'บันลือศักดิ์', 'บัลลพ', 'บุญฤทธิ์', 'บุญส่ง', 'บุญโชค', 'บุรินทร์',
        'ปกรณ์', 'ปฏิพล', 'ปณต', 'ประชา', 'ประพจน์', 'ประเสริฐ', 'ปรัชญา', 'ปัญจพล', 'ปานศักดิ์', 'ปิติ', 'ปิติพงศ์', 'ปิยวัฒน์', 'ป้องเกียรติ', 'ผดุงศักดิ์', 'ผดุงเดช', 'พงศ์กฤต', 'พงศ์พัทธ์', 'พงศ์เดช', 'พลภัทร', 'พลวัต', 'พันธ์พงษ์',
        'พันเดช', 'พัลลภ', 'พาทิศ', 'พิพัฒน์', 'พิริยะศักดิ์', 'พิสิษฐ์', 'พิเชษฐ', 'พีรพล', 'พีรพัฒน์', 'พีรเทพ', 'พุฒิพงศ์', 'ภควัต', 'ภัคพล', 'ภัทร', 'ภัทรกร', 'ภากร', 'ภาคิน', 'ภาณุพงศ์', 'ภาณุภัทร', 'ภานุวัฒน์',
        'ภูมิ', 'ภูมิพัฒน์', 'ภูริช', 'ภูวดล', 'ภูวเดช', 'ภูสิทธิ', 'มงคล', 'มงคลชัย', 'มนภาส', 'มนุญศักดิ์', 'มานะ', 'ยุทธการ', 'ราเชน', 'วรพจน์', 'วรพล', 'วรวุฒิ', 'วรุตม์', 'วรเทพ', 'วรเมธ', 'วัชรพล', 'วัลลภ',
        'วิกรม', 'วิชาญ', 'วิทวัส', 'วิบูลย์', 'วิวัฒน์ชัย', 'วิโรจน์', 'วีรพล', 'วีรยุทธ', 'วีรเดช', 'วุฒิชัย', 'วุฒิชาติ', 'วุฒิเดช', 'ศักดา', 'ศุภกิจ', 'ศุภณัฐ', 'สมชาย', 'สมศักดิ์', 'สิทธินนท์', 'สิทธิเดช', 'สุกฤษฎิ์', 'สุทธินันท์',
        'สุทธิพงษ์', 'สุบรรณ', 'สุเมธ', 'อดิรุจ', 'อดิเทพ', 'อดุลย์', 'อติชาติ', 'อนันตชัย', 'อนุชิต', 'อนุทิศ', 'อนุพนธ์', 'อนุภัทร', 'อนุรักข์', 'อภิคม', 'อภิชาติ', 'อรรคพล', 'อรรณพ', 'อรรณวุฒิ', 'อัคคเดช', 'อัครชัย', 'อาชวิน', 'อาณัติ', 'อานนท์', 'อานันท์', 'อารักษ์', 'อิทธิชัย', 'อิทธิพัทธ์', 'เกริกไกร',
        'เจตน์', 'เจตพล', 'เจนศักดิ์', 'เจษฎา', 'เจิมศักดิ์', 'เชิดชาย', 'เด่นภูมิ', 'เตชภณ', 'เตชินท์', 'เป็นต่อ', 'เผชิญชัย', 'เผด็จ', 'เผ่าเทพ', 'เมธัส', 'เรวัติ', 'เรืองโรจน์', 'เสกข์', 'เหมรัชต์', 'เอกภพ', 'แสงโชติ', 'โกมุท', 'โกเมน', 'โกเมศ', 'โฆษิต', 'โพธิวัฒน์', 'โยธิต', 'โอภาส', 'โอฬาร', 'ไกรยุทธ์', 'ไชยวัฒน์', 'ไตรภพ', 'ไพศาล',
    ];

    protected static $firstNameFemale = [
        'กชวรรณ', 'กนกกาญจน์', 'กนกทิพย์', 'กนกนุช', 'กนกพรรณ', 'กนกรัตน์', 'กนกวรรณ', 'กนกอร', 'กมลกานต์', 'กมลฉัตร', 'กมลชนก', 'กมลทิพย์', 'กมลรัตน์', 'กมลวรรณ', 'กมลา', 'กมลเนตร', 'กรกนก', 'กรกมล', 'กรรณิกา', 'กรรณิการ์', 'กรวรรณ', 'กรวิกา', 'กรวิภา', 'กรองกาญจน์', 'กรองแก้ว', 'กรุณา', 'กฤตยา', 'กวินทิพย์', 'กัลยรัตน์', 'กัลยา',
        'กัลยาณี', 'กัลยาณี', 'กานต์ธิดา', 'กิตติมา', 'กิรติกา', 'กิ่งกาญจน์', 'กิ่งแก้ว', 'กุสุมา', 'ขจีพรรณ', 'ขวัญจิรา', 'ขวัญตา', 'ขวัญทิพย์', 'ขวัญแก้ว', 'ครองพร', 'คะนึงจิต', 'คะนึงนิตย์', 'คำหยาด', 'จรรยา', 'จรัญพร', 'จรูญพรรณ', 'จันทนา', 'จันทนิภา',
        'จันทร์จิรา',  'จันทร์เพ็ญ',  'จารีรัตน์',  'จารุณี',  'จารุวรรณ',  'จิดาภา',  'จิตตนาถ',  'จิตติมา',  'จิตรลดา',  'จิตรานุช',  'จินดา',  'จินดาพรรณ',  'จินดารัตน์',  'จินตนา',  'จินตพร',  'จินตภา',  'จิรนาถ',  'จิรัชญา',  'จีรพรรณ',  'จุฑาทิพย์',
        'จุฑาภรณ์', 'จุฑามณี', 'จุฑารัตน์', 'จุไรรัตน์', 'จุไรวรรณ', 'ฉวีผ่อง', 'ฉัตราภรณ์', 'ชงโค', 'ชนกนันท์', 'ชนกนาถ', 'ชนนิภา', 'ชนิกานต์', 'ชนิดา', 'ชนิภา', 'ชมพูนุช', 'ชยาภา', 'ชลธิชา', 'ชลธิดา', 'ชลิตา', 'ชาลินี', 'ชิดชนก', 'ชุติกา', 'ชุติกาญจน์',
        'ชุติภา', 'ชุติมน', 'ชุติมา', 'ช่อทิพย์', 'ฐปนีย์', 'ฐาปนีย์', 'ฐิตาพร', 'ฐิตารีย์', 'ฐิติกร', 'ฐิติกาญจน์', 'ฐิติพร', 'ฐิติพรรณ', 'ฐิติภา', 'ฐิติมา', 'ณฐินี', 'ณฤดี', 'ณัชชา', 'ณัฏฐธิดา', 'ณัฏฐิกา', 'ณัฏฐินี', 'ณัฐกานต์', 'ณัฐชยา', 'ณัฐชา', 'ณัฐฐา', 'ณัฐวดี',
        'ณิชกานต์', 'ณิชมน', 'ณิชา', 'ณิชารีย์', 'ณีรนุช', 'ดลพร', 'ดวงแข', 'ดารณี', 'ดารินทร์', 'ดาวเรือง', 'ดุจดาว', 'ถวิกา', 'ถิรดา', 'ทองปลิว', 'ทัดดาว', 'ทิพนาถ', 'ทิพปภา', 'ทิพย์รัตน์', 'ธนพร', 'ธนัญญา', 'ธนิดา', 'ธัญชนก', 'ธัญญรัตน์', 'ธัญญา', 'ธัญทิพย์',
        'ธัญพร', 'ธัญพิมล', 'ธัญรัตน์', 'ธันยชนก', 'ธันยพร', 'ธารทิพย์', 'ธาริณี', 'ธิดารัตน์', 'ธิดาวรรณ', 'นงนุช', 'นภา', 'นภาพร', 'นภาพรรณ', 'นภาวรรณ', 'นรีรัตน์', 'นฤมล', 'นลิน', 'นันทฉัตร', 'นันทนา', 'นันทิกานต์', 'นันทิชา', 'นันทิตา', 'นันทินี', 'นาถสุดา', 'นิชา',
        'นิชาภา', 'นิรชา', 'บุณยนุช', 'บุณยพร', 'บุปผา', 'บุษบา', 'บุหลัน', 'ปฐมา', 'ปณิดา', 'ปนัดดา', 'ประกายแก้ว', 'ประภัสสร', 'ประภารัตน์', 'ประไพพรรณ', 'ปรางทิพย์', 'ปราญชลี', 'ปรียา', 'ปรียาดา', 'ปรียานุช', 'ปวันรัตน์', 'ปวีณอร', 'ปัญญารัตน์',
        'ปัทมา', 'ปัทมาพร', 'ปานชนก', 'ปาริฉัตร', 'ปิยธิดา', 'ปิยนุช', 'ปิยะพรรณ', 'ปิยะวรรณ', 'ปุณยภา', 'ผกาพรรณ', 'ผดุงพร', 'พรทิพา', 'พรนภา', 'พรประภา', 'พรพรรณ', 'พรพิมล', 'พรรณทิพย์', 'พรรนิภา', 'พรไพลิน', 'พวงผกา', 'พัชรมัย', 'พัชรีวรรณ', 'พิมพ์ผกา', 'พิมพ์พรรณ', 'พิมพ์อัปสร', 'พิมลภา', 'พิมลรัตน์', 'พิศมัย',
        'ภัทรธิดา', 'ภัทรลดา', 'ภัทรวรรณ', 'ภารวี', 'ภาวินี', 'มณีรัตน์', 'มัลลิกา', 'มาลินี', 'มินตรา', 'ยุพา', 'รติมา', 'รัชนี', 'รัตนประภา', 'รุจยา', 'รุจิราพร', 'ลดามณี', 'ลำดวน', 'วรกานต์', 'วรรณพร', 'วราภรณ์', 'วลัยพร', 'วลัยพรรณ', 'วลัยสมร', 'วลีรัตน์', 'วัชราภรณ์',
        'วันทนีย์', 'วิภาดา', 'วิมลรัตน์', 'วิไลรัตน์', 'วิไลวรรณ', 'วีณา', 'ศันสนีย์', 'สมพร', 'สมศรี', 'สมหญิง', 'สาวิตรี', 'สุนิสา', 'อภิรดี', 'อรจิรา', 'อรชร', 'อรณิชา', 'อรนุช', 'อรพรรณ', 'อรพิมพ์', 'อรพิมล', 'อลิน', 'อังคณา', 'อัจฉรา', 'อัจฉราพร', 'อัญชลิกา', 'อาภรณ์', 'อินตรา', 'อุไรวรรณ', 'เกตุมณี',
        'เกวลิน', 'เขมจิรา', 'เขมิกา', 'เครือวัลย์', 'เจนจิรา', 'เบญจพร', 'เบญจภรณ์', 'เบญจรัตน์', 'เบญจวรรณ', 'เพ็ญประภา', 'เพ็ญแข', 'เภตรา', 'เมธินี', 'เลอลักษณ์', 'เสาวรส', 'แก้วทิพย์', 'แสงจันทร์', 'โชติกา', 'ไฉววงศ์', 'ไปรยา', 'ไลลา',
        'ไอริณ',
    ];

    protected static $lastName = [
        'กติยา', 'กมลานันท์', 'กล้านอนหงาย', 'กองการ', 'กางมุ้งคอย', 'กาญจนวิภู', 'กำธรเจริญ', 'กิจจานุรักษ์', 'กิตติธร', 'ครองจินดา', 'งามระลึก', 'จันทร์ประดับ', 'จิตประสงค์', 'จิตมานะ', 'จิตสะอาด', 'จิรามณี', 'จุฑาเทพ ณ อยุธยา', 'ชมชอบ', 'ชอบนอนหงาย', 'ดำรงลาวรรณ', 'ดิเรกวิทยา', 'ตะลุมพุก', 'ทวิพักตร์', 'ทองดี', 'ทองม่วง', 'นทีพิทักษ์', 'นิมิตนาม',
        'บาดตาสาว', 'บินทะลุบ้าน', 'บุญมั่น', 'ปรปักษ์เป็นจุล', 'ประจัญบาน', 'ประภาพร', 'ปืนครก', 'พงศ์พิทักษ์', 'พจน์จำเนียร', 'พรรณาราย', 'พิชัยรณรงค์', 'พิทักษ์ไทย', 'พึ่งสุข', 'พุ่มฉัตร', 'มณีน้อย', 'มนูญศักดิ์', 'มหานิยม', 'ยอดยาใจ', 'รอดคงรวย', 'รักธรรม', 'รักสำราญ', 'รัตนามิรา', 'รัตนเดชากร', 'รุจิอาภรณ์', 'วงศ์บันเทิง', 'วงศ์สินวิเศษ',
        'วรรณดำรง', 'วรเลิศรัตน์', 'วังชัยศรี', 'วาทะศรัทธา', 'วิทยเขตปภา', 'วิไลสักดิ์', 'ศรีเจริญ', 'ศิลามหาฤกษ์', 'ศิวาวงศ์', 'สมคำนึง', 'สมุทรเทวา', 'สันตติวงศ์', 'สันต์สิริศักดิ์', 'สัมพันธ์พงษ์', 'สำราญฤทธิ์', 'สุรบดินทร์', 'สูญสิ้นภัย', 'หงส์แก้ว', 'หนึ่งในยุทธจักร', 'หวังกระแทกคาง', 'อดุสาระดี', 'อัศวรัช', 'อัศวเรืองฤทธิ์', 'อาจฤทธิ์', 'เกตุอารี',
        'เกิดความสุข', 'เกิดงามพริ้ง', 'เก่งระดมยิง', 'เจนพานิชย์สกุล', 'เจริญเดช', 'เทพทัต', 'เทพสุวรรณ', 'เที่ยงธรรม', 'เบี้ยวสกุล', 'เหนือกาล', 'แก้วมณีงาม', 'แสนชล', 'โชคช่วย', 'ไชยวัฒนา',
    ];

    protected static $suffix = ['Jr.', 'Sr.', 'I', 'II', 'III', 'IV', 'V', 'MD', 'DDS', 'PhD', 'DVM'];

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }

    /**
     * @example '123-45-6789'
     */
    public static function ssn()
    {
        $area = Miscellaneous::boolean() ? self::numberBetween(1, 665) : self::numberBetween(667, 899);
        $group = self::numberBetween(1, 99);
        $serial = self::numberBetween(1, 9999);

        return sprintf('%03d-%02d-%04d', $area, $group, $serial);
    }
}
