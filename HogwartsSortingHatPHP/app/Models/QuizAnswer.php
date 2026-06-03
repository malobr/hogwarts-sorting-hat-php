<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuizAnswer extends Model
{
    protected $fillable = [
        'quiz_question_id', 
        'answer_text', 
        'points_gryffindor', 
        'points_slytherin', 
        'points_ravenclaw', 
        'points_hufflepuff'
    ];

    /**
     * Obtém a pergunta à qual esta alternativa pertence.
     */
    public function question(): BelongsTo
    {
        return $this->belongsTo(QuizQuestion::class, 'quiz_question_id');
    }
}