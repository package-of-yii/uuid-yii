<?php

namespace Poyii\Uuid\Behavior;

use Ramsey\Uuid\Uuid;
use yii\base\Event;
use yii\behaviors\AttributeBehavior;
use yii\db\BaseActiveRecord;

class UuidBehavior extends AttributeBehavior
{
    /**
     * Column used in inserting the uuid.
     * 
     * @var string
     */
    public $column = 'id';
    
    /**
     * Value used in the uuid column.
     * 
     * @var string
     */
    public $value;

    /**
     * Initialize the object with the attribute from provided column.
     * Default only works with insert active record event because we
     * won't change the uuid on edit.
     */
    public function init()
    {
        parent::init();

        if (empty($this->attributes)) {
            $this->attributes = [
                BaseActiveRecord::EVENT_BEFORE_INSERT => [ $this->column ],
            ];
        }
    }

    /**
     * Provides the default uuid value for UuidBehavior if not set from the behavior
     * configuration.
     * 
     * @param  Event  $event
     * @return string
     */
    protected function getValue($event)
    {
        if ($this->value === null) {
            return Uuid::uuid4();
        }

        return parent::getValue($event);
    }
}