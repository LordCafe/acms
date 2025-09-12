# 🚀 Roadmap para **Acms (Showcase)**

## 🔹 Fase 1 – Base del proyecto

1. **Inicializar el proyecto en GitHub**

   * Repositorio `acms`.
   * README atractivo (con logo, badges, descripción en inglés/español).
   * Licencia (MIT).

2. **Estructura de carpetas limpia**

   ```
   acms/
   ├─ public/        # index.php, assets
   ├─ app/
   │   ├─ Controllers/
   │   ├─ Models/
   │   ├─ Views/
   │   └─ Core/      # Router, Request, Response, etc.
   ├─ config/
   ├─ storage/       # logs, cache, etc.
   ├─ vendor/
   └─ routes.php
   ```

3. **Router simple**

   * Manejo de rutas estáticas y dinámicas (`/user/{id}`).
   * Soporte GET/POST.
   * 404 personalizado.

---

## 🔹 Fase 2 – Arquitectura MVC

4. **Controladores básicos**

   * `HomeController` → página principal.
   * `PageController` → páginas tipo CMS.

5. **Modelos iniciales**

   * Clase `Page` (id, title, content).
   * Clase `User` (id, username, password hash).

6. **Sistema de Vistas con Twig**

   * Configuración de Twig.
   * Layout base (`base.html.twig`).
   * Plantillas simples para `home`, `about`, `contact`.

---

## 🔹 Fase 3 – Setup & DB

7. **Instalador básico**

   * Página `/install` que:

     * Pida datos MySQL.
     * Cree archivo `config.php`.
     * Genere tablas mínimas (`users`, `pages`).

8. **Conexión a MySQL con PDO**

   * Clase `Database` en `Core/`.
   * Ejemplo de consulta segura con prepared statements.

---

## 🔹 Fase 4 – Funcionalidad demo

9. **CRUD mínimo de páginas**

   * Listar páginas.
   * Crear nueva.
   * Editar.
   * Eliminar.

10. **Login de usuarios (demo)**

* Registro con password hash.
* Login/logout con sesiones PHP.

---

## 🔹 Fase 5 – Pulido para Showcase

11. **Documentación clara en README**

* Cómo instalar.
* Cómo correr `php -S localhost:8000 -t public`.
* Screenshots y GIFs.

12. **Demo online (opcional)**

* Subirlo a un hosting gratuito (Heroku, Render, Railway).

13. **Bonus “Wow”**

* Middleware simple (ejemplo: `/admin` requiere login).
* Config JSON/YAML para opciones globales.
* Un mini tema en Twig para que luzca pro.

---

👉 Con esto, tu **Acms** se ve como un mini-Laravel/mini-Drupal pero **hecho por ti desde cero**.
