// app/Models/Post.php
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'autobot_id'];

    public function autobot()
    {
        return $this->belongsTo(Autobot::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

// migration
Schema::create('posts', function (Blueprint $table) {
    $table->id();
    $table->foreignId('autobot_id')->constrained()->onDelete('cascade');
    $table->string('title');
    $table->text('body');
    $table->timestamps();
});
