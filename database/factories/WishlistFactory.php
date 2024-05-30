<?php
namespace Database\Factories;

use App\Models\Wishlist;
use App\Models\User;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class WishlistFactory extends Factory
{
    protected $model = Wishlist::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'service_id' => Service::factory(),
        ];
    }
}
