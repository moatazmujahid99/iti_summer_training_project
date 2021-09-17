<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'post_id' => $this->post_id,
            'posted_by' => $this->post->user->first_name." ".$this->post->user->last_name,
            'comment' => $this->comment_text,
            'comment_by' => $this->user->first_name." ".$this->user->last_name,
        ];
    }
}
