<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckDatastudent extends Model
{
  protected $table = 'check_datastudents';
  protected $fillable = ['student_id','Card_student','type_check','date_Student','sub_ject','Class_Room'];

  public function studentdbType()
  {
    return $this->belongsTo(studentdb::class,'student_id');
  }
}
