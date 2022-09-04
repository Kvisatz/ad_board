<?php 


	namespace App\Models;
 
	use Illuminate\Database\Eloquent\Model;

	 
	class Category extends Model
	{
	    protected $table = 'categories';


	    public function supcategories()
	    {
	        return $this->hasMany(Category::class, 'parent_id');
	    }
        public function filters()
	    {
	        return $this->belongsToMany(Filter::class);
	    }
	}