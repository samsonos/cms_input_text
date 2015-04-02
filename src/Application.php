<?php
/**
 * Created by Maxim Omelchenko <omelchenko@samsonos.com>
 * on 31.03.2015 at 17:54
 */

namespace samsoncms\input\text;

/**
 * SamsonCMS text input module
 * @author Maxim Omelchenko <omelchenko@samsonos.com>
 */
class Application extends \samsoncms\input\Application
{
    public static $type = 0;

    /** @var string SamsonCMS field class */
    protected $fieldClass = '\samsoncms\input\text\Text';
}
