Módulo 3

Nível 1 - Criação de um programa procedural, ou seja, um script por ação

- Estruturado;  
- PHP, HTML e SQL misturados;  
- Cada ação (Incluir, Editar, Excluir, Listar) é um script;  

Nível 2 - Agrupando ações comuns em scripts

- Reunir ações comuns em torno de menos scripts;  
- Incluir juntamente com a edição de registros e listar juntamente com a exclusão de registros;   
- Conceito de script e ação realizada;</li>

Nível 3 - Separando o HTML com micro-templates

- Trabalhar o HTML em arquivos a parte (templates);
- Camada de apresentação isolada em arquivos a parte;
- Separar o visual do restante do programa;

Nível 4 - Separando o acesso a dados com funções

- Série de funções (insere_pessoa, exclui_pessoa);
- Separar as funções de persistência do programa principal;

Nível 5 - Acesso à base com classes

- Transformar as funções de acesso à Base  de Dados em classes de modelo;
- Introduzir a biblioteca PDO (PHP Data Object);
- Ínicio de trabalho com Excessões;
- Camada de Banco de Dados utilizando classes;

Nível 6 - Conexões e segurança
- Refatorar a classe de banco de dados;
- Não apresentar mais os dados de conexão (banco, usuário e senha);
- Aumentar a segurança ao trabalhar com prepared statments;
- Evitar ataques como SQL Injection;

Nível 7 - Transformando páginas procedurais em Classes de Control
- Refatorar os programas principais ainda estruturados;
- Transformar estes programas em classes de Controle (Ex.: PessoaForm, PessoaList)
- Cada ação do usuároi é identificada por um método;
- Alterar o fluxo da aplicação;
- Agora tem-se um arquivo (index.php) por onde passam todas as rotas

Módulo 4 - Tópicos Especiais de Orientação a Objetos

Nível 1 - Tratamento de Erros
 - Método Die (Interrompe o programa totalmente no ponto onde foi chamado)
 - Flag False (Pode haver várias situações diferentes de erros sendo difícial a indentificação)
  - "Lançar" uma excessão (Permite armazenar uma mensagem de erro na classe e usar somente no programa que a estancia). Obs.: No programa de chamada é necessário usar o bloco try catch

  Nível 2 - Métodos Mágicos ou Interceptadores
  - __construct (Intercepta a classe quando a mesma é instanciada)
  - __destruct (Intercepta a classe quando a mesma é destruída ou termina de ser executada)
  - __get (Intercepta a classe quando o objeto tenta acessar o valor de um atributo)
  - __set (Intercepta a classe quando o objeto tenta atribuir valor a um atributo)
  - __isset (Intercepta a classe quando é verificado a existência de um atributo da classe por meio da função isset)
  - __unset (Intercepta a classe quando é destruído um atributo da classe por meio da função unset)
  - __toString (Intercepta a classe na tentativa da impressão direta do objeto)
  - __clone (Intercepta a classe quando o objeto é clonado por meio da função clone)

  Nível 3 - SimpleXML - Biblioteca do PHP para manipular arquivos XML de forma simples
  - Leitura do XML
  - Acessando nós filhos
  - Alterando  o documento
  - Elementos repetitivos

  Nível 4 - DOM XML - Biblioteca do PHP para manipular arquivos de Modelo de Objeto de Documento (DOM)
  - Leitura  de  documento
  - Manipulação de documento

  

