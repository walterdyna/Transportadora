// Arquivo de migração para criação da tabela transportadoras
public function up()
{
    Schema::create('transportadoras', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('endereco');
        $table->string('bairro');
        $table->string('cidade');
        $table->string('uf');
        $table->decimal('limite_credito', 8, 2);
        $table->date('data_analise_credito');
        $table->timestamps();
    });
}

// Model Transportadora
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Transportadora extends Model
{
    protected $fillable = [
        'nome', 'endereco', 'bairro', 'cidade', 'uf', 'limite_credito', 'data_analise_credito'
    ];
}

// Controller Transportadora
namespace App\Http\Controllers;
use App\Models\Transportadora;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TransportadoraController extends Controller
{
    public function index()
    {
        $transportadoras = Transportadora::all();
        return Inertia::render('Transportadoras/Index', ['transportadoras' => $transportadoras]);
    }
    // Implemente as funções para store, show, update e destroy conforme necessário
}
