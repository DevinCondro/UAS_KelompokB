<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MakananResource extends JsonResource
{
    public $message;
    /**
    * __construct
    *
    * @param mixed $message
    * @param mixed $resource
    * @return void
    */

    public function __construct($message, $resource)
    {
        parent::__construct($resource);
        $this->message = $message;
    }
    
    /**
    * Transform the resource into an array.
    *
    * @param \Illuminate\Http\Request $request
    * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
    */

    public function toArray($request)
    {
        return [
            'message' => $this->message,
            'data' => $this->resource
        ];
    }
}
