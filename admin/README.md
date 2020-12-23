# physiostetic
 Sistema de gerenciamento de clinica de estetica

Projeto: Sistema interno de Clínica de Estética


Dia 1	07 de dezembro de 2020


•	Selecionado um Template free de CMS que utilizada um framework chamado de BOOTSTRAP 4. 
•	Alterado as extensões dos arquivos de .html para .php
•	Personalização do login: 
o	Foi feito um código de login diferente da forma como aprendi em tutoriais para login em sistema. 
o	Nesse sistema de login, iniciei a sessão na linha 1, inclui o banco de dados na linha 2 e um arquivo de funções gerais que usarei para me auxiliar durante a construção do sistema. 
o	Uma função geral que criei foi um script de php com javascript de alerta. Caso de erro ele me exibe uma mensagem com o erro e caso positivo, também.
o	No login fiz uma medida de segurança com mysqli_real_escape_string(), embora não saiba a limitação dessa função ou se há limitação e segurança. 
o	Deixei a função com as variáveis de conexão e a variável post do formulário para que assim já possa determinar direto em uma variável para uso direto, evitando assim a ocupação de mais espaço. 
o	Tive problemas para fazer a vinculação inicial com o banco de dados. Não acertei de primeira o código SQL e quase OPTO por fazer semelhante aos tutoriais de conexão, o que não foi necessário no final. CONSEGUI!
o	Com a função empty e uma query simples consegui executar o login direto. 
o	Observando a logica montada não atentei inicialmente para o problema do não login. Tive que utilizar o While loop com a função mysqli_fetch_assoc($query) e assim, seguindo em parte alguns tutoriais, fiz o login. 

Dia 2	11 de dezembro de 2020
Foi alterado a forma de login, utilizando PDO em php, e criado a inserção de registro para novos usuários utilizando classe e orientação à objeto.  
