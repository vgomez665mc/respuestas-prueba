@extends('layouts.app')

@section('contenido')   
    <h1>Test Backend Developer RedCapital</h1>

    <h3>Por medio de este test se evaluarán algunos de tus conocimientos que nos interesan como desarrollador.</h3>

	<p>
	    Teniendo 3 tablas:
	</p>
    <ul>
        <li>
        	Id
        </li>
        <li>
        	Cantidad
        </li>
        <li>
        	Producto
        </li>
    </ul>

    <p>
	    Tabla Detalle_compra:
	</p>
    <ul>
        <li>
        	Id
        </li>
        <li>
        	compra_id
        </li>
        <li>
        	Nombre
        </li>
        <li>
        	Precio
        </li>
        <li>
        	Categoria_id
        </li>
    </ul>
    <p>
	    Tabla Categoría:
	</p>
    <ul>
        <li>
        	Id
        </li>
        <li>
        	Cantidad
        </li>
        <li>
        	Producto
        </li>
    </ul>

    <h3>En base a las siguientes 3 tablas realizar las siguientes consultas con ORM Eloquent</h3>
    <ol>
        <li>
            <p class="font-weight-bold">
                Seleccionar todas las compras con sus detalles asociados. Seleccionar el precio total de las compras ordenado por categoría.
            </p>
            R= <a href="/compra">Compra</a>
        </li>
        <li>
        	<p class="font-weight-bold">Explica la diferencia entre Composición y Herencia, incluyendo ejemplos de cuándo es más apropiado usar una o la otra.</p>
        	<p>
        		R= La herencia te permite crear objetos o clases basados en otro objeto o clase, es útil emplear la cuando se tiene una correcta definición de los métodos y funcionalidades que tendrá tu proyecto, su creación es rápida y fácil en el diseño de software, pero como  la herencia es unidireccional cuando se quieren hacer nuevos cambios se vuelve complejo de mantener.
        		<p>
        			La composición tiene instancias de una clase que contiene instancias de otra ,es decir que delegamos las funciones o tareas que queremos realizar al objeto que vamos a utilizar .
        		</p>
        		<p>
        			Ejemplo: si se tiene una aplicación estática que se conoce el número de vistas que tendrá y las acciones o métodos que realizara , sería ideal aplicar herencia porque es mas sencillo, se definen todos  los métodos que se utilizará  se extiende sus características de una  clase principal y es mas rápido el desarrollo del software.
        		</p>
        		<p>
        			Si se desea realizar una aplicación más escalable cuando las funcionalidades están en constante cambios y hay métodos o funcionales que puede ser remplazadas por otras o puedan dejar de utilizar se es mejor emplear composición ya que con este puedes definir solo lo que necesitas usar sin depender de otra clase,inyectas las dependecias que necesites sin interesarte otros atibutos 
        		</p>
        	</p>	
        </li>
        <li>
        	<p class="font-weight-bold">
	        	Describe en detalle cómo Laravel usa el patrón de diseño MVC.
	        </p>
	        <p>
        		R= Laravel, propone una forma de desarrollar aplicaciones web de un modo mucho más ágil y simple, en Laravel opcionalmente podemos usar el patrón de diseño MVC (Modelo-Vista-Controlador) tradicional, propone en el desarrollo usar Routes with Closures, en lugar de un MVC tradicional con el objetivo de hacer el código más claro. 
        		<p>
        			Aun así permite el uso de MVC tradicional, donde en el modelo incluye un sistema de mapeo de datos relacional llamado Eloquent ORM que facilita la creación de modelos. Este ORM se funda en patrón active record y su funcionamiento es muy sencillo. 
        		</p>
        		<p>
        			Por ultimo encontramos los controladores que contienen la lógica de la aplicación y permiten organizar el código en clases sin tener que escribirlo todo en las rutas. Todos los controladores deben extenderse de la clase BaseController e igual permite la comunicación entre el modelo y la vista.
        		</p>
        		<p>
        			En la vista  muestra visualmente mediante interfaces graficas, la información que queremos presentar a los usuarios, formularios, documentos HTML entre otros, y por ultimo encontramos el controlador que funciona como intermediario entre la base de datos y las vista del software
        		</p>	
        	</p>
        </li>
        <li>
            <p class="font-weight-bold">
                Utilizando Laravel (Subir repositorio con la aplicación) , se requiere crear las rutas para un sistema que muestra películas de distinto género. Con la base /pelicula/, crea una ruta que dirija a una acción por cada género (entregado como parámetro) en el controlador. Los géneros válidos son Drama, Comedia, Acción y Terror. Cualquier otro género debe devolver error 404.
            </p>
            R= Películas: <a href="/pelicula/drama">Drama</a>,
            <a href="/pelicula/comedia">Comedia</a> ,
            <a href="/pelicula/accion">Acción</a>,
            <a href="/pelicula/Terror">Terror</a>,
            <a href="/pelicula/otro_genero">Error</a>
        </li>
        <li>
        	<p class="font-weight-bold">
	        	¿Cuáles son las ventajas y desventajas de usar el patrón de diseño Active Record en la capa de Modelo?
	        </p>
        	<p>
        		R= Las ventajas que encontramos al realizar consultas empleando active record es que tenemos disponible la abstracción de la base de datos, seguridad y manejo de eventos.
        		<p>
        			En cuanto a las desventajas posee un alto consumo de memoria Ram en comparación al realizar consultas simples en sql, el tiempo en la resolución de los Request es mayor ya que este patrón nos permite ejecutar eventos de cada modelo llevando un mayor procesamiento.
        		</p>	
        	</p>
        </li>
        <li>
        	<p class="font-weight-bold">
	        	Comandos necesarios para crear un controlador en Laravel, como correr un seeder en PHP, que diferencia existe en el objeto extraído con el método find o All.
	        </p>
        	<p>
        		R= 
        		<ul>
        			<li>
        				Comandos necesarios para crear un controlador en laravel:
        			</li>
        			<ul>
        				<li>
        					<strong>Controlador sencillo:</strong> ingresas al directorio con la ruta donde tienes ubicado  tu proyecto laravel  desde la terminal e  introduces el comando :
        				</li>
        				<li>
        					<strong>Controlador de recursos:</strong> si quieres un controlador con los métodos definidos por laravel,ingresas a la ruta de tu proyecto desde el terminal e ingresas el comando 
        				</li>
        				<p>
        					<code>
        						php artisan make:controller nombreControladorController –resource
        					</code>
        				</p>
        			</ul>
        			<li>
        				Como correr un seeder en PHP.
        				<ul>
        					<p class="mt-2">
        						Para crear un seeder nos dirigimos a la terminar ingresando la ruta de nuestro proyecto laravel e ingresamos el comando  php artisan make:seeder NombreTablaTableSeeder.
        					</p>
        					<p>
        						Ejemplo: comando  <code>php artisan make:seeder UserTablaTableSeeder</code>
        					</p>
        					<p>
        						Luego que se haya ejecutado el comando nos dirigimos a nuestro DatabaseSeederclase predeterminada y agreguemos una declaración de inserción de base de datos al método run
        					</p>
        					<code>
        						< ? php <br>

									use Illuminate\Support\Str;<br>
									use Illuminate\Database\Seeder;<br>
									use Illuminate\Support\Facades\DB;<br><br>

									class DatabaseSeeder extends Seeder<br>
									{<br>
									//definimos las variables de los campos que seran insertados en la base de datos<br>
									    public function run()<br>
									    {<br>
									    	<p class="m-0 ml-3">
										    	DB::table('users')->insert([
								        	</p>
										    		<p class="ml-5">
											            'name' => Str::random(10),<br>
											            'email' => Str::random(10).'@gmail.com',<br>
											            'password' => bcrypt('secret'),
										            </p>
									    	<p class="m-0 ml-3">
										        ]);
											</p>
										}
									}<br>
        					</code>
        					<p>
        						// procedemos a  realizar  la llamada de nuestros métodos de la siguiente forma
        					</p>	
        					<p>
        						Dentro de la DatabaseSeederclase usas el medodo call para ejecutar la clase de la semilla
        					</p>
        					<code>
        						public function run() <br>
								{<br>
								    <p class="m-0 ml-3">$this->call([</p>
								    	<p class="m-0 ml-5">
									        UsersTableSeeder::class,
									        PostsTableSeeder::class,
									        CommentsTableSeeder::class,
								        </p>
								    <p class="m-0 ml-3">]);</p>
								}
        					</code>
        				</ul>
        			</li>
        		</ul>
        	</p>
        </li>
        <li>
        	<p class="font-weight-bold">
	        	Subir las respuestas de la prueba en un reporsitorio junto con la app y notificar.
	        </p>
        	<p>
        		R= La diferencia entre el metodo find y el all es que el metodo all() te permite recuperar todos los registros de una tabla en cambio el metodo find() busca un regristro en concreto según un id de clave primaria.
        	</p>
        </li>


    </ol>
@endsection