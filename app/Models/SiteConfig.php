<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
  use HasFactory;

  protected $fillable = [
    'hero_title',
    'hero_subtitle',
    'hero_image1',
    'hero_image2',
    'hero_image3',
    'about_title',
    'about_description',
    'about_image',
    'address_full',
    'social_facebook',
    'social_twitter',
    'social_instagram',
    'social_facebook_link',
    'social_twitter_link',
    'social_instagram_link',
  ];
}
