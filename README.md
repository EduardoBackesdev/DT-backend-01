# Proposta
Você deverá desenvolver um blog. Para isso, separaremos a proposta em algumas rotas:

# Back-end
Desenvolva uma API utilizando Laravel que deve conter as seguintes rotas:

- /register - [POST] - esta rota deve cadastrar um usuário;

- /login - [POST] - esta rota deve autenticar um usuário;

- /posts - [POST] - esta rota deve cadastrar uma postagem mantendo a referência do autor. (requer autenticação);

- /posts/{id} - [PUT] - esta rota deve editar a postagem do ID especificado mantendo a referência do autor. (requer autenticação);

- /posts - [GET] - esta rota deve retornar a lista de todas as postagens ordenadas das mais recentes para as mais antigas com a possibilidade de inverter esta ordenação e de retornar apenas as postagens do usuário que fez a requisição (requer autenticação);

- /posts/{id} - [GET] - esta rota deve retornar a postagem do ID especificado com todos os seus dados (requer autenticação);

- /posts/{id} - [DELETE] - esta rota deve deletar a postagem do ID especificado.
