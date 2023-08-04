<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['make', 'model', 'year'];

    // Define relationships with other entities
    public function diagnosticRecords()
    {
        return $this->hasMany(DiagnosticRecord::class, 'car_id', 'id');
    }

    public function repairTasks()
    {
        return $this->hasMany(RepairTask::class, 'car_id', 'id');
    }

    public function serviceAppointments()
    {
        return $this->hasMany(ServiceAppointment::class, 'car_id', 'id');
    }

    public function maintenanceSchedule()
    {
        return $this->hasOne(MaintenanceSchedule::class, 'car_id', 'id');
    }

    public function vehicleHistory()
    {
        return $this->hasOne(VehicleHistory::class, 'car_id', 'id');
    }

    public function warrantyInformation()
    {
        return $this->hasOne(WarrantyInformation::class, 'car_id', 'id');
    }

    public function insurancePolicy()
    {
        return $this->hasOne(InsurancePolicy::class, 'car_id', 'id');
    }
}
