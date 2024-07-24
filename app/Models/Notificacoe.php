<?php

namespace App\Models;

use CodeIgniter\Model;

class Notificacoe extends Model
{
    protected $table            = 'notificacoes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'titulo', 'legenda'
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

    public function alerta($titulo, $legenda)
    {
        $dados = [
            'titulo' => $titulo,
            'legenda' => $legenda,
        ];
        $this->insert($dados);
    }

    public function buscarTudo()
    {
        return $this->findAll();
    }
    public function deletar($id)
    {
        return $this->where('id', $id)->delete();
    }
    public function apagarTodos()
    {
        return $this->db->table($this->table)->emptyTable();
    }
}
