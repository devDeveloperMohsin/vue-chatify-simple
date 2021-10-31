<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\Storage;
use App\Http\Resources\RecipientsResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ChatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'to_user' => new RecipientsResource($this->toUser),
            'from_user' => new RecipientsResource($this->fromUser),
            'message' => $this->message,
            'attachment' => Storage::exists($this->attachment) ? Storage::url($this->attachment) : null,
            'created_at' => $this->created_at->format('M d h:i'),
        ];
    }
}
