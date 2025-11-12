<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    use HasFactory;

    protected $fillable = ['site_name', 'logo', 'favicon', 'footer_logo',"store_link",'seo_title','seo_description', 'head_code', 'header_code', 'footer_code'];


    /**
     * Site logosunu geri getirir. Yoksa false olarak dönüş yapar
     * @return false|string
     */
    public function logo()
    {
        if ($this->logo) {
            return asset("images/site/" . $this->logo);
        }
        return false;
    }

    /**
     * Site faviconunu geri getirir. Yoksa false olarak dönüş yapar
     * @return false|string
     */
    public function favicon()
    {
        if ($this->favicon) {
            return asset("images/site/" . $this->favicon);
        }
        return false;
    }

    /**
     * Site faviconunu geri getirir. Yoksa false olarak dönüş yapar
     * @return false|string
     */
    public function footerLogo()
    {
        if ($this->footer_logo) {
            return asset("images/site/" . $this->footer_logo);
        }
        return false;
    }

}
