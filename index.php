<?php

require_once 'vendor/autoload.php';

// Teste create
$p = new \App\Model\Pessoa();
$p->setCodigo(1);
$p->setNome('teste');
$p->setIdade(22);

$pDao = New \App\Model\PessoaDao();
$pDao->create($p);

// Teste update
// $p = new \App\Model\Pessoa();
// $p->setCodigo(1);
// $p->setNome('Deu certo');
// $p->setIdade(99);
//
// $pDao = New \App\Model\PessoaDao();
// $pDao->update($p);

// Teste read
// $pDao = New \App\Model\PessoaDao();
// echo '<pre>';
// print_r($pDao->read());

// Teste delete
// $pDao = New \App\Model\PessoaDao();
// $pDao->delete(1);