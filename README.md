# Consulta - API Entrepontos

Este projeto contempla um exemplo de consulta à API Entrepontos para a agência Contém.

## Responsáveis

- **Backend**: *Fabio Suenaga*
- **Frontend**: *Eduardo Franco*
- **Projeto**: *Humberto Alves*
- **Atendimento**: *Ana Carol*

## Instalação

### Composer

Atualize o ***composer***, entre na pasta do projeto e rode:

```bash
composer update
```

#### Se precisar instalar o *composer* no Linux/MacOS

Siga as instruções em: [https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)

#### Se precisar instalar o *composer* no Windows

Siga as instruções em: [http://getcomposer.org/doc/00-intro.md#installation-windows](http://getcomposer.org/doc/00-intro.md#installation-windows)

## Uso do exemplos

### Ocorrências

```bash
/occurrences-form.php - formulário com os campos para token e os parâmetros de consulta de ocorrências;
/occurrences-api.php - consumo da api de ocorrências com os parâmetros fornecidos no formulário;
```

### Parâmetros para consulta de ocorrências

|Parâmetro|Descrição|Exemplo|
|--|--|--|
|since|Data/Hora da criação do registro|2020-07-13T12:35:00.000-03:00|
|start|ID de ocorrência(inicial)|1|
|invoice_key|Obtém apenas as ocorrências da NF especificada|35151000210903000105550000000010171764911610|
|cte_key|Obtém apenas as ocorrências do CT-e especificado|35190327840760000163570010000071061945400000|
|manifest_id|Obtém apenas as ocorrências do Manifesto especificado|1|
|occurrence_code|Obtém apenas as ocorrências do tipo especificado pelo código|1|

### Comprovantes de entrega

```bash
/freight-form.php - formulário com os campos para token e os parâmetros de consulta de comprovantes;
/freight-api.php - consumo da api de comprovantes com os parâmetros fornecidos no formulário;
```

### Parâmetros para consulta de comprovantes de entrega

|Parâmetro|Descrição|Exemplo|
|--|--|--|
|invoice_key|Obtém apenas as comprovantes da NF especificada|35151000210903000105550000000010171764911610|
|cte_key|Obtém apenas as comprovantes do CT-e especificado|35190327840760000163570010000071061945400000|
