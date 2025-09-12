# 🚀 PSR-4 Autoloading vs require_once

## ❌ Problema con require_once

### **Código anterior:**
```php
<?php
require_once "Controller.php";
require_once __DIR__.'/../Core/View.php';

class AboutController extends Controller {
    // ...
}
```

### **Problemas:**
- **Rutas frágiles** - Se rompe al mover archivos
- **Mantenimiento** - Cada archivo necesita sus requires
- **Rendimiento** - PHP busca archivos manualmente
- **Escalabilidad** - Inmanejable con muchas clases
- **Dependencias** - Orden de carga importa

## ✅ Solución con PSR-4 Autoloading

### **Código actual:**
```php
<?php

namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller {
    // Sin require_once!
}
```

## 📚 Conceptos Clave

### **1. Namespace**
```php
namespace App\Controllers;
```

**¿Qué hace?**
- Define el "espacio de nombres" de la clase
- Evita conflictos entre clases con el mismo nombre
- Organiza el código lógicamente

**Ejemplo de conflicto sin namespace:**
```php
// ❌ Sin namespace - CONFLICTO
class User {}        // ¿Model o Controller?
class User {}        // Error: Cannot redeclare class
```

**Con namespace - SIN conflicto:**
```php
// ✅ Con namespace - SIN CONFLICTO
namespace App\Models;
class User {}

namespace App\Controllers;  
class User {}               // Diferentes espacios
```

### **2. Use Statement**
```php
use App\Core\Controller;
```

**¿Qué hace?**
- Importa clases de otros namespaces
- Crea un "alias" para usar la clase sin namespace completo
- Hace el código más legible

**Sin use:**
```php
class AboutController extends \App\Core\Controller {
    public function index() {
        $view = new \App\Core\View();  // Nombre completo
    }
}
```

**Con use:**
```php
use App\Core\Controller;
use App\Core\View;

class AboutController extends Controller {
    public function index() {
        $view = new View();  // Nombre corto
    }
}
```

## 🏗️ PSR-4 Autoloading

### **Configuración en composer.json:**
```json
{
    "autoload": {
        "psr-4": {
            "App\\Controllers\\": "app/Controllers/",
            "App\\Models\\": "app/Models/",
            "App\\Core\\": "app/Core/"
        }
    }
}
```

### **¿Cómo funciona?**
1. **Mapeo automático** - Namespace → Directorio
2. **Carga bajo demanda** - Solo carga clases cuando se usan
3. **Estándar PSR-4** - Convención de la industria

### **Ejemplo de mapeo:**
```
App\Controllers\AboutController → app/Controllers/AboutController.php
App\Models\User               → app/Models/User.php  
App\Core\View                 → app/Core/View.php
```

## 📊 Comparación

| Aspecto | require_once | PSR-4 Autoloading |
|---------|--------------|-------------------|
| **Mantenimiento** | ❌ Manual | ✅ Automático |
| **Rendimiento** | ❌ Carga todo | ✅ Carga bajo demanda |
| **Escalabilidad** | ❌ Inmanejable | ✅ Infinitamente escalable |
| **Estándar** | ❌ Obsoleto | ✅ Industria |
| **Conflictos** | ❌ Frecuentes | ✅ Imposibles |
| **Refactoring** | ❌ Difícil | ✅ Fácil |

## 🎯 Beneficios Reales

### **1. Código más limpio**
```php
// Antes: 5 líneas de requires
require_once "Controller.php";
require_once __DIR__.'/../Core/View.php';
require_once __DIR__.'/../Models/User.php';

// Después: 0 líneas de requires
// ¡Autoloader maneja todo!
```

### **2. Refactoring seguro**
```php
// Mover archivo: app/Controllers/ → app/Admin/Controllers/
// Antes: Actualizar TODOS los require_once manualmente
// Después: Solo cambiar namespace y listo
```

### **3. Escalabilidad**
```php
// Agregar 100 clases nuevas:
// Antes: 100 nuevos require_once
// Después: 0 cambios, autoloader maneja todo
```

## 🚀 Conclusión

**PSR-4 Autoloading es superior porque:**
- ✅ **Elimina require_once** completamente
- ✅ **Organiza el código** con namespaces
- ✅ **Evita conflictos** de nombres
- ✅ **Mejora rendimiento** (carga bajo demanda)
- ✅ **Estándar profesional** de la industria
- ✅ **Facilita mantenimiento** y refactoring

**Es la diferencia entre código amateur y código profesional.**