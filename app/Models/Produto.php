<?php

namespace App\Models;

use CodeIgniter\Model;

class Produto extends Model
{
    protected $table            = 'produtos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'categoria', 'produto', 'acao','quantidade', 'valor','id_usuario'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function cadastro($nome, $categoria, $valor, $quantidade,$id)
    {
        
        return $this->insert([
            'categoria' => $categoria,
            'produto' => $nome,
            'acao' => "Adicionou",
            'quantidade' => $quantidade,
            'valor' => $valor,
            'id_usuario' => $id,
        ]);
    }
    public function buscarTodos()
    {
        return $this->findAll();
    }
    public function deletar($id)
    {
        return $this->where('id', $id)->delete();
    }
    public function atualizar($id, $quantidade)
    {
        $usuario = $this->where('id', $id)->first();

        if($usuario)
        {
            $dados = [
                'quantidade' => $quantidade
            ];
            return $this->update($id, $dados);
        }
    }

    public function historico()
    {
        return $this->find("acao");
    }
    public function buscarContratado($id)
    {
        return $this->where("id_usuario", $id);
    }
}
