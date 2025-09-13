# 🚀 ACMS - Adrián Content Management System

<div align="center">

![PHP](https://img.shields.io/badge/PHP-8%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Twig](https://img.shields.io/badge/Twig-3.x-339933?style=for-the-badge&logo=twig&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)
![Status](https://img.shields.io/badge/Status-In%20Development-orange?style=for-the-badge)

**Un CMS moderno y ligero construido con PHP y Twig**

*Diseñado para ser flexible, extensible y perfecto para prototipado rápido*

[🌟 Demo Live](#) • [📖 Documentación](#instalación) • [🐛 Reportar Bug](../../issues)

</div>

---

## ✨ Características Principales

<table>
<tr>
<td width="50%">

### 🏗️ **Arquitectura Sólida**
- ✅ **Patrón MVC** implementado
- ✅ **PSR-4 Autoloading**
- ✅ **Separación de responsabilidades**
- ✅ **Código limpio y mantenible**

### 🎨 **Sistema de Themes**
- ✅ **Cambio dinámico** de apariencia
- ✅ **Múltiples themes** soportados
- ✅ **Fácil personalización**
- ✅ **Responsive design**

</td>
<td width="50%">

### ⚡ **Rendimiento**
- ✅ **Sin base de datos** (JSON)
- ✅ **Carga rápida**
- ✅ **Caché integrado**
- ✅ **Optimizado para producción**

### 🛠️ **Desarrollo**
- ✅ **Motor Twig** seguro
- ✅ **Routing flexible**
- ✅ **Fácil de extender**
- ✅ **Ideal para mockups**

</td>
</tr>
</table>

## 📁 Estructura del Proyecto

```
acms/
├─ public/           # Punto de entrada y assets
│   └─ index.php
├─ app/
│   ├─ Controllers/  # Lógica de aplicación
│   ├─ Models/       # Gestión de datos
│   ├─ Views/        # Templates Twig por theme
│   │   ├─ default/  # Theme por defecto
│   │   └─ [themes]/ # Themes adicionales
│   └─ Core/         # Núcleo del sistema
├─ data/             # Contenido en JSON
│   ├─ pages/        # Páginas del sitio
│   └─ config/       # Configuración
├─ config/           # Configuración del sistema
├─ storage/          # Logs y cache
├─ vendor/           # Dependencias Composer
└─ routes.php        # Definición de rutas
```

## 🎯 Casos de Uso

<div align="center">

| 🏢 **Como CMS** | 🎨 **Como Herramienta de Prototipado** |
|:---|:---|
| • Sitios web corporativos | • Mockups interactivos |
| • Blogs y portfolios | • Demos para clientes |
| • Páginas de aterrizaje | • A/B testing de diseños |
| • Documentación técnica | • Presentaciones dinámicas |
| • Catálogos de productos | • Validación de conceptos |

</div>

## 🛠️ Stack Tecnológico

<div align="center">

| Tecnología | Versión | Propósito |
|:---:|:---:|:---|
| ![PHP](https://img.shields.io/badge/PHP-8%2B-777BB4?style=flat-square&logo=php) | 8.0+ | Backend y lógica de negocio |
| ![Twig](https://img.shields.io/badge/Twig-3.x-339933?style=flat-square) | 3.x | Motor de plantillas |
| ![Composer](https://img.shields.io/badge/Composer-2.x-885630?style=flat-square&logo=composer) | 2.x | Gestión de dependencias |
| ![JSON](https://img.shields.io/badge/JSON-Data-000000?style=flat-square&logo=json) | - | Almacenamiento de datos |
| ![CSS3](https://img.shields.io/badge/CSS3-Modern-1572B6?style=flat-square&logo=css3) | 3 | Estilos y diseño |

</div>

## 🚀 Instalación Rápida

```bash
# Clonar el repositorio
git clone https://github.com/tu-usuario/acms.git
cd acms

# Instalar dependencias
composer install

# Configurar servidor local
php -S localhost:8000 -t public/

# ¡Listo! Visita http://localhost:8000
```

## 📋 Roadmap

<div align="center">

| Fase | Estado | Características |
|:---:|:---:|:---|
| **Fase 1** | ✅ **Completado** | MVC, Routing, Twig, Themes |
| **Fase 2** | 🔄 **En Desarrollo** | Models JSON, Admin Panel |
| **Fase 3** | 📋 **Planificado** | Gestión de Contenido, Usuarios |
| **Fase 4** | 🎯 **Futuro** | Base de Datos, API REST |

</div>

## 🤝 Contribuir

¡Las contribuciones son bienvenidas! Por favor:

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## 📄 Licencia

Este proyecto está bajo la Licencia MIT - ver el archivo [LICENSE](LICENSE) para más detalles.

---

<div align="center">

**⭐ Si te gusta este proyecto, ¡dale una estrella!**

*Desarrollado con ❤️ por [Adrián](https://github.com/LordCafe)*

</div>