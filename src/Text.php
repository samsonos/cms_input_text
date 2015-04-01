<?php
/**
 * Created by Maxim Omelchenko <omelchenko@samsonos.com>
 * on 25.03.2015 at 19:44
 */
namespace samsoncms\input\text;

use \samsoncms\input\Field;

class Text extends Field
{
//    /** @var  int Field type identifier */
//    protected static $type = 0;

    /** Database object field name */
    protected $param = 'Value';

    /** Special CSS classname for nested field objects to bind JS and CSS */
    protected $cssClass = '__textarea';
}
