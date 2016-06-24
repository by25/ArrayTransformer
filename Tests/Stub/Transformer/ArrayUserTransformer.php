<?php
/**
 * (c) itmedia.by <info@itmedia.by>
 */

namespace Itmedia\ArrayTransformer\Tests\Stub\Transformer;


use Itmedia\ArrayTransformer\Transformer\AbstractTransformer;

class ArrayUserTransformer extends AbstractTransformer
{
    public function transform($item)
    {
        return [
            'name' => $item['user_name'],
            'email' => $item['user_email']
        ];
    }


}