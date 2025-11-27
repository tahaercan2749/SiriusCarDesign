<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'slug', 'content', 'image', 'breadcrumb_image', 'category_id', 'parent_page', 'blade_id', 'translation_of', 'lang_id', 'published', 'is_main'];

    /**
     * Sayfa resimlerinin bulunduğu klasör yolunu getirir.
     * @return string
     */
    public function getImagePath()
    {
        return asset('storage/' . Config::get('constants.page_path'));
    }

    /**
     * Sayfanın resmininin yolunu getirir. Eğer resim yoksa false değeri getirir.
     * @return false|string
     */
    public function image()
    {
        if ($this->image) {
            return asset("storage/" . config('constants.page_path') . "/" . $this->image); // Resmin tam URL'sini döndürüyor
        }
        return false;
    }

    /**
     * Sayfanın breadcrumb resmininin yolunu getirir. Eğer resim yoksa false değeri getirir.
     * @return false|string
     */
    public function breadcrumbImage()
    {
        if ($this->breadcrumb_image) {
            return asset("storage/" . config('constants.breadcrumb_path') . "/" . $this->breadcrumb_image); // Resmin tam URL'sini döndürüyor
        }
        return false;
    }

    /**
     * Sayfanın galeri resimlerini getirir.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }


    /**
     * Geçerli sayfanın üst sayfasını getirir.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Page::class, 'parent_page')->where('published', 1);
    }

    /**
     * Sayfanın yayında olan alt sayfalarını getirir.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subPages()
    {
        return $this->hasMany(Page::class, 'parent_page')->where('published', 1);
    }

    /**
     * Sayfanın tüm alt sayfalarını getirir.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subPagesAll()
    {
        return $this->hasMany(Page::class, 'parent_page');
    }

    /**
     * Geçerli sayfanın üst kategorisini getirir.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Geçerli sayfanın breadcrumb listesini verir eğer sayfa alt sayfa olarak kaydedilmişse ust kategorinin breadcrumb listesini ekleyerek devam eder
     * @return \Illuminate\Support\Collection
     */
    public function breadcrumbs()
    {
        $breadcrumbs = collect();

        // Eğer üst sayfa varsa önce onu al
        if ($this->parent) {
            $breadcrumbs = $this->parent->breadcrumbs();
        } // Eğer üst sayfa yok ama bir kategoriye bağlıysa, kategori breadcrumblarını al
        elseif ($this->parentCategory) {
            $breadcrumbs = $this->parentCategory->breadcrumbs();
        }

        $breadcrumbs->push($this);
        $breadcrumbs->pop();
        return $breadcrumbs;
    }

    /**
     * Sayfanın blade şablonunu getirir.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function blade()
    {
        return $this->belongsTo(Blade::class, 'blade_id');
    }

    public function seo()
    {
        return $this->hasOne(Seo::class, 'page_id');
    }

    public function getOtherPagesAttribute()
    {
        // 1. Kategori yoksa boş koleksiyon dön (Hata almamak için)
        if (!$this->category_id) {
            return collect();
        }

        $limit = 3; // İhtiyaç duyulan sayfa sayısı

        // Sonuçları toplayacağımız ana koleksiyon
        $results = collect();

        // 2. ÖNCEKİ YAZILAR (ID'si küçük olanlar)
        // DİKKAT: 'parent_category' yerine 'category_id' kullanıyoruz.
        $beforePages = Page::where('category_id', $this->category_id)
            ->where('is_main', 0)
            ->where('published', 1) // Sadece yayınlanmışları göster
            ->where('id', '<', $this->id)
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();

        $results = $results->merge($beforePages);

        // 3. EKSİK KALDIYSA SONRAKİ YAZILAR (ID'si büyük olanlar)
        if ($results->count() < $limit) {
            $remaining = $limit - $results->count();

            $afterPages = Page::where('category_id', $this->category_id)
                ->where('is_main', 0)
                ->where('published', 1) // Sadece yayınlanmışları göster
                ->where('id', '>', $this->id)
                ->orderBy('id', 'asc')
                ->limit($remaining)
                ->get();

            $results = $results->merge($afterPages);
        }

        return $results;
    }


    public function faq()
    {
        return $this->HasMany(Faq::class, 'page_id');
    }
}























