<?php 


namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class AdvertismentFilter extends AbstractFilter
{

    public const SEARCH = 'search';
    public const CATEGORY = 'category_id';
    public const REGION = 'region_id';
    public const PRICE_FROM = 'price_from';
    public const PRICE_TO = 'price_to';
    public const SORT_BY = 'sort_by';

    protected function getCallbacks(): array
    {
        return [
                    self::SEARCH => [$this, 'search'],
                    self::CATEGORY => [$this, 'categoryId'],
                    self::REGION => [$this, 'regionId'],
                    self::PRICE_FROM => [$this, 'priceFrom'],
                    self::PRICE_TO => [$this, 'priceTo'],
                    self::SORT_BY => [$this, 'sortBy'],
               ];
    }

    public function search(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }

    public function categoryId(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }

    public function regionId(Builder $builder, $value)
    {
        $builder->where('region_id', $value);
    }

    public function priceFrom(Builder $builder, $value)
    {
        $builder->where('price', '>', $value);
    }

    public function priceTo(Builder $builder, $value)
    {
        $builder->where('price', '<', $value);
    }

    public function sortBy(Builder $builder, $value)
    {
        if($value == 'price')
        {
          $builder->orderBy('price', 'asc');  
        }
        else
        {
          $builder->orderBy('created_at', 'asc');  

        }
        
    }
}