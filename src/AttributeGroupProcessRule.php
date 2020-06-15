<?php

namespace Eav;

use Illuminate\Database\Eloquent\Model;

class AttributeGroupProcessRule extends Model
{
    /**
     * @{inheriteDoc}
     */
    protected $table = 'attribute_group_process_rule';
  
    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'sequence' => 0,
    ];

}
