<?php

namespace App\Http\Resources\Api;

use App\Models\Company;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'email' => $this->email,
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            'company' => $this->company->name,
            'createdAt' => Carbon::parse($this->created_at)->format('Y-m-d H:i:s'),
        ];
    }
}
