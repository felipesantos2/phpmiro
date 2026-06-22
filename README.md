# PHPMIRO 🎯🐘

Um simples, pequeno, *prático* micro-framework construido em PHP. Baseado em arquitetura em camadas que faz um pequeno incremento no MVC padrão, utilizando outros padrões que extendem o model, controller e as views.

## ✨ Padrões (Patterns)
- **Controllers** 
- **Services** 
- **DTOs**
- **Models**
- **Entities**
- **Object Values** 
- **Middlewares** 


## 💻 Ambiente

O projeto pode ser executado rapidamente com o `docker`. Só é necessário ter o docker instalado em sua máquina. O PHP, Composer e tudo mais ele vai organizar para você.

Podemos conferir isso no `Dockerfile` e no `compose.yml`.

### 🚀 Subindo o Ambiente:

```bash
docker compose up -d
```
```bash
docker exec -it phpmiro composer install
```

### DATA FLOW

                PHPMIRO - Architecture Flow

┌──────────────┐
│   Request     │
└──────┬───────┘
       │
       v
┌──────────────┐
│  Middleware  │
└──────┬───────┘
       │
       v
┌──────────────┐
│    Router    │
└──────┬───────┘
       │
       v
┌──────────────┐
│  Controller  │
└──────┬───────┘
       │
       v
┌──────────────┐
│     DTO      │
│ (request data│
│  parsing)    │
└──────┬───────┘
       │
       v
┌──────────────┐
│   Service    │
└──────┬───────┘
       │
       v
┌──────────────────────┐
│ Model / Entity       │
└──────────────┬───────┘
               │
               v
┌──────────────┐
│   Response   │
└──────────────┘

