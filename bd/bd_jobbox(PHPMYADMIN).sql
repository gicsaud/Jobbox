-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 07:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_jobbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `email_candidato` varchar(100) NOT NULL,
  `code` varchar(5) NOT NULL,
  `expire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_candidato`
--

CREATE TABLE `tb_candidato` (
  `id_candidato` int(11) NOT NULL,
  `nome_candidato` varchar(45) NOT NULL,
  `cpf_candidato` varchar(20) NOT NULL,
  `email_candidato` varchar(45) NOT NULL,
  `senha_candidato` varchar(45) NOT NULL,
  `cep_candidato` varchar(9) NOT NULL,
  `complemento_candidato` varchar(45) DEFAULT NULL,
  `num_candidato` varchar(10) NOT NULL,
  `rua_candidato` varchar(45) NOT NULL,
  `bairro_candidato` varchar(45) NOT NULL,
  `telefone_candidato` varchar(20) NOT NULL,
  `data_nascimento` date NOT NULL,
  `categoria_cnh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_curriculo`
--

CREATE TABLE `tb_curriculo` (
  `id_curriculo` int(11) NOT NULL,
  `cod_exp_anteriores` int(11) NOT NULL,
  `cod_candidato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_empresa`
--

CREATE TABLE `tb_empresa` (
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(45) NOT NULL,
  `cnpj_empresa` varchar(20) NOT NULL,
  `email_empresa` varchar(45) NOT NULL,
  `senha_empresa` varchar(45) NOT NULL,
  `cep_empresa` varchar(9) NOT NULL,
  `complemento_empresa` varchar(45) DEFAULT NULL,
  `num_empresa` varchar(10) NOT NULL,
  `rua_empresa` varchar(45) NOT NULL,
  `bairro_empresa` varchar(45) NOT NULL,
  `telefone_empresa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_empresa`
--

INSERT INTO `tb_empresa` (`id_empresa`, `nome_empresa`, `cnpj_empresa`, `email_empresa`, `senha_empresa`, `cep_empresa`, `complemento_empresa`, `num_empresa`, `rua_empresa`, `bairro_empresa`, `telefone_empresa`) VALUES
(1, 'Jobbox', '7834934298', 'gicasaud@gmail.com', '123', '15081020', 'Casa', '1774', 'Rua Professora Marinha do Nascimento Bednarsk', 'Residencial Cidade Jardim', '17988015575');

-- --------------------------------------------------------

--
-- Table structure for table `tb_exp_anteriores`
--

CREATE TABLE `tb_exp_anteriores` (
  `id_exp_anteriores` int(11) NOT NULL,
  `cargo_anterior` varchar(45) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cidade_empregador_anterior` varchar(45) NOT NULL,
  `empregador_anterior` varchar(45) NOT NULL,
  `data_admissao` date NOT NULL,
  `data_demissao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_form_prof`
--

CREATE TABLE `tb_form_prof` (
  `id_form_prof` int(11) NOT NULL,
  `nome_instituicao` varchar(200) NOT NULL,
  `nome_curso` varchar(200) NOT NULL,
  `nivel_formacao` varchar(200) NOT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_termino` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_foto_perfil_candidato`
--

CREATE TABLE `tb_foto_perfil_candidato` (
  `id_foto_perfil_candidato` int(11) NOT NULL,
  `imagem_candidato` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_foto_perfil_empresa`
--

CREATE TABLE `tb_foto_perfil_empresa` (
  `id_foto_perfil_empresa` int(11) NOT NULL,
  `imagem_empresa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_foto_perfil_empresa`
--

INSERT INTO `tb_foto_perfil_empresa` (`id_foto_perfil_empresa`, `imagem_empresa`) VALUES
(1, '6f1efb3e2f7ddb6f6b9a3dbefabe0c67.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_idioma`
--

CREATE TABLE `tb_idioma` (
  `id_idioma` int(11) NOT NULL,
  `nome_idioma` varchar(200) NOT NULL,
  `nivel_fluencia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_vaga`
--

CREATE TABLE `tb_vaga` (
  `id_vaga` int(11) NOT NULL,
  `salario_vaga` int(11) NOT NULL,
  `carga_horaria` varchar(45) NOT NULL,
  `requisitos_vaga` varchar(200) NOT NULL,
  `cargo_vaga` varchar(45) NOT NULL,
  `quantidade_vaga` int(11) NOT NULL,
  `nome_empresa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vaga`
--

INSERT INTO `tb_vaga` (`id_vaga`, `salario_vaga`, `carga_horaria`, `requisitos_vaga`, `cargo_vaga`, `quantidade_vaga`, `nome_empresa`) VALUES
(1, 2001, '109', 'Ensino Medio completo', 'Empacotador', 1, 'Max'),
(2, 1200, '100', 'ter ensino medio completo', 'Medico', 1223, 'Jobbox');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `cod_candidato` int(11) NOT NULL,
  `cod_empresa` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `cod_candidato`, `cod_empresa`, `status`) VALUES
(1, 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_candidato`
--
ALTER TABLE `tb_candidato`
  ADD PRIMARY KEY (`id_candidato`);

--
-- Indexes for table `tb_curriculo`
--
ALTER TABLE `tb_curriculo`
  ADD PRIMARY KEY (`id_curriculo`),
  ADD KEY `cod_exp_anteriores` (`cod_exp_anteriores`),
  ADD KEY `cod_candidato` (`cod_candidato`);

--
-- Indexes for table `tb_empresa`
--
ALTER TABLE `tb_empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indexes for table `tb_exp_anteriores`
--
ALTER TABLE `tb_exp_anteriores`
  ADD PRIMARY KEY (`id_exp_anteriores`);

--
-- Indexes for table `tb_form_prof`
--
ALTER TABLE `tb_form_prof`
  ADD PRIMARY KEY (`id_form_prof`);

--
-- Indexes for table `tb_foto_perfil_candidato`
--
ALTER TABLE `tb_foto_perfil_candidato`
  ADD PRIMARY KEY (`id_foto_perfil_candidato`);

--
-- Indexes for table `tb_foto_perfil_empresa`
--
ALTER TABLE `tb_foto_perfil_empresa`
  ADD PRIMARY KEY (`id_foto_perfil_empresa`);

--
-- Indexes for table `tb_idioma`
--
ALTER TABLE `tb_idioma`
  ADD PRIMARY KEY (`id_idioma`);

--
-- Indexes for table `tb_vaga`
--
ALTER TABLE `tb_vaga`
  ADD PRIMARY KEY (`id_vaga`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_candidato`
--
ALTER TABLE `tb_candidato`
  MODIFY `id_candidato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_curriculo`
--
ALTER TABLE `tb_curriculo`
  MODIFY `id_curriculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_empresa`
--
ALTER TABLE `tb_empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_exp_anteriores`
--
ALTER TABLE `tb_exp_anteriores`
  MODIFY `id_exp_anteriores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_form_prof`
--
ALTER TABLE `tb_form_prof`
  MODIFY `id_form_prof` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_foto_perfil_candidato`
--
ALTER TABLE `tb_foto_perfil_candidato`
  MODIFY `id_foto_perfil_candidato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_foto_perfil_empresa`
--
ALTER TABLE `tb_foto_perfil_empresa`
  MODIFY `id_foto_perfil_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_idioma`
--
ALTER TABLE `tb_idioma`
  MODIFY `id_idioma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_vaga`
--
ALTER TABLE `tb_vaga`
  MODIFY `id_vaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_curriculo`
--
ALTER TABLE `tb_curriculo`
  ADD CONSTRAINT `tb_curriculo_ibfk_1` FOREIGN KEY (`cod_exp_anteriores`) REFERENCES `tb_exp_anteriores` (`id_exp_anteriores`),
  ADD CONSTRAINT `tb_curriculo_ibfk_2` FOREIGN KEY (`cod_candidato`) REFERENCES `tb_candidato` (`id_candidato`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
