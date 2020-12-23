<?php

Class CadastroCliente {
    
    public function cadastroNovoCliente($cliente_nome_completo, $cliente_data_nascimento, $cliente_sexo, $cliente_endereco, $cliente_bairro, $cliente_numero, $cliente_cep, $cliente_cidade, $cliente_estadosbrasil, $cliente_contato, $cliente_celular, $cliente_profissao, $cliente_etnia, $cliente_estado_civil, $cliente_data_cadastro, $cliente_email, $cliente_origemTrafego ){
        global $conn;

        $sql = "INSERT INTO `cliente_dados_pessoais` ";
        $sql .= "(`cliente_id`, `cliente_nomeCompleto`, `cliente_dataNascimento`, `cliente_sexo`, ";
        $sql .=  "`cliente_endereco`, `cliente_bairro`, `cliente_numero`, `cliente_cep`, `cliente_cidade`, ";
        $sql .= "`cliente_estado`, `cliente_tel`, `cliente_cel`, `cliente_profissao`, `cliente_etnia`, ";
        $sql .= "`cliente_estadoCivil`, `cliente_dataCadastro`, `cliente_email`, `cliente_trafego`) "; 
        $sql .= "VALUES (NULL, '$cliente_nome_completo', '$cliente_data_nascimento', '$cliente_sexo', '$cliente_endereco', '$cliente_bairro', '$cliente_numero', '$cliente_cep', '$cliente_cidade', '$cliente_estadosbrasil', '$cliente_contato', '$cliente_celular', '$cliente_profissao', '$cliente_etnia', '$cliente_estado_civil', '$cliente_data_cadastro', '$cliente_email', '$cliente_origemTrafego') ";
        $conn->prepare($sql)->execute([$cliente_nome_completo, $cliente_data_nascimento, $cliente_sexo, $cliente_endereco, $cliente_bairro, $cliente_numero, $cliente_cep, $cliente_cidade, $cliente_estadosbrasil, $cliente_contato, $cliente_celular, $cliente_profissao, $cliente_etnia, $cliente_estado_civil, $cliente_data_cadastro, $cliente_email, $cliente_origemTrafego]);

        return true;



    }
}




?>