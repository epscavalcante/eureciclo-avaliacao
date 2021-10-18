![image](https://www.eureciclo.com.br/img/selo-horizontal.ea6b8657.png)

# Eureciclo - Avaliação para Dev

## Como rodar a aplicação
Tenha o docker e o preferencialmente o docker-compose instalado e configurado.
Executar o comando:

```sh
docker-compose up --build
```

Pode ser passado a flag `-d` para rodar a aplicação e deixar o terminal livre
```sh
docker-compose up --build -d
```

## Avaliação 1
Dado um conjunto de garrafas d'água, com volumes de água diferentes entre si, e um galão de água. Crie um algoritmo, na linguagem que achar melhor, para escolher as garrafas a serem utilizadas para encher o galão, de acordo:
* O galão deve ser completamente preenchido com o volume das garrafas;
* Procure esvaziar totalmente as garrafas escolhidas;
* Quando não for possível esvaziar todas garrafas escolhidas, deixe a menor sobra p possível;
* utilize o menor número de garrafas possível;

### Como executar
Com a aplicação em execução, execute o comando:
```sh
docker-compose exec app php artisan eureciclo:gallon-water
```
## Avaliação 2
Você recebeu um arquivo de texto com os dados de vendas da empresa. Precisamos criar uma maneira para que estes dados sejam importados para um banco de dados.

Sua tarefa é criar uma interface web que aceite upload de arquivos, normalize os dados e armazene-os no banco de dados.

### Como executar
Com a aplicação rodando, acesse o endereço http://127.0.0.1:8000, na página inicial tem um botão ("Iniciar") que irá redicionar para a página de listagem e upload de arquivo.

## Testes
Tanto a avaliação 1 quando a 2 possuem testes. Para rodá-los:

```sh
docker-compose exec app php artisan test
```
