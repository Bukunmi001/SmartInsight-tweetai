// app/Models/Autobot.php
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autobot extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

// migration
Schema::create('autobots', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->timestamps();
});
