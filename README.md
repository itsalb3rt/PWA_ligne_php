Convierte tu web tradicional en una PWA **Progressive Web Apps (PWA)** con este modelo y un mínimo de esfuerzo.

Las aplicaciones web progresivas comienzan con un sitio / aplicación web tradicional y se mejoran progresivamente con características modernas. 
Cuando los sitios están seguros(**HTTPS**), pueden aprovechar los **ServiceWorkers** para proporcionar soporte fuera de línea (**offline**), las **notificaciones Push** pueden ayudar a volver a atraer a los usuarios, y los **Manifests** de las aplicaciones web les permiten a los usuarios instalar PWA junto con las aplicaciones nativas.

---

**Estructura básica;**


[![](https://i.imgur.com/l44DNn8.png)](https://i.imgur.com/l44DNn8.png)

**Configura tu PWA**

---

`manifest.json`


```json
{
  "name": "PWA Name App",
  "short_name": "PWANameApp",
  "description": "Esta sería la descripción de mi PWA",
  "background_color": "#2B2B2B",
  "theme_color": "#2196F3",
  "orientation": "portrait",
  "display": "standalone",
  "start_url": "app/index",
  "scope": "./",
  "lang": "es-MX",
  "icons": []
  }
```
`sw.js`

**CACHE_NAME** es el nombre con el que el navegador almacenara la cache de tu app

**urlsToCache** son todos los recursos que deseas tu aplicación ejecute offline, archivos js, css, imágenes, secciones de tu app, etc…

```javascript
const CACHE_NAME = 'v1_pwa_app_cache',
  urlsToCache = [
        './',
        'http://localhost/ligne_php_pwa/app/index',
        'Webassets/css/style.css',
        'Webassets/js/script.js',
        'Webassets/img/mainlogo.png',
        'Webassets/img/favicon.png'
    ]
```
`views/Layouts/default.php`

Este archivo posee etiquetas **meta** que ayudan con la accesibilidad para la aplicación por lo que te recomiendo trabajar sobre el código de esta, copia el mismo en tu `layout` y estará todo listo.

**Probar;**

Descarga este repositorio y pruébalo en un servidor local o remoto *(de ser remoto debe tener certificado SSL ya que las PWA solo funcionan por HTTPS o en localhost)*

**Instalar tu PWA:**

[![](https://i.imgur.com/CeRx4Qs.png)](https://i.imgur.com/CeRx4Qs.png)


**Listo!**

[![](https://i.imgur.com/k8qpxTY.png)](https://i.imgur.com/k8qpxTY.png)

Así tienes una aplicación web instalable tanto en **Windows, Mac, Android o IOS**;

[![](https://i.imgur.com/B6s1BW0.png)](https://i.imgur.com/B6s1BW0.png)

# Probar;

En tu teléfono esta saldrá como una app más en tu cajón de aplicaciones, la puedes probar desde el siguiente enlace seguro;

**[https://itsalb3rt.github.io/PWA_modelo/](https://itsalb3rt.github.io/PWA_modelo/ "https://itsalb3rt.github.io/PWA_modelo/")**

<img src="https://i.imgur.com/Wy7vKHc.png" alt="drawing" width="300"/>

---

<img src="https://i.imgur.com/Znm9vuC.png" alt="drawing" width="300"/>

---

<img src="https://i.imgur.com/ZkGrzkN.png" alt="drawing" width="300"/>

---

**Cualquier sugerencia siempre es bien recibida.**
