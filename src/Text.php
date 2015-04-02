<?php
/**
 * Created by Maxim Omelchenko <omelchenko@samsonos.com>
 * on 25.03.2015 at 19:44
 */
namespace samsoncms\input\text;

use \samsoncms\input\Field;

/**
 * Text SamsonCMS input field
 * @author Maxim Omelchenko <omelchenko@samsonos.com>
 */
class Text extends Field
{
    /** Database object field name */
    protected $param = 'Value';

    /** Special CSS classname for nested field objects to bind JS and CSS */
    protected $cssClass = '__textarea';
}
