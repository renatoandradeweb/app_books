
# Projeto Yii2 - API de Usuários, Clientes e Livros

## Configurações Iniciais

### Configuração jwtSecretKey

#### Em src/config/params.php definir o jwtSecretKey para funcionar o token JWT

    return [
        'jwtSecretKey' => '',
    ];


### Configuração AWS S3

#### Em src/services/AwsS3Service.php definir as credenciais para funcionar o upload de arquivos

    'credentials' => [
            'key'    => '',  // Defina a sua Access Key ID da AWS
            'secret' => '', // Defina a sua Secret Access Key
    ], 
    

## Instruções para Iniciar o Projeto

1. Clone o repositório:

    ```bash
    git clone https://github.com/renatoandradeweb/app_books
    cd app_books
    ```

2. Suba o ambiente Docker:

    ```bash
    docker-compose up --build
    ```

3. A aplicação estará disponível em `http://localhost:8080`.

## Rotas da API

### Módulo de Usuários

#### 1. Criar Usuário

**POST** `/user/create`

- **Request Body**

    ```json
    {
        "login": "renatoandradeweb",
        "password": "121314",
        "name": "Renato Andrade"
    }
    ```

- **Response**

    ```json
    {
        "success": true,
        "data": {
            "login": "renatoandradeweb",
            "name": "Renato Andrade",
            "password": "$2y$13$Z0rbWa0Rn9qA28QsGcLfROAVTgw1vhgjshBfL7ARvX5nZNmh9tIsS",
            "id": 2
        },
        "error": null,
        "statusCode": 201
    }
    ```

#### 2. Login de Usuário

**POST** `/user/login`

- **Request Body**

    ```json
    {
        "login": "renatoandrade",
        "password": "121314"
    }
    ```

- **Response**

    ```json
    {
        "success": true,
        "data": {
            "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
            "refresh_token": "Uf6Ms57Ob-6eGb7QfgJ2MzAjYd_BIRu_S1q61OMYJQAU7x8asN6gMXnlf-2CAUVWOQXZM-SJaGlJuCbRwjDVRK-WCbedSXCkmK9mFBbzIMT4UnybXMy40VXTvOYX73AjGhmMynYiH0pce34cgX7MNNUBsz4q8EX-C4eQ5z5PwOVryabCqVyLugAzCJpykkomyK_yEOVD2hDVCykzCcUeuM92SDGmIlHLYYE_-H2rnBUERFBXYDku-m5mnG9phre"
        },
        "error": null,
        "statusCode": 200
    }
    ```

#### 3. Logout de Usuário

**POST** `/user/logout`

- **Request Body**

    ```json
    {
        "user_id": 1
    }
    ```

- **Response**

    ```json
    {
        "success": true,
        "data": null,
        "error": null,
        "statusCode": 200
    }
    ```

#### 4. Renovar Token

**POST** `/user/refresh-token`

- **Request Body**

    ```json
    {
        "refresh_token": "cj87_N2LkJnIJ6APMDkiU_hYUna1z1Ltm12pDDcsI2G8ZbEhO2Q5yPvNyAFfgq7nz5LG9xKWpwX7YG6T0tE_bjaj82SfxVfBCCz7FwgYS7UJ7nwKvQ3M7mVGQwao26GTHexKklfBzfLPa42BbKS7GLGOQsRHUmtFS5kTtEIzwBRiH-7Y9KLqF6YQL_PVPTtwUbOBiN0jHtZFFzHTrFbTL_uDiIZKcl0mCMkMsNFRsJ5iJW1B0A-exmJTyZCxyIa"
    }
    ```

- **Response**

    ```json
    {
        "success": true,
        "data": {
            "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
            "refresh_token": "zKoMZ2pwDDM1ZXIm3jyFXj1dvRrqTJmfKtceXV39fhcSzVMb8gqVj-RcjfKWJvAXw8Fp-AkBHKJVPBS-fmLe2M6BGg91PKbCS2OBt8ct5O4Z2wNZHuBvqgy1i85IsJZlRa0077madpBS05BUfZfYZIcnz0lcacCh8qWCQrInQK2-qA6khyUW2Tf4qkGLlEPFp-gsTuMzs5xgLZfqeHhjVAKhvvsj4XH3OIuCYHPUkUdasiLvrvalmRdgphZsAlR"
        },
        "error": null,
        "statusCode": 200
    }
    ```

***


### Módulo de Clientes

#### 1. Criar Cliente

**POST** `/cliente/create`

- **Authorization**: Bearer Token
- **Request Body**

    ```json
    {
        "nome": "Cliente Exemplo",
        "cpf": "12345678901",
        "cep": "01001000",
        "logradouro": "Praça da Sé",
        "numero": "123",
        "cidade": "São Paulo",
        "estado": "SP",
        "complemento": "Apto 101",
        "sexo": "M"
    }
    ```

#### 2. Upload de Imagem para Cliente

**POST** `/cliente/upload/{id_cliente}`

- **Authorization**: Bearer Token
- **Multipart Form Data**
    - **file**: O arquivo de imagem a ser enviado (somente `jpg` ou `png`).

#### 3. Listar Clientes

**GET** `/clientes`

- **Authorization**: Bearer Token
- **Query Parameters**:
    - `limit`: Número de registros por página (opcional, padrão: 10).
    - `offset`: Número de registros para pular (opcional).
    - `order`: Campo para ordenar (`nome`, `cpf`, `cidade`).
    - `filter`: Filtro pelo campo `nome` ou `cpf`.

- **Exemplo de URL**:
    - Listar clientes com filtro por nome: 
        ```
        GET /clientes?limit=10&offset=0&order=nome&filter=Cliente%20Exemplo
        ```
    - Listar clientes ordenando por CPF: 
        ```
        GET /clientes?limit=10&offset=0&order=cpf
        ```

***

### Módulo de Livros

#### 1. Criar Livro

**POST** `/livro/create`

- **Authorization**: Bearer Token
- **Request Body**

    ```json
    {
        "isbn": "978-3-16-148410-0",
        "titulo": "Livro Exemplo",
        "autor": "Autor Exemplo",
        "preco": 99.90,
        "estoque": 10
    }
    ```

#### 2. Upload de Imagem para Livro

**POST** `/livro/upload/{id_livro}`

- **Authorization**: Bearer Token
- **Multipart Form Data**
    - **file**: O arquivo de imagem a ser enviado (somente `jpg` ou `png`).

#### 3. Listar Livros

**GET** `/livros`

- **Authorization**: Bearer Token
- **Query Parameters**:
    - `limit`: Número de registros por página (opcional, padrão: 10).
    - `offset`: Número de registros para pular (opcional).
    - `order`: Campo para ordenar (`titulo`, `preco`).
    - `filter`: Filtro pelo campo `titulo`, `autor`, ou `isbn`.

- **Exemplo de URL**:
    - Listar livros com filtro por título:
        ```
        GET /livros?limit=10&offset=0&order=titulo&filter=Livro%20Exemplo
        ```
    - Listar livros ordenando por preço:
        ```
        GET /livros?limit=10&offset=0&order=preco
        ```
&#8203;

&#8203;