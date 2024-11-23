<?php

// App\Models\Service.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'service'; // Chỉ định tên bảng là 'service'

    protected $fillable = ['service_name', 'description', 'price','image', 'category_id_sv'];

    public function category()
    {
        return $this->belongsTo(Category_service::class, 'category_id_sv'); // Định nghĩa quan hệ với model CategoryService
    }
    public function packages()
    {
        return $this->hasMany(Package::class); // 1 dịch vụ có nhiều gói
    }
}
