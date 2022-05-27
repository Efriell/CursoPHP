# HOSPISOFT V1

    El favicon se puede descargar cualquier icono en formato .ico

# AVANCE MAYO 14 2022
    1. Organizar el menú del panel con usuario activo
    2. Implementar el sistemas de mensajes de la aplicación (Variables de SESIÓN) - Validación de datos del lado del servidor.
    3. Registro y encriptación del paciente
    4. Login de paciente
    5. Historias de usuarios(territorium)->Scrum

# Validación PHP

    trim() //Limpia espacios em blanco, al inicio y al final
    filter_val() con los filtros

# Algoritmoss de encriptacion --- bcrypt
    password_hash()

# Tipos de errores
 https://manuales.guebs.com/php/errorfunc.constants.html

    Notice -> Advertencia de posible error
    Warning -> Error no tan grave, no rompe la ejecución del script
    Error -> Fatales, paran el script 

# Variables de sesión

    Debido a que el protoclo http es sin estado (stateless), no guarda las varibales entre diferentes programas.
    Es necesario crear variables de sesion; estas se crean como un arreglo dentro del navegador, para poderlas usar mientras el uso del navegador está activo(sesion)
    Las defino es PHP con session_star() --- $_SESSION['nombreVariable'] -> le puedo asignar variabales

# Archivos HTACCESS

    Me sirven para configurar el servidor web (APACHE) OJO existe otro servidor y es el NGINX (Este corre en linux) == dicen que es más rápido

# SEGUNDO SPRINT  24/05/2022
    Libreria de reportes en pdf
    Registro de citas (llaves compuestas)
    Listar la historia clinica de cada paciente
    Imprimir cita
    Listar medicos por especialidad
    Actualizar Perfil