<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request request
     *
     * @return array
     */
    public function toArray($request)
    {
        $request = $request;
        return [
            'id'          => $this->id,
            'name'        => htmlentities($this->name),
            'file'        => $this->image->file,
            'price'       => $this->price,
            'details'     => htmlentities($this->details),
            'description' => htmlentities($this->description),
        ];
    }
}
