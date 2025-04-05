<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Attribute;
use App\Models\Value;

class StockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $result =  [
            'quantity' => $this->quantity,
        ];

        return $this->getAttributes($result);
    }

    public function getAttributes($result)
    {
        $attributes = json_decode($this->attributes);
        foreach ($attributes as $attribute) {
            $attr = Attribute::find($attribute->attribute_id)->name;
            $val = Value::find($attribute->value_id)->getTranslations('name');
            $result[$attr] = $val;
        }
        return $result;
    }
}
