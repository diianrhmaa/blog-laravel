<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable ;
    // jika menggunakan creted (fillable untuk yg boleh diisi)
    
    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body'
    // ];

    // menjaga yg tidak boleh diganti
    protected $guarded = ['id'];
    
    protected $with = ['category','author'];

    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['search']) ? $filters ['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //                  ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        // mengganti method if jadi when(tdk pakai isset), pake null coalescing
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        });

        //join table 
        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) => 
                $query->where('username', $author)
            )
        );
    }

    public function category(){
        // one to one
        return $this->belongsTo(Category::class);
    }

    public function author(){
        // one to one
        return $this->belongsTo(User::class, 'user_id'); // pakai alias
    }

    public function getRouteKeyName() 
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
