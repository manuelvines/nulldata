<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class EmployeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        
        return [
            'id'       => $this->id,
            'name'     => $this->name,
            'birth'    => $this->birth->format('d-m-Y'),
            'address'  => $this->address,
            'latitud'  => $this->latitud,
            'longitud' => $this->longitud,
            'job'      => $this->job->name
        ];
    }
}
