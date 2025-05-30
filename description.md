# LadyPHP Framework

## Estrutura do Projeto

O LadyPHP é um framework PHP moderno inspirado no Laravel, com foco em modularidade e facilidade de manutenção.

### Diretórios Principais

```
lady/
├── app/                    # Código fonte da aplicação
│   └── Features/          # Módulos da aplicação
│       ├── Auth/         # Módulo de autenticação
│       │   ├── Controllers/
│       │   ├── Models/
│       │   ├── Services/
│       │   └── Views/    # Views específicas do módulo
│       └── Shared/       # Componentes compartilhados
│           ├── Controllers/
│           ├── Models/
│           └── Services/
├── config/                # Arquivos de configuração
├── database/             # Migrações e seeds
├── resources/            # Assets e recursos globais
│   ├── views/           # Views globais e layouts
│   ├── lang/            # Arquivos de tradução
│   └── assets/          # CSS, JS e imagens
├── routes/               # Definição de rotas
└── tests/                # Testes automatizados
```

### Estrutura de Views

O framework utiliza uma abordagem híbrida para views:

#### Views Globais (`resources/views/`)
- Layouts base e templates principais
- Componentes reutilizáveis em toda a aplicação
- Estrutura tradicional do Laravel
- Acessíveis globalmente

#### Views de Módulos (`app/Features/*/Views/`)
- Views específicas de cada módulo
- Encapsuladas junto com seus respectivos controllers
- Seguem o princípio de modularidade
- Facilitam a manutenção e reutilização do módulo

### Módulos

O projeto segue uma arquitetura modular, onde cada funcionalidade é um módulo independente:

#### Auth (Autenticação)
- **Controllers**: Controladores para login e registro
- **Models**: Modelo de usuário
- **Services**: Serviços de autenticação
- **Views**: Templates específicos de autenticação

#### Shared (Compartilhado)
- **Controllers**: Controlador base
- **Models**: Modelo base
- **Services**: Serviço base

### Arquitetura

- **Controllers**: Responsáveis pelo tratamento de requisições HTTP
- **Models**: Representam as entidades do banco de dados
- **Services**: Contêm a lógica de negócios
- **Routes**: Definem os endpoints da API
- **Views**: Separadas em globais e modulares

### Tecnologias

- PHP 8.1+
- Composer para gerenciamento de dependências
- PHPUnit para testes
- PHPStan para análise estática
- PHP_CodeSniffer para padrões de código

### Convenções

1. **Namespaces**: Seguem a estrutura de diretórios
2. **Nomenclatura**: 
   - Classes: PascalCase
   - Métodos: camelCase
   - Variáveis: camelCase
3. **Documentação**: PHPDoc em todas as classes e métodos

### Desenvolvimento

Para contribuir com o projeto:

1. Clone o repositório
2. Instale as dependências: `composer install`
3. Execute os testes: `composer test`
4. Verifique o código: `composer cs-check`
5. Faça commit seguindo as convenções 