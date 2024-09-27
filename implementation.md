# Planejamento e Estruturação

- [X] **Definir os requisitos**
  - [X] Funcionalidades: Mostrar a taxa de câmbio
  - [X] Tecnologias: React e Laravel
  - [X] Arquitetura de 3 camadas

- [ ] **Conceitos para aplicar**
  - [ ] 3 camadas de arquitetura - Apresentação, lógica de negócios e Acesso aos Dados
  - [ ] APIs a consumir: Open Exchange Rates
  - [ ] Pub/Sub e Worker - Modelo publisher/subscriber e workers para processamento assíncrono

# Implementar - Camada de Apresentação

- [ ] **React**
  - [ ] Pasta chamada `frontend` usando React
  - [ ] Configure o ambiente

- [ ] **Implementação da Interface do Usuário**
  - [ ] Componentes - Exibir taxa de câmbio e histórico
  - [ ] Estado e Efeitos - Hooks (`useState`, `useEffect`) para gerenciar estado e chamadas à API
  - [ ] Roteamento - Configurar React Router

# Implementação da Camada Lógica de Negócio (Laravel)

- [X] **Criar projeto Laravel**
  - [X] Pasta chamada `backend`
  - [X] Configure o ambiente

- [X] **Implementação dos Endpoints da API**
  - [X] Roteamento - Definir rotas da API
  - [X] Controladores

- [ ] **Implementação dos Serviços**
  - [ ] Services - Lógica de obtenção de taxas de câmbio e histórico
  - [ ] Pub/Sub - Publicar eventos e assinaturas

# Implementação da Camada de Acesso a Dados (Laravel)

- [ ] **Implementação dos Repositórios**
  - [ ] Repositórios
  - [ ] Modelos

- [ ] **Configuração de Workers**
  - [ ] Configurar Jobs/Queues
  - [ ] Implemente workers

# Integração entre React e Laravel

- [ ] Configurar frontend React para fazer chamadas à API Laravel usando Axios ou Fetch
- [ ] Testar a comunicação entre o frontend e o backend

# Integração com APIs Externas e Testes

- [ ] **Integração com APIs Externas**
  - [ ] Conectar à API
  - [ ] Criar scripts para importar dados históricos

- [ ] **Teste do Sistema**
  - [ ] Teste unitário dos serviços, repositórios e controladores
  - [ ] Teste de integração
  - [ ] Teste end-to-end

# Deploy e Escalabilidade

- [ ] **Deploy da Aplicação**
  - [ ] Configure o servidor de produção - AWS/Digital Ocean
  - [ ] Configure o ambiente de produção - Banco de dados/Cache/Filas de Jobs
  - [ ] Deploy separado para o frontend e backend

- [ ] **Monitoramento e Escalabilidade**
  - [ ] Configurar ferramentas de monitoramento
  - [ ] Escalar horizontalmente workers e filas
