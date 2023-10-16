// app/Models/UserModel.php
<?php

namespace App\Models;

use application\Model;

class DemoApi_model extends Model
{
    protected $table = 'patient'; // Change 'users' to your actual table name.
    protected $primaryKey = 'id';
    protected $allowedFields = ['incident_id', 'patient_id', 'vitals', 'score', 'vehicle', 'status', 'added_date', 'added_by']; // Define the fields you want to store.
}
