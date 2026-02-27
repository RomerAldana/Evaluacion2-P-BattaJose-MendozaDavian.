<p align="center">
    <a href="https://laravel.com/" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <h1>Universidad Politécnica Territorial "Federico Brito Figueroa"</h1>
    <h2>PNF en Informática</h2>

    <h3>📌 Evaluación 2 - Paradigmas de Programación</h3>
    <h3>👥 Integrantes: Jose Batta - Davian Mendoza</h3>

    <h3>📚 Enunciado Asignado: #1 - Biblioteca</h3>
    <strong>Relación:</strong> Autor (Padre) → Libro (Hijo)<br/>
    <strong>Campos de la tabla Hija (Libros):</strong><br/>
    ▪ titulo (required, string, min:5)<br/>
    ▪ isbn (required, string, unique)<br/>
    ▪ paginas (required, numeric, min:1)<br/>
    (Relacionado con un autor a través de autor_id)

    <h2>⚙️ Instrucciones para inicializar el proyecto</h2>

<strong>1️⃣ Clonar el repositorio:</strong><br/>
&nbsp;&nbsp;&nbsp;git clone https://github.com/RomerAldana/Evaluacion2-P-BattaJose-MendozaDavian..git<br/>
&nbsp;&nbsp;&nbsp;cd Evaluacion2-P-BattaJose-MendozaDavian.<br/>

<strong>2️⃣ Instalar dependencias:</strong><br/>
&nbsp;&nbsp;&nbsp;composer install<br/>

<strong>3️⃣ Configurar archivo .env:</strong><br/>
&nbsp;&nbsp;&nbsp;cp .env.example .env<br/>

<h3>🔧 Opción A: Configuración con MySQL (Recomendada)</h3>
&nbsp;&nbsp;&nbsp;DB_CONNECTION=mysql<br/>
&nbsp;&nbsp;&nbsp;DB_HOST=127.0.0.1<br/>
&nbsp;&nbsp;&nbsp;DB_PORT=3306<br/>
&nbsp;&nbsp;&nbsp;DB_DATABASE=biblioteca_db<br/>
&nbsp;&nbsp;&nbsp;DB_USERNAME=root<br/>
&nbsp;&nbsp;&nbsp;DB_PASSWORD=<br/>

<h3>🔧 Opción B: Configuración con SQLite</h3>
&nbsp;&nbsp;&nbsp;DB_CONNECTION=sqlite<br/>
&nbsp;&nbsp;&nbsp;# (Eliminar o comentar las líneas de DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD)<br/>

<strong>4️⃣ Crear la base de datos SQLite (solo si usas SQLite):</strong><br/>
&nbsp;&nbsp;&nbsp;En Windows (PowerShell):<br/>
&nbsp;&nbsp;&nbsp;New-Item -Path database\database.sqlite -ItemType File -Force<br/>
&nbsp;&nbsp;&nbsp;En Linux/Mac:<br/>
&nbsp;&nbsp;&nbsp;touch database/database.sqlite<br/>

<strong>5️⃣ Generar clave de aplicación:</strong><br/>
&nbsp;&nbsp;&nbsp;php artisan key:generate<br/>

<strong>6️⃣ Ejecutar migraciones:</strong><br/>
&nbsp;&nbsp;&nbsp;php artisan migrate<br/>

<strong>7️⃣ (Opcional) Insertar datos de prueba:</strong><br/>
&nbsp;&nbsp;&nbsp;php artisan tinker<br/>
<br/>
&nbsp;&nbsp;&nbsp;// Crear autores de prueba<br/>
&nbsp;&nbsp;&nbsp;DB::table('autors')->insert([<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'nombre' => 'Gabriel García Márquez',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'nacionalidad' => 'Colombiana',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'fecha_nacimiento' => '1927-03-06',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'created_at' => now(),<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'updated_at' => now()<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'nombre' => 'Isabel Allende',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'nacionalidad' => 'Chilena',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'fecha_nacimiento' => '1942-08-02',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'created_at' => now(),<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'updated_at' => now()<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'nombre' => 'Mario Vargas Llosa',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'nacionalidad' => 'Peruana',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'fecha_nacimiento' => '1936-03-28',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'created_at' => now(),<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'updated_at' => now()<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br/>
&nbsp;&nbsp;&nbsp;]);<br/>
<br/>
&nbsp;&nbsp;&nbsp;// Crear libros de prueba<br/>
&nbsp;&nbsp;&nbsp;DB::table('libros')->insert([<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'titulo' => 'Cien años de soledad',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'isbn' => '978-84-9759-123-4',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'paginas' => 496,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'autor_id' => 1,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'created_at' => now(),<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'updated_at' => now()<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'titulo' => 'El amor en los tiempos del cólera',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'isbn' => '978-84-9759-456-3',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'paginas' => 384,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'autor_id' => 1,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'created_at' => now(),<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'updated_at' => now()<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'titulo' => 'La casa de los espíritus',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'isbn' => '978-84-9759-789-1',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'paginas' => 432,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'autor_id' => 2,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'created_at' => now(),<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'updated_at' => now()<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'titulo' => 'La ciudad y los perros',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'isbn' => '978-84-9759-234-7',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'paginas' => 352,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'autor_id' => 3,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'created_at' => now(),<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'updated_at' => now()<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br/>
&nbsp;&nbsp;&nbsp;]);<br/>

<strong>8️⃣ Iniciar servidor de desarrollo:</strong><br/>
&nbsp;&nbsp;&nbsp;php artisan serve<br/>

<strong>9️⃣ Acceder a la aplicación:</strong><br/>
&nbsp;&nbsp;&nbsp;• Libros: http://127.0.0.1:8000/libros<br/>
&nbsp;&nbsp;&nbsp;• Autores: http://127.0.0.1:8000/autores<br/>

<h2>✅ Funcionalidades implementadas</h2>
✓ CRUD completo para Autores (tabla padre)<br/>
✓ CRUD completo para Libros (tabla hija)<br/>
✓ Relación 1:N entre Autores y Libros<br/>
✓ Migraciones con llaves foráneas y onDelete cascade<br/>
✓ Modelos con $fillable y relaciones (belongsTo/hasMany)<br/>
✓ Validaciones en servidor:<br/>
&nbsp;&nbsp;&nbsp;• Libros: titulo (required|min:5), isbn (required|unique), paginas (required|numeric|min:1), autor_id (required|exists)<br/>
&nbsp;&nbsp;&nbsp;• Autores: nombre (required|max:100), nacionalidad (nullable|max:50), fecha_nacimiento (nullable|date|before:today)<br/>
✓ Protección CSRF en todos los formularios (@csrf)<br/>
✓ Directivas Blade: @foreach, @if, @error, @section, @extends<br/>
✓ Interfaz responsiva con Tailwind CSS<br/>
✓ Mensajes flash de éxito después de operaciones CRUD<br/>
✓ Persistencia de datos en formularios con old()<br/>
✓ Manejo de errores de validación<br/>

<h2>📁 Estructura del proyecto</h2>
<strong>Modelos:</strong><br/>
• app/Models/Autor.php<br/>
• app/Models/Libro.php<br/>

<strong>Controladores:</strong><br/>
• app/Http/Controllers/AutorController.php<br/>
• app/Http/Controllers/LibroController.php<br/>

<strong>Migraciones:</strong><br/>
• database/migrations/[timestamp]_create_autors_table.php<br/>
• database/migrations/[timestamp]_create_libros_table.php<br/>

<strong>Vistas:</strong><br/>
• resources/views/layouts/app.blade.php<br/>
• resources/views/autores/{index,create,edit}.blade.php<br/>
• resources/views/libros/{index,create,edit,show}.blade.php<br/>

<strong>Rutas:</strong><br/>
• routes/web.php (Route::resource para autores y libros)<br/>

<h2>🔗 Enlace del repositorio</h2>
https://github.com/RomerAldana/Evaluacion2-P-BattaJose-MendozaDavian.

<h2>📅 Fecha de entrega</h2>
Miércoles 23-02-2026 al viernes 27-02-2026

<hr/>
<p align="center">
    <i>"Como programadores, construimos sistemas que persisten. Que esta evaluación sea un recordatorio de que lo que se construye con esfuerzo y buenas prácticas, permanece."</i><br/>
    <br/>
    <i>"El que escucha lo que yo enseño y hace lo que yo digo, es como una persona precavida que construyó su casa sobre piedra firme."</i><br/>
    <b>Mateo 7:24-25</b>
</p>
