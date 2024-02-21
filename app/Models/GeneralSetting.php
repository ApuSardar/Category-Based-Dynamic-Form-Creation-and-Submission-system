<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;
    protected $fillable = ['email', 'company_name', 'alter_email', 'phone', 'alter_phone', 'address', 'logo', 'favicon', 'meta_title', 'meta_description', 'meta_keywords', 'copyright_text', 'location_image', 'phone_image', 'email_image', 'watch_image', 'open_day', 'open_day_time', 'close_day', 'footer_description', 'about_bg', 'service_bg', 'project_bg', 'contact_bg'];
}
