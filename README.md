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

  Nível 5 - SPL - Biblioteca do PHP para manipular estrutura de dados (pilhas, filas, arrays e outras), iterator (percorrer estruturas recursivas, estrutura de diretórios, etc) entre outras
  - Manipulação de arquivos
  - Manipulação de filas
  - Manipulação de pilhas
  - Percorrendo diretórios
  - Manipulando Arrays

Nível 6 - Reflection - API de reflexão: forma de investigar características do próprio código-fonte. Biblioteca que permite descobrir métodos, propriedades disponíveis de uma classe; quais são as características de uma determinada propriedade. Investigar a própria estrutura de codificação.

Nivel7 - Traits - (Peculiariedade) Para explicar traits é necessário enteder o contexto.
No conceito de herança em OO, é permitido reutilizar caracteristcas nas classes filhas (herdadas). Essas características podem ser atributos ou métodos. O PHP implementa somente o conceito de herança simples, ou seja, uma classe filha pode ter somente uma classe pai. Porém há vezes que é necessário compartilhar métodos entre diferentes partes do sistema e essas partes não são filhas da mesma classe.
Traits é um conjunto de métodos que podem ser importados para classes do sistema, independe de qual classe seja. Isto é, um traço de código que pode ser absorvido por N classes.

Nivel 8  - Injeção de dependência - Técnica que visa desacoplar mais as classes.
O método pode estar fixo (dependente) em uma classe, na classe pai ou por meio de uso de um trait, ou seja, o programa chamador não tem escolha de desafixar o método pois fora implementado de uma certa forma na classe. Em uma aplicação grande orientada objetos terão programadores que desenvolvem classes e programadores que utilizam classes. Como exemplo, ao usar um framework, algumas classes não poderão ser modificadas.

Nivel 9 - PSR - PHP Stardard Recommendation
 - Recomendação de padrões de escrita de código
 - Evolve:
    - Carregamento de classes;
    - Namespaces: isola logicamente as bibliotecas em espaços separados e evita conflito;
    - Nomemclatura;
    - Estilo;
 - Interoperabilidade: possibilidade de desenvolvimento utilizando diferentes bibliotecas de diferentes fornecedores sem conflitos, ou seja, sem que uma interfira no funcionamento da outra;
 - Dividida em níveis (PSR-0, PSR-1, PSR-2, etc.)

 - Usar Namespaces para estruturar e isolar classes
 - Namespaces no padrão \Fornecedor\Subnivel\Classe: ficam enclausuradas dentro do espaço lógico do Fornecedor evitando que duas classes de mesmo nome com fornecedores diferentes entrem em conflito  
 - Namespaces correspondem a diretórios
     - \Livro\Widgets\Form\Field => Lib/Livro/Widgets/Form/Field.php
 - Definições de abertura de chaves, tamanho de linhas, indentação, etc.
 - Classes em StudlyCaps (Ex.: FormField)
 - Métodos em camelCase (Ex.: getData())
 - Namespaces seguir um autoloader padrão: autoloader são métodos de carregamento de classes padronizada, ou seja, carrega as classes cliente e de terceiros de maneira automatizada.

 Nivel 10 - Namespaces
  - Quando o PHP surgiu não haviam classes
  - No PHP3, era possível criar classes e objetos, mas ainda muito simples, semelhante a vetores
  - No PHP4, melhorou, mas o PHP5 revolucionou
  - No PHP5: construct, destruct, autoload, static, exceptions, SPL, e mais
  - Muitas bibliotecas começaram a surgir;
  - Repositórios PEAR, PHPClasses;
  - Projetos sem padronização entre eles (nomes, diretórios)
  - Cada um fazia do seu jeito
  - Isso começa a mudar com as primeiras PSRs
  - PHP5.3 surgem os NameSpaces
  - Imagine que você tenha a classe Form (formulário de tela), Field, Datagrid
  - E você cria uma sistema de perguntas, com a classe Form (entidade), Answer
  - Uma é componente, a outra é modelo
  - Como distingui-las?
  - Até o PHP5.2, usava-se prefixos para separar as classes
  - Ex.: Mega_Mail, Master_Mail, Master_Form, Mega_Form;
  - No PHP5.3, surgem os Namespaces, ou espaços de nomes
  - É uma separação lógica(pacote) ao redor de uma classe, interface ou função
  - Permitem classes de mesmo nome, em espaços diferentes
  - Cria um isolamento lógico para evitar conflitos de nomes;
  - Assim, podemos ter:
      - \Lib\Components\Form (Componente)
      - \Application\Model\Form (Entidade)
  - Mapeamento: \Livro\Widgets\Form\Filed -> Lib/Livro/Widgets/Form/Field.php
  - Há um isolamento lógico e esse isolamento é identico ao isolamento físico do arquivo