<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi', 'harga', 'gambar', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
