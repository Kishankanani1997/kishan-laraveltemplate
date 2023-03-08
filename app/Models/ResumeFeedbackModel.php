<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ResumeFeedbackModel extends Model
{
    use HasFactory,notifiable;
    protected $fillable=[
        
        "name","email","number","subject","message"
    ];
    protected $table="tblcontact";
}
