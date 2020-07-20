<?php

namespace App\Http\Resources;

// use Illuminate\Http\Resources\Json\ResourceCollection;

use Illuminate\Http\Resources\Json\JsonResource;
class Users extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function toArray($request)
    {

//         dd($this);
        if (is_null($this->resource)) {
            $result['details']="Not found.";

            return $result;
        }
        return [
                'id' => $this->id,
                'first_name' => $this->first_name,
                'last_name' =>$this->last_name,
                'email' => $this->email,
//                 'created_at' => $this->created_at,
//                 'updated_at' => $this->updated_at,
            ];

//         return parent::toArray($request);
    }
//     public function with($request)
//     {
//         return [
//             'status' => 'Accepted',
//         ];
//     }

        public function withResponse($request, $response)
        {
            $response->setStatusCode(200);
        }

}
