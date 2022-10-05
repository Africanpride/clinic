<?php

namespace App\Models;

use Spatie\Image\Manipulations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'title',
                  'slug',
                  'content',
                  'notes',
                  'image',
                  'active',
                  'featured',
                  'user_id',
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
               'deleted_at'
           ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Get the creator for this model.
     *
     * @return App\User
     */

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function author() {
        return $this->belongsTo(User::class);
    }



    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function registerMediaCollections(): void    {

            $this->addMediaCollection('featured')
                // ->withResponsiveImages()
                ->useFallbackUrl('/backend/assets/img/product/pg1.png')
                ->useFallbackPath(public_path('/backend/assets/img/product/pg1.png'))
                ->singleFile();

            $this->addMediaConversion('thumb')
                ->width(200)
                ->height(200)
                ->sharpen(10);

            $this->addMediaConversion('square')
                ->width(212)
                ->height(212)
                ->sharpen(10);

            $this->addMediaConversion('backend')
                ->width(230)
                ->height(192)
                ->sharpen(10);

            $this->addMediaConversion('old-picture')
                ->sepia()
                ->border(10, 'black', Manipulations::BORDER_OVERLAY);
      }
}
