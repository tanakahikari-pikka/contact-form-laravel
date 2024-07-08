<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class GenderType extends Enum
{
    const Male = 1;
    const Female = 2;
    const Other = 3;

/**
     * Get the description for an enum value
     *
     * @param $value
     * @return string
     */
    public static function getDescription($value): string
    {
        switch ($value){
            case self::Male:
                return '男性';
                brake;
            case self::Female:
                return '女性';
                brake;
            case self::Other:
                return 'その他';
                brake;
            default:
                return self::getKey($value);
        }
    }
}
