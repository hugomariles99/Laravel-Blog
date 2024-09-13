<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('descripcion');
            $table->text('categoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};

//php artisan tinker
//use App\Models\Curso;
//$cursos = Curso::all(); Todos los registros de la tabla
//$cursos = Curso::where('categoria', 'Diseño Web')->get();
//$cursos = Curso::where('categoria', 'Diseño Web')->orderBy('id', 'desc')->get();
//$cursos = Curso::where('categoria', 'Diseño Web')->orderBy('name', 'asc')->get();
//$cursos = Curso::where('categoria', 'Diseño Web')->orderBy('name', 'asc')->first();
//$cursos = Curso::select('name', 'descripcion')->get();
//$cursos = Curso::select('name', 'descripcion', 'categoria')->orderBy('name', 'asc')->where('categoria', 'Diseño Web')->get();
//$cursos = Curso::select('name as title', 'descripcion', 'categoria')->where('categoria', 'Diseño Web')->take(3)->get();
//$curso = Curso::find(5);

//$cursos = Curso::where('id', '>', 45)->get();
//$cursos = Curso::where('id', '<>', 45)->get();
//$cursos = Curso::where('name', 'like', '% dolor %')->get();