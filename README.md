
#### Desafio

Implementacção de uma API web, utilizando o padrão REST, para gerenciamento de câmeras dos nossos clientes.

### Através de sua API deve ser possível:

Adicionar novas câmeras,
Desabilitar uma câmera,
Listar as câmeras de um cliente,
Registrar ocorrência de alertas,
Obter ocorrências de alertas por intervalo de tempo.

#### Regras de Negócio

Não é permitida mais de uma câmera com mesmo IP por cliente,
Não há máscara de rede, porém o formato do IP precisa ser válido,
Uma câmera está obrigatoriamente associada a um único cliente,
Um alerta está obrigatoriamente associado a uma única câmera.
