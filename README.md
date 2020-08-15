> ## People Management

* API REST 
* Aplicação dos conceitos API REST de forma correta 
* Tratamento de erros 

> ## Configuração

* Com o terminal aberto na pasta do projeto, executar o comando: php -r "file_exists('.env') || copy('.env.example', '.env');"
* Configurar a conexão de banco de dados no arquivo .env
* Com o terminal aberto na pasta do projeto, executar o comando: composer install
* Com o terminal aberto na pasta do projeto, executar o comando: php artisan serve

# POST | api/funcionarios

>> ## api/funcionarios

1. ✅ Recebe uma requisição do tipo **POST** na rota **/api/funcionarios**
2. ✅ Valida dados obrigatórios **name**, **cpf**, **admissao** e **endereco**
3. ✅ Retorna **201** e o funcionario

# GET | api/funcionarios

>> ## api/funcionarios

1. ✅ Recebe uma requisição do tipo **GET** na rota **/api/funcionarios**
2. ✅ Retorna **200** e [funcionarios]

# GET | api/funcionarios/id

>> ## api/funcionarios/id

1. ✅ Recebe uma requisição do tipo **GET** na rota **/api/funcionarios/{funcionario}**
2. ✅ Retorna **200** e o funcionario

# PUT | api/funcionarios/id

>> ## api/funcionarios/id

1. ✅ Recebe uma requisição do tipo **PUT** na rota **/api/funcionarios/{funcionario}**
2. ✅ Retorna **200** e []

# DELETE | api/funcionarios/id

>> ## api/funcionarios/id

1. ✅ Recebe uma requisição do tipo **DELETE** na rota **/api/funcionarios/{funcionario}**
2. ✅ Retorna **200** e []

## Exceções

1. ✅ Retorna erro **404** recurso não encontrado
2. ✅ Retorna erro **405** se o verbo http estiver incorreto
3. ✅ Retorna erro **422** se um parametro obrigatório não for passado
4. ✅ Retorna erro **500** erro interno no servidor

## License

[MIT license](https://opensource.org/licenses/MIT).
