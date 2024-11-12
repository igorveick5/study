<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMoviesMovies extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_movies', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_movies_movies', function($table)
        {
            $table->dropColumn('actors');
        });
    }
}
