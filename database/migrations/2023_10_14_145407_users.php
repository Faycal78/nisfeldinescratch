<? use Illuminate\Support\Facades\Schema;

class AddForeignKeyToInscriptionFemmeAndInscriptions extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('inscription_femme', function (Blueprint $table) {
            // Modification du type de colonne 'user_id' en entier
            $table->unsignedBigInteger('user_id')->change();

            // Ajout de la contrainte de clé étrangère
            $table->foreign('user_id')->references('user_id')->on('inscriptions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('inscription_femme', function (Blueprint $table) {
            $table->dropForeign(['user_id']);  // Suppression de la contrainte de clé étrangère
        });
    }
}
