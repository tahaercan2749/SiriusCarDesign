<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignVisits extends Model
{
    protected $fillable = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'gad_campaignid', 'ad_group_id', 'gclid', 'gbraid', 'ip_address', 'user_agent', 'referrer', 'landing_url', 'visited_at'];
    public $timestamps = true;
}
