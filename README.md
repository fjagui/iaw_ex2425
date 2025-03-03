# IMPLANTACIÓN DE APLICACIONES WEB

## Instrucciones

A continuación, se presentan los pasos que debes seguir para completar el ejercicio.

1. **Revisión de la aplicación**  
   Visita la siguiente dirección para ver la aplicación completa en funcionamiento:
   
   👉 [htto://192.](#) (Reemplazar con la URL correspondiente)

2. **Descarga del proyecto**  
   Clona el repositorio de GitHub donde se encuentra el código base del proyecto:
   
   ```bash
   git clone https://github.com/USUARIO/REPOSITORIO.git
   ```
   
   Luego, accede a la carpeta del proyecto:
   
   ```bash
   cd REPOSITORIO
   ```

3. **Estructura del Proyecto**  
   El proyecto contiene la siguiente estructura de directorios y archivos importantes:
   
   - `config/` → Contiene el archivo de configuración con:
     - Un **array de tests**.
     - Un **array de vídeos** utilizados en la aplicación.
     - Un **fichero de usuarios**
   - `css/` → Almacena los archivos CSS para el diseño de la aplicación.
   - `images/` → Contiene imágenes decorativas utilizadas en la aplicación.
   - `dir_img_testn/` → Almacena imágenes específicas de cada test definido en el archivo de configuración.
   - `lib/` → Contiene funciones utilizadas en la aplicación.
   - `index.php` → Página pública que muestra una lista de vídeos y permite autenticarse.
   - `test.php` → Página privada disponible solo para usuarios registrados, donde se pueden realizar los tests de una autoescuela.

4. **Implementación del código PHP**  
   En los archivos `index.php` y `test.php`, encontrarás secciones comentadas que indican dónde debes escribir código PHP. Tu tarea consiste en reemplazar esos comentarios con el código adecuado para que la aplicación funcione correctamente.

5. **Autenticación y Control de Acceso**  
   - La aplicación usa el archivo `usuarios.txt` para validar los usuarios registrados.
   - La página `test.php` solo debe ser accesible para usuarios autenticados.
   - Se utiliza un sistema de **cookies** para recordar el último test realizado y cargar automáticamente el siguiente al ingresar a la página privada.

6. **Entrega**  
   Una vez realizados los cambios, comprime la carpeeta del proyecto y súbela a Moodle.

**¡Buena suerte!** 🚀

