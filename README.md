# Manual de procedimiento para la realización del proyecto
## Herramientas a utilizar
- Git bash
- Planning poker
- GitHub
- Visual Studio Code
- Visio Profesional
- MAMP

## Procedimiento
- El primer paso para la elaboración del proyecto fue la creación de una organización en la página oficial de GitHub donde se debe crear una cuenta personal, en caso de no haberse registrado anteriormente,
el siguiente paso es la creación de un nuevo repositorio con el nombre del proyecto a realizarse, luego se debe añadir a los participantes del equipo, asignando un líder y sus colaboradores. Posteriormente 
se debe asignar los permisos correspondientes a los colaboradores para poder otorgar la capacidad de edición de los documentos o actividades dentro del repositorio. Se debe plantear los problemas o actividades
que se realizará durante un tiempo predefinido, en este caso la duración de un Sprint, posteriormente se asigna las etiquetas correspondientes a los problemas o actividades que se realizarán durante dicho
sprint a través de la herramienta de planning poker, la cual determina el grado de difiultad así como la duración de la actividad.
- El segundo paso es descargar la plataforma Git Bash, la cual ayudará a realizar cambios hechos localente en los archivos del repositorio, así como varias funciones como la actualización de los archivos 
locales hechos por los colaboradores del proyecto. El primer paso para vincular los archivos del repositorio creado en GitHub es: determinar la ubicación de la carpeta que contenrá los archivos del repositorio, 
realizar una clonación del repositorio dentro de la terminal de Git Bash a través del comando git clone, el cual vinculará todos los cambios que se lleguen a realizar y posteriormente subir al repositorio.
La terminal de git bash nos ayuda a realizar diferentes acciones, la acción "git status" nos permite ver el estado de seguimiento y edición de los archivos que fueron modificados pero no subidos. La función 
"git add" nos permite dar seguimiento a los archivos que fueron modificados para posteriormente aplicar el comando de "git commit -m "mensaje"" el cual subirá todos los cambios realizados en los documentos que 
hayan sido modificados, después se debe aplicar el comando de "git push origin master" el cual aplicará los cambios realizados localmente, los cuales podrán ser mostrados en el repositorio y en la carpeta del 
repositorio de cualquier miembro colaborador del equipo. Para poder ver los cambios se aplica el comando "git pull" el cual permitira añadir los cambios a su carpeta del repositorio creado localmente.
Para realizar cambios normalmente se crea un nuevo branch que es una copia del branch master, se crea un nuevo branch para que los colaboradores del proyecto puedan admitir los cambios hechos por cualquier 
miembro del equipo para evitar atropellos en la edición del código. Este método se llama pull request, el cual consiste en subir los cambios realizados en los archivos del repositorio y que sean admitidos por 
el resto de los colaboradores el cual consiste en escribir los siguientes comandos: "git checkout -b nombredelbranch" para crear el nuevo branch, "git checkout nombredelbranch" para poder cambiar de branch 
y posteriormente "git push origin nombredelbranch" para subir los cambios a ser revisados.
- El tercer paso es descargar Visual Studio Code para poder escribir el código de las páginas html, css, php, entre otras. En esta terminal se crea el código a partir de comandos que pueden ser autocompletados 
por la misma terminal. Los cambios hechos por los colaboradores y aprobados por los mismos serán actualizados en esta terminal.
- El cuarto paso es la creación de la base de datos a partir de la descarga de la aplicación MAMP que es una combinación de Apache, mySQL y la nube. Cuando se descarga el software MAMP se crea por defecto una 
carpeta en el disco local C, el cual contiene una carpeta llamada htdocs donde debes colocar el proyecto y todos sus archivos tanto de html y de php.
- El cuarto paso es la descarga de Visio Profesional, esta herramienta nos sirve para poder realizar el dieño de los diagramas requeridos para la interpretación del proyecto. Diagramas como el de base de datos, 
el diagrama orientado a objetos y los diagramas de secuencia fueron elaborados con la ayuda de esta herramienta.