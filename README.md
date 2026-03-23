# 📘 PHP Learning Dashboard

Um **dashboard interativo para estudo de PHP**, com foco em prática, exercícios e visualização de progresso.

Este projeto simula um **sistema administrativo moderno**, com sidebar, pontuação e exercícios automáticos — ideal para quem está aprendendo PHP na prática.

---

## 🚀 Funcionalidades

### 🧭 Interface

* Sidebar estilo sistema administrativo
* Layout moderno com CSS
* Navegação simples e intuitiva

### 📊 Dashboard

* Exibição de **pontuação do usuário**
* **Gráfico de progresso** (canvas + JavaScript)

### 🧠 Exercícios

* 20 exercícios automáticos de PHP
* Correção instantânea
* Mistura de lógica, matemática e funções PHP

### 🎮 Gamificação

* Sistema de pontuação
* Armazenamento via **cookies**
* Feedback imediato ao usuário

---

## 📁 Estrutura do Projeto

```
php-learning-dashboard/

index.php        → Dashboard principal
exercicios.php   → Lista de exercícios
resultado.php    → Correção automática
style.css        → Estilos do sistema
script.js        → Gráfico de progresso
```

---

## ⚙️ Como Executar

### 1. Instale um servidor local

Use qualquer um:

* XAMPP
* WAMP
* Laragon

### 2. Coloque a pasta no servidor

Exemplo (XAMPP):

```
C:\xampp\htdocs\php-learning-dashboard
```

### 3. Inicie o servidor

### 4. Acesse no navegador

```
http://localhost/php-learning-dashboard
```

---

## 🧠 Como Funciona

### Exercícios

* As perguntas são geradas em `exercicios.php`
* As respostas são enviadas via **POST**
* `resultado.php` corrige automaticamente

### Pontuação

* Cada resposta correta = +1 ponto
* A pontuação é salva em **cookie**
* O dashboard lê e exibe o valor

### Gráfico

* Feito com `<canvas>`
* Usa JavaScript para representar a pontuação

---

## 📚 Conceitos de PHP Utilizados

* Arrays
* Estruturas de repetição (`for`, `foreach`)
* Condicionais (`if`)
* Funções matemáticas (`sqrt`, `round`, etc.)
* Strings (`strtolower`)
* Superglobais (`$_POST`, `$_COOKIE`)
* Manipulação de formulários

---

## 🎯 Objetivo do Projeto

Este projeto foi criado para:

* Praticar PHP de forma visual
* Aprender com exercícios interativos
* Simular um sistema real
* Desenvolver lógica de programação

---

## 🔥 Possíveis Melhorias

* Sistema de login de usuários
* Ranking de pontuação
* Níveis e medalhas 🏆
* Banco de dados (MySQL)
* Mais exercícios (100+)
* Gráficos mais avançados (Chart.js)

---

## 👨‍💻 Autor

Projeto para fins de estudo e prática de PHP.

---

## 📌 Licença

Uso livre para aprendizado.
