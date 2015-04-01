<?php
/**
 * Created by Maxim Omelchenko <omelchenko@samsonos.com>
 * on 31.03.2015 at 17:54
 */

namespace samsoncms\input\text;

class TextInputApplication extends \samsoncms\input\InputApplication
{
    protected $id = 'samson_cms_input_text';

    /**
     * Create field class instance
     *
     * @param string|\samson\activerecord\dbRecord $entity Class name or object
     * @param string|null $param $entity class field
     * @param int $identifier Identifier to find and create $entity instance
     * @param \samson\activerecord\dbQuery|null $dbQuery Database object
     * @return self
     */
    public function createField($entity, $param = null, $identifier = null, $dbQuery = null)
    {
        $this->field = new Text($entity, $param, $identifier, $dbQuery);
        return $this;
    }
}
