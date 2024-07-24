<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id','nome', 'email', 'senha', 'cargo', 'salario', 'foto', 'estatus'
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

    public function verifica($email, $senha)
    {
        $usuario = $this->where("email", $email)->first(); 
        if($email == $usuario->email){
            if($senha == $usuario->senha){
                return $usuario;
            }
        }
    }

    public function buscarTodos()
    {
        return $this->where('estatus', 'Ativo')->findAll();
    }

    public function buscarAdm($cargo)
    {
        return $this->where('cargo', $cargo)->findAll();
    }

    public function buscarSalarios()
    {
        return $this->select('salario')->findAll();
    }

    public function cadastro($nome,$email,$senha,$cargo,$salario,$foto)
    {
        $dados = [
            'nome' => $nome,
            'email' => $email,
            'senha' => $senha,
            'cargo' => $cargo,
            'salario' => $salario,
            'foto' => $foto,
            'estatus' => "Ativo",
        ];
        return $this->insert($dados);
    }

    public function buscarID($id)
    {
        $usuario = $this->where('id', $id)->first();
        return $usuario;
    }
    public function editar($id, $nome, $email,$senha, $cargo, $salario)
    {
        $dados = [
            'nome' => $nome,
            'email' => $email,
            'senha' => $senha,
            'cargo' => $cargo,
            'salario' => $salario,
        ];
        $usuario = $this->where('id', $id)->first();
        if ($usuario) {
            return $this->update($id, $dados);
        }
        
        return false;
    }
    public function excluir($id)
    {
        $dados = [
            'estatus' => "Desativado"
        ];
        return $this->update($id, $dados);
    }
}
