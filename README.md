# Lady Framework

## Instalação

Para criar uma nova aplicação Lady, execute o comando:

```bash
composer create-project lady/lady nome-do-projeto
```

## Requisitos

- PHP 8.1 ou superior
- Composer
- Extensões PHP:
  - BCMath
  - Ctype
  - JSON
  - Mbstring
  - OpenSSL
  - PDO
  - Tokenizer
  - XML

## Estrutura do Projeto

```
app/
├── Features/          # Módulos da aplicação
│   ├── Auth/         # Autenticação
│   └── Shared/       # Componentes compartilhados
├── config/           # Configurações
├── database/         # Migrações e seeds
├── resources/        # Views e assets
└── routes/           # Definição de rotas
```

## Desenvolvimento

1. Instale as dependências:
```bash
composer install
```

2. Execute os testes:
```bash
composer test
```

3. Verifique o código:
```bash
composer cs-check
```

## Licença

MIT License
