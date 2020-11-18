# Consulta - API Entrepontos

Este projeto contempla um exemplo de consulta à API Entrepontos para a agência Contém. 

### Responsáveis:
- Backend: Fabio
- Frontend: Eduardo
- GP: Humberto
- Atendimento: Ana Carol

## Instalação

### Composer
Atualize o ***composer***, entre na pasta do projeto e rode:
```
composer update
```

#### Se precisar instalar o *composer* no Linux/Mac
na pasta do projeto, rode:
```
mkdir bin
curl -s https://getcomposer.org/installer | php -- --install-dir=bin
```
#### Se precisar instalar o *composer* no Windows
Siga as instruções em: [http://getcomposer.org/doc/00-intro.md#installation-windows](http://getcomposer.org/doc/00-intro.md#installation-windows)

## Uso do exemplo
```
index.php - formulário com campos para o token e os parâmetros de consulta;
consulta.php - alvo do action do form, com os processos de consumo da API;
```	

## Parâmetros
|Atributo|Descrição|Exemplo|
|--|--|--|
|since|Data/Hora da criação do registro|2020-07-13T12:35:00.000-03:00|
|start|ID de ocorrência(inicial)|1|
|invoice_key|Obtém apenas as ocorrências da NF especificada|35151000210903000105550000000010171764911610|
|cte_key|Obtém apenas as ocorrências do CT-eespecificado|35190327840760000163570010000071061945400000|
|manifest_id|Obtém apenas as ocorrências do Manifesto especificado|1|
|occurrence_code|Obtém apenas as ocorrências do tipo especificado pelo código|1|

