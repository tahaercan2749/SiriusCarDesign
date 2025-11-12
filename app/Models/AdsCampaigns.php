<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdsCampaigns extends Model
{
    protected $fillable = ['name','utm_source','utm_medium','utm_campaign','utm_content','gad_campaignid','ad_group_id','campaign_link','link'];

}
