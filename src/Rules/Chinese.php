<?php
/**
 * Created by PhpStorm.
 * User: 杨帆
 * Date: 2021/2/4
 * Time: 16:37
 */
use Fy\Illuminate\Contracts\Validation\Rule;

class Chinese implements Rule
{
    public function passes($attribute, $value)
    {
        $rule = '^[\x{4e00}-\x{9fa5}]+$';
        return preg_match(sprintf('/%s/u', $rule), $value);
    }

    public function message()
    {
        return '请填写汉字';
    }
}