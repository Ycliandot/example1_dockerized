<?php

namespace App\Services\Employee;

use Illuminate\Support\Facades\Storage;

class Service
{
    public function update($data, $employee)
    {
        if (isset($data['photo']) || isset($data['delete_photo'])) {
            $this->_deletePhoto($employee->photo);
        }

        if (isset($data['delete_photo'])) {
            $data['photo'] = '';
        }

        if (!empty($data['photo'])) {
            $data['photo'] = Storage::disk('public')->put('/images', $data['photo']);
        }

        $employee->update($data);
    }

    private function _deletePhoto($path)
    {
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
