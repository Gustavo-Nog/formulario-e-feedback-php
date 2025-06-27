# 💻 Exercícios de Programação Web

Este repositório contém a resolução de duas atividades práticas propostas na disciplina de **Programação Web**, com foco em formulários, métodos HTTP (`GET` e `POST`), cookies e sessões utilizando **HTML5**, **CSS3** e **PHP**.  
Cada questão está organizada em uma subpasta conforme descrito abaixo.

---

## 📁 Estrutura do Repositório

### 📂 Boas-vindas
> Formulário de cadastro com armazenamento de dados via `cookie` e `session`.

#### 📄 Arquivos principais:
- `index.html`: Formulário para o usuário inserir nome e idade.
- `script.php`: Script que:
  - Captura dados via `POST`;
  - Armazena nome em um cookie com validade de 1 dia;
  - Armazena idade em uma sessão;
  - Redireciona para `boasvindas.php`.
- `boasvindas.php`: Exibe uma mensagem personalizada com os dados do usuário.

#### 💡 Exemplo de saída:
```bash
Olá, Gustavo! Você tem 20 anos.
```


#### 🧪 Tecnologias utilizadas:
- ![HTML5](https://img.shields.io/badge/-HTML5-E34F26?logo=html5&logoColor=white&style=flat) HTML5  
- ![CSS3](https://img.shields.io/badge/-CSS3-1572B6?logo=css3&logoColor=white&style=flat) CSS3  
- ![PHP](https://img.shields.io/badge/-PHP-777BB4?logo=php&logoColor=white&style=flat) PHP 8

---

### 📂 Feedback
> Sistema de avaliação de produtos em duas etapas (uso de `GET` e `POST`).

#### 📄 Arquivos principais:
- `listar_produtos.php`: Lista produtos com links contendo `ID` via método `GET`;
- `avaliar_produto.php`: Formulário de avaliação com nota de 1 a 5 (via `POST`);
- `processarnota.php`: Processa a nota e exibe mensagem de agradecimento.

#### 💡 Exemplo de saída:

Obrigado por avaliar o Produto 1 com a nota 4.

#### 🧪 Tecnologias utilizadas:
- ![HTML5](https://img.shields.io/badge/-HTML5-E34F26?logo=html5&logoColor=white&style=flat) HTML5  
- ![CSS3](https://img.shields.io/badge/-CSS3-1572B6?logo=css3&logoColor=white&style=flat) CSS3  
- ![PHP](https://img.shields.io/badge/-PHP-777BB4?logo=php&logoColor=white&style=flat) PHP 8

---

## 🧰 Requisitos para execução

- Servidor local como:
  - [XAMPP](https://www.apachefriends.org/)
  - [Laragon](https://laragon.org/)
- PHP 8.0 ou superior

## 🚀 Como executar localmente

1. Clone ou baixe este repositório.
2. Mova a pasta `SI-Web` para o diretório do servidor local (ex: `htdocs` no XAMPP).
3. Acesse no navegador:

http://localhost/SI-Web/Boas-vindas/index.html
http://localhost/SI-Web/Feedback/listar_produtos.php

---

## 📝 Autor
- Gustavo Pereira Alves Nogueira
- 📧 gustavopan3g7@gmail.com
- 🔗 [LinkedIn](https://www.linkedin.com/in/gustavo-alves-nogueira)

Desenvolvido como parte dos estudos da disciplina de **Programação Web**.