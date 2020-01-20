<?php

namespace App\Model;

class PessoaDao
{

    public function create(Pessoa $p)
    {
        //insere uma pessa

        $sql = 'INSERT INTO pessoa VALUES (?, ?, ?)';

        $enviar = Conexao::getConexao()->prepare($sql);

        $enviar->bindValue(1, $p->getCodigo());
        $enviar->bindValue(2, $p->getNome());
        $enviar->bindValue(3, $p->getIdade());

        $enviar->execute();
    }

    public function read()
    {
        //busca pessoas

        $sql = 'SELECT * FROM pessoa';

        $enviar = Conexao::getConexao()->prepare($sql);

        $enviar->execute();

        if ($enviar->rowCount() > 0) {
            /* Tem que colocar a barra (\) antes do PDO para ele saber que é uma
            classe nativa do PHP. */
            $resultado = $enviar->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }

        return [];
    }

    public function update(Pessoa $p)
    {
        //atualiza os dados de uma pessoa

        $sql = 'UPDATE pessoa SET nome = ?, idade = ? WHERE codigo = ?';

        $enviar = Conexao::getConexao()->prepare($sql);

        $enviar->bindValue(1, $p->getNome());
        $enviar->bindValue(2, $p->getIdade());
        $enviar->bindValue(3, $p->getCodigo());

        $enviar->execute();
    }

    public function delete($codigo)
    {
        //deleta uma pessoa

        $sql = 'DELETE FROM pessoa WHERE codigo = ?';

        $enviar = Conexao::getConexao()->prepare($sql);

        $enviar->bindValue(1, $codigo);

        $enviar->execute();
    }
}