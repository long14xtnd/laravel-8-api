<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        //config khi thao tac voi api chi goi id,title va body
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }

    public function with($request)
    {
        //khi thao tac voi api se gui kem thong tin duoi day
        return [
            'slogan' => 'Long dep trai se tro thanh mot developer php dang cap',
            'note' => 'Chi con vai ngay nua thoi sap ra truong roi co len'
        ];
    }

}
